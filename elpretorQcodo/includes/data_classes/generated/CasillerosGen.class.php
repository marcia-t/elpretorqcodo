<?php
	/**
	 * The abstract CasillerosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Casilleros subclass which
	 * extends this CasillerosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Casilleros class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdCasillero the value for intIdCasillero (Read-Only PK)
	 * @property string $NroCasillero the value for strNroCasillero (Not Null)
	 * @property string $Titular the value for strTitular (Not Null)
	 * @property string $Observacion the value for strObservacion 
	 * @property integer $Activo the value for intActivo (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CasillerosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column casilleros.id_casillero
		 * @var integer intIdCasillero
		 */
		protected $intIdCasillero;
		const IdCasilleroDefault = null;


		/**
		 * Protected member variable that maps to the database column casilleros.nro_casillero
		 * @var string strNroCasillero
		 */
		protected $strNroCasillero;
		const NroCasilleroMaxLength = 45;
		const NroCasilleroDefault = null;


		/**
		 * Protected member variable that maps to the database column casilleros.titular
		 * @var string strTitular
		 */
		protected $strTitular;
		const TitularMaxLength = 45;
		const TitularDefault = null;


		/**
		 * Protected member variable that maps to the database column casilleros.observacion
		 * @var string strObservacion
		 */
		protected $strObservacion;
		const ObservacionMaxLength = 255;
		const ObservacionDefault = null;


		/**
		 * Protected member variable that maps to the database column casilleros.activo
		 * @var integer intActivo
		 */
		protected $intActivo;
		const ActivoDefault = null;


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
		 * Load a Casilleros from PK Info
		 * @param integer $intIdCasillero
		 * @return Casilleros
		 */
		public static function Load($intIdCasillero) {
			// Use QuerySingle to Perform the Query
			return Casilleros::QuerySingle(
				QQ::Equal(QQN::Casilleros()->IdCasillero, $intIdCasillero)
			);
		}

		/**
		 * Load all Casilleroses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Casilleros[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Casilleros::QueryArray to perform the LoadAll query
			try {
				return Casilleros::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Casilleroses
		 * @return int
		 */
		public static function CountAll() {
			// Call Casilleros::QueryCount to perform the CountAll query
			return Casilleros::QueryCount(QQ::All());
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
			$objDatabase = Casilleros::GetDatabase();

			// Create/Build out the QueryBuilder object with Casilleros-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'casilleros');
			Casilleros::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('casilleros');

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
		 * Static Qcodo Query method to query for a single Casilleros object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Casilleros the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Casilleros::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Casilleros object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Casilleros::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Casilleros::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Casilleros objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Casilleros[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Casilleros::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Casilleros::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Casilleros::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Casilleros objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Casilleros::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Casilleros::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'casilleros_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Casilleros-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Casilleros::GetSelectFields($objQueryBuilder);
				Casilleros::GetFromFields($objQueryBuilder);

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
			return Casilleros::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Casilleros
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'casilleros';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_casillero', $strAliasPrefix . 'id_casillero');
			$objBuilder->AddSelectItem($strTableName, 'nro_casillero', $strAliasPrefix . 'nro_casillero');
			$objBuilder->AddSelectItem($strTableName, 'titular', $strAliasPrefix . 'titular');
			$objBuilder->AddSelectItem($strTableName, 'observacion', $strAliasPrefix . 'observacion');
			$objBuilder->AddSelectItem($strTableName, 'activo', $strAliasPrefix . 'activo');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Casilleros from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Casilleros::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Casilleros
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the Casilleros object
			$objToReturn = new Casilleros();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_casillero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_casillero'] : $strAliasPrefix . 'id_casillero';
			$objToReturn->intIdCasillero = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nro_casillero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nro_casillero'] : $strAliasPrefix . 'nro_casillero';
			$objToReturn->strNroCasillero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'titular', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'titular'] : $strAliasPrefix . 'titular';
			$objToReturn->strTitular = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'observacion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observacion'] : $strAliasPrefix . 'observacion';
			$objToReturn->strObservacion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'activo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'activo'] : $strAliasPrefix . 'activo';
			$objToReturn->intActivo = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'casilleros__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Casilleroses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Casilleros[]
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
					$objItem = Casilleros::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Casilleros::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Casilleros object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Casilleros next row resulting from the query
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
			return Casilleros::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Casilleros object,
		 * by IdCasillero Index(es)
		 * @param integer $intIdCasillero
		 * @return Casilleros
		*/
		public static function LoadByIdCasillero($intIdCasillero, $objOptionalClauses = null) {
			return Casilleros::QuerySingle(
				QQ::Equal(QQN::Casilleros()->IdCasillero, $intIdCasillero)
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
		 * Save this Casilleros
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Casilleros::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `casilleros` (
							`nro_casillero`,
							`titular`,
							`observacion`,
							`activo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNroCasillero) . ',
							' . $objDatabase->SqlVariable($this->strTitular) . ',
							' . $objDatabase->SqlVariable($this->strObservacion) . ',
							' . $objDatabase->SqlVariable($this->intActivo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdCasillero = $objDatabase->InsertId('casilleros', 'id_casillero');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`casilleros`
						SET
							`nro_casillero` = ' . $objDatabase->SqlVariable($this->strNroCasillero) . ',
							`titular` = ' . $objDatabase->SqlVariable($this->strTitular) . ',
							`observacion` = ' . $objDatabase->SqlVariable($this->strObservacion) . ',
							`activo` = ' . $objDatabase->SqlVariable($this->intActivo) . '
						WHERE
							`id_casillero` = ' . $objDatabase->SqlVariable($this->intIdCasillero) . '
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
		 * Delete this Casilleros
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdCasillero)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Casilleros with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Casilleros::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`casilleros`
				WHERE
					`id_casillero` = ' . $objDatabase->SqlVariable($this->intIdCasillero) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Casilleroses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Casilleros::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`casilleros`');
		}

		/**
		 * Truncate casilleros table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Casilleros::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `casilleros`');
		}

		/**
		 * Reload this Casilleros from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Casilleros object.');

			// Reload the Object
			$objReloaded = Casilleros::Load($this->intIdCasillero);

			// Update $this's local variables to match
			$this->strNroCasillero = $objReloaded->strNroCasillero;
			$this->strTitular = $objReloaded->strTitular;
			$this->strObservacion = $objReloaded->strObservacion;
			$this->intActivo = $objReloaded->intActivo;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Casilleros::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `casilleros` (
					`id_casillero`,
					`nro_casillero`,
					`titular`,
					`observacion`,
					`activo`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdCasillero) . ',
					' . $objDatabase->SqlVariable($this->strNroCasillero) . ',
					' . $objDatabase->SqlVariable($this->strTitular) . ',
					' . $objDatabase->SqlVariable($this->strObservacion) . ',
					' . $objDatabase->SqlVariable($this->intActivo) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdCasillero
		 * @return Casilleros[]
		 */
		public static function GetJournalForId($intIdCasillero) {
			$objDatabase = Casilleros::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM casilleros WHERE id_casillero = ' .
				$objDatabase->SqlVariable($intIdCasillero) . ' ORDER BY __sys_date');

			return Casilleros::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Casilleros[]
		 */
		public function GetJournal() {
			return Casilleros::GetJournalForId($this->intIdCasillero);
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
				case 'IdCasillero':
					// Gets the value for intIdCasillero (Read-Only PK)
					// @return integer
					return $this->intIdCasillero;

				case 'NroCasillero':
					// Gets the value for strNroCasillero (Not Null)
					// @return string
					return $this->strNroCasillero;

				case 'Titular':
					// Gets the value for strTitular (Not Null)
					// @return string
					return $this->strTitular;

				case 'Observacion':
					// Gets the value for strObservacion 
					// @return string
					return $this->strObservacion;

				case 'Activo':
					// Gets the value for intActivo (Not Null)
					// @return integer
					return $this->intActivo;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'NroCasillero':
					// Sets the value for strNroCasillero (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNroCasillero = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Titular':
					// Sets the value for strTitular (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strTitular = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Observacion':
					// Sets the value for strObservacion 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strObservacion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Activo':
					// Sets the value for intActivo (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intActivo = QType::Cast($mixValue, QType::Integer));
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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Casilleros"><sequence>';
			$strToReturn .= '<element name="IdCasillero" type="xsd:int"/>';
			$strToReturn .= '<element name="NroCasillero" type="xsd:string"/>';
			$strToReturn .= '<element name="Titular" type="xsd:string"/>';
			$strToReturn .= '<element name="Observacion" type="xsd:string"/>';
			$strToReturn .= '<element name="Activo" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Casilleros', $strComplexTypeArray)) {
				$strComplexTypeArray['Casilleros'] = Casilleros::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Casilleros::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Casilleros();
			if (property_exists($objSoapObject, 'IdCasillero'))
				$objToReturn->intIdCasillero = $objSoapObject->IdCasillero;
			if (property_exists($objSoapObject, 'NroCasillero'))
				$objToReturn->strNroCasillero = $objSoapObject->NroCasillero;
			if (property_exists($objSoapObject, 'Titular'))
				$objToReturn->strTitular = $objSoapObject->Titular;
			if (property_exists($objSoapObject, 'Observacion'))
				$objToReturn->strObservacion = $objSoapObject->Observacion;
			if (property_exists($objSoapObject, 'Activo'))
				$objToReturn->intActivo = $objSoapObject->Activo;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Casilleros::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdCasillero
	 * @property-read QQNode $NroCasillero
	 * @property-read QQNode $Titular
	 * @property-read QQNode $Observacion
	 * @property-read QQNode $Activo
	 */
	class QQNodeCasilleros extends QQNode {
		protected $strTableName = 'casilleros';
		protected $strPrimaryKey = 'id_casillero';
		protected $strClassName = 'Casilleros';
		public function __get($strName) {
			switch ($strName) {
				case 'IdCasillero':
					return new QQNode('id_casillero', 'IdCasillero', 'integer', $this);
				case 'NroCasillero':
					return new QQNode('nro_casillero', 'NroCasillero', 'string', $this);
				case 'Titular':
					return new QQNode('titular', 'Titular', 'string', $this);
				case 'Observacion':
					return new QQNode('observacion', 'Observacion', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_casillero', 'IdCasillero', 'integer', $this);
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
	 * @property-read QQNode $IdCasillero
	 * @property-read QQNode $NroCasillero
	 * @property-read QQNode $Titular
	 * @property-read QQNode $Observacion
	 * @property-read QQNode $Activo
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCasilleros extends QQReverseReferenceNode {
		protected $strTableName = 'casilleros';
		protected $strPrimaryKey = 'id_casillero';
		protected $strClassName = 'Casilleros';
		public function __get($strName) {
			switch ($strName) {
				case 'IdCasillero':
					return new QQNode('id_casillero', 'IdCasillero', 'integer', $this);
				case 'NroCasillero':
					return new QQNode('nro_casillero', 'NroCasillero', 'string', $this);
				case 'Titular':
					return new QQNode('titular', 'Titular', 'string', $this);
				case 'Observacion':
					return new QQNode('observacion', 'Observacion', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_casillero', 'IdCasillero', 'integer', $this);
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