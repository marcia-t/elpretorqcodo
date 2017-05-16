<?php
	require(__DATAGEN_META_CONTROLS__ . '/CasillerosMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Casilleros class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Casilleros object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CasillerosMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class CasillerosMetaControl extends CasillerosMetaControlGen {
		
		
		/**
		 * Create and setup QTextBox txtObservacion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservacion_Create($strControlId = null) {
			$this->txtObservacion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservacion->Name = QApplication::Translate('Observacion');
			$this->txtObservacion->Text = $this->objCasilleros->Observacion;
			$this->txtObservacion->MaxLength = Casilleros::ObservacionMaxLength;
			$this->txtObservacion->TextMode = QTextMode::MultiLine;
			return $this->txtObservacion;
		}
		
		
		/**
		 * This will save this object's Casilleros instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCasilleros() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNroCasillero) $this->objCasilleros->NroCasillero = $this->txtNroCasillero->Text;
				if ($this->txtTitular) $this->objCasilleros->Titular = $this->txtTitular->Text;
				if ($this->txtObservacion) $this->objCasilleros->Observacion = $this->txtObservacion->Text;
				$this->objCasilleros->Activo = 1;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				// Save the Casilleros object
				$this->objCasilleros->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>