<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Cedulas class.  It uses the code-generated
	 * CedulasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Cedulas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cedulas_edit.php AND
	 * cedulas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CedulasEditPanel extends QPanel {
		// Local instance of the CedulasMetaControl
		protected $mctCedulas;

		// Controls for Cedulas's Data Fields
		public $lblIdCedulas;
		public $txtLocalidad;
		public $txtAutos;
		public $txtDireccion;
		public $lstAgenteObject;
		public $calFechaIngreso;
		public $calFechaSalida;
		public $calFechaFin;
		public $calAudiencia;
		public $txtObservaciones;
		public $lstEstadoObject;
		public $txtHonorarios;
		public $txtTimbrado;
		public $lstNroAbogadoObject;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdCedulas = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'CedulasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the CedulasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCedulas = CedulasMetaControl::Create($this, $intIdCedulas);

			// Call MetaControl's methods to create qcontrols based on Cedulas's data fields
			$this->lblIdCedulas = $this->mctCedulas->lblIdCedulas_Create();
			$this->txtLocalidad = $this->mctCedulas->txtLocalidad_Create();
			$this->txtAutos = $this->mctCedulas->txtAutos_Create();
			$this->txtDireccion = $this->mctCedulas->txtDireccion_Create();
			$this->lstAgenteObject = $this->mctCedulas->lstAgenteObject_Create();
			$this->calFechaIngreso = $this->mctCedulas->calFechaIngreso_Create();
			$this->calFechaSalida = $this->mctCedulas->calFechaSalida_Create();
			$this->calFechaFin = $this->mctCedulas->calFechaFin_Create();
			$this->calAudiencia = $this->mctCedulas->calAudiencia_Create();
			$this->txtObservaciones = $this->mctCedulas->txtObservaciones_Create();
			$this->lstEstadoObject = $this->mctCedulas->lstEstadoObject_Create();
			$this->txtHonorarios = $this->mctCedulas->txtHonorarios_Create();
			$this->txtTimbrado = $this->mctCedulas->txtTimbrado_Create();
			$this->lstNroAbogadoObject = $this->mctCedulas->lstNroAbogadoObject_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Cedulas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctCedulas->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CedulasMetaControl
			$this->mctCedulas->SaveCedulas();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CedulasMetaControl
			$this->mctCedulas->DeleteCedulas();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>