<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Zonas class.  It uses the code-generated
	 * ZonasDataGrid control which has meta-methods to help with
	 * easily creating/defining Zonas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both zonas_list.php AND
	 * zonas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ZonasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Zonases
		protected $dtgZonases;

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
			$this->dtgZonases = new ZonasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgZonases->CssClass = 'datagrid';
			$this->dtgZonases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgZonases->Paginator = new QPaginator($this->dtgZonases);
			$this->dtgZonases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/zonas_edit.php';
			$this->dtgZonases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for zonas's properties, or you
			// can traverse down QQN::zonas() to display fields that are down the hierarchy)
			$this->dtgZonases->MetaAddColumn('Nombre');
			
			$this->dtgZonases->DataSource = Zonas::bindAll();
			
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// zonas_list.tpl.php as the included HTML template file
	ZonasListForm::Run('ZonasListForm');
?>