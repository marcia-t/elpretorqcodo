<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	class CedulasEditForm extends QForm {
		// Local instance of the CedulasMetaControl
		protected $mctCedulas;

		// Controls for Cedulas's Data Fields
		protected $lblIdCedulas;
		protected $txtLocalidad;
		protected $txtAutos;
		protected $txtDireccion;
		protected $lstAgenteObject;
		protected $calFechaIngreso;
		protected $calFechaSalida;
		protected $calFechaFin;
		protected $calAudiencia;
		protected $txtObservaciones;
		protected $lstEstadoObject;
		protected $txtHonorarios;
		protected $txtTimbrado;
		protected $lstNroAbogadoObject;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the CedulasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCedulas = CedulasMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Cedulas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctCedulas->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report that Custom Validations passed
			$blnToReturn = true;

			// Custom validation rules goes here 
			// Be sure to set $blnToReturn to false if any custom validation fails!

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CedulasMetaControl
			$this->mctCedulas->SaveCedulas();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CedulasMetaControl
			$this->mctCedulas->DeleteCedulas();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/cedulas_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// cedulas_edit.tpl.php as the included HTML template file
	CedulasEditForm::Run('CedulasEditForm');
?>