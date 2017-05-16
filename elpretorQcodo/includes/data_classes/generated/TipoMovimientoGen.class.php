<?php
	/**
	 * The abstract TipoMovimientoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TipoMovimiento subclass which
	 * extends this TipoMovimientoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TipoMovimiento class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdTipoMovimiento the value for intIdTipoMovimiento (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property Movimiento $_Movimiento the value for the private _objMovimiento (Read-Only) if set due to an expansion on the movimiento.tipo_movimiento reverse relationship
	 * @property Movimiento[] $_MovimientoArray the value for the private _objMovimientoArray (Read-Only) if set due to an ExpandAsArray on the movimiento.tipo_movimiento reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TipoMovimientoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column tipo_movimiento.id_tipo_movimiento
		 * @var integer intIdTipoMovimiento
		 */
		protected $intIdTipoMovimiento;
		const IdTipoMovimientoDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_movimiento.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single Movimiento object
		 * (of type Movimiento), if this TipoMovimiento object was restored with
		 * an expansion on the movimiento association table.
		 * @var Movimiento _objMovimiento;
		 */
		private $_objMovimiento;

		/**
		 * Private member variable that stores a reference to an array of Movimiento objects
		 * (of type Movimiento[]), if this TipoMovimiento object was restored with
		 * an ExpandAsArray on the movimiento association table.
		 * @var Movimiento[] _objMovimientoArray;
		 */
		private $_objMovimientoArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a TipoMovimiento from PK Info
		 * @param integer $intIdTipoMovimiento
		 * @return TipoMovimiento
		 */
		public static function Load($intIdTipoMovimiento) {
			// Use QuerySingle to Perform the Query
			return TipoMovimiento::QuerySingle(
				QQ::Equal(QQN::TipoMovimiento()->IdTipoMovimiento, $intIdTipoMovimiento)
			);
		}

		/**
		 * Load all TipoMovimientos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoMovimiento[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call TipoMovimiento::QueryArray to perform the LoadAll query
			try {
				return TipoMovimiento::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TipoMovimientos
		 * @return int
		 */
		public static function CountAll() {
			// Call TipoMovimiento::QueryCount to perform the CountAll query
			return TipoMovimiento::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Create/Build out the QueryBuilder object with TipoMovimiento-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'tipo_movimiento');
			TipoMovimiento::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('tipo_movimiento');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single TipoMovimiento object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoMovimiento the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoMovimiento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new TipoMovimiento object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TipoMovimiento::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return TipoMovimiento::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of TipoMovimiento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoMovimiento[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoMovimiento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TipoMovimiento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = TipoMovimiento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of TipoMovimiento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoMovimiento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'tipo_movimiento_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with TipoMovimiento-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				TipoMovimiento::GetSelectFields($objQueryBuilder);
				TipoMovimiento::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return TipoMovimiento::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TipoMovimiento
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'tipo_movimiento';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_tipo_movimiento', $strAliasPrefix . 'id_tipo_movimiento');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TipoMovimiento from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TipoMovimiento::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TipoMovimiento
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_tipo_movimiento';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdTipoMovimiento == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'tipo_movimiento__';


				$strAlias = $strAliasPrefix . 'movimiento__id_movimiento';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objMovimientoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objMovimientoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Movimiento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'movimiento__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objMovimientoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objMovimientoArray[] = Movimiento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'movimiento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'tipo_movimiento__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the TipoMovimiento object
			$objToReturn = new TipoMovimiento();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_tipo_movimiento', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tipo_movimiento'] : $strAliasPrefix . 'id_tipo_movimiento';
			$objToReturn->intIdTipoMovimiento = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'tipo_movimiento__';




			// Check for Movimiento Virtual Binding
			$strAlias = $strAliasPrefix . 'movimiento__id_movimiento';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMovimientoArray[] = Movimiento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'movimiento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMovimiento = Movimiento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'movimiento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of TipoMovimientos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TipoMovimiento[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TipoMovimiento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TipoMovimiento::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single TipoMovimiento object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TipoMovimiento next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return TipoMovimiento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single TipoMovimiento object,
		 * by IdTipoMovimiento Index(es)
		 * @param integer $intIdTipoMovimiento
		 * @return TipoMovimiento
		*/
		public static function LoadByIdTipoMovimiento($intIdTipoMovimiento, $objOptionalClauses = null) {
			return TipoMovimiento::QuerySingle(
				QQ::Equal(QQN::TipoMovimiento()->IdTipoMovimiento, $intIdTipoMovimiento)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this TipoMovimiento
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `tipo_movimiento` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdTipoMovimiento = $objDatabase->InsertId('tipo_movimiento', 'id_tipo_movimiento');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`tipo_movimiento`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`id_tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this TipoMovimiento
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TipoMovimiento with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_movimiento`
				WHERE
					`id_tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all TipoMovimientos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_movimiento`');
		}

		/**
		 * Truncate tipo_movimiento table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `tipo_movimiento`');
		}

		/**
		 * Reload this TipoMovimiento from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TipoMovimiento object.');

			// Reload the Object
			$objReloaded = TipoMovimiento::Load($this->intIdTipoMovimiento);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = TipoMovimiento::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `tipo_movimiento` (
					`id_tipo_movimiento`,
					`nombre`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . ',
					' . $objDatabase->SqlVariable($this->strNombre) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdTipoMovimiento
		 * @return TipoMovimiento[]
		 */
		public static function GetJournalForId($intIdTipoMovimiento) {
			$objDatabase = TipoMovimiento::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM tipo_movimiento WHERE id_tipo_movimiento = ' .
				$objDatabase->SqlVariable($intIdTipoMovimiento) . ' ORDER BY __sys_date');

			return TipoMovimiento::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return TipoMovimiento[]
		 */
		public function GetJournal() {
			return TipoMovimiento::GetJournalForId($this->intIdTipoMovimiento);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'IdTipoMovimiento':
					// Gets the value for intIdTipoMovimiento (Read-Only PK)
					// @return integer
					return $this->intIdTipoMovimiento;

				case 'Nombre':
					// Gets the value for strNombre (Not Null)
					// @return string
					return $this->strNombre;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Movimiento':
					// Gets the value for the private _objMovimiento (Read-Only)
					// if set due to an expansion on the movimiento.tipo_movimiento reverse relationship
					// @return Movimiento
					return $this->_objMovimiento;

				case '_MovimientoArray':
					// Gets the value for the private _objMovimientoArray (Read-Only)
					// if set due to an ExpandAsArray on the movimiento.tipo_movimiento reverse relationship
					// @return Movimiento[]
					return (array) $this->_objMovimientoArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nombre':
					// Sets the value for strNombre (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNombre = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for Movimiento
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Movimientos as an array of Movimiento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Movimiento[]
		*/ 
		public function GetMovimientoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdTipoMovimiento)))
				return array();

			try {
				return Movimiento::LoadArrayByTipoMovimiento($this->intIdTipoMovimiento, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Movimientos
		 * @return int
		*/ 
		public function CountMovimientos() {
			if ((is_null($this->intIdTipoMovimiento)))
				return 0;

			return Movimiento::CountByTipoMovimiento($this->intIdTipoMovimiento);
		}

		/**
		 * Associates a Movimiento
		 * @param Movimiento $objMovimiento
		 * @return void
		*/ 
		public function AssociateMovimiento(Movimiento $objMovimiento) {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMovimiento on this unsaved TipoMovimiento.');
			if ((is_null($objMovimiento->IdMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMovimiento on this TipoMovimiento with an unsaved Movimiento.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`movimiento`
				SET
					`tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
				WHERE
					`id_movimiento` = ' . $objDatabase->SqlVariable($objMovimiento->IdMovimiento) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objMovimiento->TipoMovimiento = $this->intIdTipoMovimiento;
				$objMovimiento->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Movimiento
		 * @param Movimiento $objMovimiento
		 * @return void
		*/ 
		public function UnassociateMovimiento(Movimiento $objMovimiento) {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this unsaved TipoMovimiento.');
			if ((is_null($objMovimiento->IdMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this TipoMovimiento with an unsaved Movimiento.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`movimiento`
				SET
					`tipo_movimiento` = null
				WHERE
					`id_movimiento` = ' . $objDatabase->SqlVariable($objMovimiento->IdMovimiento) . ' AND
					`tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objMovimiento->TipoMovimiento = null;
				$objMovimiento->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Movimientos
		 * @return void
		*/ 
		public function UnassociateAllMovimientos() {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this unsaved TipoMovimiento.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Movimiento::LoadArrayByTipoMovimiento($this->intIdTipoMovimiento) as $objMovimiento) {
					$objMovimiento->TipoMovimiento = null;
					$objMovimiento->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`movimiento`
				SET
					`tipo_movimiento` = null
				WHERE
					`tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
			');
		}

		/**
		 * Deletes an associated Movimiento
		 * @param Movimiento $objMovimiento
		 * @return void
		*/ 
		public function DeleteAssociatedMovimiento(Movimiento $objMovimiento) {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this unsaved TipoMovimiento.');
			if ((is_null($objMovimiento->IdMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this TipoMovimiento with an unsaved Movimiento.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`movimiento`
				WHERE
					`id_movimiento` = ' . $objDatabase->SqlVariable($objMovimiento->IdMovimiento) . ' AND
					`tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objMovimiento->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Movimientos
		 * @return void
		*/ 
		public function DeleteAllMovimientos() {
			if ((is_null($this->intIdTipoMovimiento)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMovimiento on this unsaved TipoMovimiento.');

			// Get the Database Object for this Class
			$objDatabase = TipoMovimiento::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Movimiento::LoadArrayByTipoMovimiento($this->intIdTipoMovimiento) as $objMovimiento) {
					$objMovimiento->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`movimiento`
				WHERE
					`tipo_movimiento` = ' . $objDatabase->SqlVariable($this->intIdTipoMovimiento) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="TipoMovimiento"><sequence>';
			$strToReturn .= '<element name="IdTipoMovimiento" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TipoMovimiento', $strComplexTypeArray)) {
				$strComplexTypeArray['TipoMovimiento'] = TipoMovimiento::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TipoMovimiento::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TipoMovimiento();
			if (property_exists($objSoapObject, 'IdTipoMovimiento'))
				$objToReturn->intIdTipoMovimiento = $objSoapObject->IdTipoMovimiento;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TipoMovimiento::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $IdTipoMovimiento
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeMovimiento $Movimiento
	 */
	class QQNodeTipoMovimiento extends QQNode {
		protected $strTableName = 'tipo_movimiento';
		protected $strPrimaryKey = 'id_tipo_movimiento';
		protected $strClassName = 'TipoMovimiento';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTipoMovimiento':
					return new QQNode('id_tipo_movimiento', 'IdTipoMovimiento', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Movimiento':
					return new QQReverseReferenceNodeMovimiento($this, 'movimiento', 'reverse_reference', 'tipo_movimiento');

				case '_PrimaryKeyNode':
					return new QQNode('id_tipo_movimiento', 'IdTipoMovimiento', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $IdTipoMovimiento
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeMovimiento $Movimiento
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeTipoMovimiento extends QQReverseReferenceNode {
		protected $strTableName = 'tipo_movimiento';
		protected $strPrimaryKey = 'id_tipo_movimiento';
		protected $strClassName = 'TipoMovimiento';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTipoMovimiento':
					return new QQNode('id_tipo_movimiento', 'IdTipoMovimiento', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Movimiento':
					return new QQReverseReferenceNodeMovimiento($this, 'movimiento', 'reverse_reference', 'tipo_movimiento');

				case '_PrimaryKeyNode':
					return new QQNode('id_tipo_movimiento', 'IdTipoMovimiento', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>