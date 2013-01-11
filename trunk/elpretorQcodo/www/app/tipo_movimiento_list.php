<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the TipoMovimiento class.  It uses the code-generated
	 * TipoMovimientoDataGrid control which has meta-methods to help with
	 * easily creating/defining TipoMovimiento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tipo_movimiento_list.php AND
	 * tipo_movimiento_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TipoMovimientoListForm extends QForm {
		// Local instance of the Meta DataGrid to list TipoMovimientos
		protected $dtgTipoMovimientos;

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
			$this->dtgTipoMovimientos = new TipoMovimientoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTipoMovimientos->CssClass = 'datagrid';
			$this->dtgTipoMovimientos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTipoMovimientos->Paginator = new QPaginator($this->dtgTipoMovimientos);
			$this->dtgTipoMovimientos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tipo_movimiento_edit.php';
			$this->dtgTipoMovimientos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tipo_movimiento's properties, or you
			// can traverse down QQN::tipo_movimiento() to display fields that are down the hierarchy)
			$this->dtgTipoMovimientos->MetaAddColumn('IdTipoMovimiento');
			$this->dtgTipoMovimientos->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// tipo_movimiento_list.tpl.php as the included HTML template file
	TipoMovimientoListForm::Run('TipoMovimientoListForm');
?>