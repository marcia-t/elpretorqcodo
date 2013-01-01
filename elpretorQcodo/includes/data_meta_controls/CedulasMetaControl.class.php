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
	}
	
	
?>