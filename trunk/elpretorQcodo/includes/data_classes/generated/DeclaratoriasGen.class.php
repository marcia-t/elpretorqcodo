<?php
	/**
	 * The abstract DeclaratoriasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Declaratorias subclass which
	 * extends this DeclaratoriasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Declaratorias class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdDeclaratoria the value for intIdDeclaratoria (Read-Only PK)
	 * @property QDateTime $FechaInicio the value for dttFechaInicio (Not Null)
	 * @property integer $Estado the value for intEstado (Not Null)
	 * @property integer $Honorarios the value for intHonorarios (Not Null)
	 * @property integer $Timbrado the value for intTimbrado (Not Null)
	 * @property integer $NroAbogado the value for intNroAbogado (Not Null)
	 * @property string $Contacto the value for strContacto 
	 * @property string $Observaciones the value for strObservaciones 
	 * @property string $Autos the value for strAutos 
	 * @property QDateTime $FechaFin the value for dttFechaFin 
	 * @property integer $Observada the value for intObservada (Not Null)
	 * @property EstadoDeclaratoria $EstadoObject the value for the EstadoDeclaratoria object referenced by intEstado (Not Null)
	 * @property Abogados $NroAbogadoObject the value for the Abogados object referenced by intNroAbogado (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DeclaratoriasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column declaratorias.id_declaratoria
		 * @var integer intIdDeclaratoria
		 */
		protected $intIdDeclaratoria;
		const IdDeclaratoriaDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.fecha_inicio
		 * @var QDateTime dttFechaInicio
		 */
		protected $dttFechaInicio;
		const FechaInicioDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.estado
		 * @var integer intEstado
		 */
		protected $intEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.honorarios
		 * @var integer intHonorarios
		 */
		protected $intHonorarios;
		const HonorariosDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.timbrado
		 * @var integer intTimbrado
		 */
		protected $intTimbrado;
		const TimbradoDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.nro_abogado
		 * @var integer intNroAbogado
		 */
		protected $intNroAbogado;
		const NroAbogadoDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.contacto
		 * @var string strContacto
		 */
		protected $strContacto;
		const ContactoMaxLength = 45;
		const ContactoDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesMaxLength = 128;
		const ObservacionesDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.autos
		 * @var string strAutos
		 */
		protected $strAutos;
		const AutosMaxLength = 255;
		const AutosDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.fecha_fin
		 * @var QDateTime dttFechaFin
		 */
		protected $dttFechaFin;
		const FechaFinDefault = null;


		/**
		 * Protected member variable that maps to the database column declaratorias.observada
		 * @var integer intObservada
		 */
		protected $intObservada;
		const ObservadaDefault = null;


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
		 * in the database column declaratorias.estado.
		 *
		 * NOTE: Always use the EstadoObject property getter to correctly retrieve this EstadoDeclaratoria object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EstadoDeclaratoria objEstadoObject
		 */
		protected $objEstadoObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column declaratorias.nro_abogado.
		 *
		 * NOTE: Always use the NroAbogadoObject property getter to correctly retrieve this Abogados object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Abogados objNroAbogadoObject
		 */
		protected $objNroAbogadoObject;





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
		 * Load a Declaratorias from PK Info
		 * @param integer $intIdDeclaratoria
		 * @return Declaratorias
		 */
		public static function Load($intIdDeclaratoria) {
			// Use QuerySingle to Perform the Query
			return Declaratorias::QuerySingle(
				QQ::Equal(QQN::Declaratorias()->IdDeclaratoria, $intIdDeclaratoria)
			);
		}

		/**
		 * Load all Declaratoriases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Declaratorias[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Declaratorias::QueryArray to perform the LoadAll query
			try {
				return Declaratorias::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Declaratoriases
		 * @return int
		 */
		public static function CountAll() {
			// Call Declaratorias::QueryCount to perform the CountAll query
			return Declaratorias::QueryCount(QQ::All());
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
			$objDatabase = Declaratorias::GetDatabase();

			// Create/Build out the QueryBuilder object with Declaratorias-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'declaratorias');
			Declaratorias::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('declaratorias');

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
		 * Static Qcodo Query method to query for a single Declaratorias object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Declaratorias the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Declaratorias::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Declaratorias object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Declaratorias::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Declaratorias::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Declaratorias objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Declaratorias[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Declaratorias::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Declaratorias::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Declaratorias::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Declaratorias objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Declaratorias::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Declaratorias::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'declaratorias_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Declaratorias-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Declaratorias::GetSelectFields($objQueryBuilder);
				Declaratorias::GetFromFields($objQueryBuilder);

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
			return Declaratorias::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Declaratorias
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'declaratorias';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_declaratoria', $strAliasPrefix . 'id_declaratoria');
			$objBuilder->AddSelectItem($strTableName, 'fecha_inicio', $strAliasPrefix . 'fecha_inicio');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'honorarios', $strAliasPrefix . 'honorarios');
			$objBuilder->AddSelectItem($strTableName, 'timbrado', $strAliasPrefix . 'timbrado');
			$objBuilder->AddSelectItem($strTableName, 'nro_abogado', $strAliasPrefix . 'nro_abogado');
			$objBuilder->AddSelectItem($strTableName, 'contacto', $strAliasPrefix . 'contacto');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
			$objBuilder->AddSelectItem($strTableName, 'autos', $strAliasPrefix . 'autos');
			$objBuilder->AddSelectItem($strTableName, 'fecha_fin', $strAliasPrefix . 'fecha_fin');
			$objBuilder->AddSelectItem($strTableName, 'observada', $strAliasPrefix . 'observada');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Declaratorias from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Declaratorias::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Declaratorias
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the Declaratorias object
			$objToReturn = new Declaratorias();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_declaratoria', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_declaratoria'] : $strAliasPrefix . 'id_declaratoria';
			$objToReturn->intIdDeclaratoria = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_inicio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_inicio'] : $strAliasPrefix . 'fecha_inicio';
			$objToReturn->dttFechaInicio = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->intEstado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'honorarios', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'honorarios'] : $strAliasPrefix . 'honorarios';
			$objToReturn->intHonorarios = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'timbrado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'timbrado'] : $strAliasPrefix . 'timbrado';
			$objToReturn->intTimbrado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nro_abogado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nro_abogado'] : $strAliasPrefix . 'nro_abogado';
			$objToReturn->intNroAbogado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'contacto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'contacto'] : $strAliasPrefix . 'contacto';
			$objToReturn->strContacto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'autos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'autos'] : $strAliasPrefix . 'autos';
			$objToReturn->strAutos = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_fin', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_fin'] : $strAliasPrefix . 'fecha_fin';
			$objToReturn->dttFechaFin = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'observada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observada'] : $strAliasPrefix . 'observada';
			$objToReturn->intObservada = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'declaratorias__';

			// Check for EstadoObject Early Binding
			$strAlias = $strAliasPrefix . 'estado__id_estado_declaratoria';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEstadoObject = EstadoDeclaratoria::InstantiateDbRow($objDbRow, $strAliasPrefix . 'estado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for NroAbogadoObject Early Binding
			$strAlias = $strAliasPrefix . 'nro_abogado__id_abogado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNroAbogadoObject = Abogados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nro_abogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Declaratoriases from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Declaratorias[]
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
					$objItem = Declaratorias::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Declaratorias::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Declaratorias object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Declaratorias next row resulting from the query
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
			return Declaratorias::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Declaratorias object,
		 * by IdDeclaratoria Index(es)
		 * @param integer $intIdDeclaratoria
		 * @return Declaratorias
		*/
		public static function LoadByIdDeclaratoria($intIdDeclaratoria, $objOptionalClauses = null) {
			return Declaratorias::QuerySingle(
				QQ::Equal(QQN::Declaratorias()->IdDeclaratoria, $intIdDeclaratoria)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Declaratorias objects,
		 * by NroAbogado Index(es)
		 * @param integer $intNroAbogado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Declaratorias[]
		*/
		public static function LoadArrayByNroAbogado($intNroAbogado, $objOptionalClauses = null) {
			// Call Declaratorias::QueryArray to perform the LoadArrayByNroAbogado query
			try {
				return Declaratorias::QueryArray(
					QQ::Equal(QQN::Declaratorias()->NroAbogado, $intNroAbogado),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Declaratoriases
		 * by NroAbogado Index(es)
		 * @param integer $intNroAbogado
		 * @return int
		*/
		public static function CountByNroAbogado($intNroAbogado, $objOptionalClauses = null) {
			// Call Declaratorias::QueryCount to perform the CountByNroAbogado query
			return Declaratorias::QueryCount(
				QQ::Equal(QQN::Declaratorias()->NroAbogado, $intNroAbogado)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Declaratorias objects,
		 * by Estado Index(es)
		 * @param integer $intEstado
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Declaratorias[]
		*/
		public static function LoadArrayByEstado($intEstado, $objOptionalClauses = null) {
			// Call Declaratorias::QueryArray to perform the LoadArrayByEstado query
			try {
				return Declaratorias::QueryArray(
					QQ::Equal(QQN::Declaratorias()->Estado, $intEstado),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Declaratoriases
		 * by Estado Index(es)
		 * @param integer $intEstado
		 * @return int
		*/
		public static function CountByEstado($intEstado, $objOptionalClauses = null) {
			// Call Declaratorias::QueryCount to perform the CountByEstado query
			return Declaratorias::QueryCount(
				QQ::Equal(QQN::Declaratorias()->Estado, $intEstado)
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
		 * Save this Declaratorias
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Declaratorias::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `declaratorias` (
							`fecha_inicio`,
							`estado`,
							`honorarios`,
							`timbrado`,
							`nro_abogado`,
							`contacto`,
							`observaciones`,
							`autos`,
							`fecha_fin`,
							`observada`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							' . $objDatabase->SqlVariable($this->intEstado) . ',
							' . $objDatabase->SqlVariable($this->intHonorarios) . ',
							' . $objDatabase->SqlVariable($this->intTimbrado) . ',
							' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
							' . $objDatabase->SqlVariable($this->strContacto) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							' . $objDatabase->SqlVariable($this->strAutos) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							' . $objDatabase->SqlVariable($this->intObservada) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdDeclaratoria = $objDatabase->InsertId('declaratorias', 'id_declaratoria');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`declaratorias`
						SET
							`fecha_inicio` = ' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							`estado` = ' . $objDatabase->SqlVariable($this->intEstado) . ',
							`honorarios` = ' . $objDatabase->SqlVariable($this->intHonorarios) . ',
							`timbrado` = ' . $objDatabase->SqlVariable($this->intTimbrado) . ',
							`nro_abogado` = ' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
							`contacto` = ' . $objDatabase->SqlVariable($this->strContacto) . ',
							`observaciones` = ' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							`autos` = ' . $objDatabase->SqlVariable($this->strAutos) . ',
							`fecha_fin` = ' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							`observada` = ' . $objDatabase->SqlVariable($this->intObservada) . '
						WHERE
							`id_declaratoria` = ' . $objDatabase->SqlVariable($this->intIdDeclaratoria) . '
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
		 * Delete this Declaratorias
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Declaratorias with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Declaratorias::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($this->intIdDeclaratoria) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Declaratoriases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Declaratorias::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`');
		}

		/**
		 * Truncate declaratorias table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Declaratorias::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `declaratorias`');
		}

		/**
		 * Reload this Declaratorias from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Declaratorias object.');

			// Reload the Object
			$objReloaded = Declaratorias::Load($this->intIdDeclaratoria);

			// Update $this's local variables to match
			$this->dttFechaInicio = $objReloaded->dttFechaInicio;
			$this->Estado = $objReloaded->Estado;
			$this->intHonorarios = $objReloaded->intHonorarios;
			$this->intTimbrado = $objReloaded->intTimbrado;
			$this->NroAbogado = $objReloaded->NroAbogado;
			$this->strContacto = $objReloaded->strContacto;
			$this->strObservaciones = $objReloaded->strObservaciones;
			$this->strAutos = $objReloaded->strAutos;
			$this->dttFechaFin = $objReloaded->dttFechaFin;
			$this->intObservada = $objReloaded->intObservada;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Declaratorias::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `declaratorias` (
					`id_declaratoria`,
					`fecha_inicio`,
					`estado`,
					`honorarios`,
					`timbrado`,
					`nro_abogado`,
					`contacto`,
					`observaciones`,
					`autos`,
					`fecha_fin`,
					`observada`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdDeclaratoria) . ',
					' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
					' . $objDatabase->SqlVariable($this->intEstado) . ',
					' . $objDatabase->SqlVariable($this->intHonorarios) . ',
					' . $objDatabase->SqlVariable($this->intTimbrado) . ',
					' . $objDatabase->SqlVariable($this->intNroAbogado) . ',
					' . $objDatabase->SqlVariable($this->strContacto) . ',
					' . $objDatabase->SqlVariable($this->strObservaciones) . ',
					' . $objDatabase->SqlVariable($this->strAutos) . ',
					' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
					' . $objDatabase->SqlVariable($this->intObservada) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdDeclaratoria
		 * @return Declaratorias[]
		 */
		public static function GetJournalForId($intIdDeclaratoria) {
			$objDatabase = Declaratorias::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM declaratorias WHERE id_declaratoria = ' .
				$objDatabase->SqlVariable($intIdDeclaratoria) . ' ORDER BY __sys_date');

			return Declaratorias::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Declaratorias[]
		 */
		public function GetJournal() {
			return Declaratorias::GetJournalForId($this->intIdDeclaratoria);
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
				case 'IdDeclaratoria':
					// Gets the value for intIdDeclaratoria (Read-Only PK)
					// @return integer
					return $this->intIdDeclaratoria;

				case 'FechaInicio':
					// Gets the value for dttFechaInicio (Not Null)
					// @return QDateTime
					return $this->dttFechaInicio;

				case 'Estado':
					// Gets the value for intEstado (Not Null)
					// @return integer
					return $this->intEstado;

				case 'Honorarios':
					// Gets the value for intHonorarios (Not Null)
					// @return integer
					return $this->intHonorarios;

				case 'Timbrado':
					// Gets the value for intTimbrado (Not Null)
					// @return integer
					return $this->intTimbrado;

				case 'NroAbogado':
					// Gets the value for intNroAbogado (Not Null)
					// @return integer
					return $this->intNroAbogado;

				case 'Contacto':
					// Gets the value for strContacto 
					// @return string
					return $this->strContacto;

				case 'Observaciones':
					// Gets the value for strObservaciones 
					// @return string
					return $this->strObservaciones;

				case 'Autos':
					// Gets the value for strAutos 
					// @return string
					return $this->strAutos;

				case 'FechaFin':
					// Gets the value for dttFechaFin 
					// @return QDateTime
					return $this->dttFechaFin;

				case 'Observada':
					// Gets the value for intObservada (Not Null)
					// @return integer
					return $this->intObservada;


				///////////////////
				// Member Objects
				///////////////////
				case 'EstadoObject':
					// Gets the value for the EstadoDeclaratoria object referenced by intEstado (Not Null)
					// @return EstadoDeclaratoria
					try {
						if ((!$this->objEstadoObject) && (!is_null($this->intEstado)))
							$this->objEstadoObject = EstadoDeclaratoria::Load($this->intEstado);
						return $this->objEstadoObject;
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
				case 'FechaInicio':
					// Sets the value for dttFechaInicio (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttFechaInicio = QType::Cast($mixValue, QType::DateTime));
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

				case 'Honorarios':
					// Sets the value for intHonorarios (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intHonorarios = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Timbrado':
					// Sets the value for intTimbrado (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTimbrado = QType::Cast($mixValue, QType::Integer));
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

				case 'Contacto':
					// Sets the value for strContacto 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strContacto = QType::Cast($mixValue, QType::String));
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

				case 'Observada':
					// Sets the value for intObservada (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intObservada = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'EstadoObject':
					// Sets the value for the EstadoDeclaratoria object referenced by intEstado (Not Null)
					// @param EstadoDeclaratoria $mixValue
					// @return EstadoDeclaratoria
					if (is_null($mixValue)) {
						$this->intEstado = null;
						$this->objEstadoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a EstadoDeclaratoria object
						try {
							$mixValue = QType::Cast($mixValue, 'EstadoDeclaratoria');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED EstadoDeclaratoria object
						if (is_null($mixValue->IdEstadoDeclaratoria))
							throw new QCallerException('Unable to set an unsaved EstadoObject for this Declaratorias');

						// Update Local Member Variables
						$this->objEstadoObject = $mixValue;
						$this->intEstado = $mixValue->IdEstadoDeclaratoria;

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
							throw new QCallerException('Unable to set an unsaved NroAbogadoObject for this Declaratorias');

						// Update Local Member Variables
						$this->objNroAbogadoObject = $mixValue;
						$this->intNroAbogado = $mixValue->IdAbogado;

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
			$strToReturn = '<complexType name="Declaratorias"><sequence>';
			$strToReturn .= '<element name="IdDeclaratoria" type="xsd:int"/>';
			$strToReturn .= '<element name="FechaInicio" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="EstadoObject" type="xsd1:EstadoDeclaratoria"/>';
			$strToReturn .= '<element name="Honorarios" type="xsd:int"/>';
			$strToReturn .= '<element name="Timbrado" type="xsd:int"/>';
			$strToReturn .= '<element name="NroAbogadoObject" type="xsd1:Abogados"/>';
			$strToReturn .= '<element name="Contacto" type="xsd:string"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="Autos" type="xsd:string"/>';
			$strToReturn .= '<element name="FechaFin" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Observada" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Declaratorias', $strComplexTypeArray)) {
				$strComplexTypeArray['Declaratorias'] = Declaratorias::GetSoapComplexTypeXml();
				EstadoDeclaratoria::AlterSoapComplexTypeArray($strComplexTypeArray);
				Abogados::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Declaratorias::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Declaratorias();
			if (property_exists($objSoapObject, 'IdDeclaratoria'))
				$objToReturn->intIdDeclaratoria = $objSoapObject->IdDeclaratoria;
			if (property_exists($objSoapObject, 'FechaInicio'))
				$objToReturn->dttFechaInicio = new QDateTime($objSoapObject->FechaInicio);
			if ((property_exists($objSoapObject, 'EstadoObject')) &&
				($objSoapObject->EstadoObject))
				$objToReturn->EstadoObject = EstadoDeclaratoria::GetObjectFromSoapObject($objSoapObject->EstadoObject);
			if (property_exists($objSoapObject, 'Honorarios'))
				$objToReturn->intHonorarios = $objSoapObject->Honorarios;
			if (property_exists($objSoapObject, 'Timbrado'))
				$objToReturn->intTimbrado = $objSoapObject->Timbrado;
			if ((property_exists($objSoapObject, 'NroAbogadoObject')) &&
				($objSoapObject->NroAbogadoObject))
				$objToReturn->NroAbogadoObject = Abogados::GetObjectFromSoapObject($objSoapObject->NroAbogadoObject);
			if (property_exists($objSoapObject, 'Contacto'))
				$objToReturn->strContacto = $objSoapObject->Contacto;
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if (property_exists($objSoapObject, 'Autos'))
				$objToReturn->strAutos = $objSoapObject->Autos;
			if (property_exists($objSoapObject, 'FechaFin'))
				$objToReturn->dttFechaFin = new QDateTime($objSoapObject->FechaFin);
			if (property_exists($objSoapObject, 'Observada'))
				$objToReturn->intObservada = $objSoapObject->Observada;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Declaratorias::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFechaInicio)
				$objObject->dttFechaInicio = $objObject->dttFechaInicio->__toString(QDateTime::FormatSoap);
			if ($objObject->objEstadoObject)
				$objObject->objEstadoObject = EstadoDeclaratoria::GetSoapObjectFromObject($objObject->objEstadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEstado = null;
			if ($objObject->objNroAbogadoObject)
				$objObject->objNroAbogadoObject = Abogados::GetSoapObjectFromObject($objObject->objNroAbogadoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intNroAbogado = null;
			if ($objObject->dttFechaFin)
				$objObject->dttFechaFin = $objObject->dttFechaFin->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $IdDeclaratoria
	 * @property-read QQNode $FechaInicio
	 * @property-read QQNode $Estado
	 * @property-read QQNodeEstadoDeclaratoria $EstadoObject
	 * @property-read QQNode $Honorarios
	 * @property-read QQNode $Timbrado
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNodeAbogados $NroAbogadoObject
	 * @property-read QQNode $Contacto
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $Autos
	 * @property-read QQNode $FechaFin
	 * @property-read QQNode $Observada
	 */
	class QQNodeDeclaratorias extends QQNode {
		protected $strTableName = 'declaratorias';
		protected $strPrimaryKey = 'id_declaratoria';
		protected $strClassName = 'Declaratorias';
		public function __get($strName) {
			switch ($strName) {
				case 'IdDeclaratoria':
					return new QQNode('id_declaratoria', 'IdDeclaratoria', 'integer', $this);
				case 'FechaInicio':
					return new QQNode('fecha_inicio', 'FechaInicio', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'EstadoObject':
					return new QQNodeEstadoDeclaratoria('estado', 'EstadoObject', 'integer', $this);
				case 'Honorarios':
					return new QQNode('honorarios', 'Honorarios', 'integer', $this);
				case 'Timbrado':
					return new QQNode('timbrado', 'Timbrado', 'integer', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'integer', $this);
				case 'NroAbogadoObject':
					return new QQNodeAbogados('nro_abogado', 'NroAbogadoObject', 'integer', $this);
				case 'Contacto':
					return new QQNode('contacto', 'Contacto', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'FechaFin':
					return new QQNode('fecha_fin', 'FechaFin', 'QDateTime', $this);
				case 'Observada':
					return new QQNode('observada', 'Observada', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_declaratoria', 'IdDeclaratoria', 'integer', $this);
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
	 * @property-read QQNode $IdDeclaratoria
	 * @property-read QQNode $FechaInicio
	 * @property-read QQNode $Estado
	 * @property-read QQNodeEstadoDeclaratoria $EstadoObject
	 * @property-read QQNode $Honorarios
	 * @property-read QQNode $Timbrado
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNodeAbogados $NroAbogadoObject
	 * @property-read QQNode $Contacto
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $Autos
	 * @property-read QQNode $FechaFin
	 * @property-read QQNode $Observada
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeDeclaratorias extends QQReverseReferenceNode {
		protected $strTableName = 'declaratorias';
		protected $strPrimaryKey = 'id_declaratoria';
		protected $strClassName = 'Declaratorias';
		public function __get($strName) {
			switch ($strName) {
				case 'IdDeclaratoria':
					return new QQNode('id_declaratoria', 'IdDeclaratoria', 'integer', $this);
				case 'FechaInicio':
					return new QQNode('fecha_inicio', 'FechaInicio', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'integer', $this);
				case 'EstadoObject':
					return new QQNodeEstadoDeclaratoria('estado', 'EstadoObject', 'integer', $this);
				case 'Honorarios':
					return new QQNode('honorarios', 'Honorarios', 'integer', $this);
				case 'Timbrado':
					return new QQNode('timbrado', 'Timbrado', 'integer', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'integer', $this);
				case 'NroAbogadoObject':
					return new QQNodeAbogados('nro_abogado', 'NroAbogadoObject', 'integer', $this);
				case 'Contacto':
					return new QQNode('contacto', 'Contacto', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'Autos':
					return new QQNode('autos', 'Autos', 'string', $this);
				case 'FechaFin':
					return new QQNode('fecha_fin', 'FechaFin', 'QDateTime', $this);
				case 'Observada':
					return new QQNode('observada', 'Observada', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id_declaratoria', 'IdDeclaratoria', 'integer', $this);
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