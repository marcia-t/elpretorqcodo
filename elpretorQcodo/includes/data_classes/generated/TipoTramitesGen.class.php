<?php
	/**
	 * The abstract TipoTramitesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TipoTramites subclass which
	 * extends this TipoTramitesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TipoTramites class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdTipoTramite the value for intIdTipoTramite (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $Timbrado the value for intTimbrado (Not Null)
	 * @property integer $Honorario the value for intHonorario (Not Null)
	 * @property integer $OtrosCostos the value for intOtrosCostos 
	 * @property string $Observaciones the value for strObservaciones 
	 * @property integer $IdModalidad the value for intIdModalidad (Not Null)
	 * @property integer $IdZona the value for intIdZona (Not Null)
	 * @property integer $Activo the value for intActivo (Not Null)
	 * @property Modalidades $IdModalidadObject the value for the Modalidades object referenced by intIdModalidad (Not Null)
	 * @property Zonas $IdZonaObject the value for the Zonas object referenced by intIdZona (Not Null)
	 * @property TramitesAsignados $_TramitesAsignadosAsTipoTramite the value for the private _objTramitesAsignadosAsTipoTramite (Read-Only) if set due to an expansion on the tramites_asignados.tipo_tramite reverse relationship
	 * @property TramitesAsignados[] $_TramitesAsignadosAsTipoTramiteArray the value for the private _objTramitesAsignadosAsTipoTramiteArray (Read-Only) if set due to an ExpandAsArray on the tramites_asignados.tipo_tramite reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TipoTramitesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column tipo_tramites.id_tipo_tramite
		 * @var integer intIdTipoTramite
		 */
		protected $intIdTipoTramite;
		const IdTipoTramiteDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.timbrado
		 * @var integer intTimbrado
		 */
		protected $intTimbrado;
		const TimbradoDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.honorario
		 * @var integer intHonorario
		 */
		protected $intHonorario;
		const HonorarioDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.otros_costos
		 * @var integer intOtrosCostos
		 */
		protected $intOtrosCostos;
		const OtrosCostosDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesMaxLength = 300;
		const ObservacionesDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.id_modalidad
		 * @var integer intIdModalidad
		 */
		protected $intIdModalidad;
		const IdModalidadDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.id_zona
		 * @var integer intIdZona
		 */
		protected $intIdZona;
		const IdZonaDefault = null;


		/**
		 * Protected member variable that maps to the database column tipo_tramites.activo
		 * @var integer intActivo
		 */
		protected $intActivo;
		const ActivoDefault = null;


		/**
		 * Private member variable that stores a reference to a single TramitesAsignadosAsTipoTramite object
		 * (of type TramitesAsignados), if this TipoTramites object was restored with
		 * an expansion on the tramites_asignados association table.
		 * @var TramitesAsignados _objTramitesAsignadosAsTipoTramite;
		 */
		private $_objTramitesAsignadosAsTipoTramite;

		/**
		 * Private member variable that stores a reference to an array of TramitesAsignadosAsTipoTramite objects
		 * (of type TramitesAsignados[]), if this TipoTramites object was restored with
		 * an ExpandAsArray on the tramites_asignados association table.
		 * @var TramitesAsignados[] _objTramitesAsignadosAsTipoTramiteArray;
		 */
		private $_objTramitesAsignadosAsTipoTramiteArray = array();

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
		 * in the database column tipo_tramites.id_modalidad.
		 *
		 * NOTE: Always use the IdModalidadObject property getter to correctly retrieve this Modalidades object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Modalidades objIdModalidadObject
		 */
		protected $objIdModalidadObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column tipo_tramites.id_zona.
		 *
		 * NOTE: Always use the IdZonaObject property getter to correctly retrieve this Zonas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Zonas objIdZonaObject
		 */
		protected $objIdZonaObject;





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
		 * Load a TipoTramites from PK Info
		 * @param integer $intIdTipoTramite
		 * @return TipoTramites
		 */
		public static function Load($intIdTipoTramite) {
			// Use QuerySingle to Perform the Query
			return TipoTramites::QuerySingle(
				QQ::Equal(QQN::TipoTramites()->IdTipoTramite, $intIdTipoTramite)
			);
		}

		/**
		 * Load all TipoTramiteses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoTramites[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call TipoTramites::QueryArray to perform the LoadAll query
			try {
				return TipoTramites::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TipoTramiteses
		 * @return int
		 */
		public static function CountAll() {
			// Call TipoTramites::QueryCount to perform the CountAll query
			return TipoTramites::QueryCount(QQ::All());
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
			$objDatabase = TipoTramites::GetDatabase();

			// Create/Build out the QueryBuilder object with TipoTramites-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'tipo_tramites');
			TipoTramites::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('tipo_tramites');

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
		 * Static Qcodo Query method to query for a single TipoTramites object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoTramites the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoTramites::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new TipoTramites object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TipoTramites::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TipoTramites::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of TipoTramites objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoTramites[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoTramites::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TipoTramites::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TipoTramites::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of TipoTramites objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoTramites::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TipoTramites::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'tipo_tramites_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with TipoTramites-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				TipoTramites::GetSelectFields($objQueryBuilder);
				TipoTramites::GetFromFields($objQueryBuilder);

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
			return TipoTramites::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TipoTramites
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'tipo_tramites';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_tipo_tramite', $strAliasPrefix . 'id_tipo_tramite');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'timbrado', $strAliasPrefix . 'timbrado');
			$objBuilder->AddSelectItem($strTableName, 'honorario', $strAliasPrefix . 'honorario');
			$objBuilder->AddSelectItem($strTableName, 'otros_costos', $strAliasPrefix . 'otros_costos');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
			$objBuilder->AddSelectItem($strTableName, 'id_modalidad', $strAliasPrefix . 'id_modalidad');
			$objBuilder->AddSelectItem($strTableName, 'id_zona', $strAliasPrefix . 'id_zona');
			$objBuilder->AddSelectItem($strTableName, 'activo', $strAliasPrefix . 'activo');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TipoTramites from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TipoTramites::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TipoTramites
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_tipo_tramite';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdTipoTramite == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'tipo_tramites__';


				$strAlias = $strAliasPrefix . 'tramitesasignadosastipotramite__id_tramite_asignado';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTramitesAsignadosAsTipoTramiteArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTramitesAsignadosAsTipoTramiteArray[$intPreviousChildItemCount - 1];
						$objChildItem = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosastipotramite__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTramitesAsignadosAsTipoTramiteArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTramitesAsignadosAsTipoTramiteArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosastipotramite__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'tipo_tramites__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the TipoTramites object
			$objToReturn = new TipoTramites();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_tipo_tramite', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_tipo_tramite'] : $strAliasPrefix . 'id_tipo_tramite';
			$objToReturn->intIdTipoTramite = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'timbrado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'timbrado'] : $strAliasPrefix . 'timbrado';
			$objToReturn->intTimbrado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'honorario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'honorario'] : $strAliasPrefix . 'honorario';
			$objToReturn->intHonorario = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'otros_costos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'otros_costos'] : $strAliasPrefix . 'otros_costos';
			$objToReturn->intOtrosCostos = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_modalidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_modalidad'] : $strAliasPrefix . 'id_modalidad';
			$objToReturn->intIdModalidad = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'id_zona', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_zona'] : $strAliasPrefix . 'id_zona';
			$objToReturn->intIdZona = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'tipo_tramites__';

			// Check for IdModalidadObject Early Binding
			$strAlias = $strAliasPrefix . 'id_modalidad__id_modalidad';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdModalidadObject = Modalidades::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_modalidad__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IdZonaObject Early Binding
			$strAlias = $strAliasPrefix . 'id_zona__id_zona';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdZonaObject = Zonas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'id_zona__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for TramitesAsignadosAsTipoTramite Virtual Binding
			$strAlias = $strAliasPrefix . 'tramitesasignadosastipotramite__id_tramite_asignado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTramitesAsignadosAsTipoTramiteArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosastipotramite__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTramitesAsignadosAsTipoTramite = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosastipotramite__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of TipoTramiteses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TipoTramites[]
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
					$objItem = TipoTramites::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TipoTramites::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single TipoTramites object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TipoTramites next row resulting from the query
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
			return TipoTramites::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single TipoTramites object,
		 * by IdTipoTramite Index(es)
		 * @param integer $intIdTipoTramite
		 * @return TipoTramites
		*/
		public static function LoadByIdTipoTramite($intIdTipoTramite, $objOptionalClauses = null) {
			return TipoTramites::QuerySingle(
				QQ::Equal(QQN::TipoTramites()->IdTipoTramite, $intIdTipoTramite)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TipoTramites objects,
		 * by IdModalidad Index(es)
		 * @param integer $intIdModalidad
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoTramites[]
		*/
		public static function LoadArrayByIdModalidad($intIdModalidad, $objOptionalClauses = null) {
			// Call TipoTramites::QueryArray to perform the LoadArrayByIdModalidad query
			try {
				return TipoTramites::QueryArray(
					QQ::Equal(QQN::TipoTramites()->IdModalidad, $intIdModalidad),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TipoTramiteses
		 * by IdModalidad Index(es)
		 * @param integer $intIdModalidad
		 * @return int
		*/
		public static function CountByIdModalidad($intIdModalidad, $objOptionalClauses = null) {
			// Call TipoTramites::QueryCount to perform the CountByIdModalidad query
			return TipoTramites::QueryCount(
				QQ::Equal(QQN::TipoTramites()->IdModalidad, $intIdModalidad)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of TipoTramites objects,
		 * by IdZona Index(es)
		 * @param integer $intIdZona
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoTramites[]
		*/
		public static function LoadArrayByIdZona($intIdZona, $objOptionalClauses = null) {
			// Call TipoTramites::QueryArray to perform the LoadArrayByIdZona query
			try {
				return TipoTramites::QueryArray(
					QQ::Equal(QQN::TipoTramites()->IdZona, $intIdZona),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TipoTramiteses
		 * by IdZona Index(es)
		 * @param integer $intIdZona
		 * @return int
		*/
		public static function CountByIdZona($intIdZona, $objOptionalClauses = null) {
			// Call TipoTramites::QueryCount to perform the CountByIdZona query
			return TipoTramites::QueryCount(
				QQ::Equal(QQN::TipoTramites()->IdZona, $intIdZona)
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
		 * Save this TipoTramites
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `tipo_tramites` (
							`nombre`,
							`timbrado`,
							`honorario`,
							`otros_costos`,
							`observaciones`,
							`id_modalidad`,
							`id_zona`,
							`activo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intTimbrado) . ',
							' . $objDatabase->SqlVariable($this->intHonorario) . ',
							' . $objDatabase->SqlVariable($this->intOtrosCostos) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							' . $objDatabase->SqlVariable($this->intIdModalidad) . ',
							' . $objDatabase->SqlVariable($this->intIdZona) . ',
							' . $objDatabase->SqlVariable($this->intActivo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdTipoTramite = $objDatabase->InsertId('tipo_tramites', 'id_tipo_tramite');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`tipo_tramites`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`timbrado` = ' . $objDatabase->SqlVariable($this->intTimbrado) . ',
							`honorario` = ' . $objDatabase->SqlVariable($this->intHonorario) . ',
							`otros_costos` = ' . $objDatabase->SqlVariable($this->intOtrosCostos) . ',
							`observaciones` = ' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							`id_modalidad` = ' . $objDatabase->SqlVariable($this->intIdModalidad) . ',
							`id_zona` = ' . $objDatabase->SqlVariable($this->intIdZona) . ',
							`activo` = ' . $objDatabase->SqlVariable($this->intActivo) . '
						WHERE
							`id_tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
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
		 * Delete this TipoTramites
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TipoTramites with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_tramites`
				WHERE
					`id_tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all TipoTramiteses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tipo_tramites`');
		}

		/**
		 * Truncate tipo_tramites table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `tipo_tramites`');
		}

		/**
		 * Reload this TipoTramites from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TipoTramites object.');

			// Reload the Object
			$objReloaded = TipoTramites::Load($this->intIdTipoTramite);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intTimbrado = $objReloaded->intTimbrado;
			$this->intHonorario = $objReloaded->intHonorario;
			$this->intOtrosCostos = $objReloaded->intOtrosCostos;
			$this->strObservaciones = $objReloaded->strObservaciones;
			$this->IdModalidad = $objReloaded->IdModalidad;
			$this->IdZona = $objReloaded->IdZona;
			$this->intActivo = $objReloaded->intActivo;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = TipoTramites::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `tipo_tramites` (
					`id_tipo_tramite`,
					`nombre`,
					`timbrado`,
					`honorario`,
					`otros_costos`,
					`observaciones`,
					`id_modalidad`,
					`id_zona`,
					`activo`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdTipoTramite) . ',
					' . $objDatabase->SqlVariable($this->strNombre) . ',
					' . $objDatabase->SqlVariable($this->intTimbrado) . ',
					' . $objDatabase->SqlVariable($this->intHonorario) . ',
					' . $objDatabase->SqlVariable($this->intOtrosCostos) . ',
					' . $objDatabase->SqlVariable($this->strObservaciones) . ',
					' . $objDatabase->SqlVariable($this->intIdModalidad) . ',
					' . $objDatabase->SqlVariable($this->intIdZona) . ',
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
		 * @param integer intIdTipoTramite
		 * @return TipoTramites[]
		 */
		public static function GetJournalForId($intIdTipoTramite) {
			$objDatabase = TipoTramites::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM tipo_tramites WHERE id_tipo_tramite = ' .
				$objDatabase->SqlVariable($intIdTipoTramite) . ' ORDER BY __sys_date');

			return TipoTramites::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return TipoTramites[]
		 */
		public function GetJournal() {
			return TipoTramites::GetJournalForId($this->intIdTipoTramite);
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
				case 'IdTipoTramite':
					// Gets the value for intIdTipoTramite (Read-Only PK)
					// @return integer
					return $this->intIdTipoTramite;

				case 'Nombre':
					// Gets the value for strNombre (Not Null)
					// @return string
					return $this->strNombre;

				case 'Timbrado':
					// Gets the value for intTimbrado (Not Null)
					// @return integer
					return $this->intTimbrado;

				case 'Honorario':
					// Gets the value for intHonorario (Not Null)
					// @return integer
					return $this->intHonorario;

				case 'OtrosCostos':
					// Gets the value for intOtrosCostos 
					// @return integer
					return $this->intOtrosCostos;

				case 'Observaciones':
					// Gets the value for strObservaciones 
					// @return string
					return $this->strObservaciones;

				case 'IdModalidad':
					// Gets the value for intIdModalidad (Not Null)
					// @return integer
					return $this->intIdModalidad;

				case 'IdZona':
					// Gets the value for intIdZona (Not Null)
					// @return integer
					return $this->intIdZona;

				case 'Activo':
					// Gets the value for intActivo (Not Null)
					// @return integer
					return $this->intActivo;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdModalidadObject':
					// Gets the value for the Modalidades object referenced by intIdModalidad (Not Null)
					// @return Modalidades
					try {
						if ((!$this->objIdModalidadObject) && (!is_null($this->intIdModalidad)))
							$this->objIdModalidadObject = Modalidades::Load($this->intIdModalidad);
						return $this->objIdModalidadObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdZonaObject':
					// Gets the value for the Zonas object referenced by intIdZona (Not Null)
					// @return Zonas
					try {
						if ((!$this->objIdZonaObject) && (!is_null($this->intIdZona)))
							$this->objIdZonaObject = Zonas::Load($this->intIdZona);
						return $this->objIdZonaObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_TramitesAsignadosAsTipoTramite':
					// Gets the value for the private _objTramitesAsignadosAsTipoTramite (Read-Only)
					// if set due to an expansion on the tramites_asignados.tipo_tramite reverse relationship
					// @return TramitesAsignados
					return $this->_objTramitesAsignadosAsTipoTramite;

				case '_TramitesAsignadosAsTipoTramiteArray':
					// Gets the value for the private _objTramitesAsignadosAsTipoTramiteArray (Read-Only)
					// if set due to an ExpandAsArray on the tramites_asignados.tipo_tramite reverse relationship
					// @return TramitesAsignados[]
					return (array) $this->_objTramitesAsignadosAsTipoTramiteArray;


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

				case 'Honorario':
					// Sets the value for intHonorario (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intHonorario = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OtrosCostos':
					// Sets the value for intOtrosCostos 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intOtrosCostos = QType::Cast($mixValue, QType::Integer));
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

				case 'IdModalidad':
					// Sets the value for intIdModalidad (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objIdModalidadObject = null;
						return ($this->intIdModalidad = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IdZona':
					// Sets the value for intIdZona (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objIdZonaObject = null;
						return ($this->intIdZona = QType::Cast($mixValue, QType::Integer));
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
				case 'IdModalidadObject':
					// Sets the value for the Modalidades object referenced by intIdModalidad (Not Null)
					// @param Modalidades $mixValue
					// @return Modalidades
					if (is_null($mixValue)) {
						$this->intIdModalidad = null;
						$this->objIdModalidadObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Modalidades object
						try {
							$mixValue = QType::Cast($mixValue, 'Modalidades');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Modalidades object
						if (is_null($mixValue->IdModalidad))
							throw new QCallerException('Unable to set an unsaved IdModalidadObject for this TipoTramites');

						// Update Local Member Variables
						$this->objIdModalidadObject = $mixValue;
						$this->intIdModalidad = $mixValue->IdModalidad;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IdZonaObject':
					// Sets the value for the Zonas object referenced by intIdZona (Not Null)
					// @param Zonas $mixValue
					// @return Zonas
					if (is_null($mixValue)) {
						$this->intIdZona = null;
						$this->objIdZonaObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Zonas object
						try {
							$mixValue = QType::Cast($mixValue, 'Zonas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Zonas object
						if (is_null($mixValue->IdZona))
							throw new QCallerException('Unable to set an unsaved IdZonaObject for this TipoTramites');

						// Update Local Member Variables
						$this->objIdZonaObject = $mixValue;
						$this->intIdZona = $mixValue->IdZona;

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

			
		
		// Related Objects' Methods for TramitesAsignadosAsTipoTramite
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TramitesAsignadosesAsTipoTramite as an array of TramitesAsignados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/ 
		public function GetTramitesAsignadosAsTipoTramiteArray($objOptionalClauses = null) {
			if ((is_null($this->intIdTipoTramite)))
				return array();

			try {
				return TramitesAsignados::LoadArrayByTipoTramite($this->intIdTipoTramite, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TramitesAsignadosesAsTipoTramite
		 * @return int
		*/ 
		public function CountTramitesAsignadosesAsTipoTramite() {
			if ((is_null($this->intIdTipoTramite)))
				return 0;

			return TramitesAsignados::CountByTipoTramite($this->intIdTipoTramite);
		}

		/**
		 * Associates a TramitesAsignadosAsTipoTramite
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function AssociateTramitesAsignadosAsTipoTramite(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsTipoTramite on this unsaved TipoTramites.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsTipoTramite on this TipoTramites with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->TipoTramite = $this->intIdTipoTramite;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TramitesAsignadosAsTipoTramite
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function UnassociateTramitesAsignadosAsTipoTramite(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this unsaved TipoTramites.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this TipoTramites with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`tipo_tramite` = null
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->TipoTramite = null;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TramitesAsignadosesAsTipoTramite
		 * @return void
		*/ 
		public function UnassociateAllTramitesAsignadosesAsTipoTramite() {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this unsaved TipoTramites.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByTipoTramite($this->intIdTipoTramite) as $objTramitesAsignados) {
					$objTramitesAsignados->TipoTramite = null;
					$objTramitesAsignados->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`tipo_tramite` = null
				WHERE
					`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
			');
		}

		/**
		 * Deletes an associated TramitesAsignadosAsTipoTramite
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function DeleteAssociatedTramitesAsignadosAsTipoTramite(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this unsaved TipoTramites.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this TipoTramites with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TramitesAsignadosesAsTipoTramite
		 * @return void
		*/ 
		public function DeleteAllTramitesAsignadosesAsTipoTramite() {
			if ((is_null($this->intIdTipoTramite)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsTipoTramite on this unsaved TipoTramites.');

			// Get the Database Object for this Class
			$objDatabase = TipoTramites::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByTipoTramite($this->intIdTipoTramite) as $objTramitesAsignados) {
					$objTramitesAsignados->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`tipo_tramite` = ' . $objDatabase->SqlVariable($this->intIdTipoTramite) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="TipoTramites"><sequence>';
			$strToReturn .= '<element name="IdTipoTramite" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Timbrado" type="xsd:int"/>';
			$strToReturn .= '<element name="Honorario" type="xsd:int"/>';
			$strToReturn .= '<element name="OtrosCostos" type="xsd:int"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="IdModalidadObject" type="xsd1:Modalidades"/>';
			$strToReturn .= '<element name="IdZonaObject" type="xsd1:Zonas"/>';
			$strToReturn .= '<element name="Activo" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TipoTramites', $strComplexTypeArray)) {
				$strComplexTypeArray['TipoTramites'] = TipoTramites::GetSoapComplexTypeXml();
				Modalidades::AlterSoapComplexTypeArray($strComplexTypeArray);
				Zonas::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TipoTramites::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TipoTramites();
			if (property_exists($objSoapObject, 'IdTipoTramite'))
				$objToReturn->intIdTipoTramite = $objSoapObject->IdTipoTramite;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Timbrado'))
				$objToReturn->intTimbrado = $objSoapObject->Timbrado;
			if (property_exists($objSoapObject, 'Honorario'))
				$objToReturn->intHonorario = $objSoapObject->Honorario;
			if (property_exists($objSoapObject, 'OtrosCostos'))
				$objToReturn->intOtrosCostos = $objSoapObject->OtrosCostos;
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if ((property_exists($objSoapObject, 'IdModalidadObject')) &&
				($objSoapObject->IdModalidadObject))
				$objToReturn->IdModalidadObject = Modalidades::GetObjectFromSoapObject($objSoapObject->IdModalidadObject);
			if ((property_exists($objSoapObject, 'IdZonaObject')) &&
				($objSoapObject->IdZonaObject))
				$objToReturn->IdZonaObject = Zonas::GetObjectFromSoapObject($objSoapObject->IdZonaObject);
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
				array_push($objArrayToReturn, TipoTramites::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdModalidadObject)
				$objObject->objIdModalidadObject = Modalidades::GetSoapObjectFromObject($objObject->objIdModalidadObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdModalidad = null;
			if ($objObject->objIdZonaObject)
				$objObject->objIdZonaObject = Zonas::GetSoapObjectFromObject($objObject->objIdZonaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdZona = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $IdTipoTramite
	 * @property-read QQNode $Nombre
	 * @property-read QQNode $Timbrado
	 * @property-read QQNode $Honorario
	 * @property-read QQNode $OtrosCostos
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $IdModalidad
	 * @property-read QQNodeModalidades $IdModalidadObject
	 * @property-read QQNode $IdZona
	 * @property-read QQNodeZonas $IdZonaObject
	 * @property-read QQNode $Activo
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsTipoTramite
	 */
	class QQNodeTipoTramites extends QQNode {
		protected $strTableName = 'tipo_tramites';
		protected $strPrimaryKey = 'id_tipo_tramite';
		protected $strClassName = 'TipoTramites';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTipoTramite':
					return new QQNode('id_tipo_tramite', 'IdTipoTramite', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Timbrado':
					return new QQNode('timbrado', 'Timbrado', 'integer', $this);
				case 'Honorario':
					return new QQNode('honorario', 'Honorario', 'integer', $this);
				case 'OtrosCostos':
					return new QQNode('otros_costos', 'OtrosCostos', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'IdModalidad':
					return new QQNode('id_modalidad', 'IdModalidad', 'integer', $this);
				case 'IdModalidadObject':
					return new QQNodeModalidades('id_modalidad', 'IdModalidadObject', 'integer', $this);
				case 'IdZona':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
				case 'IdZonaObject':
					return new QQNodeZonas('id_zona', 'IdZonaObject', 'integer', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'TramitesAsignadosAsTipoTramite':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosastipotramite', 'reverse_reference', 'tipo_tramite');

				case '_PrimaryKeyNode':
					return new QQNode('id_tipo_tramite', 'IdTipoTramite', 'integer', $this);
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
	 * @property-read QQNode $IdTipoTramite
	 * @property-read QQNode $Nombre
	 * @property-read QQNode $Timbrado
	 * @property-read QQNode $Honorario
	 * @property-read QQNode $OtrosCostos
	 * @property-read QQNode $Observaciones
	 * @property-read QQNode $IdModalidad
	 * @property-read QQNodeModalidades $IdModalidadObject
	 * @property-read QQNode $IdZona
	 * @property-read QQNodeZonas $IdZonaObject
	 * @property-read QQNode $Activo
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsTipoTramite
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeTipoTramites extends QQReverseReferenceNode {
		protected $strTableName = 'tipo_tramites';
		protected $strPrimaryKey = 'id_tipo_tramite';
		protected $strClassName = 'TipoTramites';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTipoTramite':
					return new QQNode('id_tipo_tramite', 'IdTipoTramite', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Timbrado':
					return new QQNode('timbrado', 'Timbrado', 'integer', $this);
				case 'Honorario':
					return new QQNode('honorario', 'Honorario', 'integer', $this);
				case 'OtrosCostos':
					return new QQNode('otros_costos', 'OtrosCostos', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'IdModalidad':
					return new QQNode('id_modalidad', 'IdModalidad', 'integer', $this);
				case 'IdModalidadObject':
					return new QQNodeModalidades('id_modalidad', 'IdModalidadObject', 'integer', $this);
				case 'IdZona':
					return new QQNode('id_zona', 'IdZona', 'integer', $this);
				case 'IdZonaObject':
					return new QQNodeZonas('id_zona', 'IdZonaObject', 'integer', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'TramitesAsignadosAsTipoTramite':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosastipotramite', 'reverse_reference', 'tipo_tramite');

				case '_PrimaryKeyNode':
					return new QQNode('id_tipo_tramite', 'IdTipoTramite', 'integer', $this);
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