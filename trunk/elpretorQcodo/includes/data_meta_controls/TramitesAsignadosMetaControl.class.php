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
	}
?>