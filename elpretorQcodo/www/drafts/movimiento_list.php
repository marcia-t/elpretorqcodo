<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Movimiento class.  It uses the code-generated
	 * MovimientoDataGrid control which has meta-methods to help with
	 * easily creating/defining Movimiento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both movimiento_list.php AND
	 * movimiento_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MovimientoListForm extends QForm {
		// Local instance of the Meta DataGrid to list Movimientos
		protected $dtgMovimientos;

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
			$this->dtgMovimientos = new MovimientoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMovimientos->CssClass = 'datagrid';
			$this->dtgMovimientos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMovimientos->Paginator = new QPaginator($this->dtgMovimientos);
			$this->dtgMovimientos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/movimiento_edit.php';
			$this->dtgMovimientos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for movimiento's properties, or you
			// can traverse down QQN::movimiento() to display fields that are down the hierarchy)
			$this->dtgMovimientos->MetaAddColumn('IdMovimiento');
			$this->dtgMovimientos->MetaAddColumn('Monto');
			$this->dtgMovimientos->MetaAddColumn(QQN::Movimiento()->TipoMovimientoObject);
			$this->dtgMovimientos->MetaAddColumn('Fecha');
			$this->dtgMovimientos->MetaAddColumn('Observaciones');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// movimiento_list.tpl.php as the included HTML template file
	MovimientoListForm::Run('MovimientoListForm');
?>