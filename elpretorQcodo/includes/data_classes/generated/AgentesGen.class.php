<?php
	/**
	 * The abstract AgentesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Agentes subclass which
	 * extends this AgentesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Agentes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdAgente the value for intIdAgente (Read-Only PK)
	 * @property string $NombreApellido the value for strNombreApellido (Not Null)
	 * @property integer $Activo the value for intActivo (Not Null)
	 * @property string $Observaciones the value for strObservaciones 
	 * @property Cedulas $_CedulasAsAgente the value for the private _objCedulasAsAgente (Read-Only) if set due to an expansion on the cedulas.agente reverse relationship
	 * @property Cedulas[] $_CedulasAsAgenteArray the value for the private _objCedulasAsAgenteArray (Read-Only) if set due to an ExpandAsArray on the cedulas.agente reverse relationship
	 * @property TramitesAsignados $_TramitesAsignadosAsIdAgente the value for the private _objTramitesAsignadosAsIdAgente (Read-Only) if set due to an expansion on the tramites_asignados.id_agente reverse relationship
	 * @property TramitesAsignados[] $_TramitesAsignadosAsIdAgenteArray the value for the private _objTramitesAsignadosAsIdAgenteArray (Read-Only) if set due to an ExpandAsArray on the tramites_asignados.id_agente reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AgentesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column agentes.id_agente
		 * @var integer intIdAgente
		 */
		protected $intIdAgente;
		const IdAgenteDefault = null;


		/**
		 * Protected member variable that maps to the database column agentes.nombre_apellido
		 * @var string strNombreApellido
		 */
		protected $strNombreApellido;
		const NombreApellidoMaxLength = 100;
		const NombreApellidoDefault = null;


		/**
		 * Protected member variable that maps to the database column agentes.activo
		 * @var integer intActivo
		 */
		protected $intActivo;
		const ActivoDefault = null;


		/**
		 * Protected member variable that maps to the database column agentes.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesMaxLength = 255;
		const ObservacionesDefault = null;


		/**
		 * Private member variable that stores a reference to a single CedulasAsAgente object
		 * (of type Cedulas), if this Agentes object was restored with
		 * an expansion on the cedulas association table.
		 * @var Cedulas _objCedulasAsAgente;
		 */
		private $_objCedulasAsAgente;

		/**
		 * Private member variable that stores a reference to an array of CedulasAsAgente objects
		 * (of type Cedulas[]), if this Agentes object was restored with
		 * an ExpandAsArray on the cedulas association table.
		 * @var Cedulas[] _objCedulasAsAgenteArray;
		 */
		private $_objCedulasAsAgenteArray = array();

		/**
		 * Private member variable that stores a reference to a single TramitesAsignadosAsIdAgente object
		 * (of type TramitesAsignados), if this Agentes object was restored with
		 * an expansion on the tramites_asignados association table.
		 * @var TramitesAsignados _objTramitesAsignadosAsIdAgente;
		 */
		private $_objTramitesAsignadosAsIdAgente;

		/**
		 * Private member variable that stores a reference to an array of TramitesAsignadosAsIdAgente objects
		 * (of type TramitesAsignados[]), if this Agentes object was restored with
		 * an ExpandAsArray on the tramites_asignados association table.
		 * @var TramitesAsignados[] _objTramitesAsignadosAsIdAgenteArray;
		 */
		private $_objTramitesAsignadosAsIdAgenteArray = array();

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
		 * Load a Agentes from PK Info
		 * @param integer $intIdAgente
		 * @return Agentes
		 */
		public static function Load($intIdAgente) {
			// Use QuerySingle to Perform the Query
			return Agentes::QuerySingle(
				QQ::Equal(QQN::Agentes()->IdAgente, $intIdAgente)
			);
		}

		/**
		 * Load all Agenteses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Agentes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Agentes::QueryArray to perform the LoadAll query
			try {
				return Agentes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Agenteses
		 * @return int
		 */
		public static function CountAll() {
			// Call Agentes::QueryCount to perform the CountAll query
			return Agentes::QueryCount(QQ::All());
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
			$objDatabase = Agentes::GetDatabase();

			// Create/Build out the QueryBuilder object with Agentes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'agentes');
			Agentes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('agentes');

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
		 * Static Qcodo Query method to query for a single Agentes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Agentes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Agentes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Agentes object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Agentes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Agentes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Agentes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Agentes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Agentes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Agentes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Agentes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Agentes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Agentes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Agentes::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'agentes_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Agentes-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Agentes::GetSelectFields($objQueryBuilder);
				Agentes::GetFromFields($objQueryBuilder);

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
			return Agentes::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Agentes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'agentes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_agente', $strAliasPrefix . 'id_agente');
			$objBuilder->AddSelectItem($strTableName, 'nombre_apellido', $strAliasPrefix . 'nombre_apellido');
			$objBuilder->AddSelectItem($strTableName, 'activo', $strAliasPrefix . 'activo');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Agentes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Agentes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Agentes
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_agente';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdAgente == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'agentes__';


				$strAlias = $strAliasPrefix . 'cedulasasagente__id_cedulas';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCedulasAsAgenteArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCedulasAsAgenteArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasagente__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCedulasAsAgenteArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCedulasAsAgenteArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'tramitesasignadosasidagente__id_tramite_asignado';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTramitesAsignadosAsIdAgenteArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTramitesAsignadosAsIdAgenteArray[$intPreviousChildItemCount - 1];
						$objChildItem = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidagente__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTramitesAsignadosAsIdAgenteArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTramitesAsignadosAsIdAgenteArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'agentes__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Agentes object
			$objToReturn = new Agentes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_agente', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_agente'] : $strAliasPrefix . 'id_agente';
			$objToReturn->intIdAgente = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre_apellido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre_apellido'] : $strAliasPrefix . 'nombre_apellido';
			$objToReturn->strNombreApellido = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'activo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'activo'] : $strAliasPrefix . 'activo';
			$objToReturn->intActivo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'agentes__';




			// Check for CedulasAsAgente Virtual Binding
			$strAlias = $strAliasPrefix . 'cedulasasagente__id_cedulas';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCedulasAsAgenteArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCedulasAsAgente = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TramitesAsignadosAsIdAgente Virtual Binding
			$strAlias = $strAliasPrefix . 'tramitesasignadosasidagente__id_tramite_asignado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTramitesAsignadosAsIdAgenteArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTramitesAsignadosAsIdAgente = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasidagente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Agenteses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Agentes[]
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
					$objItem = Agentes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Agentes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Agentes object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Agentes next row resulting from the query
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
			return Agentes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Agentes object,
		 * by IdAgente Index(es)
		 * @param integer $intIdAgente
		 * @return Agentes
		*/
		public static function LoadByIdAgente($intIdAgente, $objOptionalClauses = null) {
			return Agentes::QuerySingle(
				QQ::Equal(QQN::Agentes()->IdAgente, $intIdAgente)
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
		 * Save this Agentes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `agentes` (
							`nombre_apellido`,
							`activo`,
							`observaciones`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombreApellido) . ',
							' . $objDatabase->SqlVariable($this->intActivo) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdAgente = $objDatabase->InsertId('agentes', 'id_agente');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`agentes`
						SET
							`nombre_apellido` = ' . $objDatabase->SqlVariable($this->strNombreApellido) . ',
							`activo` = ' . $objDatabase->SqlVariable($this->intActivo) . ',
							`observaciones` = ' . $objDatabase->SqlVariable($this->strObservaciones) . '
						WHERE
							`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
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
		 * Delete this Agentes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Agentes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`agentes`
				WHERE
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Agenteses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`agentes`');
		}

		/**
		 * Truncate agentes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `agentes`');
		}

		/**
		 * Reload this Agentes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Agentes object.');

			// Reload the Object
			$objReloaded = Agentes::Load($this->intIdAgente);

			// Update $this's local variables to match
			$this->strNombreApellido = $objReloaded->strNombreApellido;
			$this->intActivo = $objReloaded->intActivo;
			$this->strObservaciones = $objReloaded->strObservaciones;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Agentes::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `agentes` (
					`id_agente`,
					`nombre_apellido`,
					`activo`,
					`observaciones`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdAgente) . ',
					' . $objDatabase->SqlVariable($this->strNombreApellido) . ',
					' . $objDatabase->SqlVariable($this->intActivo) . ',
					' . $objDatabase->SqlVariable($this->strObservaciones) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdAgente
		 * @return Agentes[]
		 */
		public static function GetJournalForId($intIdAgente) {
			$objDatabase = Agentes::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM agentes WHERE id_agente = ' .
				$objDatabase->SqlVariable($intIdAgente) . ' ORDER BY __sys_date');

			return Agentes::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Agentes[]
		 */
		public function GetJournal() {
			return Agentes::GetJournalForId($this->intIdAgente);
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
				case 'IdAgente':
					// Gets the value for intIdAgente (Read-Only PK)
					// @return integer
					return $this->intIdAgente;

				case 'NombreApellido':
					// Gets the value for strNombreApellido (Not Null)
					// @return string
					return $this->strNombreApellido;

				case 'Activo':
					// Gets the value for intActivo (Not Null)
					// @return integer
					return $this->intActivo;

				case 'Observaciones':
					// Gets the value for strObservaciones 
					// @return string
					return $this->strObservaciones;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CedulasAsAgente':
					// Gets the value for the private _objCedulasAsAgente (Read-Only)
					// if set due to an expansion on the cedulas.agente reverse relationship
					// @return Cedulas
					return $this->_objCedulasAsAgente;

				case '_CedulasAsAgenteArray':
					// Gets the value for the private _objCedulasAsAgenteArray (Read-Only)
					// if set due to an ExpandAsArray on the cedulas.agente reverse relationship
					// @return Cedulas[]
					return (array) $this->_objCedulasAsAgenteArray;

				case '_TramitesAsignadosAsIdAgente':
					// Gets the value for the private _objTramitesAsignadosAsIdAgente (Read-Only)
					// if set due to an expansion on the tramites_asignados.id_agente reverse relationship
					// @return TramitesAsignados
					return $this->_objTramitesAsignadosAsIdAgente;

				case '_TramitesAsignadosAsIdAgenteArray':
					// Gets the value for the private _objTramitesAsignadosAsIdAgenteArray (Read-Only)
					// if set due to an ExpandAsArray on the tramites_asignados.id_agente reverse relationship
					// @return TramitesAsignados[]
					return (array) $this->_objTramitesAsignadosAsIdAgenteArray;


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
				case 'NombreApellido':
					// Sets the value for strNombreApellido (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNombreApellido = QType::Cast($mixValue, QType::String));
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

				case 'Observaciones':
					// Sets the value for strObservaciones 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strObservaciones = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for CedulasAsAgente
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CedulasesAsAgente as an array of Cedulas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		*/ 
		public function GetCedulasAsAgenteArray($objOptionalClauses = null) {
			if ((is_null($this->intIdAgente)))
				return array();

			try {
				return Cedulas::LoadArrayByAgente($this->intIdAgente, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CedulasesAsAgente
		 * @return int
		*/ 
		public function CountCedulasesAsAgente() {
			if ((is_null($this->intIdAgente)))
				return 0;

			return Cedulas::CountByAgente($this->intIdAgente);
		}

		/**
		 * Associates a CedulasAsAgente
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function AssociateCedulasAsAgente(Cedulas $objCedulas) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsAgente on this unsaved Agentes.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsAgente on this Agentes with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Agente = $this->intIdAgente;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CedulasAsAgente
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function UnassociateCedulasAsAgente(Cedulas $objCedulas) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this unsaved Agentes.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this Agentes with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`agente` = null
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Agente = null;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CedulasesAsAgente
		 * @return void
		*/ 
		public function UnassociateAllCedulasesAsAgente() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this unsaved Agentes.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByAgente($this->intIdAgente) as $objCedulas) {
					$objCedulas->Agente = null;
					$objCedulas->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`agente` = null
				WHERE
					`agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');
		}

		/**
		 * Deletes an associated CedulasAsAgente
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function DeleteAssociatedCedulasAsAgente(Cedulas $objCedulas) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this unsaved Agentes.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this Agentes with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CedulasesAsAgente
		 * @return void
		*/ 
		public function DeleteAllCedulasesAsAgente() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsAgente on this unsaved Agentes.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByAgente($this->intIdAgente) as $objCedulas) {
					$objCedulas->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');
		}

			
		
		// Related Objects' Methods for TramitesAsignadosAsIdAgente
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TramitesAsignadosesAsIdAgente as an array of TramitesAsignados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/ 
		public function GetTramitesAsignadosAsIdAgenteArray($objOptionalClauses = null) {
			if ((is_null($this->intIdAgente)))
				return array();

			try {
				return TramitesAsignados::LoadArrayByIdAgente($this->intIdAgente, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TramitesAsignadosesAsIdAgente
		 * @return int
		*/ 
		public function CountTramitesAsignadosesAsIdAgente() {
			if ((is_null($this->intIdAgente)))
				return 0;

			return TramitesAsignados::CountByIdAgente($this->intIdAgente);
		}

		/**
		 * Associates a TramitesAsignadosAsIdAgente
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function AssociateTramitesAsignadosAsIdAgente(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsIdAgente on this unsaved Agentes.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsIdAgente on this Agentes with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->IdAgente = $this->intIdAgente;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TramitesAsignadosAsIdAgente
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function UnassociateTramitesAsignadosAsIdAgente(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this unsaved Agentes.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this Agentes with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_agente` = null
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->IdAgente = null;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TramitesAsignadosesAsIdAgente
		 * @return void
		*/ 
		public function UnassociateAllTramitesAsignadosesAsIdAgente() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this unsaved Agentes.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByIdAgente($this->intIdAgente) as $objTramitesAsignados) {
					$objTramitesAsignados->IdAgente = null;
					$objTramitesAsignados->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`id_agente` = null
				WHERE
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');
		}

		/**
		 * Deletes an associated TramitesAsignadosAsIdAgente
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function DeleteAssociatedTramitesAsignadosAsIdAgente(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this unsaved Agentes.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this Agentes with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TramitesAsignadosesAsIdAgente
		 * @return void
		*/ 
		public function DeleteAllTramitesAsignadosesAsIdAgente() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsIdAgente on this unsaved Agentes.');

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByIdAgente($this->intIdAgente) as $objTramitesAsignados) {
					$objTramitesAsignados->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Agentes"><sequence>';
			$strToReturn .= '<element name="IdAgente" type="xsd:int"/>';
			$strToReturn .= '<element name="NombreApellido" type="xsd:string"/>';
			$strToReturn .= '<element name="Activo" type="xsd:int"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Agentes', $strComplexTypeArray)) {
				$strComplexTypeArray['Agentes'] = Agentes::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Agentes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Agentes();
			if (property_exists($objSoapObject, 'IdAgente'))
				$objToReturn->intIdAgente = $objSoapObject->IdAgente;
			if (property_exists($objSoapObject, 'NombreApellido'))
				$objToReturn->strNombreApellido = $objSoapObject->NombreApellido;
			if (property_exists($objSoapObject, 'Activo'))
				$objToReturn->intActivo = $objSoapObject->Activo;
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Agentes::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdAgente
	 * @property-read QQNode $NombreApellido
	 * @property-read QQNode $Activo
	 * @property-read QQNode $Observaciones
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsAgente
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsIdAgente
	 */
	class QQNodeAgentes extends QQNode {
		protected $strTableName = 'agentes';
		protected $strPrimaryKey = 'id_agente';
		protected $strClassName = 'Agentes';
		public function __get($strName) {
			switch ($strName) {
				case 'IdAgente':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
				case 'NombreApellido':
					return new QQNode('nombre_apellido', 'NombreApellido', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'CedulasAsAgente':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasagente', 'reverse_reference', 'agente');
				case 'TramitesAsignadosAsIdAgente':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasidagente', 'reverse_reference', 'id_agente');

				case '_PrimaryKeyNode':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
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
	 * @property-read QQNode $IdAgente
	 * @property-read QQNode $NombreApellido
	 * @property-read QQNode $Activo
	 * @property-read QQNode $Observaciones
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsAgente
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsIdAgente
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeAgentes extends QQReverseReferenceNode {
		protected $strTableName = 'agentes';
		protected $strPrimaryKey = 'id_agente';
		protected $strClassName = 'Agentes';
		public function __get($strName) {
			switch ($strName) {
				case 'IdAgente':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
				case 'NombreApellido':
					return new QQNode('nombre_apellido', 'NombreApellido', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'CedulasAsAgente':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasagente', 'reverse_reference', 'agente');
				case 'TramitesAsignadosAsIdAgente':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasidagente', 'reverse_reference', 'id_agente');

				case '_PrimaryKeyNode':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
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