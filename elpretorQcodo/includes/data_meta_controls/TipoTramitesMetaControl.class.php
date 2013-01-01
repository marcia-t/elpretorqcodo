<?php
	require(__DATAGEN_META_CONTROLS__ . '/TipoTramitesMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * TipoTramites class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single TipoTramites object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TipoTramitesMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class TipoTramitesMetaControl extends TipoTramitesMetaControlGen {
		
		
		
		/**
		 * Create and setup QListBox lstIdModalidadObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdModalidadObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdModalidadObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdModalidadObject->Name ='Modalidad';
			$this->lstIdModalidadObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdModalidadObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdModalidadObjectCursor = Modalidades::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objIdModalidadObject = Modalidades::InstantiateCursor($objIdModalidadObjectCursor)) {
				$objListItem = new QListItem($objIdModalidadObject->__toString(), $objIdModalidadObject->IdModalidad);
				if (($this->objTipoTramites->IdModalidadObject) && ($this->objTipoTramites->IdModalidadObject->IdModalidad == $objIdModalidadObject->IdModalidad))
					$objListItem->Selected = true;
				$this->lstIdModalidadObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstIdModalidadObject;
		}
		
		
		/**
		 * Create and setup QListBox lstIdZonaObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdZonaObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdZonaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdZonaObject->Name = 'Zona';
			$this->lstIdZonaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdZonaObject->AddItem(QApplication::Translate('- Select One -'), null);
		
			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdZonaObjectCursor = Zonas::QueryCursor($objCondition, $objOptionalClauses);
		
			// Iterate through the Cursor
			while ($objIdZonaObject = Zonas::InstantiateCursor($objIdZonaObjectCursor)) {
				$objListItem = new QListItem($objIdZonaObject->__toString(), $objIdZonaObject->IdZona);
				if (($this->objTipoTramites->IdZonaObject) && ($this->objTipoTramites->IdZonaObject->IdZona == $objIdZonaObject->IdZona))
					$objListItem->Selected = true;
				$this->lstIdZonaObject->AddItem($objListItem);
			}
		
			// Return the QListBox
			return $this->lstIdZonaObject;
		}
		
	}
?>