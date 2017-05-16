<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the EstadoDeclaratoria class.  It uses the code-generated
	 * EstadoDeclaratoriaDataGrid control which has meta-methods to help with
	 * easily creating/defining EstadoDeclaratoria columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both estado_declaratoria_list.php AND
	 * estado_declaratoria_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class EstadoDeclaratoriaListForm extends QForm {
		// Local instance of the Meta DataGrid to list EstadoDeclaratorias
		protected $dtgEstadoDeclaratorias;

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
			$this->dtgEstadoDeclaratorias = new EstadoDeclaratoriaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEstadoDeclaratorias->CssClass = 'datagrid';
			$this->dtgEstadoDeclaratorias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEstadoDeclaratorias->Paginator = new QPaginator($this->dtgEstadoDeclaratorias);
			$this->dtgEstadoDeclaratorias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/estado_declaratoria_edit.php';
			$this->dtgEstadoDeclaratorias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for estado_declaratoria's properties, or you
			// can traverse down QQN::estado_declaratoria() to display fields that are down the hierarchy)
			$this->dtgEstadoDeclaratorias->MetaAddColumn('IdEstadoDeclaratoria');
			$this->dtgEstadoDeclaratorias->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// estado_declaratoria_list.tpl.php as the included HTML template file
	EstadoDeclaratoriaListForm::Run('EstadoDeclaratoriaListForm');
?>