<?php
	require(__DATAGEN_META_CONTROLS__ . '/ZonasMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Zonas class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Zonas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ZonasMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class ZonasMetaControl extends ZonasMetaControlGen {
		
		
		
		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objZonas->Observaciones;
			$this->txtObservaciones->MaxLength = Zonas::ObservacionesMaxLength;
			$this->txtObservaciones->TextMode = QTextMode::MultiLine;
			return $this->txtObservaciones;
		}
		
		public function SaveZonas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objZonas->Nombre = $this->txtNombre->Text;
				$this->objZonas->Activo = 1;
				if ($this->txtObservaciones) $this->objZonas->Observaciones = $this->txtObservaciones->Text;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				// Save the Zonas object
				$this->objZonas->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>