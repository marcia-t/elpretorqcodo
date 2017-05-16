<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Declaratorias class.  It uses the code-generated
	 * DeclaratoriasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Declaratorias columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both declaratorias_edit.php AND
	 * declaratorias_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class DeclaratoriasEditForm extends QForm {
		// Local instance of the DeclaratoriasMetaControl
		protected $mctDeclaratorias;

		// Controls for Declaratorias's Data Fields
		protected $calFechaInicio;
		protected $lstEstadoObject;
		protected $txtHonorarios;
		protected $txtTimbrado;
		protected $lstNroAbogadoObject;
		protected $txtContacto;
		protected $txtObservaciones;
		protected $txtAutos;
		protected $calFechaFin;
		protected $txtObservada;

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
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the DeclaratoriasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDeclaratorias = DeclaratoriasMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Declaratorias's data fields
			$this->calFechaInicio = $this->mctDeclaratorias->calFechaInicio_Create();
			$this->lstEstadoObject = $this->mctDeclaratorias->lstEstadoObject_Create();
			$this->txtHonorarios = $this->mctDeclaratorias->txtHonorarios_Create();
			$this->txtTimbrado = $this->mctDeclaratorias->txtTimbrado_Create();
			$this->lstNroAbogadoObject = $this->mctDeclaratorias->lstNroAbogadoObject_Create(null, QQ::Equal(QQN::Abogados()->Activo, 1), QQ::OrderBy(QQN::Abogados()->NroAbogado));
			$this->txtContacto = $this->mctDeclaratorias->txtContacto_Create();
			$this->txtObservaciones = $this->mctDeclaratorias->txtObservaciones_Create();
			$this->txtObservaciones->Name = 'Descripci�n/Observaciones';
			$this->txtAutos = $this->mctDeclaratorias->txtAutos_Create();
			$this->calFechaFin = $this->mctDeclaratorias->calFechaFin_Create();
			$this->txtObservada = $this->mctDeclaratorias->txtObservada_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction('�Est� seguro de borrar esta declaratoria?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDeclaratorias->EditMode;
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
			
			if (!is_numeric($this->txtTimbrado->Text)){
				$this->txtTimbrado->Focus();
				$blnFocused = true;
				$this->txtTimbrado->Blink();
				$this->txtTimbrado->Warning = 'N�mero no v�lido';
				return false;
			}
				
			if (!is_numeric($this->txtHonorarios->Text)){
				$this->txtHonorarios->Focus();
				$blnFocused = true;
				$this->txtHonorarios->Blink();
				$this->txtHonorarios->Warning = 'N�mero no v�lido';
				return false;
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DeclaratoriasMetaControl
			$this->mctDeclaratorias->SaveDeclaratorias();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DeclaratoriasMetaControl
			$this->mctDeclaratorias->DeleteDeclaratorias();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods
		
		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/declaratorias_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// declaratorias_edit.tpl.php as the included HTML template file
	DeclaratoriasEditForm::Run('DeclaratoriasEditForm');
?>