<?php
	require(__DATAGEN_META_CONTROLS__ . '/TramitesAsignadosMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * TramitesAsignados class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single TramitesAsignados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TramitesAsignadosMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class TramitesAsignadosMetaControl extends TramitesAsignadosMetaControlGen {
		
		/**
		 * Create and setup QDateTimePicker calFechaIngreso
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		/*public function calFechaIngreso_CreateBis($strControlId = null) {
			$this->calFechaIngreso = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaIngreso->Name = QApplication::Translate('Fecha Ingreso');
			$this->calFechaIngreso->DateTime = $this->objTramitesAsignados->FechaIngreso;
			$this->calFechaIngreso->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaIngreso->Required = true;
			return $this->calFechaIngreso;
			$dtxLinkedControl  =  new QDateTimeTextBox($this, 'foo');
			$dtxLinkedControl->Visible = false;
			$this->calFechaIngreso = new QCalendar($this, $dtxLinkedControl);
			$this->calFechaIngreso->DateTime = $this->objTramitesAsignados->FechaIngreso;
			$this->calFechaIngreso->Required = true;
			return $this->calFechaIngreso;
		}*/
		
		
		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objTramitesAsignados->Observaciones;
			$this->txtObservaciones->MaxLength = TramitesAsignados::ObservacionesMaxLength;
			$this->txtObservaciones->TextMode = QTextMode::MultiLine;
			return $this->txtObservaciones;
		}
		
		public function lstIdAgenteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdAgenteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdAgenteObject->Name = 'Agente';
			$this->lstIdAgenteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdAgenteObjectCursor = Agentes::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objIdAgenteObject = Agentes::InstantiateCursor($objIdAgenteObjectCursor)) {
				$objListItem = new QListItem($objIdAgenteObject->__toString(), $objIdAgenteObject->IdAgente);
				if (($this->objTramitesAsignados->IdAgenteObject) && ($this->objTramitesAsignados->IdAgenteObject->IdAgente == $objIdAgenteObject->IdAgente))
					$objListItem->Selected = true;
				$this->lstIdAgenteObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstIdAgenteObject;
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
			$this->lstNroAbogadoObject->Name = 'Nro Abogado';
			$this->lstNroAbogadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objNroAbogadoObjectCursor = Abogados::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objNroAbogadoObject = Abogados::InstantiateCursor($objNroAbogadoObjectCursor)) {
				$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
				if (($this->objTramitesAsignados->NroAbogadoObject) && ($this->objTramitesAsignados->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
					$objListItem->Selected = true;
				$this->lstNroAbogadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstNroAbogadoObject;
		}
		
		public function lstIdEstadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdEstadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdEstadoObject->Name = 'Estado';
			$this->lstIdEstadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdEstadoObjectCursor = Estados::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objIdEstadoObject = Estados::InstantiateCursor($objIdEstadoObjectCursor)) {
				$objListItem = new QListItem($objIdEstadoObject->__toString(), $objIdEstadoObject->IdEstado);
				if (($this->objTramitesAsignados->IdEstadoObject) && ($this->objTramitesAsignados->IdEstadoObject->IdEstado == $objIdEstadoObject->IdEstado))
					$objListItem->Selected = true;
				$this->lstIdEstadoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstIdEstadoObject;
		}
		
		public function lstTipoTramiteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTipoTramiteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTipoTramiteObject->Name = 'Tipo Tramite' ;
			$this->lstTipoTramiteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTipoTramiteObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTipoTramiteObjectCursor = TipoTramites::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objTipoTramiteObject = TipoTramites::InstantiateCursor($objTipoTramiteObjectCursor)) {
				$objListItem = new QListItem($objTipoTramiteObject->__toString(), $objTipoTramiteObject->IdTipoTramite);
				if (($this->objTramitesAsignados->TipoTramiteObject) && ($this->objTramitesAsignados->TipoTramiteObject->IdTipoTramite == $objTipoTramiteObject->IdTipoTramite))
					$objListItem->Selected = true;
				$this->lstTipoTramiteObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstTipoTramiteObject;
		}
		
		
		public function SaveTramitesAsignados() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdAgenteObject) $this->objTramitesAsignados->IdAgente = $this->lstIdAgenteObject->SelectedValue;
				if ($this->lstNroAbogadoObject) $this->objTramitesAsignados->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->lstIdEstadoObject) $this->objTramitesAsignados->IdEstado = $this->lstIdEstadoObject->SelectedValue;
				if ($this->calFechaIngreso) $this->objTramitesAsignados->FechaIngreso = $this->calFechaIngreso->DateTime;
				if ($this->calFechaSalida) $this->objTramitesAsignados->FechaSalida = $this->calFechaSalida->DateTime;
				if ($this->lstTipoTramiteObject) $this->objTramitesAsignados->TipoTramite = $this->lstTipoTramiteObject->SelectedValue;
				if ($this->txtAutos) $this->objTramitesAsignados->Autos = $this->txtAutos->Text;
				if ($this->calFechaVencimiento) $this->objTramitesAsignados->FechaVencimiento = $this->calFechaVencimiento->DateTime;
				if ($this->txtObservaciones) $this->objTramitesAsignados->Observaciones = $this->txtObservaciones->Text;
		
				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				$this->crearMovimientos();
				// Save the TramitesAsignados object
				$this->objTramitesAsignados->Save();
		
				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		public function crearMovimientos (){
			$objMovimiento = new Movimiento();
			$objMovimiento->Fecha = $this->objTramitesAsignados->FechaIngreso;
			$objMovimiento->TipoMovimiento= 1;
			$objMovimiento->Monto = $this->objTramitesAsignados->TipoTramiteObject->Timbrado;
			$objMovimiento->Observaciones = 'Trámite '.$this->objTramitesAsignados->TipoTramiteObject->Nombre;
			$objMovimiento->Save();
			
			$objMovimiento2 = new Movimiento();
			$objMovimiento2->Fecha = $this->objTramitesAsignados->FechaIngreso;
			$objMovimiento2->TipoMovimiento= 2;
			$objMovimiento2->Monto = $this->objTramitesAsignados->TipoTramiteObject->Honorario;
			$objMovimiento2->Observaciones = 'Trámite '.$this->objTramitesAsignados->TipoTramiteObject->Nombre;
			$objMovimiento2->Save();
		}
		
	}
?>