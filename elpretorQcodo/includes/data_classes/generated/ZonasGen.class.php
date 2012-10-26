<?php
	/**
	 * The abstract ZonasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Zonas subclass which
	 * extends this ZonasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Zonas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdZona the value for intIdZona (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property TipoTramites $_TipoTramitesAsIdZona the value for the private _objTipoTramitesAsIdZona (Read-Only) if set due to an expansion on the tipo_tramites.id_zona reverse relationship
	 * @property TipoTramites[] $_TipoTramitesAsIdZonaArray the value for the private _objTipoTramitesAsIdZonaArray (Read-Only) if set due to an ExpandAsArray on the tipo_tramites.id_zona reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ZonasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column zonas.id_zona
		 * @var integer intIdZona
		 */
		protected $intIdZona;
		const IdZonaDefault = null;


		/**
		 * Protected member variable that maps to the database column zonas.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single TipoTramitesAsIdZona object
		 * (of type TipoTramites), if this Zonas object was restored with
		 * an expansion on the tipo_tramites association table.
		 * @var TipoTramites _objTipoTramitesAsIdZona;
		 */
		private $_objTipoTramitesAsIdZona;

		/**
		 * Private member variable that stores a reference to an array of TipoTramitesAsIdZona objects
		 * (of type TipoTramites[]), if this Zonas object was restored with
		 * an ExpandAsArray on the tipo_tramites association table.
		 * @var TipoTramites[] _objTipoTramitesAsIdZonaArray;
		 */
		private $_objTipoTramitesAsIdZonaArray = array();

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
		 * Load a Zonas from PK Info
		 * @param integer $intIdZona
		 * @return Zonas
		 */
		public static function Load($intIdZona) {
			// Use QuerySingle to Perform the Query
			return Zonas::QuerySingle(
				QQ::Equal(QQN::Zonas()->IdZona, $intIdZona)
			);
		}

		/**
		 * Load all Zonases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Zonas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Zonas::QueryArray to perform the LoadAll query
			try {
				return Zonas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Zonases
		 * @return int
		 */
		public static function CountAll() {
			// Call Zonas::QueryCount to perform the CountAll query
			return Zonas::QueryCount(QQ::All());
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
			$objDatabase = Zonas::GetDatabase();

			// Create/Build out the QueryBuilder object with Zonas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'zonas');
			Zonas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('zonas');

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
		 * Static Qcodo Query method to query for a single Zonas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Zonas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Zonas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Zonas object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Zonas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Zonas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Zonas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Zonas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Zonas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Zonas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Zonas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Zonas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Zonas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Zonas::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'zonas_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Zonas-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Zonas::GetSelectFields($objQueryBuilder);
				Zonas::GetFromFields($objQueryBuilder);

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
			return Zonas::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Zonas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'zonas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_zona', $strAliasPrefix . 'id_zona');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Zonas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Zonas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Zonas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_zona';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdZona == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'zonas__';


				$strAlias = $strAliasPrefix . 'tipotramitesasidzona__id_tipo_tramite';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTipoTramitesAsIdZonaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTipoTramitesAsIdZonaArray[$intPreviousChildItemCount - 1];
						$objChildItem = TipoTramites::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tipotramitesasidzona__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTipoTramitesAsIdZonaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTipoTramitesAsIdZonaArray[] = TipoTramites::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tipotramitesasidzona__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'zonas__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Zonas object
			$objToReturn = new Zonas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_zona', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_zona'] : $strAliasPrefix . 'id_zona';
			$objToReturn->intIdZona = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'zonas__';




			// Check for TipoTramitesAsIdZona Virtual Binding
			$strAlias = $strAliasPrefix . 'tipotramitesasidzona__id_tipo_tramite';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTipoTramitesAsIdZonaArray[] = TipoTramites::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tipotramitesasidzona__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTipoTramitesAsIdZona = TipoTramites::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tipotramitesasidzona__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Zonases from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Zonas[]
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
					$objItem = Zonas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Zonas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Zonas object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Zonas next row resulting from the query
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
			return Zonas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Zonas object,
		 * by IdZona Index(es)
		 * @param integer $intIdZona
		 * @return Zonas
		*/
		public static function LoadByIdZona($intIdZona, $objOptionalClauses = null) {
			return Zonas::QuerySingle(
				QQ::Equal(QQN::Zonas()->IdZona, $intIdZona)
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
		 * Save this Zonas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `zonas` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdZona = $objDatabase->InsertId('zonas', 'id_zona');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`zonas`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
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
		 * Delete this Zonas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Zonas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`zonas`
				WHERE
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Zonases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`zonas`');
		}

		/**
		 * Truncate zonas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `zonas`');
		}

		/**
		 * Reload this Zonas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Zonas object.');

			// Reload the Object
			$objReloaded = Zonas::Load($this->intIdZona);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Zonas::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `zonas` (
					`id_zona`,
					`nombre`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdZona) . ',
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
		 * @param integer intIdZona
		 * @return Zonas[]
		 */
		public static function GetJournalForId($intIdZona) {
			$objDatabase = Zonas::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM zonas WHERE id_zona = ' .
				$objDatabase->SqlVariable($intIdZona) . ' ORDER BY __sys_date');

			return Zonas::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Zonas[]
		 */
		public function GetJournal() {
			return Zonas::GetJournalForId($this->intIdZona);
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
				case 'IdZona':
					// Gets the value for intIdZona (Read-Only PK)
					// @return integer
					return $this->intIdZona;

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

				case '_TipoTramitesAsIdZona':
					// Gets the value for the private _objTipoTramitesAsIdZona (Read-Only)
					// if set due to an expansion on the tipo_tramites.id_zona reverse relationship
					// @return TipoTramites
					return $this->_objTipoTramitesAsIdZona;

				case '_TipoTramitesAsIdZonaArray':
					// Gets the value for the private _objTipoTramitesAsIdZonaArray (Read-Only)
					// if set due to an ExpandAsArray on the tipo_tramites.id_zona reverse relationship
					// @return TipoTramites[]
					return (array) $this->_objTipoTramitesAsIdZonaArray;


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

			
		
		// Related Objects' Methods for TipoTramitesAsIdZona
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TipoTramitesesAsIdZona as an array of TipoTramites objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoTramites[]
		*/ 
		public function GetTipoTramitesAsIdZonaArray($objOptionalClauses = null) {
			if ((is_null($this->intIdZona)))
				return array();

			try {
				return TipoTramites::LoadArrayByIdZona($this->intIdZona, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TipoTramitesesAsIdZona
		 * @return int
		*/ 
		public function CountTipoTramitesesAsIdZona() {
			if ((is_null($this->intIdZona)))
				return 0;

			return TipoTramites::CountByIdZona($this->intIdZona);
		}

		/**
		 * Associates a TipoTramitesAsIdZona
		 * @param TipoTramites $objTipoTramites
		 * @return void
		*/ 
		public function AssociateTipoTramitesAsIdZona(TipoTramites $objTipoTramites) {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTipoTramitesAsIdZona on this unsaved Zonas.');
			if ((is_null($objTipoTramites->IdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTipoTramitesAsIdZona on this Zonas with an unsaved TipoTramites.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tipo_tramites`
				SET
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
				WHERE
					`id_tipo_tramite` = ' . $objDatabase->SqlVariable($objTipoTramites->IdTipoTramite) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTipoTramites->IdZona = $this->intIdZona;
				$objTipoTramites->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TipoTramitesAsIdZona
		 * @param TipoTramites $objTipoTramites
		 * @return void
		*/ 
		public function UnassociateTipoTramitesAsIdZona(TipoTramites $objTipoTramites) {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this unsaved Zonas.');
			if ((is_null($objTipoTramites->IdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this Zonas with an unsaved TipoTramites.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tipo_tramites`
				SET
					`id_zona` = null
				WHERE
					`id_tipo_tramite` = ' . $objDatabase->SqlVariable($objTipoTramites->IdTipoTramite) . ' AND
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTipoTramites->IdZona = null;
				$objTipoTramites->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TipoTramitesesAsIdZona
		 * @return void
		*/ 
		public function UnassociateAllTipoTramitesesAsIdZona() {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this unsaved Zonas.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TipoTramites::LoadArrayByIdZona($this->intIdZona) as $objTipoTramites) {
					$objTipoTramites->IdZona = null;
					$objTipoTramites->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tipo_tramites`
				SET
					`id_zona` = null
				WHERE
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
			');
		}

		/**
		 * Deletes an associated TipoTramitesAsIdZona
		 * @param TipoTramites $objTipoTramites
		 * @return void
		*/ 
		public function DeleteAssociatedTipoTramitesAsIdZona(TipoTramites $objTipoTramites) {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this unsaved Zonas.');
			if ((is_null($objTipoTramites->IdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this Zonas with an unsaved TipoTramites.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_tramites`
				WHERE
					`id_tipo_tramite` = ' . $objDatabase->SqlVariable($objTipoTramites->IdTipoTramite) . ' AND
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTipoTramites->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TipoTramitesesAsIdZona
		 * @return void
		*/ 
		public function DeleteAllTipoTramitesesAsIdZona() {
			if ((is_null($this->intIdZona)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTipoTramitesAsIdZona on this unsaved Zonas.');

			// Get the Database Object for this Class
			$objDatabase = Zonas::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TipoTramites::LoadArrayByIdZona($this->intIdZona) as $objTipoTramites) {
					$objTipoTramites->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_tramites`
				WHERE
					`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Zonas"><sequence>';
			$strToReturn .= '<element name="IdZona" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Zonas', $strComplexTypeArray)) {
				$strComplexTypeArray['Zonas'] = Zonas::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Zonas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Zonas();
			if (property_exists($objSoapObject, 'IdZona'))
				$objToReturn->intIdZona = $objSoapObject->IdZona;
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
				array_push($objArrayToReturn, Zonas::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdZona
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeTipoTramites $TipoTramitesAsIdZona
	 */
	class QQNodeZonas extends QQNode {
		protected $strTableName = 'zonas';
		protected $strPrimaryKey = 'id_zona';
		protected $strClassName = 'Zonas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdZona':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'TipoTramitesAsIdZona':
					return new QQReverseReferenceNodeTipoTramites($this, 'tipotramitesasidzona', 'reverse_reference', 'id_zona');

				case '_PrimaryKeyNode':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
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
	 * @property-read QQNode $IdZona
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeTipoTramites $TipoTramitesAsIdZona
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeZonas extends QQReverseReferenceNode {
		protected $strTableName = 'zonas';
		protected $strPrimaryKey = 'id_zona';
		protected $strClassName = 'Zonas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdZona':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'TipoTramitesAsIdZona':
					return new QQReverseReferenceNodeTipoTramites($this, 'tipotramitesasidzona', 'reverse_reference', 'id_zona');

				case '_PrimaryKeyNode':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
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