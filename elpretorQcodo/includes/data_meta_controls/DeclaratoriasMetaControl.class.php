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
		
		
		
		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objDeclaratorias->Observaciones;
			$this->txtObservaciones->MaxLength = Declaratorias::ObservacionesMaxLength;
			$this->txtObservaciones->TextMode = QTextMode::MultiLine;
			return $this->txtObservaciones;
		}
		
		public function txtObservada_Create($strControlId = null) {
			$this->txtObservada = new QCheckBox($this->objParentObject);
			$this->txtObservada->Name = 'Observada';
			
			if ($this->blnEditMode){
				if ($this->objDeclaratorias->Observada == 'S�'){
					$this->txtObservada->Checked = true;
				}
				if ($this->objDeclaratorias->Observada == 'No'){
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
				if ($this->txtHonorarios->Text != '') $this->objDeclaratorias->Honorarios = $this->txtHonorarios->Text;
				else $this->objDeclaratorias->Honorarios = '0';
				if ($this->txtTimbrado->Text != '') $this->objDeclaratorias->Timbrado = $this->txtTimbrado->Text;
				else $this->objDeclaratorias->Timbrado = '0';
				if ($this->lstNroAbogadoObject) $this->objDeclaratorias->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->txtContacto) $this->objDeclaratorias->Contacto = $this->txtContacto->Text;
				if ($this->txtObservaciones) $this->objDeclaratorias->Observaciones = $this->txtObservaciones->Text;
				if ($this->txtAutos) $this->objDeclaratorias->Autos = $this->txtAutos->Text;
				if ($this->calFechaFin) $this->objDeclaratorias->FechaFin = $this->calFechaFin->DateTime;
				if ($this->txtObservada->Checked) $this->objDeclaratorias->Observada = 1;
				if (!$this->txtObservada->Checked) $this->objDeclaratorias->Observada = 0;
				//var_dump($this->objDeclaratorias);die;
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
		
				if (!$this->blnEditMode)
					$this->crearMovimientos();
				
				// Save the Declaratorias object
				$this->objDeclaratorias->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		public function crearMovimientos(){
			if ($this->objDeclaratorias->Timbrado > 0){
			$objMovimiento = new Movimiento();
			$objMovimiento->Fecha = QDateTime::Now(false);
			$objMovimiento->TipoMovimiento= 1;
			$objMovimiento->Monto = $this->objDeclaratorias->Timbrado;
			$objMovimiento->Observaciones = 'Declaratoria '.$this->objDeclaratorias->Observaciones;
			$objMovimiento->Save();
			}
			if ($this->objDeclaratorias->Honorarios > 0){
			$objMovimiento2 = new Movimiento();
			$objMovimiento2->Fecha = QDateTime::Now(false);
			$objMovimiento2->TipoMovimiento= 2;
			$objMovimiento2->Monto = $this->objDeclaratorias->Honorarios;
			$objMovimiento2->Observaciones = 'Declaratoria '.$this->objDeclaratorias->Observaciones;
			$objMovimiento2->Save();
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
			$this->lstNroAbogadoObject->Name = 'N�mero de abogado';
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
		
		
		/**
		 * Create and setup QDateTimePicker calFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaInicio_Create($strControlId = null) {
			$this->calFechaInicio = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->calFechaInicio->DateTime = $this->objDeclaratorias->FechaInicio;
			//$this->calFechaInicio->DateTimePickerType = QDateTimePickerType::Date;
			if (!$this->blnEditMode)
				$this->calFechaInicio->DateTime = QDateTime::Now(false);
			$this->calFechaInicio->Required = true;
			$this->calFechaInicio->CssClass = 'textbox';
			return $this->calFechaInicio;
		}
		
		/**
		 * Create and setup QDateTimePicker calFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFin_Create($strControlId = null) {
			$this->calFechaFin = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->calFechaFin->DateTime = $this->objDeclaratorias->FechaFin;
			$this->calFechaFin->CssClass = 'textbox';
// 			$this->calFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFin;
		}
		
	}
?>