<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Casilleros class.  It uses the code-generated
	 * CasillerosMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Casilleros columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both casilleros_edit.php AND
	 * casilleros_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CasillerosEditPanel extends QPanel {
		// Local instance of the CasillerosMetaControl
		protected $mctCasilleros;

		// Controls for Casilleros's Data Fields
		public $lblIdCasillero;
		public $txtNroCasillero;
		public $txtTitular;
		public $txtObservacion;
		public $txtActivo;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdCasillero = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'CasillerosEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the CasillerosMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCasilleros = CasillerosMetaControl::Create($this, $intIdCasillero);

			// Call MetaControl's methods to create qcontrols based on Casilleros's data fields
			$this->lblIdCasillero = $this->mctCasilleros->lblIdCasillero_Create();
			$this->txtNroCasillero = $this->mctCasilleros->txtNroCasillero_Create();
			$this->txtTitular = $this->mctCasilleros->txtTitular_Create();
			$this->txtObservacion = $this->mctCasilleros->txtObservacion_Create();
			$this->txtActivo = $this->mctCasilleros->txtActivo_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Casilleros') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctCasilleros->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CasillerosMetaControl
			$this->mctCasilleros->SaveCasilleros();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CasillerosMetaControl
			$this->mctCasilleros->DeleteCasilleros();
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