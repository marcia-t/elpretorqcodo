<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Casilleros class.  It uses the code-generated
	 * CasillerosMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Casilleros columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both casilleros_edit.php AND
	 * casilleros_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BuscarCasillerosForm extends QForm {
		// Local instance of the CasillerosMetaControl
		protected $mctCasilleros;
		protected $dtgCasilleros;
		// Controls for Casilleros's Data Fields
		protected $txtNroCasillero;
		protected $txtTitular;
		protected $txtObservacion;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnBuscar;
		protected $btnLimpiar;
		
		protected $datos = array();

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
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the CasillerosMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCasilleros = CasillerosMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Casilleros's data fields
			$this->txtNroCasillero = $this->mctCasilleros->txtNroCasillero_Create();
			$this->txtTitular = $this->mctCasilleros->txtTitular_Create();
			$this->txtObservacion = $this->mctCasilleros->txtObservacion_Create();

			// Create Buttons and Actions on this Form
			$this->btnBuscar = new QButton($this);
			$this->btnBuscar->Text = 'Buscar';
			$this->btnBuscar->AddAction(new QClickEvent(), new QAjaxAction('btnBuscar_Click'));
			
			
			$this->btnLimpiar = new QButton($this);
			$this->btnLimpiar->Text = 'Limpiar';
			$this->btnLimpiar->AddAction(new QClickEvent(), new QAjaxAction('btnLimpiar_Click'));
			
			
			$this->dtgCasilleros = new CasillerosDataGrid($this);
			
			// Style the DataGrid (if desired)
			$this->dtgCasilleros->CssClass = 'datagrid';
			$this->dtgCasilleros->AlternateRowStyle->CssClass = 'alternate';
			
			// Add Pagination (if desired)
			$this->dtgCasilleros->Paginator = new QPaginator($this->dtgCasilleros);
			$this->dtgCasilleros->ItemsPerPage = 20;
			
			// Use the MetaDataGrid functionality to add Columns for this datagrid
			
			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/casilleros_edit.php';
			$this->dtgCasilleros->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			
			// Create the Other Columns (note that you can use strings for casilleros's properties, or you
			// can traverse down QQN::casilleros() to display fields that are down the hierarchy)
			$this->dtgCasilleros->MetaAddColumn('NroCasillero');
			$this->dtgCasilleros->MetaAddColumn('Titular');
			$this->dtgCasilleros->MetaAddColumn('Observacion');
		}

		

		// Button Event Handlers

		protected function btnBuscar_Click($strFormId, $strControlId, $strParameter) {
			if ($this->txtNroCasillero) $this->datos['nroCasillero'] = $this->txtNroCasillero->Text;
			if ($this->txtTitular) $this->datos['titular'] = $this->txtTitular->Text;
			if ($this->txtObservacion) $this->datos['observacion'] = $this->txtObservacion->Text;
			$this->dtgCasilleros->DataSource = $this->generarSQLYBuscar();
		}

		protected function btnLimpiar_Click($strFormId, $strControlId, $strParameter) {
			$this->txtNroCasillero->Text = '';
			$this->txtTitular->Text = '';
			$this->txtObservacion->Text = '';
		}
		
		protected function generarSQLYBuscar(){
			$objDatabase = Casilleros::GetDatabase();
			$sql = "SELECT *
			FROM sistema.casilleros
			WHERE 1 = 1";
			if ($this->datos['nroCasillero'] != ''){
				$info = $this->datos['nroCasillero'];
				$sql.= " AND nro_casillero LIKE '%$info%'";
			}
			
			if (($this->datos['titular'] != '')) {
				$id = $this->datos['titular'];
				$sql.=" AND titular LIKE '%$id%'";
			}
			
			if (($this->datos['observacion'] != '')) {
				$id = $this->datos['observacion'];
				$sql.=" AND observacion LIKE '%$id%'";
			}
			
			
			$objDbResult = $objDatabase->Query($sql);
			return Casilleros::InstantiateDbResult($objDbResult);
		}
		
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// casilleros_edit.tpl.php as the included HTML template file
	BuscarCasillerosForm::Run('BuscarCasillerosForm');
?>