<?php
	require(__DATAGEN_META_CONTROLS__ . '/AgentesMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Agentes class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Agentes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AgentesMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class AgentesMetaControl extends AgentesMetaControlGen {
		
		
		
		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objAgentes->Observaciones;
			$this->txtObservaciones->TextMode = QTextMode::MultiLine;
			$this->txtObservaciones->MaxLength = Agentes::ObservacionesMaxLength;
			return $this->txtObservaciones;
		}
		
		/**
		 * This will save this object's Agentes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAgentes() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombreApellido) $this->objAgentes->NombreApellido = $this->txtNombreApellido->Text;
				 $this->objAgentes->Activo = 1;
				if ($this->txtObservaciones) $this->objAgentes->Observaciones = $this->txtObservaciones->Text;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				// Save the Agentes object
				$this->objAgentes->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
	}
?>