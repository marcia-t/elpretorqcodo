<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Declaratorias class.  It uses the code-generated
	 * DeclaratoriasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Declaratorias columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both declaratorias_edit.php AND
	 * declaratorias_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BuscarDeclaratoriasForm extends QForm {
		// Local instance of the DeclaratoriasMetaControl
		protected $mctDeclaratorias;

		// Controls for Declaratorias's Data Fields
		protected $calFechaInicio;
		protected $lstEstadoObject;
		protected $lstNroAbogadoObject;
		protected $txtContacto;
		protected $txtObservaciones;
		protected $txtAutos;
		protected $calFechaFin;
		protected $datos = array();
		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnBuscar;
		protected $btnLimpiar;
		// Create QForm Event Handlers as Needed

		protected $dtgDeclaratoriases;
		
//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		
		
		
		protected function Form_Create() {
			
			
			$this->mctDeclaratorias = DeclaratoriasMetaControl::CreateFromPathInfo($this);

			$this->calFechaInicio = $this->mctDeclaratorias->calFechaInicio_Create();
			$this->calFechaInicio->Required = false;
			$this->lstEstadoObject = $this->mctDeclaratorias->lstEstadoObject_Create();
			$this->lstEstadoObject->Required = false;
			$this->lstNroAbogadoObject = $this->mctDeclaratorias->lstNroAbogadoObject_Create(null, QQ::Equal(QQN::Abogados()->Activo, 1), QQ::OrderBy(QQN::Abogados()->NroAbogado));
			$this->lstNroAbogadoObject->Required = false;
			$this->txtContacto = $this->mctDeclaratorias->txtContacto_Create();
			$this->txtContacto->Required = false;
			$this->txtObservaciones = $this->mctDeclaratorias->txtObservaciones_Create();
			$this->txtObservaciones->Required = false;
			$this->txtAutos = $this->mctDeclaratorias->txtAutos_Create();
			$this->txtAutos->Required = false;
			$this->calFechaFin = $this->mctDeclaratorias->calFechaFin_Create();
			$this->calFechaFin->Required = false;

			
			$this->dtgDeclaratoriases = new DeclaratoriasDataGrid($this);
			
			// Style the DataGrid (if desired)
			$this->dtgDeclaratoriases->CssClass = 'datagrid';
			$this->dtgDeclaratoriases->AlternateRowStyle->CssClass = 'alternate';
			
			// Add Pagination (if desired)
			//$this->dtgDeclaratoriases->Paginator = new QPaginator($this->dtgDeclaratoriases);
			//$this->dtgDeclaratoriases->ItemsPerPage = 20;
			
			// Use the MetaDataGrid functionality to add Columns for this datagrid
			
			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/declaratorias_edit.php';
			$this->dtgDeclaratoriases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			
			// Create the Other Columns (note that you can use strings for declaratorias's properties, or you
			// can traverse down QQN::declaratorias() to display fields that are down the hierarchy)
			//$this->dtgDeclaratoriases->MetaAddColumn('IdDeclaratoria');
			$this->dtgDeclaratoriases->AgregarColumna('FechaInicio', 'Fecha inicio');
			$this->dtgDeclaratoriases->AgregarColumna(QQN::Declaratorias()->EstadoObject, 'Estado');
			$this->dtgDeclaratoriases->AgregarColumna('Honorarios', 'Honorarios');
			$this->dtgDeclaratoriases->AgregarColumna('Timbrado', 'Timbrado');
			$this->dtgDeclaratoriases->AgregarColumna(QQN::Declaratorias()->NroAbogadoObject, 'Nro de abogado');
			$this->dtgDeclaratoriases->AgregarColumna('Contacto', 'Timbrado');
			$this->dtgDeclaratoriases->AgregarColumna('Observaciones', 'Observaciones');
			$this->dtgDeclaratoriases->AgregarColumna('Autos', 'Autos');
			$this->dtgDeclaratoriases->AgregarColumna('FechaFin', 'Autos');
			$this->dtgDeclaratoriases->AgregarColumna('Observada', 'Observada');
			
			
			$this->btnBuscar = new QButton($this);
			$this->btnBuscar->Text = QApplication::Translate('Buscar');
			$this->btnBuscar->AddAction(new QClickEvent(), new QAjaxAction('btnBuscar_Click'));

			
			$this->btnLimpiar = new QButton($this);
			$this->btnLimpiar->Text = 'Limpiar';
			$this->btnLimpiar->AddAction(new QClickEvent(), new QAjaxAction('btnLimpiar_Click'));
			
		}


		// Button Event Handlers

		protected function btnBuscar_Click($strFormId, $strControlId, $strParameter) {
			if ($this->calFechaInicio) $this->datos['fecha_inicio'] = $this->calFechaInicio->DateTime;
			if ($this->lstEstadoObject) $this->datos['estado'] = $this->lstEstadoObject->SelectedValue;
			if ($this->lstNroAbogadoObject) $this->datos['nro_abogado'] = $this->lstNroAbogadoObject->SelectedValue;
			if ($this->txtContacto) $this->datos['contacto'] = $this->txtContacto->Text;
			if ($this->txtObservaciones) $this->datos['observaciones'] = $this->txtObservaciones->Text;
			if ($this->txtAutos) $this->datos['autos'] = $this->txtAutos->Text;
			if ($this->calFechaFin) $this->datos['fecha_fin'] = $this->calFechaFin->DateTime;
			$this->dtgDeclaratoriases->DataSource = $this->generarSQLYBuscar();
		}

		protected function btLimpiar_Click($strFormId, $strControlId, $strParameter) {
			$this->calFechaInicio->DateTime = null;
			$this->lstEstadoObject->SelectedValue = null;
			$this->lstNroAbogadoObject->SelectedValue = null;
			$this->txtContacto->Text = null;
			$this->txtObservaciones->Text = null;
			$this->txtAutos->Text = null;
			$this->calFechaFin->DateTime = null;
		}
		
		
		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/declaratorias_list.php');
		}
		
		public function generarSQLYBuscar(){
			$objDatabase = Declaratorias::GetDatabase();
				
			$sql = "SELECT * 
				FROM sistema.declaratorias
				WHERE 1 = 1";
			
			if (isset($this->datos['fecha_inicio'])){
				$cond = $this->datos['fecha_inicio']->PHPDate('Y-m-d');
				$sql .= " AND fecha_inicio =  '$cond'";
			}
			
			if (isset($this->datos['estado'])){
				$cond = $this->datos['estado'];
				$sql .= " AND estado =  $cond";
			}
			
			if (isset($this->datos['nro_abogado'])){
				$cond = $this->datos['nro_abogado'];
				$sql .= " AND nro_abogado =  $cond";
			}
			
			if ($this->datos['contacto'] != ''){
				$cond = $this->datos['contacto'];
				$sql .= " AND contacto LIKE '%$cond%'";
			}
			
			if ($this->datos['observaciones'] != ''){
				$cond = $this->datos['observaciones'];
				$sql .= " AND observaciones LIKE '%$cond%'";
			}
			
			if ($this->datos['autos'] != ''){
				$cond = $this->datos['autos'];
				$sql .= " AND autos LIKE '%$cond%'";
			}
			
			
			if (isset($this->datos['fecha_fin'])){
				$cond = $this->datos['fecha_fin']->PHPDate('Y-m-d');
				$sql .= " AND fecha_fin =  '$cond'";
			}
			
			$objDbResult = $objDatabase->Query($sql);
			return Declaratorias::InstantiateDbResult($objDbResult);
		}
		
		
	}

	BuscarDeclaratoriasForm::Run('BuscarDeclaratoriasForm');
?>