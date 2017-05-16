<?php
	require(__DATAGEN_META_CONTROLS__ . '/AbogadosMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Abogados class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Abogados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AbogadosMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class AbogadosMetaControl extends AbogadosMetaControlGen {
		
		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objAbogados->Observaciones;
			$this->txtObservaciones->TextMode = QTextMode::MultiLine;
			$this->txtObservaciones->MaxLength = Abogados::ObservacionesMaxLength;
			return $this->txtObservaciones;
		}
		
		
		
		
		public function SaveAbogados() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAbogados->Nombre = $this->txtNombre->Text;
				if ($this->txtApellido) $this->objAbogados->Apellido = $this->txtApellido->Text;
				if ($this->txtTelefono) $this->objAbogados->Telefono = $this->txtTelefono->Text;
				if ($this->txtNroAbogado) $this->objAbogados->NroAbogado = $this->txtNroAbogado->Text;
				$this->objAbogados->Activo = 1;
				if ($this->txtObservaciones) $this->objAbogados->Observaciones = $this->txtObservaciones->Text;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				// Save the Abogados object
				$this->objAbogados->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
	}
?>