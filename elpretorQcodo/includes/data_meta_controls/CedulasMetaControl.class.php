<?php
	require(__DATAGEN_META_CONTROLS__ . '/CedulasMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Cedulas class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Cedulas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CedulasMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class CedulasMetaControl extends CedulasMetaControlGen {
		
		
		/**
		 * Create and setup QListBox lstAgenteObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstAgenteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstAgenteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstAgenteObject->Name = 'Agente';
			$this->lstAgenteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAgenteObjectCursor = Agentes::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objAgenteObject = Agentes::InstantiateCursor($objAgenteObjectCursor)) {
				$objListItem = new QListItem($objAgenteObject->__toString(), $objAgenteObject->IdAgente);
				if (($this->objCedulas->AgenteObject) && ($this->objCedulas->AgenteObject->IdAgente == $objAgenteObject->IdAgente))
					$objListItem->Selected = true;
				$this->lstAgenteObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstAgenteObject;
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
				if (($this->objCedulas->NroAbogadoObject) && ($this->objCedulas->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
					$objListItem->Selected = true;
				$this->lstNroAbogadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstNroAbogadoObject;
		}
		
		
		public function lstEstadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstEstadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstEstadoObject->Name = 'Estado';
			$this->lstEstadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objEstadoObjectCursor = Estados::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objEstadoObject = Estados::InstantiateCursor($objEstadoObjectCursor)) {
				$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstado);
				if (($this->objCedulas->EstadoObject) && ($this->objCedulas->EstadoObject->IdEstado == $objEstadoObject->IdEstado))
					$objListItem->Selected = true;
				$this->lstEstadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstEstadoObject;
		}
		
		
		public function SaveCedulas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtLocalidad) $this->objCedulas->Localidad = $this->txtLocalidad->Text;
				if ($this->lstNroAbogadoObject) $this->objCedulas->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->txtAutos) $this->objCedulas->Autos = $this->txtAutos->Text;
				if ($this->txtDireccion) $this->objCedulas->Direccion = $this->txtDireccion->Text;
				if ($this->lstAgenteObject) $this->objCedulas->Agente = $this->lstAgenteObject->SelectedValue;
				if ($this->calFechaIngreso) $this->objCedulas->FechaIngreso = $this->calFechaIngreso->DateTime;
				if ($this->calFechaSalida) $this->objCedulas->FechaSalida = $this->calFechaSalida->DateTime;
				if ($this->calFechaFin) $this->objCedulas->FechaFin = $this->calFechaFin->DateTime;
				if ($this->calAudiencia) $this->objCedulas->Audiencia = $this->calAudiencia->DateTime;
				if ($this->txtObservaciones) $this->objCedulas->Observaciones = $this->txtObservaciones->Text;
				if ($this->lstEstadoObject) $this->objCedulas->Estado = $this->lstEstadoObject->SelectedValue;
				if ($this->txtHonorarios->Text != '') $this->objCedulas->Honorarios = $this->txtHonorarios->Text;
				else $this->objCedulas->Honorarios = '0'; 
				if ($this->txtTimbrado->Text != '') $this->objCedulas->Timbrado = $this->txtTimbrado->Text;
				else $this->objCedulas->Timbrado = '0';
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if (!$this->blnEditMode)
					$this->crearMovimientos();
				// Save the Cedulas object
				$this->objCedulas->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		
		
		
		public function crearMovimientos (){
			if ($this->objCedulas->Timbrado > 0){
			$objMovimiento = new Movimiento();
			$objMovimiento->Fecha = $this->objCedulas->FechaIngreso;
			$objMovimiento->TipoMovimiento= 1;
			$objMovimiento->Monto = $this->objCedulas->Timbrado;
			$objMovimiento->Observaciones = 'Cédula '.$this->objCedulas->Autos.' '.$this->objCedulas->Observaciones;
			$objMovimiento->Save();
			}
			if($this->objCedulas->Honorarios > 0){	
			$objMovimiento2 = new Movimiento();
			$objMovimiento2->Fecha = $this->objCedulas->FechaIngreso;
			$objMovimiento2->TipoMovimiento= 2;
			$objMovimiento2->Monto = $this->objCedulas->Honorarios;
			$objMovimiento2->Observaciones = 'Cédula '.$this->objCedulas->Autos.' '.$this->objCedulas->Observaciones;
			$objMovimiento2->Save();
			}
		}
		
		/**
		 * Create and setup QDateTimePicker calFechaIngreso
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaIngreso_Create($strControlId = null) {
			$this->calFechaIngreso = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calFechaIngreso->Name = QApplication::Translate('Fecha Ingreso');
			$this->calFechaIngreso->DateTime = $this->objCedulas->FechaIngreso;
// 			$this->calFechaIngreso->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaIngreso->Required = true;
			$this->calFechaIngreso->CssClass = 'textbox';
			if (!$this->blnEditMode)
				$this->calFechaIngreso->DateTime = QDateTime::Now(false);
			return $this->calFechaIngreso;
		}
		
		
		/**
		 * Create and setup QDateTimePicker calFechaSalida
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaSalida_Create($strControlId = null) {
			$this->calFechaSalida = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calFechaSalida->Name = QApplication::Translate('Fecha Salida');
			$this->calFechaSalida->DateTime = $this->objCedulas->FechaSalida;
			$this->calFechaSalida->CssClass = 'textbox';
// 			$this->calFechaSalida->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaSalida;
		}
		
		/**
		 * Create and setup QDateTimePicker calFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFin_Create($strControlId = null) {
			$this->calFechaFin = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->calFechaFin->DateTime = $this->objCedulas->FechaFin;
			$this->calFechaFin->CssClass = 'textbox';
// 			$this->calFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFin;
		}
		
		
		/**
		 * Create and setup QDateTimePicker calAudiencia
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calAudiencia_Create($strControlId = null) {
			$this->calAudiencia = new QCalendarPopup($this->objParentObject, $strControlId);
			$this->calAudiencia->Name = QApplication::Translate('Audiencia');
			$this->calAudiencia->DateTime = $this->objCedulas->Audiencia;
			$this->calAudiencia->CssClass = 'textbox';
// 			$this->calAudiencia->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calAudiencia;
		}
	}
	
	
	
	
	
?>