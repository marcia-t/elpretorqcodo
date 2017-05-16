<?php
// Load the Qcodo Development Framework
require(dirname(__FILE__) . '/../includes/prepend.inc.php');

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
class TramitesAsignadosVencenEstaSemanaListForm extends QForm {
	// Local instance of the Meta DataGrid to list TramitesAsignadoses
	protected $dtgTramitesAsignadoses;
	protected $dtgCedulases;
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
		$this->dtgTramitesAsignadoses->AgregarColumna('IdTramiteAsignado', 'Tramite');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdAgenteObject, 'Agente');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->NroAbogadoObject, 'Abogado');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdEstadoObject, 'Estado');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaIngreso');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaSalida');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->TipoTramiteObject, 'Tipo de tr�mite');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');
		$this->dtgTramitesAsignadoses->MetaAddColumn('Observaciones');


		$this->dtgTramitesAsignadoses->DataSource = $this->generarSQLYBuscar();


		//c�dulas

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
		$this->dtgCedulases->MetaAddColumn('Localidad');
		$this->dtgCedulases->MetaAddColumn('Autos');
		$this->dtgCedulases->MetaAddColumn('Direccion');
		$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->NroAbogadoObject, 'Nro abogado');
		$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->AgenteObject, 'Agente');
		$this->dtgCedulases->MetaAddColumn('Honorarios');
		$this->dtgCedulases->MetaAddColumn('Timbrado');
		$this->dtgCedulases->MetaAddColumn('FechaIngreso');
		$this->dtgCedulases->MetaAddColumn('FechaSalida');
		$this->dtgCedulases->MetaAddColumn('FechaFin');
		$this->dtgCedulases->MetaAddColumn('Audiencia');
		$this->dtgCedulases->MetaAddColumn('Observaciones');
		$this->dtgCedulases->AgregarColumna(QQN::Cedulas()->EstadoObject, 'Estado');

		$this->dtgCedulases->DataSource = $this->generarSQLYBuscarCedulas();


	}

	public function generarSQLYBuscar(){

		$objDatabase = TramitesAsignados::GetDatabase();

		$semanaNumero = date("W");
		$anioNumero = date("Y");


		$sql = "SELECT *
		FROM sistema.tramites_asignados
		WHERE WEEKOFYEAR(fecha_vencimiento) = $semanaNumero
		AND YEAR (fecha_vencimiento) = $anioNumero
		AND id_estado != 4";


		$objDbResult = $objDatabase->Query($sql);
		return TramitesAsignados::InstantiateDbResult($objDbResult);
	}


	public function generarSQLYBuscarCedulas(){
		$objDatabase = Cedulas::GetDatabase();

		$semanaNumero = date("W");
		$anioNumero = date("Y");


		$sql = "SELECT *
		FROM sistema.cedulas
		WHERE (WEEKOFYEAR(fecha_fin) = $semanaNumero
		AND YEAR (fecha_fin) = $anioNumero) OR
		(WEEKOFYEAR(audiencia) = $semanaNumero
		AND YEAR (audiencia) = $anioNumero)
		AND estado != 4";


		$objDbResult = $objDatabase->Query($sql);
		return Cedulas::InstantiateDbResult($objDbResult);
	}

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// tramites_asignados_list.tpl.php as the included HTML template file
TramitesAsignadosVencenEstaSemanaListForm::Run('TramitesAsignadosVencenEstaSemanaListForm');
?>
