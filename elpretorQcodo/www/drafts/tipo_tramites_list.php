<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the TipoTramites class.  It uses the code-generated
	 * TipoTramitesDataGrid control which has meta-methods to help with
	 * easily creating/defining TipoTramites columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tipo_tramites_list.php AND
	 * tipo_tramites_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TipoTramitesListForm extends QForm {
		// Local instance of the Meta DataGrid to list TipoTramiteses
		protected $dtgTipoTramiteses;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgTipoTramiteses = new TipoTramitesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTipoTramiteses->CssClass = 'datagrid';
			$this->dtgTipoTramiteses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTipoTramiteses->Paginator = new QPaginator($this->dtgTipoTramiteses);
			$this->dtgTipoTramiteses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tipo_tramites_edit.php';
			$this->dtgTipoTramiteses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tipo_tramites's properties, or you
			// can traverse down QQN::tipo_tramites() to display fields that are down the hierarchy)
			$this->dtgTipoTramiteses->AgregarColumna('IdTipoTramite', 'Tipo de trámite');
			$this->dtgTipoTramiteses->MetaAddColumn('Nombre');
			$this->dtgTipoTramiteses->MetaAddColumn('Timbrado');
			$this->dtgTipoTramiteses->MetaAddColumn('Honorario');
			$this->dtgTipoTramiteses->MetaAddColumn('OtrosCostos');
			$this->dtgTipoTramiteses->MetaAddColumn('Observaciones');
			$this->dtgTipoTramiteses->AgregarColumna(QQN::TipoTramites()->IdModalidadObject, 'Modalidad');
			$this->dtgTipoTramiteses->AgregarColumna(QQN::TipoTramites()->IdZonaObject, 'Zona');
			
			$this->dtgTipoTramiteses->DataSource = TipoTramites::bindAll();
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// tipo_tramites_list.tpl.php as the included HTML template file
	TipoTramitesListForm::Run('TipoTramitesListForm');
?>