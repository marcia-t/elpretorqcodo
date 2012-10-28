<?php
	/**
	 * The abstract TramitesAsignadosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TramitesAsignados subclass which
	 * extends this TramitesAsignadosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TramitesAsignados class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdTramiteAsignado the value for intIdTramiteAsignado (Read-Only PK)
	 * @property integer $IdAgente the value for intIdAgente (Not Null)
	 * @property integer $NroAbogado the value for intNroAbogado (Not Null)
	 * @property integer $IdEstado the value for intIdEstado (Not Null)
	 * @property QDateTime $FechaIngreso the value for dttFechaIngreso (Not Null)
	 * @property QDateTime $FechaSalida the value for dttFechaSalida 
	 * @property integer $TipoTramite the value for intTipoTramite (Not Null)
	 * @property string $Autos the value for strAutos 
	 * @property QDateTime $FechaVencimiento the value for dttFechaVencimiento (Not Null)
	 * @property Agentes $IdAgenteObject the value for the Agentes object referenced by intIdAgente (Not Null)
	 * @property Abogados $NroAbogadoObject the value for the Abogados object referenced by intNroAbogado (Not Null)
	 * @property Estados $IdEstadoObject the value for the Estados object referenced by intIdEstado (Not Null)
	 * @property TipoTramites $TipoTramiteObject the value for the TipoTramites object referenced by intTipoTramite (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TramitesAsignadosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column tramites_asignados.id_tramite_asignado
		 * @var integer intIdTramiteAsignado
		 */
		protected $intIdTramiteAsignado;
		const IdTramiteAsignadoDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.id_agente
		 * @var integer intIdAgente
		 */
		protected $intIdAgente;
		const IdAgenteDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.nro_abogado
		 * @var integer intNroAbogado
		 */
		protected $intNroAbogado;
		const NroAbogadoDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.id_estado
		 * @var integer intIdEstado
		 */
		protected $intIdEstado;
		const IdEstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.fecha_ingreso
		 * @var QDateTime dttFechaIngreso
		 */
		protected $dttFechaIngreso;
		const FechaIngresoDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.fecha_salida
		 * @var QDateTime dttFechaSalida
		 */
		protected $dttFechaSalida;
		const FechaSalidaDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.tipo_tramite
		 * @var integer intTipoTramite
		 */
		protected $intTipoTramite;
		const TipoTramiteDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.autos
		 * @var string strAutos
		 */
		protected $strAutos;
		const AutosMaxLength = 500;
		const AutosDefault = null;


		/**
		 * Protected member variable that maps to the database column tramites_asignados.fecha_vencimiento
		 * @var QDateTime dttFechaVencimiento
		 */
		protected $dttFechaVencimiento;
		const FechaVencimientoDefault = null;


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
		 * in the database column tramites_asignados.id_agente.
		 *
		 * NOTE: Always use the IdAgenteObject property getter to correctly retrieve this Agentes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Agentes objIdAgenteObject
		 */
		protected $objIdAgenteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column tramites_asignados.nro_abogado.
		 *
		 * NOTE: Always use the NroAbogadoObject property getter to correctly retrieve this Abogados object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Abogados objNroAbogadoObject
		 */
		protected $objNroAbogadoObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column tramites_asignados.id_estado.
		 *
		 * NOTE: Always use the IdEstadoObject property getter to correctly retrieve this Estados object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Estados objIdEstadoObject
		 */
		protected $objIdEstadoObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column tramites_asignados.tipo_tramite.
		 *
		 * NOTE: Always use the TipoTramiteObject property getter to correctly retrieve this TipoTramites object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TipoTramites objTipoTramiteObject
		 */
		protected $objTipoTramiteObject;





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
		 * Load a TramitesAsignados from PK Info
		 * @param integer $intIdTramiteAsignado
		 * @return TramitesAsignados
		 */
		public static function Load($intIdTramiteAsignado) {
			// Use QuerySingle to Perform the Query
			return TramitesAsignados::QuerySingle(
				QQ::Equal(QQN::TramitesAsignados()->IdTramiteAsignado, $intIdTramiteAsignado)
			);
		}

		/**
		 * Load all TramitesAsignadoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call TramitesAsignados::QueryArray to perform the LoadAll query
			try {
				return TramitesAsignados::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TramitesAsignadoses
		 * @return int
		 */
		public static function CountAll() {
			// Call TramitesAsignados::QueryCount to perform the CountAll query
			return TramitesAsignados::QueryCount(QQ::All());
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
			$objDatabase = TramitesAsignados::GetDatabase();

			// Create/Build out the QueryBuilder object with TramitesAsignados-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'tramites_asignados');
			TramitesAsignados::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('tramites_asignados');

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
		 * Static Qcodo Query method to query for a single TramitesAsignados object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TramitesAsignados the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TramitesAsignados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new TramitesAsignados object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TramitesAsignados::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TramitesAsignados::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of TramitesAsignados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TramitesAsignados[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TramitesAsignados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TramitesAsignados::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TramitesAsignados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of TramitesAsignados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TramitesAsignados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TramitesAsignados::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'tramites_asignados_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with TramitesAsignados-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				TramitesAsignados::GetSelectFields($objQueryBuilder);
				TramitesAsignados::GetFromFields($objQueryBuilder);

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
			return TramitesAsignados::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TramitesAsignados
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'tramites_asignados';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_tramite_asignado', $strAliasPrefix . 'id_tramite_asignado');
			$objBuilder->AddSelectItem($strTableName, 'id_agente', $strAliasPrefix . 'id_agente');
			$objBuilder->AddSelectItem($strTableName, 'nro_abogado', $strAliasPrefix . 'nro_abogado');
			$objBuilder->AddSelectItem($strTableName, 'id_estado', $strAliasPrefix . 'id_estado');
			$objBuilder->AddSelectItem($strTableName, 'fecha_ingreso', $strAliasPrefix . 'fecha_ingreso');
			$objBuilder->AddSelectItem($strTableName, 'fecha_salida', $strAliasPrefix . 'fecha_salida');
			$objBuilder->AddSelectItem($strTableName, 'tipo_tramite', $strAliasPrefix . 'tipo_tramite');
			$objBuilder->AddSelectItem($strTableName, 'autos', $strAliasPrefix . 'autos');
			$objBuilder->AddSelectItem($strTableName, 'fecha_vencimiento', $strAliasPrefix . 'fecha_vencimiento');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TramitesAsignados from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TramitesAsignados::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TramitesAsignados
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the TramitesAsignados object
			$objToReturn = new TramitesAsignados();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_tramite_asignado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tramite_asignado'] : $strAliasPrefix . 'id_tramite_asignado';
			$objToReturn->intIdTramiteAsignado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_agente', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_agente'] : $strAliasPrefix . 'id_agente';
			$objToReturn->intIdAgente = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nro_abogado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nro_abogado'] : $strAliasPrefix . 'nro_abogado';
			$objToReturn->intNroAbogado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_estado'] : $strAliasPrefix . 'id_estado';
			$objToReturn->intIdEstado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_ingreso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_ingreso'] : $strAliasPrefix . 'fecha_ingreso';
			$objToReturn->dttFechaIngreso = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_salida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_salida'] : $strAliasPrefix . 'fecha_salida';
			$objToReturn->dttFechaSalida = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'tipo_tramite', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tipo_tramite'] : $strAliasPrefix . 'tipo_tramite';
			$objToReturn->intTipoTramite = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'autos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'autos'] : $strAliasPrefix . 'autos';
			$objToReturn->strAutos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_vencimiento', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_vencimiento'] : $strAliasPrefix . 'fecha_vencimiento';
			$objToReturn->dttFechaVencimiento = $objDbRow->GetColumn($strAliasName, 'Date');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'tramites_asignados__';

			// Check for IdAgenteObject Early Binding
			$strAlias = $strAliasPrefix . 'id_agente__id_agente';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdAgenteObject = Agentes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_agente__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for NroAbogadoObject Early Binding
			$strAlias = $strAliasPrefix . 'nro_abogado__id_abogado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNroAbogadoObject = Abogados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nro_abogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdEstadoObject Early Binding
			$strAlias = $strAliasPrefix . 'id_estado__id_estado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdEstadoObject = Estados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_estado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TipoTramiteObject Early Binding
			$strAlias = $strAliasPrefix . 'tipo_tramite__id_tipo_tramite';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTipoTramiteObject = TipoTramites::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tipo_tramite__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of TramitesAsignadoses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TramitesAsignados[]
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
					$objItem = TramitesAsignados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TramitesAsignados::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single TramitesAsignados object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TramitesAsignados next row resulting from the query
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
			return TramitesAsignados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single TramitesAsignados object,
		 * by IdTramiteAsignado Index(es)
		 * @param integer $intIdTramiteAsignado
		 * @return TramitesAsignados
		*/
		public static function LoadByIdTramiteAsignado($intIdTramiteAsignado, $objOptionalClauses = null) {
			return TramitesAsignados::QuerySingle(
				QQ::Equal(QQN::TramitesAsignados()->IdTramiteAsignado, $intIdTramiteAsignado)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TramitesAsignados objects,
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/
		public static function LoadArrayByIdEstado($intIdEstado, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryArray to perform the LoadArrayByIdEstado query
			try {
				return TramitesAsignados::QueryArray(
					QQ::Equal(QQN::TramitesAsignados()->IdEstado, $intIdEstado),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TramitesAsignadoses
		 * by IdEstado Index(es)
		 * @param integer $intIdEstado
		 * @return int
		*/
		public static function CountByIdEstado($intIdEstado, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryCount to perform the CountByIdEstado query
			return TramitesAsignados::QueryCount(
				QQ::Equal(QQN::TramitesAsignados()->IdEstado, $intIdEstado)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TramitesAsignados objects,
		 * by IdAgente Index(es)
		 * @param integer $intIdAgente
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/
		public static function LoadArrayByIdAgente($intIdAgente, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryArray to perform the LoadArrayByIdAgente query
			try {
				return TramitesAsignados::QueryArray(
					QQ::Equal(QQN::TramitesAsignados()->IdAgente, $intIdAgente),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TramitesAsignadoses
		 * by IdAgente Index(es)
		 * @param integer $intIdAgente
		 * @return int
		*/
		public static function CountByIdAgente($intIdAgente, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryCount to perform the CountByIdAgente query
			return TramitesAsignados::QueryCount(
				QQ::Equal(QQN::TramitesAsignados()->IdAgente, $intIdAgente)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TramitesAsignados objects,
		 * by TipoTramite Index(es)
		 * @param integer $intTipoTramite
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/
		public static function LoadArrayByTipoTramite($intTipoTramite, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryArray to perform the LoadArrayByTipoTramite query
			try {
				return TramitesAsignados::QueryArray(
					QQ::Equal(QQN::TramitesAsignados()->TipoTramite, $intTipoTramite),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TramitesAsignadoses
		 * by TipoTramite Index(es)
		 * @param integer $intTipoTramite
		 * @return int
		*/
		public static function CountByTipoTramite($intTipoTramite, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryCount to perform the CountByTipoTramite query
			return TramitesAsignados::QueryCount(
				QQ::Equal(QQN::TramitesAsignados()->TipoTramite, $intTipoTramite)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TramitesAsignados objects,
		 * by NroAbogado Index(es)
		 * @param integer $intNroAbogado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/
		public static function LoadArrayByNroAbogado($intNroAbogado, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryArray to perform the LoadArrayByNroAbogado query
			try {
				return TramitesAsignados::QueryArray(
					QQ::Equal(QQN::TramitesAsignados()->NroAbogado, $intNroAbogado),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TramitesAsignadoses
		 * by NroAbogado Index(es)
		 * @param integer $intNroAbogado
		 * @return int
		*/
		public static function CountByNroAbogado($intNroAbogado, $objOptionalClauses = null) {
			// Call TramitesAsignados::QueryCount to perform the CountByNroAbogado query
			return TramitesAsignados::QueryCount(
				QQ::Equal(QQN::TramitesAsignados()->NroAbogado, $intNroAbogado)
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
		 * Save this TramitesAsignados
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TramitesAsignados::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `tramites_asignados` (
							`id_agente`,
							`nro_abogado`,
							`id_estado`,
							`fecha_ingreso`,
							`fecha_salida`,
							`tipo_tramite`,
							`autos`,
							`fecha_vencimiento`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdAgente) . ',
							' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
							' . $objDatabase->SqlVariable($this->intIdEstado) . ',
							' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
							' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
							' . $objDatabase->SqlVariable($this->intTipoTramite) . ',
							' . $objDatabase->SqlVariable($this->strAutos) . ',
							' . $objDatabase->SqlVariable($this->dttFechaVencimiento) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdTramiteAsignado = $objDatabase->InsertId('tramites_asignados', 'id_tramite_asignado');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`tramites_asignados`
						SET
							`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . ',
							`nro_abogado` = ' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
							`id_estado` = ' . $objDatabase->SqlVariable($this->intIdEstado) . ',
							`fecha_ingreso` = ' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
							`fecha_salida` = ' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
							`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intTipoTramite) . ',
							`autos` = ' . $objDatabase->SqlVariable($this->strAutos) . ',
							`fecha_vencimiento` = ' . $objDatabase->SqlVariable($this->dttFechaVencimiento) . '
						WHERE
							`id_tramite_asignado` = ' . $objDatabase->SqlVariable($this->intIdTramiteAsignado) . '
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
		 * Delete this TramitesAsignados
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TramitesAsignados with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TramitesAsignados::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($this->intIdTramiteAsignado) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all TramitesAsignadoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TramitesAsignados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`');
		}

		/**
		 * Truncate tramites_asignados table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TramitesAsignados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `tramites_asignados`');
		}

		/**
		 * Reload this TramitesAsignados from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TramitesAsignados object.');

			// Reload the Object
			$objReloaded = TramitesAsignados::Load($this->intIdTramiteAsignado);

			// Update $this's local variables to match
			$this->IdAgente = $objReloaded->IdAgente;
			$this->NroAbogado = $objReloaded->NroAbogado;
			$this->IdEstado = $objReloaded->IdEstado;
			$this->dttFechaIngreso = $objReloaded->dttFechaIngreso;
			$this->dttFechaSalida = $objReloaded->dttFechaSalida;
			$this->TipoTramite = $objReloaded->TipoTramite;
			$this->strAutos = $objReloaded->strAutos;
			$this->dttFechaVencimiento = $objReloaded->dttFechaVencimiento;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = TramitesAsignados::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `tramites_asignados` (
					`id_tramite_asignado`,
					`id_agente`,
					`nro_abogado`,
					`id_estado`,
					`fecha_ingreso`,
					`fecha_salida`,
					`tipo_tramite`,
					`autos`,
					`fecha_vencimiento`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdTramiteAsignado) . ',
					' . $objDatabase->SqlVariable($this->intIdAgente) . ',
					' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
					' . $objDatabase->SqlVariable($this->intIdEstado) . ',
					' . $objDatabase->SqlVariable($this->dttFechaIngreso) . ',
					' . $objDatabase->SqlVariable($this->dttFechaSalida) . ',
					' . $objDatabase->SqlVariable($this->intTipoTramite) . ',
					' . $objDatabase->SqlVariable($this->strAutos) . ',
					' . $objDatabase->SqlVariable($this->dttFechaVencimiento) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdTramiteAsignado
		 * @return TramitesAsignados[]
		 */
		public static function GetJournalForId($intIdTramiteAsignado) {
			$objDatabase = TramitesAsignados::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM tramites_asignados WHERE id_tramite_asignado = ' .
				$objDatabase->SqlVariable($intIdTramiteAsignado) . ' ORDER BY __sys_date');

			return TramitesAsignados::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return TramitesAsignados[]
		 */
		public function GetJournal() {
			return TramitesAsignados::GetJournalForId($this->intIdTramiteAsignado);
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
				case 'IdTramiteAsignado':
					// Gets the value for intIdTramiteAsignado (Read-Only PK)
					// @return integer
					return $this->intIdTramiteAsignado;

				case 'IdAgente':
					// Gets the value for intIdAgente (Not Null)
					// @return integer
					return $this->intIdAgente;

				case 'NroAbogado':
					// Gets the value for intNroAbogado (Not Null)
					// @return integer
					return $this->intNroAbogado;

				case 'IdEstado':
					// Gets the value for intIdEstado (Not Null)
					// @return integer
					return $this->intIdEstado;

				case 'FechaIngreso':
					// Gets the value for dttFechaIngreso (Not Null)
					// @return QDateTime
					return $this->dttFechaIngreso;

				case 'FechaSalida':
					// Gets the value for dttFechaSalida 
					// @return QDateTime
					return $this->dttFechaSalida;

				case 'TipoTramite':
					// Gets the value for intTipoTramite (Not Null)
					// @return integer
					return $this->intTipoTramite;

				case 'Autos':
					// Gets the value for strAutos 
					// @return string
					return $this->strAutos;

				case 'FechaVencimiento':
					// Gets the value for dttFechaVencimiento (Not Null)
					// @return QDateTime
					return $this->dttFechaVencimiento;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdAgenteObject':
					// Gets the value for the Agentes object referenced by intIdAgente (Not Null)
					// @return Agentes
					try {
						if ((!$this->objIdAgenteObject) && (!is_null($this->intIdAgente)))
							$this->objIdAgenteObject = Agentes::Load($this->intIdAgente);
						return $this->objIdAgenteObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NroAbogadoObject':
					// Gets the value for the Abogados object referenced by intNroAbogado (Not Null)
					// @return Abogados
					try {
						if ((!$this->objNroAbogadoObject) && (!is_null($this->intNroAbogado)))
							$this->objNroAbogadoObject = Abogados::Load($this->intNroAbogado);
						return $this->objNroAbogadoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdEstadoObject':
					// Gets the value for the Estados object referenced by intIdEstado (Not Null)
					// @return Estados
					try {
						if ((!$this->objIdEstadoObject) && (!is_null($this->intIdEstado)))
							$this->objIdEstadoObject = Estados::Load($this->intIdEstado);
						return $this->objIdEstadoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TipoTramiteObject':
					// Gets the value for the TipoTramites object referenced by intTipoTramite (Not Null)
					// @return TipoTramites
					try {
						if ((!$this->objTipoTramiteObject) && (!is_null($this->intTipoTramite)))
							$this->objTipoTramiteObject = TipoTramites::Load($this->intTipoTramite);
						return $this->objTipoTramiteObject;
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
				case 'IdAgente':
					// Sets the value for intIdAgente (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objIdAgenteObject = null;
						return ($this->intIdAgente = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NroAbogado':
					// Sets the value for intNroAbogado (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objNroAbogadoObject = null;
						return ($this->intNroAbogado = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdEstado':
					// Sets the value for intIdEstado (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objIdEstadoObject = null;
						return ($this->intIdEstado = QType::Cast($mixValue, QType::Integer));
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

				case 'TipoTramite':
					// Sets the value for intTipoTramite (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objTipoTramiteObject = null;
						return ($this->intTipoTramite = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Autos':
					// Sets the value for strAutos 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAutos = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaVencimiento':
					// Sets the value for dttFechaVencimiento (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttFechaVencimiento = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdAgenteObject':
					// Sets the value for the Agentes object referenced by intIdAgente (Not Null)
					// @param Agentes $mixValue
					// @return Agentes
					if (is_null($mixValue)) {
						$this->intIdAgente = null;
						$this->objIdAgenteObject = null;
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
							throw new QCallerException('Unable to set an unsaved IdAgenteObject for this TramitesAsignados');

						// Update Local Member Variables
						$this->objIdAgenteObject = $mixValue;
						$this->intIdAgente = $mixValue->IdAgente;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'NroAbogadoObject':
					// Sets the value for the Abogados object referenced by intNroAbogado (Not Null)
					// @param Abogados $mixValue
					// @return Abogados
					if (is_null($mixValue)) {
						$this->intNroAbogado = null;
						$this->objNroAbogadoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Abogados object
						try {
							$mixValue = QType::Cast($mixValue, 'Abogados');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Abogados object
						if (is_null($mixValue->IdAbogado))
							throw new QCallerException('Unable to set an unsaved NroAbogadoObject for this TramitesAsignados');

						// Update Local Member Variables
						$this->objNroAbogadoObject = $mixValue;
						$this->intNroAbogado = $mixValue->IdAbogado;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdEstadoObject':
					// Sets the value for the Estados object referenced by intIdEstado (Not Null)
					// @param Estados $mixValue
					// @return Estados
					if (is_null($mixValue)) {
						$this->intIdEstado = null;
						$this->objIdEstadoObject = null;
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
							throw new QCallerException('Unable to set an unsaved IdEstadoObject for this TramitesAsignados');

						// Update Local Member Variables
						$this->objIdEstadoObject = $mixValue;
						$this->intIdEstado = $mixValue->IdEstado;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TipoTramiteObject':
					// Sets the value for the TipoTramites object referenced by intTipoTramite (Not Null)
					// @param TipoTramites $mixValue
					// @return TipoTramites
					if (is_null($mixValue)) {
						$this->intTipoTramite = null;
						$this->objTipoTramiteObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a TipoTramites object
						try {
							$mixValue = QType::Cast($mixValue, 'TipoTramites');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED TipoTramites object
						if (is_null($mixValue->IdTipoTramite))
							throw new QCallerException('Unable to set an unsaved TipoTramiteObject for this TramitesAsignados');

						// Update Local Member Variables
						$this->objTipoTramiteObject = $mixValue;
						$this->intTipoTramite = $mixValue->IdTipoTramite;

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
			$strToReturn = '<complexType name="TramitesAsignados"><sequence>';
			$strToReturn .= '<element name="IdTramiteAsignado" type="xsd:int"/>';
			$strToReturn .= '<element name="IdAgenteObject" type="xsd1:Agentes"/>';
			$strToReturn .= '<element name="NroAbogadoObject" type="xsd1:Abogados"/>';
			$strToReturn .= '<element name="IdEstadoObject" type="xsd1:Estados"/>';
			$strToReturn .= '<element name="FechaIngreso" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaSalida" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="TipoTramiteObject" type="xsd1:TipoTramites"/>';
			$strToReturn .= '<element name="Autos" type="xsd:string"/>';
			$strToReturn .= '<element name="FechaVencimiento" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TramitesAsignados', $strComplexTypeArray)) {
				$strComplexTypeArray['TramitesAsignados'] = TramitesAsignados::GetSoapComplexTypeXml();
				Agentes::AlterSoapComplexTypeArray($strComplexTypeArray);
				Abogados::AlterSoapComplexTypeArray($strComplexTypeArray);
				Estados::AlterSoapComplexTypeArray($strComplexTypeArray);
				TipoTramites::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TramitesAsignados::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TramitesAsignados();
			if (property_exists($objSoapObject, 'IdTramiteAsignado'))
				$objToReturn->intIdTramiteAsignado = $objSoapObject->IdTramiteAsignado;
			if ((property_exists($objSoapObject, 'IdAgenteObject')) &&
				($objSoapObject->IdAgenteObject))
				$objToReturn->IdAgenteObject = Agentes::GetObjectFromSoapObject($objSoapObject->IdAgenteObject);
			if ((property_exists($objSoapObject, 'NroAbogadoObject')) &&
				($objSoapObject->NroAbogadoObject))
				$objToReturn->NroAbogadoObject = Abogados::GetObjectFromSoapObject($objSoapObject->NroAbogadoObject);
			if ((property_exists($objSoapObject, 'IdEstadoObject')) &&
				($objSoapObject->IdEstadoObject))
				$objToReturn->IdEstadoObject = Estados::GetObjectFromSoapObject($objSoapObject->IdEstadoObject);
			if (property_exists($objSoapObject, 'FechaIngreso'))
				$objToReturn->dttFechaIngreso = new QDateTime($objSoapObject->FechaIngreso);
			if (property_exists($objSoapObject, 'FechaSalida'))
				$objToReturn->dttFechaSalida = new QDateTime($objSoapObject->FechaSalida);
			if ((property_exists($objSoapObject, 'TipoTramiteObject')) &&
				($objSoapObject->TipoTramiteObject))
				$objToReturn->TipoTramiteObject = TipoTramites::GetObjectFromSoapObject($objSoapObject->TipoTramiteObject);
			if (property_exists($objSoapObject, 'Autos'))
				$objToReturn->strAutos = $objSoapObject->Autos;
			if (property_exists($objSoapObject, 'FechaVencimiento'))
				$objToReturn->dttFechaVencimiento = new QDateTime($objSoapObject->FechaVencimiento);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TramitesAsignados::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdAgenteObject)
				$objObject->objIdAgenteObject = Agentes::GetSoapObjectFromObject($objObject->objIdAgenteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdAgente = null;
			if ($objObject->objNroAbogadoObject)
				$objObject->objNroAbogadoObject = Abogados::GetSoapObjectFromObject($objObject->objNroAbogadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intNroAbogado = null;
			if ($objObject->objIdEstadoObject)
				$objObject->objIdEstadoObject = Estados::GetSoapObjectFromObject($objObject->objIdEstadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdEstado = null;
			if ($objObject->dttFechaIngreso)
				$objObject->dttFechaIngreso = $objObject->dttFechaIngreso->__toString(QDateTime::FormatSoap);
			if ($objObject->dttFechaSalida)
				$objObject->dttFechaSalida = $objObject->dttFechaSalida->__toString(QDateTime::FormatSoap);
			if ($objObject->objTipoTramiteObject)
				$objObject->objTipoTramiteObject = TipoTramites::GetSoapObjectFromObject($objObject->objTipoTramiteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTipoTramite = null;
			if ($objObject->dttFechaVencimiento)
				$objObject->dttFechaVencimiento = $objObject->dttFechaVencimiento->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $IdTramiteAsignado
	 * @property-read QQNode $IdAgente
	 * @property-read QQNodeAgentes $IdAgenteObject
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNodeAbogados $NroAbogadoObject
	 * @property-read QQNode $IdEstado
	 * @property-read QQNodeEstados $IdEstadoObject
	 * @property-read QQNode $FechaIngreso
	 * @property-read QQNode $FechaSalida
	 * @property-read QQNode $TipoTramite
	 * @property-read QQNodeTipoTramites $TipoTramiteObject
	 * @property-read QQNode $Autos
	 * @property-read QQNode $FechaVencimiento
	 */
	class QQNodeTramitesAsignados extends QQNode {
		protected $strTableName = 'tramites_asignados';
		protected $strPrimaryKey = 'id_tramite_asignado';
		protected $strClassName = 'TramitesAsignados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTramiteAsignado':
					return new QQNode('id_tramite_asignado', 'IdTramiteAsignado', 'integer', $this);
				case 'IdAgente':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
				case 'IdAgenteObject':
					return new QQNodeAgentes('id_agente', 'IdAgenteObject', 'integer', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'integer', $this);
				case 'NroAbogadoObject':
					return new QQNodeAbogados('nro_abogado', 'NroAbogadoObject', 'integer', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'IdEstadoObject':
					return new QQNodeEstados('id_estado', 'IdEstadoObject', 'integer', $this);
				case 'FechaIngreso':
					return new QQNode('fecha_ingreso', 'FechaIngreso', 'QDateTime', $this);
				case 'FechaSalida':
					return new QQNode('fecha_salida', 'FechaSalida', 'QDateTime', $this);
				case 'TipoTramite':
					return new QQNode('tipo_tramite', 'TipoTramite', 'integer', $this);
				case 'TipoTramiteObject':
					return new QQNodeTipoTramites('tipo_tramite', 'TipoTramiteObject', 'integer', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'FechaVencimiento':
					return new QQNode('fecha_vencimiento', 'FechaVencimiento', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_tramite_asignado', 'IdTramiteAsignado', 'integer', $this);
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
	 * @property-read QQNode $IdTramiteAsignado
	 * @property-read QQNode $IdAgente
	 * @property-read QQNodeAgentes $IdAgenteObject
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNodeAbogados $NroAbogadoObject
	 * @property-read QQNode $IdEstado
	 * @property-read QQNodeEstados $IdEstadoObject
	 * @property-read QQNode $FechaIngreso
	 * @property-read QQNode $FechaSalida
	 * @property-read QQNode $TipoTramite
	 * @property-read QQNodeTipoTramites $TipoTramiteObject
	 * @property-read QQNode $Autos
	 * @property-read QQNode $FechaVencimiento
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeTramitesAsignados extends QQReverseReferenceNode {
		protected $strTableName = 'tramites_asignados';
		protected $strPrimaryKey = 'id_tramite_asignado';
		protected $strClassName = 'TramitesAsignados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTramiteAsignado':
					return new QQNode('id_tramite_asignado', 'IdTramiteAsignado', 'integer', $this);
				case 'IdAgente':
					return new QQNode('id_agente', 'IdAgente', 'integer', $this);
				case 'IdAgenteObject':
					return new QQNodeAgentes('id_agente', 'IdAgenteObject', 'integer', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'integer', $this);
				case 'NroAbogadoObject':
					return new QQNodeAbogados('nro_abogado', 'NroAbogadoObject', 'integer', $this);
				case 'IdEstado':
					return new QQNode('id_estado', 'IdEstado', 'integer', $this);
				case 'IdEstadoObject':
					return new QQNodeEstados('id_estado', 'IdEstadoObject', 'integer', $this);
				case 'FechaIngreso':
					return new QQNode('fecha_ingreso', 'FechaIngreso', 'QDateTime', $this);
				case 'FechaSalida':
					return new QQNode('fecha_salida', 'FechaSalida', 'QDateTime', $this);
				case 'TipoTramite':
					return new QQNode('tipo_tramite', 'TipoTramite', 'integer', $this);
				case 'TipoTramiteObject':
					return new QQNodeTipoTramites('tipo_tramite', 'TipoTramiteObject', 'integer', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'FechaVencimiento':
					return new QQNode('fecha_vencimiento', 'FechaVencimiento', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_tramite_asignado', 'IdTramiteAsignado', 'integer', $this);
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