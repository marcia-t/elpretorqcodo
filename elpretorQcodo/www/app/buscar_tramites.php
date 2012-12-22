<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

class BuscarTramitesForm extends QForm {
	//tengo que tener los campos del tramite asignado, y una lista abajo para los resultados

	protected $mctTramitesAsignados;
	protected $lstIdAgenteObject;
	protected $lstNroAbogadoObject;
	protected $lstIdEstadoObject;
	protected $calFechaIngreso;
	protected $calFechaSalida;
	protected $lstTipoTramiteObject;
	protected $calFechaVencimiento;
	protected $dtgTramitesAsignadoses;
	protected $datos = array();
	protected $btnBuscar;
	protected $btnLimpiar;
	protected $btnEnCurso;
	protected $txtAutos;
	protected $btnFinalizar;
	protected $btnDeRegreso;
	protected $tramitesSeleccionados = array();
	protected $lblResponse;
	protected $pnlList;
	protected $pnlEdit;

	protected function Form_Run() {
		// Security check for ALLOW_REMOTE_ADMIN
		// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
		QApplication::CheckRemoteAdmin();
	}

	protected function Form_Create() {
		
		
		$this->pnlList = new QPanel($this, 'pnlList');
		$this->pnlList->AutoRenderChildren = true;
		
		$this->pnlEdit = new QPanel($this, 'pnlEdit');
		$this->pnlEdit->AutoRenderChildren = true;
		$this->pnlEdit->Visible = false;
		
		$this->mctTramitesAsignados = TramitesAsignadosMetaControl::CreateFromPathInfo($this);
		$this->lstIdAgenteObject = $this->mctTramitesAsignados->lstIdAgenteObject_Create();
		$this->lstIdAgenteObject->Required = false;
		$this->lstNroAbogadoObject = $this->mctTramitesAsignados->lstNroAbogadoObject_Create();
		$this->lstNroAbogadoObject->Required = false;
		$this->lstIdEstadoObject = $this->mctTramitesAsignados->lstIdEstadoObject_Create();
		$this->lstIdEstadoObject->Required = false;
		$this->calFechaIngreso = $this->mctTramitesAsignados->calFechaIngreso_Create();
		$this->calFechaIngreso->Required = false;
		$this->calFechaSalida = $this->mctTramitesAsignados->calFechaSalida_Create();
		$this->calFechaSalida->Required = false;
		$this->lstTipoTramiteObject = $this->mctTramitesAsignados->lstTipoTramiteObject_Create();
		$this->lstTipoTramiteObject->Required = false;
		$this->calFechaVencimiento = $this->mctTramitesAsignados->calFechaVencimiento_Create();
		$this->calFechaVencimiento->Required = false;
		$this->txtAutos = $this->mctTramitesAsignados->txtAutos_Create();
		$this->txtAutos->Required = false;
		$this->dtgTramitesAsignadoses = new TramitesAsignadosDataGrid($this);

		// Style the DataGrid (if desired)
		$this->dtgTramitesAsignadoses->CssClass = 'datagrid';
		$this->dtgTramitesAsignadoses->AlternateRowStyle->CssClass = 'alternate';



		// Add Pagination (if desired)
		$this->dtgTramitesAsignadoses->Paginator = new QPaginator($this->dtgTramitesAsignadoses);
		$this->dtgTramitesAsignadoses->ItemsPerPage = 20;

		//$this->dtgTramitesAsignadoses->SetDataBinder('bindBySearch');


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
		$this->dtgTramitesAsignadoses->MetaAddColumn('Autos');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->TipoTramiteObject, 'Tipo de trámite');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');
		$this->dtgTramitesAsignadoses->MetaAddColumn('Observaciones');
		/*$this->dtgTramitesAsignadoses->AddColumn(new QDataGridColumn('Seleccionar', '<?= $_FORM->chkSelected_Render($_ITEM) ?>','HtmlEntities=false'));*/
		$this->btnBuscar = new QButton($this);
		$this->btnBuscar->Text = 'Buscar';
		$this->btnBuscar->AddAction(new QClickEvent(), new QAjaxAction('btnBuscar_Click'));


		$this->btnLimpiar = new QButton($this);
		$this->btnLimpiar->Text = 'Limpiar';
		$this->btnLimpiar->AddAction(new QClickEvent(), new QAjaxAction('btnLimpiar_Click'));

		$this->lblResponse = new QLabel($this);
		$this->lblResponse->HtmlEntities = false;
		
		
		/*$this->btnFinalizar = new QButton($this);
		$this->btnFinalizar->Text = 'Finalizar';
		$this->btnFinalizar->AddAction(new QClickEvent(), new QAjaxAction('btnFinalizar_Click'));
		
		$this->btnDeRegreso = new QButton($this);
		$this->btnDeRegreso->Text = 'De regreso';
		$this->btnDeRegreso->AddAction(new QClickEvent(), new QAjaxAction('btnDeRegreso_Click'));
		
		$this->btnEnCurso = new QButton($this);
		$this->btnEnCurso->Text = 'En curso';
		$this->btnEnCurso->AddAction(new QClickEvent(), new QAjaxAction('btnEnCurso_Click'));*/
	}

	
	
	protected function btnBuscar_Click($strFormId, $strControlId, $strParameter) {

		if ($this->lstIdAgenteObject) $this->datos['idAgente'] = $this->lstIdAgenteObject->SelectedValue;
		if ($this->lstNroAbogadoObject) $this->datos['nroAbogado'] = $this->lstNroAbogadoObject->SelectedValue;
		if ($this->lstIdEstadoObject) $this->datos['idEstado'] = $this->lstIdEstadoObject->SelectedValue;
		if ($this->calFechaIngreso) $this->datos['fechaIngreso'] = $this->calFechaIngreso->DateTime;
		if ($this->calFechaSalida) $this->datos['fechaSalida'] = $this->calFechaSalida->DateTime;
		if ($this->lstTipoTramiteObject) $this->datos['tipoTramite'] = $this->lstTipoTramiteObject->SelectedValue;
		if ($this->calFechaVencimiento) $this->datos['fechaVencimiento'] = $this->calFechaVencimiento->DateTime;
		if ($this->txtAutos) $this->datos['txtAutos'] = $this->txtAutos->Text;
		$this->dtgTramitesAsignadoses->DataSource = $this->generaSQLYBuscar();
	}

	protected function btnFinalizar_Click($strFormId, $strControlId, $strParameter) {
		$this->finalizarTramitesSeleccionados();
		$this->dtgTramitesAsignadoses->DataSource = $this->generaSQLYBuscar();
	}
	
	protected function btnEnCurso_Click($strFormId, $strControlId, $strParameter) {
		$this->enCursoTramitesSeleccionados();
		$this->dtgTramitesAsignadoses->DataSource = $this->generaSQLYBuscar();
	}
	
	protected function btnDeRegreso_Click($strFormId, $strControlId, $strParameter) {
		$this->deRegresoTramitesSeleccionados();
		$this->dtgTramitesAsignadoses->Refresh();
	}
	
	protected function btnLimpiar_Click($strFormId, $strControlId, $strParameter) {
		$this->calFechaIngreso->DateTime = null;
		$this->lstIdAgenteObject->SelectedValue = null;
		$this->lstNroAbogadoObject->SelectedValue = null;
		$this->lstIdEstadoObject->SelectedValue = null;
		$this->calFechaSalida->DateTime = null;
		$this->lstTipoTramiteObject->SelectedValue = null;
		$this->calFechaVencimiento->DateTime = null;
		$this->txtAutos->Text = null;
	}


	public function bindBySearch(QPaginatedControl $objPaginatedControl) {
		$this->dtgTramitesAsignadoses->DataSource = TramitesAsignados::LoadArrayByIdEstado($this->datos['idEstado']);
	}

	public function chkSelected_Render(TramitesAsignados $objTramiteAsignado) {
		$strControlId = 'chkSelected' . $objTramiteAsignado->IdTramiteAsignado;

		$chkSelected = $this->GetControl($strControlId);

		if (!$chkSelected) {
			$chkSelected = new QCheckBox($this->dtgTramitesAsignadoses, $strControlId);
			
			$chkSelected->Text = 'Seleccionar';

			$chkSelected->ActionParameter = $objTramiteAsignado->IdTramiteAsignado;
			
			
			$chkSelected->AddAction(new QClickEvent(), new QServerAction('chkSelected_Click'));
		}

		return $chkSelected->Render(false);
	}


	protected function chkSelected_Click($strFormId, $strControlId, $strParameter) {
		$intTramiteAsignado = $strParameter;

		$objTramiteAsignado = TramitesAsignados::Load($intTramiteAsignado);
		if ($this->GetControl($strControlId)->Checked)
			$this->tramitesSeleccionados[$objTramiteAsignado->IdTramiteAsignado] = $objTramiteAsignado;
		else
			unset($this->tramitesSeleccionados[$objTramiteAsignado->IdTramiteAsignado]);
		
		$this->dtgTramitesAsignadoses->DataSource = $this->generaSQLYBuscar();
		/*$strRes = '';
		foreach ($this->tramitesSeleccionados as $tramite) {
			$strRes.= ' ' .$tramite->IdTramiteAsignado;
		}
		$this->lblResponse->Text = $strRes;*/
	}

	public function generaSQLYBuscar(){

		$objDatabase = TramitesAsignados::GetDatabase();
		
		$sql = "SELECT *
		FROM sistema.tramites_asignados
		WHERE 1 = 1";

		if (isset ($this->datos['idAgente'])) {
			$id = $this->datos['idAgente'];
			$sql.=" AND id_agente = $id";
		}

		if (isset ($this->datos['nroAbogado'])) {
			$nro_abogado = $this->datos['nroAbogado'];
			$sql.=" AND nro_abogado = $nro_abogado";
		}

		if (isset ($this->datos['idEstado'])) {
			$id= $this->datos['idEstado'];
			$sql.=" AND id_estado = $id";
		}

		if (isset ($this->datos['fechaIngreso'])) {
			$id = $this->datos['fechaIngreso']->PHPDate('Y-m-d');
			$sql.=" AND fecha_ingreso = '$id'";
		}

		if (isset ($this->datos['fechaSalida'])) {
			$id = $this->datos['fechaSalida']->PHPDate('Y-m-d');
			$sql.=" AND fecha_salida = '$id'";
		}

		if (isset ($this->datos['tipoTramite'])) {
			$id= $this->datos['tipoTramite'];
			$sql.=" AND tipo_tramite = $id";
		}

		if (isset ($this->datos['fechaVencimiento'])) {
			$id = $this->datos['fechaVencimiento']->PHPDate('Y-m-d');
			$sql.=" AND fecha_vencimiento = '$id'";
		}
		
		if (($this->datos['txtAutos'] != '')) {
			$id = $this->datos['txtAutos'];
			$sql.=" AND autos LIKE '%$id%'";
		}

		$objDbResult = $objDatabase->Query($sql);
		return TramitesAsignados::InstantiateDbResult($objDbResult);



	}

		
		protected function finalizarTramitesSeleccionados(){
			foreach ($this->tramitesSeleccionados as $tramite) {
				$id = $tramite->IdTramiteAsignado;
				TramitesAsignados::UpdateEstadoFinalizado($id);
			}
		}
		
		protected function enCursoTramitesSeleccionados(){
				
			foreach ($this->tramitesSeleccionados as $tramite) {
				$id = $tramite->IdTramiteAsignado;
				TramitesAsignados::UpdateEstadoEnCurso($id);
			}
		}
		
		
		protected function deRegresoTramitesSeleccionados(){
		
			foreach ($this->tramitesSeleccionados as $tramite) {
				$id = $tramite->IdTramiteAsignado;
				TramitesAsignados::UpdateEstadoDeRegreso($id);
			}
		}
	
	
}


BuscarTramitesForm::Run('BuscarTramitesForm');