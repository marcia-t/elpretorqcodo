<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Declaratorias class.  It uses the code-generated
	 * DeclaratoriasDataGrid control which has meta-methods to help with
	 * easily creating/defining Declaratorias columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both declaratorias_list.php AND
	 * declaratorias_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class DeclaratoriasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Declaratoriases
		protected $dtgDeclaratoriases;

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
			$this->dtgDeclaratoriases = new DeclaratoriasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDeclaratoriases->CssClass = 'datagrid';
			$this->dtgDeclaratoriases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDeclaratoriases->Paginator = new QPaginator($this->dtgDeclaratoriases);
			$this->dtgDeclaratoriases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/declaratorias_edit.php';
			$this->dtgDeclaratoriases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for declaratorias's properties, or you
			// can traverse down QQN::declaratorias() to display fields that are down the hierarchy)
			//$this->dtgDeclaratoriases->MetaAddColumn('IdDeclaratoria');
			$this->dtgDeclaratoriases->MetaAddColumn('FechaInicio');
			$this->dtgDeclaratoriases->AgregarColumna(QQN::Declaratorias()->EstadoObject, 'Estado');
			$this->dtgDeclaratoriases->MetaAddColumn('Honorarios');
			$this->dtgDeclaratoriases->MetaAddColumn('Timbrado');
			$this->dtgDeclaratoriases->AgregarColumna(QQN::Declaratorias()->NroAbogadoObject, 'Nro de abogado');
			$this->dtgDeclaratoriases->MetaAddColumn('Contacto');
			$this->dtgDeclaratoriases->MetaAddColumn('Observaciones');
			$this->dtgDeclaratoriases->MetaAddColumn('Autos');
			$this->dtgDeclaratoriases->MetaAddColumn('FechaFin');
			$this->dtgDeclaratoriases->MetaAddColumn('Observada');
		}
		
		
		
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// declaratorias_list.tpl.php as the included HTML template file
	DeclaratoriasListForm::Run('DeclaratoriasListForm');
?>