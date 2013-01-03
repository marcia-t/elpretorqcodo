<?php
	/**
	 * The abstract EstadosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Estados subclass which
	 * extends this EstadosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Estados class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdEstado the value for intIdEstado (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property Cedulas $_CedulasAsEstado the value for the private _objCedulasAsEstado (Read-Only) if set due to an expansion on the cedulas.estado reverse relationship
	 * @property Cedulas[] $_CedulasAsEstadoArray the value for the private _objCedulasAsEstadoArray (Read-Only) if set due to an ExpandAsArray on the cedulas.estado reverse relationship
	 * @property TramitesAsignados $_TramitesAsignadosAsIdEstado the value for the private _objTramitesAsignadosAsIdEstado (Read-Only) if set due to an expansion on the tramites_asignados.id_estado reverse relationship
	 * @property TramitesAsignados[] $_TramitesAsignadosAsIdEstadoArray the value for the private _objTramitesAsignadosAsIdEstadoArray (Read-Only) if set due to an ExpandAsArray on the tramites_asignados.id_estado reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EstadosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column estados.id_estado
		 * @var integer intIdEstado
		 */
		protected $intIdEstado;
		const IdEstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column estados.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single CedulasAsEstado object
		 * (of type Cedulas), if this Estados object was restored with
		 * an expansion on the cedulas association table.
		 * @var Cedulas _objCedulasAsEstado;
		 */
		private $_objCedulasAsEstado;

		/**
		 * Private member variable that stores a reference to an array of CedulasAsEstado objects
		 * (of type Cedulas[]), if this Estados object was restored with
		 * an ExpandAsArray on the cedulas association table.
		 * @var Cedulas[] _objCedulasAsEstadoArray;
		 */
		private $_objCedulasAsEstadoArray = array();

		/**
		 * Private member variable that stores a reference to a single TramitesAsignadosAsIdEstado object
		 * (of type TramitesAsignados), if this Estados object was restored with
		 * an expansion on the tramites_asignados association table.
		 * @var TramitesAsignados _objTramitesAsignadosAsIdEstado;
		 */
		private $_objTramitesAsignadosAsIdEstado;

		/**
		 * Private member variable that stores a reference to an array of TramitesAsignadosAsIdEstado objects
		 * (of type TramitesAsignados[]), if this Estados object was restored with
		 * an ExpandAsArray on the tramites_asignados association table.
		 * @var TramitesAsignados[] _objTramitesAsignadosAsIdEstadoArray;
		 */
		private $_objTramitesAsignadosAsIdEstadoArray = array();

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
		 * Load a Estados from PK Info
		 * @param integer $intIdEstado
		 * @return Estados
		 */
		public static function Load($intIdEstado) {
			// Use QuerySingle to Perform the Query
			return Estados::QuerySingle(
				QQ::Equal(QQN::Estados()->IdEstado, $intIdEstado)
			);
		}

		/**
		 * Load all Estadoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Estados[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Estados::QueryArray to perform the LoadAll query
			try {
				return Estados::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Estadoses
		 * @return int
		 */
		public static function CountAll() {
			// Call Estados::QueryCount to perform the CountAll query
			return Estados::QueryCount(QQ::All());
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
			$objDatabase = Estados::GetDatabase();

			// Create/Build out the QueryBuilder object with Estados-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'estados');
			Estados::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('estados');

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
		 * Static Qcodo Query method to query for a single Estados object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Estados the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Estados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Estados object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Estados::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Estados::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Estados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Estados[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Estados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Estados::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Estados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Estados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Estados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Estados::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'estados_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Estados-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Estados::GetSelectFields($objQueryBuilder);
				Estados::GetFromFields($objQueryBuilder);

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
			return Estados::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Estados
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'estados';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_estado', $strAliasPrefix . 'id_estado');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Estados from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Estados::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Estados
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_estado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdEstado == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'estados__';


				$strAlias = $strAliasPrefix . 'cedulasasestado__id_cedulas';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCedulasAsEstadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCedulasAsEstadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasestado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCedulasAsEstadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCedulasAsEstadoArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'tramitesasignadosasidestado__id_tramite_asignado';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTramitesAsignadosAsIdEstadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTramitesAsignadosAsIdEstadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidestado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTramitesAsignadosAsIdEstadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTramitesAsignadosAsIdEstadoArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'estados__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Estados object
			$objToReturn = new Estados();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_estado'] : $strAliasPrefix . 'id_estado';
			$objToReturn->intIdEstado = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'estados__';




			// Check for CedulasAsEstado Virtual Binding
			$strAlias = $strAliasPrefix . 'cedulasasestado__id_cedulas';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCedulasAsEstadoArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCedulasAsEstado = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TramitesAsignadosAsIdEstado Virtual Binding
			$strAlias = $strAliasPrefix . 'tramitesasignadosasidestado__id_tramite_asignado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTramitesAsignadosAsIdEstadoArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTramitesAsignadosAsIdEstado = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidestado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Estadoses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Estados[]
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
					$objItem = Estados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Estados::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Estados object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Estados next row resulting from the query
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
			return Estados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Estados object,
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @return Estados
		*/
		public static function LoadByIdEstado($intIdEstado, $objOptionalClauses = null) {
			return Estados::QuerySingle(
				QQ::Equal(QQN::Estados()->IdEstado, $intIdEstado)
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
		 * Save this Estados
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `estados` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdEstado = $objDatabase->InsertId('estados', 'id_estado');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`estados`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
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
		 * Delete this Estados
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Estados with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`estados`
				WHERE
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Estadoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`estados`');
		}

		/**
		 * Truncate estados table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `estados`');
		}

		/**
		 * Reload this Estados from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Estados object.');

			// Reload the Object
			$objReloaded = Estados::Load($this->intIdEstado);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Estados::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `estados` (
					`id_estado`,
					`nombre`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdEstado) . ',
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
		 * @param integer intIdEstado
		 * @return Estados[]
		 */
		public static function GetJournalForId($intIdEstado) {
			$objDatabase = Estados::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM estados WHERE id_estado = ' .
				$objDatabase->SqlVariable($intIdEstado) . ' ORDER BY __sys_date');

			return Estados::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Estados[]
		 */
		public function GetJournal() {
			return Estados::GetJournalForId($this->intIdEstado);
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
				case 'IdEstado':
					// Gets the value for intIdEstado (Read-Only PK)
					// @return integer
					return $this->intIdEstado;

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

				case '_CedulasAsEstado':
					// Gets the value for the private _objCedulasAsEstado (Read-Only)
					// if set due to an expansion on the cedulas.estado reverse relationship
					// @return Cedulas
					return $this->_objCedulasAsEstado;

				case '_CedulasAsEstadoArray':
					// Gets the value for the private _objCedulasAsEstadoArray (Read-Only)
					// if set due to an ExpandAsArray on the cedulas.estado reverse relationship
					// @return Cedulas[]
					return (array) $this->_objCedulasAsEstadoArray;

				case '_TramitesAsignadosAsIdEstado':
					// Gets the value for the private _objTramitesAsignadosAsIdEstado (Read-Only)
					// if set due to an expansion on the tramites_asignados.id_estado reverse relationship
					// @return TramitesAsignados
					return $this->_objTramitesAsignadosAsIdEstado;

				case '_TramitesAsignadosAsIdEstadoArray':
					// Gets the value for the private _objTramitesAsignadosAsIdEstadoArray (Read-Only)
					// if set due to an ExpandAsArray on the tramites_asignados.id_estado reverse relationship
					// @return TramitesAsignados[]
					return (array) $this->_objTramitesAsignadosAsIdEstadoArray;


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

			
		
		// Related Objects' Methods for CedulasAsEstado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CedulasesAsEstado as an array of Cedulas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		*/ 
		public function GetCedulasAsEstadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdEstado)))
				return array();

			try {
				return Cedulas::LoadArrayByEstado($this->intIdEstado, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CedulasesAsEstado
		 * @return int
		*/ 
		public function CountCedulasesAsEstado() {
			if ((is_null($this->intIdEstado)))
				return 0;

			return Cedulas::CountByEstado($this->intIdEstado);
		}

		/**
		 * Associates a CedulasAsEstado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function AssociateCedulasAsEstado(Cedulas $objCedulas) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsEstado on this unsaved Estados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsEstado on this Estados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Estado = $this->intIdEstado;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CedulasAsEstado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function UnassociateCedulasAsEstado(Cedulas $objCedulas) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this unsaved Estados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this Estados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`estado` = null
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Estado = null;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CedulasesAsEstado
		 * @return void
		*/ 
		public function UnassociateAllCedulasesAsEstado() {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this unsaved Estados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByEstado($this->intIdEstado) as $objCedulas) {
					$objCedulas->Estado = null;
					$objCedulas->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`estado` = null
				WHERE
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');
		}

		/**
		 * Deletes an associated CedulasAsEstado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function DeleteAssociatedCedulasAsEstado(Cedulas $objCedulas) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this unsaved Estados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this Estados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CedulasesAsEstado
		 * @return void
		*/ 
		public function DeleteAllCedulasesAsEstado() {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsEstado on this unsaved Estados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByEstado($this->intIdEstado) as $objCedulas) {
					$objCedulas->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');
		}

			
		
		// Related Objects' Methods for TramitesAsignadosAsIdEstado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TramitesAsignadosesAsIdEstado as an array of TramitesAsignados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/ 
		public function GetTramitesAsignadosAsIdEstadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdEstado)))
				return array();

			try {
				return TramitesAsignados::LoadArrayByIdEstado($this->intIdEstado, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TramitesAsignadosesAsIdEstado
		 * @return int
		*/ 
		public function CountTramitesAsignadosesAsIdEstado() {
			if ((is_null($this->intIdEstado)))
				return 0;

			return TramitesAsignados::CountByIdEstado($this->intIdEstado);
		}

		/**
		 * Associates a TramitesAsignadosAsIdEstado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function AssociateTramitesAsignadosAsIdEstado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsIdEstado on this unsaved Estados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsIdEstado on this Estados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->IdEstado = $this->intIdEstado;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TramitesAsignadosAsIdEstado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function UnassociateTramitesAsignadosAsIdEstado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this unsaved Estados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this Estados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_estado` = null
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->IdEstado = null;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TramitesAsignadosesAsIdEstado
		 * @return void
		*/ 
		public function UnassociateAllTramitesAsignadosesAsIdEstado() {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this unsaved Estados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByIdEstado($this->intIdEstado) as $objTramitesAsignados) {
					$objTramitesAsignados->IdEstado = null;
					$objTramitesAsignados->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_estado` = null
				WHERE
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');
		}

		/**
		 * Deletes an associated TramitesAsignadosAsIdEstado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function DeleteAssociatedTramitesAsignadosAsIdEstado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this unsaved Estados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this Estados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TramitesAsignadosesAsIdEstado
		 * @return void
		*/ 
		public function DeleteAllTramitesAsignadosesAsIdEstado() {
			if ((is_null($this->intIdEstado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdEstado on this unsaved Estados.');

			// Get the Database Object for this Class
			$objDatabase = Estados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByIdEstado($this->intIdEstado) as $objTramitesAsignados) {
					$objTramitesAsignados->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Estados"><sequence>';
			$strToReturn .= '<element name="IdEstado" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Estados', $strComplexTypeArray)) {
				$strComplexTypeArray['Estados'] = Estados::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Estados::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Estados();
			if (property_exists($objSoapObject, 'IdEstado'))
				$objToReturn->intIdEstado = $objSoapObject->IdEstado;
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
				array_push($objArrayToReturn, Estados::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdEstado
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsEstado
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsIdEstado
	 */
	class QQNodeEstados extends QQNode {
		protected $strTableName = 'estados';
		protected $strPrimaryKey = 'id_estado';
		protected $strClassName = 'Estados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'CedulasAsEstado':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasestado', 'reverse_reference', 'estado');
				case 'TramitesAsignadosAsIdEstado':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasidestado', 'reverse_reference', 'id_estado');

				case '_PrimaryKeyNode':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
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
	 * @property-read QQNode $IdEstado
	 * @property-read QQNode $Nombre
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsEstado
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsIdEstado
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeEstados extends QQReverseReferenceNode {
		protected $strTableName = 'estados';
		protected $strPrimaryKey = 'id_estado';
		protected $strClassName = 'Estados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'CedulasAsEstado':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasestado', 'reverse_reference', 'estado');
				case 'TramitesAsignadosAsIdEstado':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasidestado', 'reverse_reference', 'id_estado');

				case '_PrimaryKeyNode':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
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