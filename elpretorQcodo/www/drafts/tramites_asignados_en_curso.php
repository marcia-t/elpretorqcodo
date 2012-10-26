<?php


require(dirname(__FILE__) . '/../../includes/prepend.inc.php');


class TramitesAsignadosEnTramiteListForm extends QForm {
	
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
			
			$this->dtgTramitesAsignadoses->SetDataBinder('bindByEnTramite');
			// Style the DataGrid (if desired)
			$this->dtgTramitesAsignadoses->CssClass = 'datagrid';
			$this->dtgTramitesAsignadoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTramitesAsignadoses->Paginator = new QPaginator($this->dtgTramitesAsignadoses);
			$this->dtgTramitesAsignadoses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tramites_asignados_edit.php';
			$this->dtgTramitesAsignadoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tramites_asignados's properties, or you
			// can traverse down QQN::tramites_asignados() to display fields that are down the hierarchy)
			$this->dtgTramitesAsignadoses->AgregarColumna('IdTramiteAsignado', 'Tramite');
			$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdAgenteObject, 'Agente');
			$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->NroAbogadoObject, 'Abogado');
			$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdEstadoObject, 'Estado');
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaIngreso');
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaSalida');
			$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->TipoTramiteObject, 'Tipo de trámite');
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');
		}
	
	
	public function bindByEnTramite(QPaginatedControl $objPaginatedControl) {
		$this->dtgTramitesAsignadoses->DataSource = TramitesAsignados::LoadArrayByIdEstado(2);
	}
}


TramitesAsignadosEnTramiteListForm::Run('TramitesAsignadosEnTramiteListForm');
?>