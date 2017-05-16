<?php
	require(__DATAGEN_META_CONTROLS__ . '/MovimientoMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Movimiento class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Movimiento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MovimientoMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class MovimientoMetaControl extends MovimientoMetaControlGen {
		
		
		/**
		 * Create and setup QListBox lstTipoMovimientoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTipoMovimientoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTipoMovimientoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTipoMovimientoObject->Name = 'Tipo de movimiento';
			$this->lstTipoMovimientoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTipoMovimientoObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTipoMovimientoObjectCursor = TipoMovimiento::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objTipoMovimientoObject = TipoMovimiento::InstantiateCursor($objTipoMovimientoObjectCursor)) {
				$objListItem = new QListItem($objTipoMovimientoObject->__toString(), $objTipoMovimientoObject->IdTipoMovimiento);
				if (($this->objMovimiento->TipoMovimientoObject) && ($this->objMovimiento->TipoMovimientoObject->IdTipoMovimiento == $objTipoMovimientoObject->IdTipoMovimiento))
					$objListItem->Selected = true;
				$this->lstTipoMovimientoObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstTipoMovimientoObject;
		}
	}
?>