<?php
	require(__DATAGEN_META_CONTROLS__ . '/DeclaratoriasMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Declaratorias class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Declaratorias object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DeclaratoriasMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class DeclaratoriasMetaControl extends DeclaratoriasMetaControlGen {
		
		public function txtObservada_Create($strControlId = null) {
			$this->txtObservada = new QCheckBox($this->objParentObject);
			$this->txtObservada->Name = 'Observada';
			
			if ($this->blnEditMode){
				if ($this->objDeclaratorias->Observada == 1){
					$this->txtObservada->Checked = true;
				}
				if ($this->objDeclaratorias->Observada == 0){
					$this->txtObservada->Checked = false;
				}
			}
			return $this->txtObservada;
		}
		
		
		public function SaveDeclaratorias() {
			try {
				// Update any fields for controls that have been created
				if ($this->calFechaInicio) $this->objDeclaratorias->FechaInicio = $this->calFechaInicio->DateTime;
				if ($this->lstEstadoObject) $this->objDeclaratorias->Estado = $this->lstEstadoObject->SelectedValue;
				if ($this->txtHonorarios) $this->objDeclaratorias->Honorarios = $this->txtHonorarios->Text;
				if ($this->txtTimbrado) $this->objDeclaratorias->Timbrado = $this->txtTimbrado->Text;
				if ($this->lstNroAbogadoObject) $this->objDeclaratorias->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->txtContacto) $this->objDeclaratorias->Contacto = $this->txtContacto->Text;
				if ($this->txtObservaciones) $this->objDeclaratorias->Observaciones = $this->txtObservaciones->Text;
				if ($this->txtAutos) $this->objDeclaratorias->Autos = $this->txtAutos->Text;
				if ($this->calFechaFin) $this->objDeclaratorias->FechaFin = $this->calFechaFin->DateTime;
				if ($this->txtObservada->Checked) $this->objDeclaratorias->Observada = 1;
				if (!$this->txtObservada->Checked) $this->objDeclaratorias->Observada = 0;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				// Save the Declaratorias object
				$this->objDeclaratorias->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		
		/**
		 * Create and setup QListBox lstEstadoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstEstadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstEstadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstEstadoObject->Name = 'Estado';
			$this->lstEstadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objEstadoObjectCursor = EstadoDeclaratoria::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objEstadoObject = EstadoDeclaratoria::InstantiateCursor($objEstadoObjectCursor)) {
				$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstadoDeclaratoria);
				if (($this->objDeclaratorias->EstadoObject) && ($this->objDeclaratorias->EstadoObject->IdEstadoDeclaratoria == $objEstadoObject->IdEstadoDeclaratoria))
					$objListItem->Selected = true;
				$this->lstEstadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstEstadoObject;
		}
		
		/**
		 * Create and setup QListBox lstNroAbogadoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstNroAbogadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstNroAbogadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstNroAbogadoObject->Name = 'Número de abogado';
			$this->lstNroAbogadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objNroAbogadoObjectCursor = Abogados::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objNroAbogadoObject = Abogados::InstantiateCursor($objNroAbogadoObjectCursor)) {
				$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
				if (($this->objDeclaratorias->NroAbogadoObject) && ($this->objDeclaratorias->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
					$objListItem->Selected = true;
				$this->lstNroAbogadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstNroAbogadoObject;
		}
		
	}
?>