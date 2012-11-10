<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

class CarpetaTramitesForm extends QForm {

	protected $lstAgentes;
	protected $lstZonas;
	protected $pnlList;
	protected $pnlEdit;
	protected $mctTramitesAsignados;
	protected $mctTipoTramite;
	protected $btnMostrar;
	protected $dtgTramitesAsignadoses;
	protected $idAgente;
	protected $idZona;
	protected $lblResponse;
	protected $chkFinalizados;
	protected $calFechaIngreso;
	protected $calFechaSalida;
	protected $fechaSalida;
	protected $fechaIngreso;


	protected function Form_Create() {

		$this->chkFinalizados = new QCheckBox($this);
		$this->chkFinalizados->Checked = false;
		//$this->chkFinalizados->AddAction(new QClickEvent(), new QServerAction('chkSelected_Click'));

		$this->lblResponse = new QLabel($this);
		$this->lblResponse->HtmlEntities = false;

		$this->mctTramitesAsignados = TramitesAsignadosMetaControl::CreateFromPathInfo($this);
		$this->mctTipoTramite = TipoTramitesMetaControl::CreateFromPathInfo($this);
		$this->pnlList = new QPanel($this, 'pnlList');
		$this->pnlList->AutoRenderChildren = true;

		$this->pnlEdit = new QPanel($this, 'pnlEdit');
		$this->pnlEdit->AutoRenderChildren = true;
		$this->pnlEdit->Visible = false;


		$this->dtgTramitesAsignadoses = new TramitesAsignadosDataGrid($this);
		$this->dtgTramitesAsignadoses->CssClass = 'datagrid';
		$this->dtgTramitesAsignadoses->AlternateRowStyle->CssClass = 'alternate';



		// Add Pagination (if desired)
		$this->dtgTramitesAsignadoses->Paginator = new QPaginator($this->dtgTramitesAsignadoses);
		$this->dtgTramitesAsignadoses->ItemsPerPage = 20;

		//$this->dtgTramitesAsignadoses->SetDataBinder('bindBySearch');


		//$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tramites_asignados_edit.php';
		//$this->dtgTramitesAsignadoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdAgenteObject, 'Agente');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->NroAbogadoObject, 'Abogado');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->IdEstadoObject, 'Estado');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaIngreso');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaSalida');
		$this->dtgTramitesAsignadoses->MetaAddColumn('Autos');
		$this->dtgTramitesAsignadoses->AgregarColumna(QQN::TramitesAsignados()->TipoTramiteObject, 'Tipo de trámite');
		$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');
		$this->dtgTramitesAsignadoses->MetaAddColumn('Observaciones');
		

		$this->dtgTramitesAsignadoses->AddColumn(new QDataGridColumn('En curso', '<?= $_FORM->encurso_Render($_ITEM) ?>','HtmlEntities=false'));
		$this->dtgTramitesAsignadoses->AddColumn(new QDataGridColumn('De regreso', '<?= $_FORM->deregreso_Render($_ITEM) ?>','HtmlEntities=false'));
		$this->dtgTramitesAsignadoses->AddColumn(new QDataGridColumn('Finalizar', '<?= $_FORM->finalizar_Render($_ITEM) ?>','HtmlEntities=false'));
		//$this->dtgTramitesAsignadoses->DataSource = TramitesAsignados::LoadAll();
		$this->dtgTramitesAsignadoses->DataSource  = $this->generaSQLYBuscar();
		$this->lstAgentes = $this->mctTramitesAsignados->lstIdAgenteObject_Create(null, QQ::Equal(QQN::Agentes()->Activo, 1));
		$this->lstZonas = $this->mctTipoTramite->lstIdZonaObject_Create(null, QQ::Equal(QQN::Zonas()->Activo, 1));
		$this->calFechaIngreso = $this->mctTramitesAsignados->calFechaIngreso_Create();
		$this->calFechaSalida = $this->mctTramitesAsignados->calFechaSalida_Create();


		$this->btnMostrar = new QButton($this);
		$this->btnMostrar->Text = 'Mostrar';
		$this->btnMostrar->AddAction(new QClickEvent(), new QAjaxAction('btnMostrar_Click'));
	}


	public function finalizar_Render(TramitesAsignados $objTramiteAsignado) {
		$strControlId = 'chkSelected' . $objTramiteAsignado->IdTramiteAsignado;

		$chkSelected = $this->GetControl($strControlId);

		if (!$chkSelected) {
			$chkSelected = new QLinkButton($this->dtgTramitesAsignadoses);
			$chkSelected->Text = 'Finalizar';

			$chkSelected->ActionParameter = $objTramiteAsignado->IdTramiteAsignado;


			$chkSelected->AddAction(new QClickEvent(), new QServerAction('finalizar_Click'));
		}

		return $chkSelected->Render(false);
	}

	protected function finalizar_Click($strFormId, $strControlId, $strParameter) {
		$intTramiteAsignado = $strParameter;
		TramitesAsignados::UpdateEstadoFinalizado($intTramiteAsignado);
		$this->dtgTramitesAsignadoses->DataSource  = $this->generaSQLYBuscar();

	}


	public function encurso_Render(TramitesAsignados $objTramiteAsignado) {
		$strControlId = 'chkSelected' . $objTramiteAsignado->IdTramiteAsignado;

		$chkSelected = $this->GetControl($strControlId);

		if (!$chkSelected) {
			$chkSelected = new QLinkButton($this->dtgTramitesAsignadoses);
			$chkSelected->Text = 'En curso';

			$chkSelected->ActionParameter = $objTramiteAsignado->IdTramiteAsignado;


			$chkSelected->AddAction(new QClickEvent(), new QServerAction('encurso_Click'));
		}

		return $chkSelected->Render(false);
	}

	protected function encurso_Click($strFormId, $strControlId, $strParameter) {
		$intTramiteAsignado = $strParameter;
		TramitesAsignados::UpdateEstadoEnCurso($intTramiteAsignado);
		$this->dtgTramitesAsignadoses->DataSource  = $this->generaSQLYBuscar();
	}




	public function deregreso_Render(TramitesAsignados $objTramiteAsignado) {
		$strControlId = 'chkSelected' . $objTramiteAsignado->IdTramiteAsignado;

		$chkSelected = $this->GetControl($strControlId);

		if (!$chkSelected) {
			$chkSelected = new QLinkButton($this->dtgTramitesAsignadoses);
			$chkSelected->Text = 'De regreso';

			$chkSelected->ActionParameter = $objTramiteAsignado->IdTramiteAsignado;


			$chkSelected->AddAction(new QClickEvent(), new QServerAction('deregreso_Click'));
		}

		return $chkSelected->Render(false);
	}

	protected function deregreso_Click($strFormId, $strControlId, $strParameter) {
		$intTramiteAsignado = $strParameter;
		TramitesAsignados::UpdateEstadoDeRegreso($intTramiteAsignado);
		$this->dtgTramitesAsignadoses->DataSource  = $this->generaSQLYBuscar();
	}


	protected function btnMostrar_Click($strFormId, $strControlId, $strParameter) {

		$this->idAgente = $this->lstAgentes->SelectedValue;
		$this->idZona = $this->lstZonas->SelectedValue;
		if ($this->calFechaIngreso) $this->fechaIngreso = $this->calFechaIngreso->DateTime;
		if ($this->calFechaSalida) $this->fechaSalida = $this->calFechaSalida->DateTime;
		$this->dtgTramitesAsignadoses->DataSource = $this->generaSQLYBuscar();

	}

	public function generaSQLYBuscar(){

		$objDatabase = TramitesAsignados::GetDatabase();

		$sql = "SELECT * FROM sistema.tramites_asignados
		LEFT JOIN sistema.tipo_tramites
		ON tramites_asignados.tipo_tramite = tipo_tramites.id_tipo_tramite
		WHERE 1 = 1";
		if (!$this->chkFinalizados->Checked){
			$sql.= " AND id_estado != 4";
		}

		if ($this->idAgente)
			$sql.= " AND id_agente = $this->idAgente";

		if ($this->idZona)
			$sql.= " AND id_zona = $this->idZona";

		if ($this->fechaIngreso){
			$fecha_ingreso= $this->fechaIngreso->PHPDate('Y-m-d');
			$sql.= " AND fecha_ingreso ='$fecha_ingreso'";
		}

		if ($this->fechaSalida){
			$fecha_salida = $this->fechaSalida->PHPDate('Y-m-d');
			$sql.= " AND fecha_salida = '$fecha_salida'";
		}

		$objDbResult = $objDatabase->Query($sql);
		return TramitesAsignados::InstantiateDbResult($objDbResult);
	}

}
CarpetaTramitesForm::Run('CarpetaTramitesForm');