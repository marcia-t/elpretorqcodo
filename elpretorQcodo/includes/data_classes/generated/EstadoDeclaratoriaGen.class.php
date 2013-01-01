<?php
	/**
	 * The abstract EstadoDeclaratoriaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the EstadoDeclaratoria subclass which
	 * extends this EstadoDeclaratoriaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the EstadoDeclaratoria class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdEstadoDeclaratoria the value for intIdEstadoDeclaratoria (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property Declaratorias $_DeclaratoriasAsEstado the value for the private _objDeclaratoriasAsEstado (Read-Only) if set due to an expansion on the declaratorias.estado reverse relationship
	 * @property Declaratorias[] $_DeclaratoriasAsEstadoArray the value for the private _objDeclaratoriasAsEstadoArray (Read-Only) if set due to an ExpandAsArray on the declaratorias.estado reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EstadoDeclaratoriaGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column estado_declaratoria.id_estado_declaratoria
		 * @var integer intIdEstadoDeclaratoria
		 */
		protected $intIdEstadoDeclaratoria;
		const IdEstadoDeclaratoriaDefault = null;


		/**
		 * Protected member variable that maps to the database column estado_declaratoria.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single DeclaratoriasAsEstado object
		 * (of type Declaratorias), if this EstadoDeclaratoria object was restored with
		 * an expansion on the declaratorias association table.
		 * @var Declaratorias _objDeclaratoriasAsEstado;
		 */
		private $_objDeclaratoriasAsEstado;

		/**
		 * Private member variable that stores a reference to an array of DeclaratoriasAsEstado objects
		 * (of type Declaratorias[]), if this EstadoDeclaratoria object was restored with
		 * an ExpandAsArray on the declaratorias association table.
		 * @var Declaratorias[] _objDeclaratoriasAsEstadoArray;
		 */
		private $_objDeclaratoriasAsEstadoArray = array();

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
		 * Load a EstadoDeclaratoria from PK Info
		 * @param integer $intIdEstadoDeclaratoria
		 * @return EstadoDeclaratoria
		 */
		public static function Load($intIdEstadoDeclaratoria) {
			// Use QuerySingle to Perform the Query
			return EstadoDeclaratoria::QuerySingle(
				QQ::Equal(QQN::EstadoDeclaratoria()->IdEstadoDeclaratoria, $intIdEstadoDeclaratoria)
			);
		}

		/**
		 * Load all EstadoDeclaratorias
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EstadoDeclaratoria[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call EstadoDeclaratoria::QueryArray to perform the LoadAll query
			try {
				return EstadoDeclaratoria::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all EstadoDeclaratorias
		 * @return int
		 */
		public static function CountAll() {
			// Call EstadoDeclaratoria::QueryCount to perform the CountAll query
			return EstadoDeclaratoria::QueryCount(QQ::All());
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
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Create/Build out the QueryBuilder object with EstadoDeclaratoria-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'estado_declaratoria');
			EstadoDeclaratoria::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('estado_declaratoria');

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
		 * Static Qcodo Query method to query for a single EstadoDeclaratoria object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return EstadoDeclaratoria the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EstadoDeclaratoria::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new EstadoDeclaratoria object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = EstadoDeclaratoria::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return EstadoDeclaratoria::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of EstadoDeclaratoria objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return EstadoDeclaratoria[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EstadoDeclaratoria::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return EstadoDeclaratoria::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = EstadoDeclaratoria::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of EstadoDeclaratoria objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EstadoDeclaratoria::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'estado_declaratoria_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with EstadoDeclaratoria-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				EstadoDeclaratoria::GetSelectFields($objQueryBuilder);
				EstadoDeclaratoria::GetFromFields($objQueryBuilder);

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
			return EstadoDeclaratoria::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this EstadoDeclaratoria
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'estado_declaratoria';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_estado_declaratoria', $strAliasPrefix . 'id_estado_declaratoria');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a EstadoDeclaratoria from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this EstadoDeclaratoria::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return EstadoDeclaratoria
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_estado_declaratoria';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdEstadoDeclaratoria == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'estado_declaratoria__';


				$strAlias = $strAliasPrefix . 'declaratoriasasestado__id_declaratoria';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objDeclaratoriasAsEstadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objDeclaratoriasAsEstadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasestado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objDeclaratoriasAsEstadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objDeclaratoriasAsEstadoArray[] = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'estado_declaratoria__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the EstadoDeclaratoria object
			$objToReturn = new EstadoDeclaratoria();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_estado_declaratoria', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_estado_declaratoria'] : $strAliasPrefix . 'id_estado_declaratoria';
			$objToReturn->intIdEstadoDeclaratoria = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'estado_declaratoria__';




			// Check for DeclaratoriasAsEstado Virtual Binding
			$strAlias = $strAliasPrefix . 'declaratoriasasestado__id_declaratoria';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objDeclaratoriasAsEstadoArray[] = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeclaratoriasAsEstado = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of EstadoDeclaratorias from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return EstadoDeclaratoria[]
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
					$objItem = EstadoDeclaratoria::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = EstadoDeclaratoria::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single EstadoDeclaratoria object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return EstadoDeclaratoria next row resulting from the query
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
			return EstadoDeclaratoria::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single EstadoDeclaratoria object,
		 * by IdEstadoDeclaratoria Index(es)
		 * @param integer $intIdEstadoDeclaratoria
		 * @return EstadoDeclaratoria
		*/
		public static function LoadByIdEstadoDeclaratoria($intIdEstadoDeclaratoria, $objOptionalClauses = null) {
			return EstadoDeclaratoria::QuerySingle(
				QQ::Equal(QQN::EstadoDeclaratoria()->IdEstadoDeclaratoria, $intIdEstadoDeclaratoria)
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
		 * Save this EstadoDeclaratoria
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `estado_declaratoria` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdEstadoDeclaratoria = $objDatabase->InsertId('estado_declaratoria', 'id_estado_declaratoria');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`estado_declaratoria`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`id_estado_declaratoria` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
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
		 * Delete this EstadoDeclaratoria
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this EstadoDeclaratoria with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`estado_declaratoria`
				WHERE
					`id_estado_declaratoria` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all EstadoDeclaratorias
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`estado_declaratoria`');
		}

		/**
		 * Truncate estado_declaratoria table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `estado_declaratoria`');
		}

		/**
		 * Reload this EstadoDeclaratoria from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved EstadoDeclaratoria object.');

			// Reload the Object
			$objReloaded = EstadoDeclaratoria::Load($this->intIdEstadoDeclaratoria);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = EstadoDeclaratoria::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `estado_declaratoria` (
					`id_estado_declaratoria`,
					`nombre`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . ',
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
		 * @param integer intIdEstadoDeclaratoria
		 * @return EstadoDeclaratoria[]
		 */
		public static function GetJournalForId($intIdEstadoDeclaratoria) {
			$objDatabase = EstadoDeclaratoria::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM estado_declaratoria WHERE id_estado_declaratoria = ' .
				$objDatabase->SqlVariable($intIdEstadoDeclaratoria) . ' ORDER BY __sys_date');

			return EstadoDeclaratoria::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return EstadoDeclaratoria[]
		 */
		public function GetJournal() {
			return EstadoDeclaratoria::GetJournalForId($this->intIdEstadoDeclaratoria);
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
				case 'IdEstadoDeclaratoria':
					// Gets the value for intIdEstadoDeclaratoria (Read-Only PK)
					// @return integer
					return $this->intIdEstadoDeclaratoria;

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

				case '_DeclaratoriasAsEstado':
					// Gets the value for the private _objDeclaratoriasAsEstado (Read-Only)
					// if set due to an expansion on the declaratorias.estado reverse relationship
					// @return Declaratorias
					return $this->_objDeclaratoriasAsEstado;

				case '_DeclaratoriasAsEstadoArray':
					// Gets the value for the private _objDeclaratoriasAsEstadoArray (Read-Only)
					// if set due to an ExpandAsArray on the declaratorias.estado reverse relationship
					// @return Declaratorias[]
					return (array) $this->_objDeclaratoriasAsEstadoArray;


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

			
		
		// Related Objects' Methods for DeclaratoriasAsEstado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeclaratoriasesAsEstado as an array of Declaratorias objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Declaratorias[]
		*/ 
		public function GetDeclaratoriasAsEstadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				return array();

			try {
				return Declaratorias::LoadArrayByEstado($this->intIdEstadoDeclaratoria, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeclaratoriasesAsEstado
		 * @return int
		*/ 
		public function CountDeclaratoriasesAsEstado() {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				return 0;

			return Declaratorias::CountByEstado($this->intIdEstadoDeclaratoria);
		}

		/**
		 * Associates a DeclaratoriasAsEstado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function AssociateDeclaratoriasAsEstado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeclaratoriasAsEstado on this unsaved EstadoDeclaratoria.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeclaratoriasAsEstado on this EstadoDeclaratoria with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->Estado = $this->intIdEstadoDeclaratoria;
				$objDeclaratorias->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a DeclaratoriasAsEstado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function UnassociateDeclaratoriasAsEstado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this unsaved EstadoDeclaratoria.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this EstadoDeclaratoria with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`estado` = null
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . ' AND
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->Estado = null;
				$objDeclaratorias->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all DeclaratoriasesAsEstado
		 * @return void
		*/ 
		public function UnassociateAllDeclaratoriasesAsEstado() {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this unsaved EstadoDeclaratoria.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Declaratorias::LoadArrayByEstado($this->intIdEstadoDeclaratoria) as $objDeclaratorias) {
					$objDeclaratorias->Estado = null;
					$objDeclaratorias->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`estado` = null
				WHERE
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
			');
		}

		/**
		 * Deletes an associated DeclaratoriasAsEstado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function DeleteAssociatedDeclaratoriasAsEstado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this unsaved EstadoDeclaratoria.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this EstadoDeclaratoria with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . ' AND
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated DeclaratoriasesAsEstado
		 * @return void
		*/ 
		public function DeleteAllDeclaratoriasesAsEstado() {
			if ((is_null($this->intIdEstadoDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsEstado on this unsaved EstadoDeclaratoria.');

			// Get the Database Object for this Class
			$objDatabase = EstadoDeclaratoria::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Declaratorias::LoadArrayByEstado($this->intIdEstadoDeclaratoria) as $objDeclaratorias) {
					$objDeclaratorias->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`
				WHERE
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstadoDeclaratoria) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="EstadoDeclaratoria"><sequence>';
			$strToReturn .= '<element name="IdEstadoDeclaratoria" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('EstadoDeclaratoria', $strComplexTypeArray)) {
				$strComplexTypeArray['EstadoDeclaratoria'] = EstadoDeclaratoria::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, EstadoDeclaratoria::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new EstadoDeclaratoria();
			if (property_exists($objSoapObject, 'IdEstadoDeclaratoria'))
				$objToReturn->intIdEstadoDeclaratoria = $objSoapObject->IdEstadoDeclaratoria;
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
				array_push($objArrayToReturn, EstadoDeclaratoria::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdEstadoDeclaratoria
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeDeclaratorias $DeclaratoriasAsEstado
	 */
	class QQNodeEstadoDeclaratoria extends QQNode {
		protected $strTableName = 'estado_declaratoria';
		protected $strPrimaryKey = 'id_estado_declaratoria';
		protected $strClassName = 'EstadoDeclaratoria';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEstadoDeclaratoria':
					return new QQNode('id_estado_declaratoria', 'IdEstadoDeclaratoria', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'DeclaratoriasAsEstado':
					return new QQReverseReferenceNodeDeclaratorias($this, 'declaratoriasasestado', 'reverse_reference', 'estado');

				case '_PrimaryKeyNode':
					return new QQNode('id_estado_declaratoria', 'IdEstadoDeclaratoria', 'integer', $this);
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
	 * @property-read QQNode $IdEstadoDeclaratoria
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeDeclaratorias $DeclaratoriasAsEstado
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeEstadoDeclaratoria extends QQReverseReferenceNode {
		protected $strTableName = 'estado_declaratoria';
		protected $strPrimaryKey = 'id_estado_declaratoria';
		protected $strClassName = 'EstadoDeclaratoria';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEstadoDeclaratoria':
					return new QQNode('id_estado_declaratoria', 'IdEstadoDeclaratoria', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'DeclaratoriasAsEstado':
					return new QQReverseReferenceNodeDeclaratorias($this, 'declaratoriasasestado', 'reverse_reference', 'estado');

				case '_PrimaryKeyNode':
					return new QQNode('id_estado_declaratoria', 'IdEstadoDeclaratoria', 'integer', $this);
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