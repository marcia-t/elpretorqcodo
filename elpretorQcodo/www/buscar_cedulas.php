<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Cedulas class.  It uses the code-generated
	 * CedulasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Cedulas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cedulas_edit.php AND
	 * cedulas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BuscarCedulasForm extends QForm {
		// Local instance of the CedulasMetaControl
		protected $mctCedulas;

		// Controls for Cedulas's Data Fields
		protected $txtLocalidad;
		protected $txtAutos;
		protected $txtDireccion;
		protected $lstAgenteObject;
		protected $calFechaIngreso;
		protected $calFechaSalida;
		protected $calFechaFin;
		protected $calAudiencia;
		protected $txtObservaciones;
		protected $lstNroAbogado;
// 		protected $pnlList;
// 		protected $pnlEdit;
		protected $dtgCedulases;
		protected $lstEstadoObject;
		protected $datos = array();
		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnBuscar;

		protected $btnLimpiar;
		
		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			
// 			$this->pnlList = new QPanel($this, 'pnlList');
// 			$this->pnlList->AutoRenderChildren = true;
			
// 			$this->pnlEdit = new QPanel($this, 'pnlEdit');
// 			$this->pnlEdit->AutoRenderChildren = true;
// 			$this->pnlEdit->Visible = false;
			
			$this->mctCedulas = CedulasMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Cedulas's data fields
			$this->txtLocalidad = $this->mctCedulas->txtLocalidad_Create();
			$this->txtLocalidad->Required = false;
			$this->txtAutos = $this->mctCedulas->txtAutos_Create();
			$this->txtAutos->Required = false;
			$this->txtDireccion = $this->mctCedulas->txtDireccion_Create();
			$this->txtDireccion->Required = false;
			$this->lstNroAbogado = $this->mctCedulas->lstNroAbogadoObject_Create(null, QQ::Equal(QQN::Abogados()->Activo, 1), QQ::OrderBy(QQN::Abogados()->NroAbogado));
			$this->lstNroAbogado->Required = false;
			$this->lstAgenteObject = $this->mctCedulas->lstAgenteObject_Create(null, QQ::Equal(QQN::Agentes()->Activo, 1));
			$this->lstAgenteObject->Required = false;
			$this->calFechaIngreso = $this->mctCedulas->calFechaIngreso_Create();
			$this->calFechaIngreso->Required = false;
			$this->calFechaSalida = $this->mctCedulas->calFechaSalida_Create();
			$this->calFechaSalida->Required = false;
			$this->calFechaFin = $this->mctCedulas->calFechaFin_Create();
			$this->calFechaFin->Required = false;
			$this->calAudiencia = $this->mctCedulas->calAudiencia_Create();
			$this->calAudiencia->Required = false;
			$this->txtObservaciones = $this->mctCedulas->txtObservaciones_Create();
			$this->txtObservaciones->Required = false;
			$this->lstEstadoObject = $this->mctCedulas->lstEstadoObject_Create();
			$this->lstEstadoObject->Required = false;
			
			$this->dtgCedulases = new CedulasDataGrid($this);
			
			// Style the DataGrid (if desired)
			$this->dtgCedulases->CssClass = 'datagrid';
			$this->dtgCedulases->AlternateRowStyle->CssClass = 'alternate';
			
			// Add Pagination (if desired)
			$this->dtgCedulases->Paginator = new QPaginator($this->dtgCedulases);
			$this->dtgCedulases->ItemsPerPage = 20;
			
			// Use the MetaDataGrid functionality to add Columns for this datagrid
			
			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/cedulas_edit.php';
			$this->dtgCedulases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			
			// Create the Other Columns (note that you can use strings for cedulas's properties, or you
			// can traverse down QQN::cedulas() to display fields that are down the hierarchy)
			$this->dtgCedulases->AgregarColumna('Localidad', 'Localidad');
			$this->dtgCedulases->AgregarColumna('Autos', 'Autos');
			$this->dtgCedulases->AgregarColumna('Direccion', 'Dirección');
			$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->AgenteObject, 'Agente');
			$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->NroAbogadoObject, 'Nro abogado');
			$this->dtgCedulases->AgregarColumna('FechaIngreso', 'Fecha ingreso');
			$this->dtgCedulases->AgregarColumna('FechaSalida', 'Fecha salida');
			$this->dtgCedulases->AgregarColumna('FechaFin', 'Fecha fin');
			$this->dtgCedulases->AgregarColumna('Audiencia', 'Audiencia');
			$this->dtgCedulases->AgregarColumna('Observaciones', 'Observaciones');
			$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->EstadoObject, 'Estado');
			
			
			$this->dtgCedulases->AddColumn(new QDataGridColumn('En curso', '<?= $_FORM->encurso_Render($_ITEM) ?>','HtmlEntities=false'));
			$this->dtgCedulases->AddColumn(new QDataGridColumn('De regreso', '<?= $_FORM->deregreso_Render($_ITEM) ?>','HtmlEntities=false'));
			$this->dtgCedulases->AddColumn(new QDataGridColumn('Finalizar', '<?= $_FORM->finalizar_Render($_ITEM) ?>','HtmlEntities=false'));
			
			
			
			// Create Buttons and Actions on this Form
			$this->btnBuscar = new QButton($this);
			$this->btnBuscar->Text = 'Buscar';
			$this->btnBuscar->AddAction(new QClickEvent(), new QAjaxAction('btnBuscar_Click'));

			
			$this->btnLimpiar = new QButton($this);
			$this->btnLimpiar->Text = 'Limpiar';
			$this->btnLimpiar->AddAction(new QClickEvent(), new QAjaxAction('btnLimpiar_Click'));
			
		}

		
		public function encurso_Render(Cedulas $objCedulas) {
			$strControlId = 'chkSelected' . $objCedulas->IdCedulas;
		
			$chkSelected = $this->GetControl($strControlId);
		
			if (!$chkSelected) {
				$chkSelected = new QLinkButton($this->dtgCedulases);
				$chkSelected->Text = 'En curso';
		
				$chkSelected->ActionParameter = $objCedulas->IdCedulas;
		
		
				$chkSelected->AddAction(new QClickEvent(), new QServerAction('encurso_Click'));
			}
		
			return $chkSelected->Render(false);
		}
		
		protected function encurso_Click($strFormId, $strControlId, $strParameter) {
			$intCedulas = $strParameter;
			Cedulas::UpdateEstadoEnCurso($intCedulas);
			$this->dtgCedulases->DataSource  = $this->generarSQLYBuscar();
		}
		
		
		
		
		public function deregreso_Render(Cedulas $objCedula) {
			$strControlId = 'chkSelected' . $objCedula->IdCedulas;
		
			$chkSelected = $this->GetControl($strControlId);
		
			if (!$chkSelected) {
				$chkSelected = new QLinkButton($this->dtgCedulases);
				$chkSelected->Text = 'De regreso';
		
				$chkSelected->ActionParameter = $objCedula->IdCedulas;
		
		
				$chkSelected->AddAction(new QClickEvent(), new QServerAction('deregreso_Click'));
			}
		
			return $chkSelected->Render(false);
		}
		
		protected function deregreso_Click($strFormId, $strControlId, $strParameter) {
			$intCedula = $strParameter;
			Cedulas::UpdateEstadoDeRegreso($intCedula);
			$this->dtgCedulases->DataSource  = $this->generarSQLYBuscar();
		}
		
		public function finalizar_Render(Cedulas $objCedulas) {
			$strControlId = 'chkSelected' . $objCedulas->IdCedulas;
		
			$chkSelected = $this->GetControl($strControlId);
		
			if (!$chkSelected) {
				$chkSelected = new QLinkButton($this->dtgCedulases);
				$chkSelected->Text = 'Finalizar';
		
				$chkSelected->ActionParameter = $objCedulas->IdCedulas;
		
		
				$chkSelected->AddAction(new QClickEvent(), new QServerAction('finalizar_Click'));
			}
		
			return $chkSelected->Render(false);
		}
		
		
		protected function finalizar_Click($strFormId, $strControlId, $strParameter) {
			$intCedula = $strParameter;
			Cedulas::UpdateEstadoFinalizado($intCedula);
			$this->dtgCedulases->DataSource  = $this->generarSQLYBuscar();
		
		}

		// Button Event Handlers

		protected function btnBuscar_Click($strFormId, $strControlId, $strParameter) {
			if ($this->txtLocalidad) $this->datos['localidad'] = $this->txtLocalidad->Text;
			if ($this->txtAutos) $this->datos['autos'] = $this->txtAutos->Text;
			if ($this->txtDireccion) $this->datos['direccion'] = $this->txtDireccion->Text;
			if ($this->lstAgenteObject) $this->datos['idAgente'] = $this->lstAgenteObject->SelectedValue;
			if ($this->calFechaIngreso) $this->datos['fechaIngreso'] = $this->calFechaIngreso->DateTime;
			if ($this->calFechaSalida) $this->datos['fechaSalida'] = $this->calFechaSalida->DateTime;
			if ($this->calFechaFin) $this->datos['fechaFin'] = $this->calFechaFin->DateTime;
			if ($this->calAudiencia) $this->datos['audiencia'] = $this->calAudiencia->DateTime;
			if ($this->txtObservaciones) $this->datos['observaciones'] = $this->txtObservaciones->Text;
			if ($this->lstEstadoObject) $this->datos['estado'] = $this->lstEstadoObject->SelectedValue;
			if ($this->lstNroAbogado) $this->datos['nroAbogado'] = $this->lstNroAbogado->SelectedValue;
			$this->dtgCedulases->DataSource = $this->generarSQLYBuscar();
		}
		
		protected function btnLimpiar_Click($strFormId, $strControlId, $strParameter) {
			$this->txtLocalidad->Text = null;
			$this->txtAutos->Text = null;
			$this->txtDireccion->Text = null;
			$this->lstAgenteObject->SelectedValue = null;
			$this->calFechaIngreso->DateTime = null;
			$this->calFechaSalida->DateTime = null;
			$this->calFechaFin->DateTime = null;
			$this->calAudiencia->DateTime = null;
			$this->txtObservaciones->Text = null;
			$this->lstEstadoObject->SelectedValue = null;
			$this->lstNroAbogado->SelectedValue = null;
		}
		
		public function generarSQLYBuscar(){
			$objDatabase = Cedulas::GetDatabase();
			
			$sql = "SELECT *
			FROM sistema.cedulas
			WHERE 1 = 1";
			
			if (isset($this->datos['nroAbogado'])){
				$cond = $this->datos['nroAbogado'];
				$sql .= " AND nro_abogado = $cond";
			}
			
			if (isset($this->datos['estado'])){
				$cond = $this->datos['estado'];
				$sql .= " AND estado = $cond";
			}
			
			if ($this->datos['observaciones'] != ''){
				$cond = $this->datos['observaciones'];
				$sql .= " AND observaciones LIKE '%$cond%'";
			}
			
			if (isset($this->datos['audiencia'])){
				$cond = $this->datos['audiencia']->PHPDate('Y-m-d');
				$sql .= " AND audiencia =  '$cond'";
			}
			
			if (isset($this->datos['fechaFin'])){
				$cond = $this->datos['fechaFin']->PHPDate('Y-m-d');
				$sql .= " AND fecha_fin =  '$cond'";
			}
			
			if (isset($this->datos['fechaSalida'])){
				$cond = $this->datos['fechaSalida']->PHPDate('Y-m-d');
				$sql .= " AND fecha_salida =  '$cond'";
			}
			
			if (isset($this->datos['fechaIngreso'])){
				$cond = $this->datos['fechaIngreso']->PHPDate('Y-m-d');
				$sql .= " AND fecha_ingreso =  '$cond'";
			}
			
			if (isset($this->datos['idAgente'])){
				$cond = $this->datos['idAgente'];
				$sql .= " AND agente = $cond";
			}
			
			if ($this->datos['direccion'] != ''){
				$cond = $this->datos['direccion'];
				$sql .= " AND direccion LIKE '%$cond%'";
			}
			
			if ($this->datos['autos']!= ''){
				$cond = $this->datos['autos'];
				$sql .= " AND autos LIKE '%$cond%'";
			}
			
			if ($this->datos['localidad'] != ''){
				$cond = $this->datos['localidad'];
				$sql .= " AND localidad LIKE '%$cond%'";
			}
			
			
			$objDbResult = $objDatabase->Query($sql);
			return Cedulas::InstantiateDbResult($objDbResult);
		}

		

		
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// cedulas_edit.tpl.php as the included HTML template file
	BuscarCedulasForm::Run('BuscarCedulasForm');
?>