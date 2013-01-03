<?php
	/**
	 * The abstract CedulasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Cedulas subclass which
	 * extends this CedulasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Cedulas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdCedulas the value for intIdCedulas (Read-Only PK)
	 * @property string $Localidad the value for strLocalidad (Not Null)
	 * @property string $Autos the value for strAutos (Not Null)
	 * @property string $Direccion the value for strDireccion (Not Null)
	 * @property integer $Agente the value for intAgente (Not Null)
	 * @property QDateTime $FechaIngreso the value for dttFechaIngreso (Not Null)
	 * @property QDateTime $FechaSalida the value for dttFechaSalida 
	 * @property QDateTime $FechaFin the value for dttFechaFin 
	 * @property QDateTime $Audiencia the value for dttAudiencia (Not Null)
	 * @property string $Observaciones the value for strObservaciones 
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property Agentes $AgenteObject the value for the Agentes object referenced by intAgente (Not Null)
	 * @property Estados $EstadoObject the value for the Estados object referenced by intEstado (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CedulasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column cedulas.id_cedulas
		 * @var integer intIdCedulas
		 */
		protected $intIdCedulas;
		const IdCedulasDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.localidad
		 * @var string strLocalidad
		 */
		protected $strLocalidad;
		const LocalidadMaxLength = 45;
		const LocalidadDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.autos
		 * @var string strAutos
		 */
		protected $strAutos;
		const AutosMaxLength = 255;
		const AutosDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.direccion
		 * @var string strDireccion
		 */
		protected $strDireccion;
		const DireccionMaxLength = 128;
		const DireccionDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.agente
		 * @var integer intAgente
		 */
		protected $intAgente;
		const AgenteDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.fecha_ingreso
		 * @var QDateTime dttFechaIngreso
		 */
		protected $dttFechaIngreso;
		const FechaIngresoDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.fecha_salida
		 * @var QDateTime dttFechaSalida
		 */
		protected $dttFechaSalida;
		const FechaSalidaDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.fecha_fin
		 * @var QDateTime dttFechaFin
		 */
		protected $dttFechaFin;
		const FechaFinDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.audiencia
		 * @var QDateTime dttAudiencia
		 */
		protected $dttAudiencia;
		const AudienciaDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesMaxLength = 128;
		const ObservacionesDefault = null;


		/**
		 * Protected member variable that maps to the database column cedulas.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


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

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column cedulas.agente.
		 *
		 * NOTE: Always use the AgenteObject property getter to correctly retrieve this Agentes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Agentes objAgenteObject
		 */
		protected $objAgenteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column cedulas.estado.
		 *
		 * NOTE: Always use the EstadoObject property getter to correctly retrieve this Estados object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Estados objEstadoObject
		 */
		protected $objEstadoObject;





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
		 * Load a Cedulas from PK Info
		 * @param integer $intIdCedulas
		 * @return Cedulas
		 */
		public static function Load($intIdCedulas) {
			// Use QuerySingle to Perform the Query
			return Cedulas::QuerySingle(
				QQ::Equal(QQN::Cedulas()->IdCedulas, $intIdCedulas)
			);
		}

		/**
		 * Load all Cedulases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Cedulas::QueryArray to perform the LoadAll query
			try {
				return Cedulas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Cedulases
		 * @return int
		 */
		public static function CountAll() {
			// Call Cedulas::QueryCount to perform the CountAll query
			return Cedulas::QueryCount(QQ::All());
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
			$objDatabase = Cedulas::GetDatabase();

			// Create/Build out the QueryBuilder object with Cedulas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'cedulas');
			Cedulas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('cedulas');

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
		 * Static Qcodo Query method to query for a single Cedulas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cedulas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cedulas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Cedulas object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Cedulas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Cedulas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Cedulas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cedulas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cedulas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Cedulas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Cedulas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Cedulas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cedulas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Cedulas::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'cedulas_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Cedulas-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Cedulas::GetSelectFields($objQueryBuilder);
				Cedulas::GetFromFields($objQueryBuilder);

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
			return Cedulas::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Cedulas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'cedulas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_cedulas', $strAliasPrefix . 'id_cedulas');
			$objBuilder->AddSelectItem($strTableName, 'localidad', $strAliasPrefix . 'localidad');
			$objBuilder->AddSelectItem($strTableName, 'autos', $strAliasPrefix . 'autos');
			$objBuilder->AddSelectItem($strTableName, 'direccion', $strAliasPrefix . 'direccion');
			$objBuilder->AddSelectItem($strTableName, 'agente', $strAliasPrefix . 'agente');
			$objBuilder->AddSelectItem($strTableName, 'fecha_ingreso', $strAliasPrefix . 'fecha_ingreso');
			$objBuilder->AddSelectItem($strTableName, 'fecha_salida', $strAliasPrefix . 'fecha_salida');
			$objBuilder->AddSelectItem($strTableName, 'fecha_fin', $strAliasPrefix . 'fecha_fin');
			$objBuilder->AddSelectItem($strTableName, 'audiencia', $strAliasPrefix . 'audiencia');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Cedulas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Cedulas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Cedulas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the Cedulas object
			$objToReturn = new Cedulas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_cedulas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_cedulas'] : $strAliasPrefix . 'id_cedulas';
			$objToReturn->intIdCedulas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'localidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'localidad'] : $strAliasPrefix . 'localidad';
			$objToReturn->strLocalidad = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'autos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'autos'] : $strAliasPrefix . 'autos';
			$objToReturn->strAutos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion'] : $strAliasPrefix . 'direccion';
			$objToReturn->strDireccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'agente', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'agente'] : $strAliasPrefix . 'agente';
			$objToReturn->intAgente = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_ingreso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_ingreso'] : $strAliasPrefix . 'fecha_ingreso';
			$objToReturn->dttFechaIngreso = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_salida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_salida'] : $strAliasPrefix . 'fecha_salida';
			$objToReturn->dttFechaSalida = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_fin', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_fin'] : $strAliasPrefix . 'fecha_fin';
			$objToReturn->dttFechaFin = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'audiencia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'audiencia'] : $strAliasPrefix . 'audiencia';
			$objToReturn->dttAudiencia = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'cedulas__';

			// Check for AgenteObject Early Binding
			$strAlias = $strAliasPrefix . 'agente__id_agente';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAgenteObject = Agentes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'agente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for EstadoObject Early Binding
			$strAlias = $strAliasPrefix . 'estado__id_estado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEstadoObject = Estados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'estado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Cedulases from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Cedulas[]
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
					$objItem = Cedulas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Cedulas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Cedulas object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Cedulas next row resulting from the query
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
			return Cedulas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Cedulas object,
		 * by IdCedulas Index(es)
		 * @param integer $intIdCedulas
		 * @return Cedulas
		*/
		public static function LoadByIdCedulas($intIdCedulas, $objOptionalClauses = null) {
			return Cedulas::QuerySingle(
				QQ::Equal(QQN::Cedulas()->IdCedulas, $intIdCedulas)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cedulas objects,
		 * by Agente Index(es)
		 * @param integer $intAgente
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		*/
		public static function LoadArrayByAgente($intAgente, $objOptionalClauses = null) {
			// Call Cedulas::QueryArray to perform the LoadArrayByAgente query
			try {
				return Cedulas::QueryArray(
					QQ::Equal(QQN::Cedulas()->Agente, $intAgente),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Cedulases
		 * by Agente Index(es)
		 * @param integer $intAgente
		 * @return int
		*/
		public static function CountByAgente($intAgente, $objOptionalClauses = null) {
			// Call Cedulas::QueryCount to perform the CountByAgente query
			return Cedulas::QueryCount(
				QQ::Equal(QQN::Cedulas()->Agente, $intAgente)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cedulas objects,
		 * by Estado Index(es)
		 * @param integer $intEstado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		*/
		public static function LoadArrayByEstado($intEstado, $objOptionalClauses = null) {
			// Call Cedulas::QueryArray to perform the LoadArrayByEstado query
			try {
				return Cedulas::QueryArray(
					QQ::Equal(QQN::Cedulas()->Estado, $intEstado),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Cedulases
		 * by Estado Index(es)
		 * @param integer $intEstado
		 * @return int
		*/
		public static function CountByEstado($intEstado, $objOptionalClauses = null) {
			// Call Cedulas::QueryCount to perform the CountByEstado query
			return Cedulas::QueryCount(
				QQ::Equal(QQN::Cedulas()->Estado, $intEstado)
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
		 * Save this Cedulas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Cedulas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `cedulas` (
							`localidad`,
							`autos`,
							`direccion`,
							`agente`,
							`fecha_ingreso`,
							`fecha_salida`,
							`fecha_fin`,
							`audiencia`,
							`observaciones`,
							`estado`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strLocalidad) . ',
							' . $objDatabase->SqlVariable($this->strAutos) . ',
							' . $objDatabase->SqlVariable($this->strDireccion) . ',
							' . $objDatabase->SqlVariable($this->intAgente) . ',
							' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
							' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							' . $objDatabase->SqlVariable($this->dttAudiencia) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdCedulas = $objDatabase->InsertId('cedulas', 'id_cedulas');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`cedulas`
						SET
							`localidad` = ' . $objDatabase->SqlVariable($this->strLocalidad) . ',
							`autos` = ' . $objDatabase->SqlVariable($this->strAutos) . ',
							`direccion` = ' . $objDatabase->SqlVariable($this->strDireccion) . ',
							`agente` = ' . $objDatabase->SqlVariable($this->intAgente) . ',
							`fecha_ingreso` = ' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
							`fecha_salida` = ' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
							`fecha_fin` = ' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							`audiencia` = ' . $objDatabase->SqlVariable($this->dttAudiencia) . ',
							`observaciones` = ' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							`estado` = ' . $objDatabase->SqlVariable($this->intEstado) . '
						WHERE
							`id_cedulas` = ' . $objDatabase->SqlVariable($this->intIdCedulas) . '
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
		 * Delete this Cedulas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdCedulas)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Cedulas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Cedulas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($this->intIdCedulas) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Cedulases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Cedulas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`');
		}

		/**
		 * Truncate cedulas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Cedulas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `cedulas`');
		}

		/**
		 * Reload this Cedulas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Cedulas object.');

			// Reload the Object
			$objReloaded = Cedulas::Load($this->intIdCedulas);

			// Update $this's local variables to match
			$this->strLocalidad = $objReloaded->strLocalidad;
			$this->strAutos = $objReloaded->strAutos;
			$this->strDireccion = $objReloaded->strDireccion;
			$this->Agente = $objReloaded->Agente;
			$this->dttFechaIngreso = $objReloaded->dttFechaIngreso;
			$this->dttFechaSalida = $objReloaded->dttFechaSalida;
			$this->dttFechaFin = $objReloaded->dttFechaFin;
			$this->dttAudiencia = $objReloaded->dttAudiencia;
			$this->strObservaciones = $objReloaded->strObservaciones;
			$this->Estado = $objReloaded->Estado;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Cedulas::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `cedulas` (
					`id_cedulas`,
					`localidad`,
					`autos`,
					`direccion`,
					`agente`,
					`fecha_ingreso`,
					`fecha_salida`,
					`fecha_fin`,
					`audiencia`,
					`observaciones`,
					`estado`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdCedulas) . ',
					' . $objDatabase->SqlVariable($this->strLocalidad) . ',
					' . $objDatabase->SqlVariable($this->strAutos) . ',
					' . $objDatabase->SqlVariable($this->strDireccion) . ',
					' . $objDatabase->SqlVariable($this->intAgente) . ',
					' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
					' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
					' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
					' . $objDatabase->SqlVariable($this->dttAudiencia) . ',
					' . $objDatabase->SqlVariable($this->strObservaciones) . ',
					' . $objDatabase->SqlVariable($this->intEstado) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdCedulas
		 * @return Cedulas[]
		 */
		public static function GetJournalForId($intIdCedulas) {
			$objDatabase = Cedulas::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM cedulas WHERE id_cedulas = ' .
				$objDatabase->SqlVariable($intIdCedulas) . ' ORDER BY __sys_date');

			return Cedulas::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Cedulas[]
		 */
		public function GetJournal() {
			return Cedulas::GetJournalForId($this->intIdCedulas);
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
				case 'IdCedulas':
					// Gets the value for intIdCedulas (Read-Only PK)
					// @return integer
					return $this->intIdCedulas;

				case 'Localidad':
					// Gets the value for strLocalidad (Not Null)
					// @return string
					return $this->strLocalidad;

				case 'Autos':
					// Gets the value for strAutos (Not Null)
					// @return string
					return $this->strAutos;

				case 'Direccion':
					// Gets the value for strDireccion (Not Null)
					// @return string
					return $this->strDireccion;

				case 'Agente':
					// Gets the value for intAgente (Not Null)
					// @return integer
					return $this->intAgente;

				case 'FechaIngreso':
					// Gets the value for dttFechaIngreso (Not Null)
					// @return QDateTime
					return $this->dttFechaIngreso;

				case 'FechaSalida':
					// Gets the value for dttFechaSalida 
					// @return QDateTime
					return $this->dttFechaSalida;

				case 'FechaFin':
					// Gets the value for dttFechaFin 
					// @return QDateTime
					return $this->dttFechaFin;

				case 'Audiencia':
					// Gets the value for dttAudiencia (Not Null)
					// @return QDateTime
					return $this->dttAudiencia;

				case 'Observaciones':
					// Gets the value for strObservaciones 
					// @return string
					return $this->strObservaciones;

				case 'Estado':
					// Gets the value for intEstado (Not Null)
					// @return integer
					return $this->intEstado;


				///////////////////
				// Member Objects
				///////////////////
				case 'AgenteObject':
					// Gets the value for the Agentes object referenced by intAgente (Not Null)
					// @return Agentes
					try {
						if ((!$this->objAgenteObject) && (!is_null($this->intAgente)))
							$this->objAgenteObject = Agentes::Load($this->intAgente);
						return $this->objAgenteObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EstadoObject':
					// Gets the value for the Estados object referenced by intEstado (Not Null)
					// @return Estados
					try {
						if ((!$this->objEstadoObject) && (!is_null($this->intEstado)))
							$this->objEstadoObject = Estados::Load($this->intEstado);
						return $this->objEstadoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


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
				case 'Localidad':
					// Sets the value for strLocalidad (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLocalidad = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Autos':
					// Sets the value for strAutos (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAutos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Direccion':
					// Sets the value for strDireccion (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strDireccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Agente':
					// Sets the value for intAgente (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objAgenteObject = null;
						return ($this->intAgente = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaIngreso':
					// Sets the value for dttFechaIngreso (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttFechaIngreso = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaSalida':
					// Sets the value for dttFechaSalida 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttFechaSalida = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaFin':
					// Sets the value for dttFechaFin 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttFechaFin = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Audiencia':
					// Sets the value for dttAudiencia (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttAudiencia = QType::Cast($mixValue, QType::DateTime));
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

				case 'Estado':
					// Sets the value for intEstado (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objEstadoObject = null;
						return ($this->intEstado = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'AgenteObject':
					// Sets the value for the Agentes object referenced by intAgente (Not Null)
					// @param Agentes $mixValue
					// @return Agentes
					if (is_null($mixValue)) {
						$this->intAgente = null;
						$this->objAgenteObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Agentes object
						try {
							$mixValue = QType::Cast($mixValue, 'Agentes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Agentes object
						if (is_null($mixValue->IdAgente))
							throw new QCallerException('Unable to set an unsaved AgenteObject for this Cedulas');

						// Update Local Member Variables
						$this->objAgenteObject = $mixValue;
						$this->intAgente = $mixValue->IdAgente;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'EstadoObject':
					// Sets the value for the Estados object referenced by intEstado (Not Null)
					// @param Estados $mixValue
					// @return Estados
					if (is_null($mixValue)) {
						$this->intEstado = null;
						$this->objEstadoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Estados object
						try {
							$mixValue = QType::Cast($mixValue, 'Estados');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Estados object
						if (is_null($mixValue->IdEstado))
							throw new QCallerException('Unable to set an unsaved EstadoObject for this Cedulas');

						// Update Local Member Variables
						$this->objEstadoObject = $mixValue;
						$this->intEstado = $mixValue->IdEstado;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
			$strToReturn = '<complexType name="Cedulas"><sequence>';
			$strToReturn .= '<element name="IdCedulas" type="xsd:int"/>';
			$strToReturn .= '<element name="Localidad" type="xsd:string"/>';
			$strToReturn .= '<element name="Autos" type="xsd:string"/>';
			$strToReturn .= '<element name="Direccion" type="xsd:string"/>';
			$strToReturn .= '<element name="AgenteObject" type="xsd1:Agentes"/>';
			$strToReturn .= '<element name="FechaIngreso" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaSalida" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaFin" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Audiencia" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="EstadoObject" type="xsd1:Estados"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Cedulas', $strComplexTypeArray)) {
				$strComplexTypeArray['Cedulas'] = Cedulas::GetSoapComplexTypeXml();
				Agentes::AlterSoapComplexTypeArray($strComplexTypeArray);
				Estados::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Cedulas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Cedulas();
			if (property_exists($objSoapObject, 'IdCedulas'))
				$objToReturn->intIdCedulas = $objSoapObject->IdCedulas;
			if (property_exists($objSoapObject, 'Localidad'))
				$objToReturn->strLocalidad = $objSoapObject->Localidad;
			if (property_exists($objSoapObject, 'Autos'))
				$objToReturn->strAutos = $objSoapObject->Autos;
			if (property_exists($objSoapObject, 'Direccion'))
				$objToReturn->strDireccion = $objSoapObject->Direccion;
			if ((property_exists($objSoapObject, 'AgenteObject')) &&
				($objSoapObject->AgenteObject))
				$objToReturn->AgenteObject = Agentes::GetObjectFromSoapObject($objSoapObject->AgenteObject);
			if (property_exists($objSoapObject, 'FechaIngreso'))
				$objToReturn->dttFechaIngreso = new QDateTime($objSoapObject->FechaIngreso);
			if (property_exists($objSoapObject, 'FechaSalida'))
				$objToReturn->dttFechaSalida = new QDateTime($objSoapObject->FechaSalida);
			if (property_exists($objSoapObject, 'FechaFin'))
				$objToReturn->dttFechaFin = new QDateTime($objSoapObject->FechaFin);
			if (property_exists($objSoapObject, 'Audiencia'))
				$objToReturn->dttAudiencia = new QDateTime($objSoapObject->Audiencia);
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if ((property_exists($objSoapObject, 'EstadoObject')) &&
				($objSoapObject->EstadoObject))
				$objToReturn->EstadoObject = Estados::GetObjectFromSoapObject($objSoapObject->EstadoObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Cedulas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objAgenteObject)
				$objObject->objAgenteObject = Agentes::GetSoapObjectFromObject($objObject->objAgenteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAgente = null;
			if ($objObject->dttFechaIngreso)
				$objObject->dttFechaIngreso = $objObject->dttFechaIngreso->__toString(QDateTime::FormatSoap);
			if ($objObject->dttFechaSalida)
				$objObject->dttFechaSalida = $objObject->dttFechaSalida->__toString(QDateTime::FormatSoap);
			if ($objObject->dttFechaFin)
				$objObject->dttFechaFin = $objObject->dttFechaFin->__toString(QDateTime::FormatSoap);
			if ($objObject->dttAudiencia)
				$objObject->dttAudiencia = $objObject->dttAudiencia->__toString(QDateTime::FormatSoap);
			if ($objObject->objEstadoObject)
				$objObject->objEstadoObject = Estados::GetSoapObjectFromObject($objObject->objEstadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEstado = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $IdCedulas
	 * @property-read QQNode $Localidad
	 * @property-read QQNode $Autos
	 * @property-read QQNode $Direccion
	 * @property-read QQNode $Agente
	 * @property-read QQNodeAgentes $AgenteObject
	 * @property-read QQNode $FechaIngreso
	 * @property-read QQNode $FechaSalida
	 * @property-read QQNode $FechaFin
	 * @property-read QQNode $Audiencia
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $Estado
	 * @property-read QQNodeEstados $EstadoObject
	 */
	class QQNodeCedulas extends QQNode {
		protected $strTableName = 'cedulas';
		protected $strPrimaryKey = 'id_cedulas';
		protected $strClassName = 'Cedulas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdCedulas':
					return new QQNode('id_cedulas', 'IdCedulas', 'integer', $this);
				case 'Localidad':
					return new QQNode('localidad', 'Localidad', 'string', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Agente':
					return new QQNode('agente', 'Agente', 'integer', $this);
				case 'AgenteObject':
					return new QQNodeAgentes('agente', 'AgenteObject', 'integer', $this);
				case 'FechaIngreso':
					return new QQNode('fecha_ingreso', 'FechaIngreso', 'QDateTime', $this);
				case 'FechaSalida':
					return new QQNode('fecha_salida', 'FechaSalida', 'QDateTime', $this);
				case 'FechaFin':
					return new QQNode('fecha_fin', 'FechaFin', 'QDateTime', $this);
				case 'Audiencia':
					return new QQNode('audiencia', 'Audiencia', 'QDateTime', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'EstadoObject':
					return new QQNodeEstados('estado', 'EstadoObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_cedulas', 'IdCedulas', 'integer', $this);
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
	 * @property-read QQNode $IdCedulas
	 * @property-read QQNode $Localidad
	 * @property-read QQNode $Autos
	 * @property-read QQNode $Direccion
	 * @property-read QQNode $Agente
	 * @property-read QQNodeAgentes $AgenteObject
	 * @property-read QQNode $FechaIngreso
	 * @property-read QQNode $FechaSalida
	 * @property-read QQNode $FechaFin
	 * @property-read QQNode $Audiencia
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $Estado
	 * @property-read QQNodeEstados $EstadoObject
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCedulas extends QQReverseReferenceNode {
		protected $strTableName = 'cedulas';
		protected $strPrimaryKey = 'id_cedulas';
		protected $strClassName = 'Cedulas';
		public function __get($strName) {
			switch ($strName) {
				case 'IdCedulas':
					return new QQNode('id_cedulas', 'IdCedulas', 'integer', $this);
				case 'Localidad':
					return new QQNode('localidad', 'Localidad', 'string', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Agente':
					return new QQNode('agente', 'Agente', 'integer', $this);
				case 'AgenteObject':
					return new QQNodeAgentes('agente', 'AgenteObject', 'integer', $this);
				case 'FechaIngreso':
					return new QQNode('fecha_ingreso', 'FechaIngreso', 'QDateTime', $this);
				case 'FechaSalida':
					return new QQNode('fecha_salida', 'FechaSalida', 'QDateTime', $this);
				case 'FechaFin':
					return new QQNode('fecha_fin', 'FechaFin', 'QDateTime', $this);
				case 'Audiencia':
					return new QQNode('audiencia', 'Audiencia', 'QDateTime', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'EstadoObject':
					return new QQNodeEstados('estado', 'EstadoObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_cedulas', 'IdCedulas', 'integer', $this);
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