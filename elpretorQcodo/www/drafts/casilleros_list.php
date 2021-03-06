<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Casilleros class.  It uses the code-generated
	 * CasillerosDataGrid control which has meta-methods to help with
	 * easily creating/defining Casilleros columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both casilleros_list.php AND
	 * casilleros_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CasillerosListForm extends QForm {
		// Local instance of the Meta DataGrid to list Casilleroses
		protected $dtgCasilleroses;

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
			$this->dtgCasilleroses = new CasillerosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCasilleroses->CssClass = 'datagrid';
			$this->dtgCasilleroses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCasilleroses->Paginator = new QPaginator($this->dtgCasilleroses);
			$this->dtgCasilleroses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/casilleros_edit.php';
			$this->dtgCasilleroses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for casilleros's properties, or you
			// can traverse down QQN::casilleros() to display fields that are down the hierarchy)
			$this->dtgCasilleroses->MetaAddColumn('IdCasillero');
			$this->dtgCasilleroses->MetaAddColumn('NroCasillero');
			$this->dtgCasilleroses->MetaAddColumn('Titular');
			$this->dtgCasilleroses->MetaAddColumn('Observacion');
			$this->dtgCasilleroses->MetaAddColumn('Activo');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// casilleros_list.tpl.php as the included HTML template file
	CasillerosListForm::Run('CasillerosListForm');
?>