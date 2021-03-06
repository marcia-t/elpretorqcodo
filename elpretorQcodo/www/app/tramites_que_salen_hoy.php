<?php
// Load the Qcodo Development Framework
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the TramitesAsignados class.  It uses the code-generated
 * TramitesAsignadosDataGrid control which has meta-methods to help with
 * easily creating/defining TramitesAsignados columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both tramites_asignados_list.php AND
 * tramites_asignados_list.tpl.php out of this Form Drafts directory.
 *
 * @package My Application
 * @subpackage Drafts
 */
class TramitesAsignadosSalenHoyListForm extends QForm {
	// Local instance of the Meta DataGrid to list TramitesAsignadoses
	protected $dtgTramitesAsignadoses;

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
		$this->dtgTramitesAsignadoses = new TramitesAsignadosDataGrid($this);

		// Style the DataGrid (if desired)
		$this->dtgTramitesAsignadoses->CssClass = 'datagrid';
		$this->dtgTramitesAsignadoses->AlternateRowStyle->CssClass = 'alternate';

		// Add Pagination (if desired)
		$this->dtgTramitesAsignadoses->Paginator = new QPaginator($this->dtgTramitesAsignadoses);
		$this->dtgTramitesAsignadoses->ItemsPerPage = 20;



		// Create an Edit Column
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/tramites_asignados_edit.php';
		$this->dtgTramitesAsignadoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

		// Create the Other Columns (note that you can use strings for tramites_asignados's properties, or you
		// can traverse down QQN::tramites_asignados() to display fields that are down the hierarchy)
		$this->dtgTramitesAsignadoses->MetaAddColumn('IdTramiteAsignado');
		$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->IdAgenteObject);
		$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->NroAbogadoObject);
		$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->IdEstadoObject);
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaIngreso');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaSalida');
		$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->TipoTramiteObject);
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');


		$this->dtgTramitesAsignadoses->DataSource = $this->generarSQLYBuscar();
	}

	public function generarSQLYBuscar(){

		$objDatabase = TramitesAsignados::GetDatabase();

		$fechaDeHoy  =date("Y-m-d");


		$sql = "SELECT *
		FROM sistema.tramites_asignados
		WHERE fecha_salida = '$fechaDeHoy'";



		$objDbResult = $objDatabase->Query($sql);
		return TramitesAsignados::InstantiateDbResult($objDbResult);
	}

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// tramites_asignados_list.tpl.php as the included HTML template file
TramitesAsignadosSalenHoyListForm::Run('TramitesAsignadosSalenHoyListForm');
?>