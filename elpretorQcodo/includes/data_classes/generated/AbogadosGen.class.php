<?php
	/**
	 * The abstract AbogadosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Abogados subclass which
	 * extends this AbogadosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Abogados class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdAbogado the value for intIdAbogado (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property string $Apellido the value for strApellido (Not Null)
	 * @property string $Telefono the value for strTelefono 
	 * @property string $NroAbogado the value for strNroAbogado (Not Null)
	 * @property integer $Activo the value for intActivo (Not Null)
	 * @property string $Observaciones the value for strObservaciones 
	 * @property Cedulas $_CedulasAsNroAbogado the value for the private _objCedulasAsNroAbogado (Read-Only) if set due to an expansion on the cedulas.nro_abogado reverse relationship
	 * @property Cedulas[] $_CedulasAsNroAbogadoArray the value for the private _objCedulasAsNroAbogadoArray (Read-Only) if set due to an ExpandAsArray on the cedulas.nro_abogado reverse relationship
	 * @property Declaratorias $_DeclaratoriasAsNroAbogado the value for the private _objDeclaratoriasAsNroAbogado (Read-Only) if set due to an expansion on the declaratorias.nro_abogado reverse relationship
	 * @property Declaratorias[] $_DeclaratoriasAsNroAbogadoArray the value for the private _objDeclaratoriasAsNroAbogadoArray (Read-Only) if set due to an ExpandAsArray on the declaratorias.nro_abogado reverse relationship
	 * @property TramitesAsignados $_TramitesAsignadosAsNroAbogado the value for the private _objTramitesAsignadosAsNroAbogado (Read-Only) if set due to an expansion on the tramites_asignados.nro_abogado reverse relationship
	 * @property TramitesAsignados[] $_TramitesAsignadosAsNroAbogadoArray the value for the private _objTramitesAsignadosAsNroAbogadoArray (Read-Only) if set due to an ExpandAsArray on the tramites_asignados.nro_abogado reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AbogadosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column abogados.id_abogado
		 * @var integer intIdAbogado
		 */
		protected $intIdAbogado;
		const IdAbogadoDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.apellido
		 * @var string strApellido
		 */
		protected $strApellido;
		const ApellidoMaxLength = 45;
		const ApellidoDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.telefono
		 * @var string strTelefono
		 */
		protected $strTelefono;
		const TelefonoMaxLength = 50;
		const TelefonoDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.nro_abogado
		 * @var string strNroAbogado
		 */
		protected $strNroAbogado;
		const NroAbogadoMaxLength = 10;
		const NroAbogadoDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.activo
		 * @var integer intActivo
		 */
		protected $intActivo;
		const ActivoDefault = null;


		/**
		 * Protected member variable that maps to the database column abogados.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesMaxLength = 255;
		const ObservacionesDefault = null;


		/**
		 * Private member variable that stores a reference to a single CedulasAsNroAbogado object
		 * (of type Cedulas), if this Abogados object was restored with
		 * an expansion on the cedulas association table.
		 * @var Cedulas _objCedulasAsNroAbogado;
		 */
		private $_objCedulasAsNroAbogado;

		/**
		 * Private member variable that stores a reference to an array of CedulasAsNroAbogado objects
		 * (of type Cedulas[]), if this Abogados object was restored with
		 * an ExpandAsArray on the cedulas association table.
		 * @var Cedulas[] _objCedulasAsNroAbogadoArray;
		 */
		private $_objCedulasAsNroAbogadoArray = array();

		/**
		 * Private member variable that stores a reference to a single DeclaratoriasAsNroAbogado object
		 * (of type Declaratorias), if this Abogados object was restored with
		 * an expansion on the declaratorias association table.
		 * @var Declaratorias _objDeclaratoriasAsNroAbogado;
		 */
		private $_objDeclaratoriasAsNroAbogado;

		/**
		 * Private member variable that stores a reference to an array of DeclaratoriasAsNroAbogado objects
		 * (of type Declaratorias[]), if this Abogados object was restored with
		 * an ExpandAsArray on the declaratorias association table.
		 * @var Declaratorias[] _objDeclaratoriasAsNroAbogadoArray;
		 */
		private $_objDeclaratoriasAsNroAbogadoArray = array();

		/**
		 * Private member variable that stores a reference to a single TramitesAsignadosAsNroAbogado object
		 * (of type TramitesAsignados), if this Abogados object was restored with
		 * an expansion on the tramites_asignados association table.
		 * @var TramitesAsignados _objTramitesAsignadosAsNroAbogado;
		 */
		private $_objTramitesAsignadosAsNroAbogado;

		/**
		 * Private member variable that stores a reference to an array of TramitesAsignadosAsNroAbogado objects
		 * (of type TramitesAsignados[]), if this Abogados object was restored with
		 * an ExpandAsArray on the tramites_asignados association table.
		 * @var TramitesAsignados[] _objTramitesAsignadosAsNroAbogadoArray;
		 */
		private $_objTramitesAsignadosAsNroAbogadoArray = array();

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
		 * Load a Abogados from PK Info
		 * @param integer $intIdAbogado
		 * @return Abogados
		 */
		public static function Load($intIdAbogado) {
			// Use QuerySingle to Perform the Query
			return Abogados::QuerySingle(
				QQ::Equal(QQN::Abogados()->IdAbogado, $intIdAbogado)
			);
		}

		/**
		 * Load all Abogadoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Abogados[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Abogados::QueryArray to perform the LoadAll query
			try {
				return Abogados::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Abogadoses
		 * @return int
		 */
		public static function CountAll() {
			// Call Abogados::QueryCount to perform the CountAll query
			return Abogados::QueryCount(QQ::All());
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
			$objDatabase = Abogados::GetDatabase();

			// Create/Build out the QueryBuilder object with Abogados-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'abogados');
			Abogados::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('abogados');

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
		 * Static Qcodo Query method to query for a single Abogados object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Abogados the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Abogados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Abogados object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Abogados::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Abogados::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Abogados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Abogados[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Abogados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Abogados::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Abogados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Abogados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Abogados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Abogados::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'abogados_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Abogados-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Abogados::GetSelectFields($objQueryBuilder);
				Abogados::GetFromFields($objQueryBuilder);

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
			return Abogados::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Abogados
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'abogados';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id_abogado', $strAliasPrefix . 'id_abogado');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'apellido', $strAliasPrefix . 'apellido');
			$objBuilder->AddSelectItem($strTableName, 'telefono', $strAliasPrefix . 'telefono');
			$objBuilder->AddSelectItem($strTableName, 'nro_abogado', $strAliasPrefix . 'nro_abogado');
			$objBuilder->AddSelectItem($strTableName, 'activo', $strAliasPrefix . 'activo');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Abogados from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Abogados::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Abogados
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id_abogado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdAbogado == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'abogados__';


				$strAlias = $strAliasPrefix . 'cedulasasnroabogado__id_cedulas';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCedulasAsNroAbogadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCedulasAsNroAbogadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasnroabogado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCedulasAsNroAbogadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCedulasAsNroAbogadoArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'declaratoriasasnroabogado__id_declaratoria';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objDeclaratoriasAsNroAbogadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objDeclaratoriasAsNroAbogadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasnroabogado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objDeclaratoriasAsNroAbogadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objDeclaratoriasAsNroAbogadoArray[] = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'tramitesasignadosasnroabogado__id_tramite_asignado';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTramitesAsignadosAsNroAbogadoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTramitesAsignadosAsNroAbogadoArray[$intPreviousChildItemCount - 1];
						$objChildItem = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasnroabogado__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTramitesAsignadosAsNroAbogadoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTramitesAsignadosAsNroAbogadoArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'abogados__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Abogados object
			$objToReturn = new Abogados();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id_abogado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id_abogado'] : $strAliasPrefix . 'id_abogado';
			$objToReturn->intIdAbogado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'apellido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'apellido'] : $strAliasPrefix . 'apellido';
			$objToReturn->strApellido = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'telefono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'telefono'] : $strAliasPrefix . 'telefono';
			$objToReturn->strTelefono = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nro_abogado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nro_abogado'] : $strAliasPrefix . 'nro_abogado';
			$objToReturn->strNroAbogado = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
				$strAliasPrefix = 'abogados__';




			// Check for CedulasAsNroAbogado Virtual Binding
			$strAlias = $strAliasPrefix . 'cedulasasnroabogado__id_cedulas';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCedulasAsNroAbogadoArray[] = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCedulasAsNroAbogado = Cedulas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cedulasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DeclaratoriasAsNroAbogado Virtual Binding
			$strAlias = $strAliasPrefix . 'declaratoriasasnroabogado__id_declaratoria';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objDeclaratoriasAsNroAbogadoArray[] = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeclaratoriasAsNroAbogado = Declaratorias::InstantiateDbRow($objDbRow, $strAliasPrefix . 'declaratoriasasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TramitesAsignadosAsNroAbogado Virtual Binding
			$strAlias = $strAliasPrefix . 'tramitesasignadosasnroabogado__id_tramite_asignado';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTramitesAsignadosAsNroAbogadoArray[] = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTramitesAsignadosAsNroAbogado = TramitesAsignados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tramitesasignadosasnroabogado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Abogadoses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Abogados[]
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
					$objItem = Abogados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Abogados::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Abogados object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Abogados next row resulting from the query
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
			return Abogados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Abogados object,
		 * by IdAbogado Index(es)
		 * @param integer $intIdAbogado
		 * @return Abogados
		*/
		public static function LoadByIdAbogado($intIdAbogado, $objOptionalClauses = null) {
			return Abogados::QuerySingle(
				QQ::Equal(QQN::Abogados()->IdAbogado, $intIdAbogado)
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
		 * Save this Abogados
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `abogados` (
							`nombre`,
							`apellido`,
							`telefono`,
							`nro_abogado`,
							`activo`,
							`observaciones`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strApellido) . ',
							' . $objDatabase->SqlVariable($this->strTelefono) . ',
							' . $objDatabase->SqlVariable($this->strNroAbogado) . ',
							' . $objDatabase->SqlVariable($this->intActivo) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdAbogado = $objDatabase->InsertId('abogados', 'id_abogado');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`abogados`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`apellido` = ' . $objDatabase->SqlVariable($this->strApellido) . ',
							`telefono` = ' . $objDatabase->SqlVariable($this->strTelefono) . ',
							`nro_abogado` = ' . $objDatabase->SqlVariable($this->strNroAbogado) . ',
							`activo` = ' . $objDatabase->SqlVariable($this->intActivo) . ',
							`observaciones` = ' . $objDatabase->SqlVariable($this->strObservaciones) . '
						WHERE
							`id_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
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
		 * Delete this Abogados
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Abogados with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`abogados`
				WHERE
					`id_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Abogadoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`abogados`');
		}

		/**
		 * Truncate abogados table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `abogados`');
		}

		/**
		 * Reload this Abogados from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Abogados object.');

			// Reload the Object
			$objReloaded = Abogados::Load($this->intIdAbogado);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strApellido = $objReloaded->strApellido;
			$this->strTelefono = $objReloaded->strTelefono;
			$this->strNroAbogado = $objReloaded->strNroAbogado;
			$this->intActivo = $objReloaded->intActivo;
			$this->strObservaciones = $objReloaded->strObservaciones;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Abogados::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `abogados` (
					`id_abogado`,
					`nombre`,
					`apellido`,
					`telefono`,
					`nro_abogado`,
					`activo`,
					`observaciones`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdAbogado) . ',
					' . $objDatabase->SqlVariable($this->strNombre) . ',
					' . $objDatabase->SqlVariable($this->strApellido) . ',
					' . $objDatabase->SqlVariable($this->strTelefono) . ',
					' . $objDatabase->SqlVariable($this->strNroAbogado) . ',
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
		 * @param integer intIdAbogado
		 * @return Abogados[]
		 */
		public static function GetJournalForId($intIdAbogado) {
			$objDatabase = Abogados::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM abogados WHERE id_abogado = ' .
				$objDatabase->SqlVariable($intIdAbogado) . ' ORDER BY __sys_date');

			return Abogados::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Abogados[]
		 */
		public function GetJournal() {
			return Abogados::GetJournalForId($this->intIdAbogado);
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
				case 'IdAbogado':
					// Gets the value for intIdAbogado (Read-Only PK)
					// @return integer
					return $this->intIdAbogado;

				case 'Nombre':
					// Gets the value for strNombre (Not Null)
					// @return string
					return $this->strNombre;

				case 'Apellido':
					// Gets the value for strApellido (Not Null)
					// @return string
					return $this->strApellido;

				case 'Telefono':
					// Gets the value for strTelefono 
					// @return string
					return $this->strTelefono;

				case 'NroAbogado':
					// Gets the value for strNroAbogado (Not Null)
					// @return string
					return $this->strNroAbogado;

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

				case '_CedulasAsNroAbogado':
					// Gets the value for the private _objCedulasAsNroAbogado (Read-Only)
					// if set due to an expansion on the cedulas.nro_abogado reverse relationship
					// @return Cedulas
					return $this->_objCedulasAsNroAbogado;

				case '_CedulasAsNroAbogadoArray':
					// Gets the value for the private _objCedulasAsNroAbogadoArray (Read-Only)
					// if set due to an ExpandAsArray on the cedulas.nro_abogado reverse relationship
					// @return Cedulas[]
					return (array) $this->_objCedulasAsNroAbogadoArray;

				case '_DeclaratoriasAsNroAbogado':
					// Gets the value for the private _objDeclaratoriasAsNroAbogado (Read-Only)
					// if set due to an expansion on the declaratorias.nro_abogado reverse relationship
					// @return Declaratorias
					return $this->_objDeclaratoriasAsNroAbogado;

				case '_DeclaratoriasAsNroAbogadoArray':
					// Gets the value for the private _objDeclaratoriasAsNroAbogadoArray (Read-Only)
					// if set due to an ExpandAsArray on the declaratorias.nro_abogado reverse relationship
					// @return Declaratorias[]
					return (array) $this->_objDeclaratoriasAsNroAbogadoArray;

				case '_TramitesAsignadosAsNroAbogado':
					// Gets the value for the private _objTramitesAsignadosAsNroAbogado (Read-Only)
					// if set due to an expansion on the tramites_asignados.nro_abogado reverse relationship
					// @return TramitesAsignados
					return $this->_objTramitesAsignadosAsNroAbogado;

				case '_TramitesAsignadosAsNroAbogadoArray':
					// Gets the value for the private _objTramitesAsignadosAsNroAbogadoArray (Read-Only)
					// if set due to an ExpandAsArray on the tramites_asignados.nro_abogado reverse relationship
					// @return TramitesAsignados[]
					return (array) $this->_objTramitesAsignadosAsNroAbogadoArray;


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

				case 'Apellido':
					// Sets the value for strApellido (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strApellido = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Telefono':
					// Sets the value for strTelefono 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strTelefono = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NroAbogado':
					// Sets the value for strNroAbogado (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNroAbogado = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for CedulasAsNroAbogado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CedulasesAsNroAbogado as an array of Cedulas objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cedulas[]
		*/ 
		public function GetCedulasAsNroAbogadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdAbogado)))
				return array();

			try {
				return Cedulas::LoadArrayByNroAbogado($this->intIdAbogado, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CedulasesAsNroAbogado
		 * @return int
		*/ 
		public function CountCedulasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				return 0;

			return Cedulas::CountByNroAbogado($this->intIdAbogado);
		}

		/**
		 * Associates a CedulasAsNroAbogado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function AssociateCedulasAsNroAbogado(Cedulas $objCedulas) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCedulasAsNroAbogado on this Abogados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->NroAbogado = $this->intIdAbogado;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CedulasAsNroAbogado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function UnassociateCedulasAsNroAbogado(Cedulas $objCedulas) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this Abogados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`nro_abogado` = null
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->NroAbogado = null;
				$objCedulas->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CedulasesAsNroAbogado
		 * @return void
		*/ 
		public function UnassociateAllCedulasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByNroAbogado($this->intIdAbogado) as $objCedulas) {
					$objCedulas->NroAbogado = null;
					$objCedulas->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cedulas`
				SET
					`nro_abogado` = null
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}

		/**
		 * Deletes an associated CedulasAsNroAbogado
		 * @param Cedulas $objCedulas
		 * @return void
		*/ 
		public function DeleteAssociatedCedulasAsNroAbogado(Cedulas $objCedulas) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objCedulas->IdCedulas)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this Abogados with an unsaved Cedulas.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`id_cedulas` = ' . $objDatabase->SqlVariable($objCedulas->IdCedulas) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCedulas->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CedulasesAsNroAbogado
		 * @return void
		*/ 
		public function DeleteAllCedulasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCedulasAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cedulas::LoadArrayByNroAbogado($this->intIdAbogado) as $objCedulas) {
					$objCedulas->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cedulas`
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}

			
		
		// Related Objects' Methods for DeclaratoriasAsNroAbogado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeclaratoriasesAsNroAbogado as an array of Declaratorias objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Declaratorias[]
		*/ 
		public function GetDeclaratoriasAsNroAbogadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdAbogado)))
				return array();

			try {
				return Declaratorias::LoadArrayByNroAbogado($this->intIdAbogado, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeclaratoriasesAsNroAbogado
		 * @return int
		*/ 
		public function CountDeclaratoriasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				return 0;

			return Declaratorias::CountByNroAbogado($this->intIdAbogado);
		}

		/**
		 * Associates a DeclaratoriasAsNroAbogado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function AssociateDeclaratoriasAsNroAbogado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeclaratoriasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeclaratoriasAsNroAbogado on this Abogados with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->NroAbogado = $this->intIdAbogado;
				$objDeclaratorias->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a DeclaratoriasAsNroAbogado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function UnassociateDeclaratoriasAsNroAbogado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this Abogados with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`nro_abogado` = null
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->NroAbogado = null;
				$objDeclaratorias->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all DeclaratoriasesAsNroAbogado
		 * @return void
		*/ 
		public function UnassociateAllDeclaratoriasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Declaratorias::LoadArrayByNroAbogado($this->intIdAbogado) as $objDeclaratorias) {
					$objDeclaratorias->NroAbogado = null;
					$objDeclaratorias->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`declaratorias`
				SET
					`nro_abogado` = null
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}

		/**
		 * Deletes an associated DeclaratoriasAsNroAbogado
		 * @param Declaratorias $objDeclaratorias
		 * @return void
		*/ 
		public function DeleteAssociatedDeclaratoriasAsNroAbogado(Declaratorias $objDeclaratorias) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objDeclaratorias->IdDeclaratoria)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this Abogados with an unsaved Declaratorias.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`
				WHERE
					`id_declaratoria` = ' . $objDatabase->SqlVariable($objDeclaratorias->IdDeclaratoria) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objDeclaratorias->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated DeclaratoriasesAsNroAbogado
		 * @return void
		*/ 
		public function DeleteAllDeclaratoriasesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeclaratoriasAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Declaratorias::LoadArrayByNroAbogado($this->intIdAbogado) as $objDeclaratorias) {
					$objDeclaratorias->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`declaratorias`
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}

			
		
		// Related Objects' Methods for TramitesAsignadosAsNroAbogado
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TramitesAsignadosesAsNroAbogado as an array of TramitesAsignados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TramitesAsignados[]
		*/ 
		public function GetTramitesAsignadosAsNroAbogadoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdAbogado)))
				return array();

			try {
				return TramitesAsignados::LoadArrayByNroAbogado($this->intIdAbogado, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TramitesAsignadosesAsNroAbogado
		 * @return int
		*/ 
		public function CountTramitesAsignadosesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				return 0;

			return TramitesAsignados::CountByNroAbogado($this->intIdAbogado);
		}

		/**
		 * Associates a TramitesAsignadosAsNroAbogado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function AssociateTramitesAsignadosAsNroAbogado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTramitesAsignadosAsNroAbogado on this Abogados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->NroAbogado = $this->intIdAbogado;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TramitesAsignadosAsNroAbogado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function UnassociateTramitesAsignadosAsNroAbogado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this Abogados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`nro_abogado` = null
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->NroAbogado = null;
				$objTramitesAsignados->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TramitesAsignadosesAsNroAbogado
		 * @return void
		*/ 
		public function UnassociateAllTramitesAsignadosesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByNroAbogado($this->intIdAbogado) as $objTramitesAsignados) {
					$objTramitesAsignados->NroAbogado = null;
					$objTramitesAsignados->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tramites_asignados`
				SET
					`nro_abogado` = null
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}

		/**
		 * Deletes an associated TramitesAsignadosAsNroAbogado
		 * @param TramitesAsignados $objTramitesAsignados
		 * @return void
		*/ 
		public function DeleteAssociatedTramitesAsignadosAsNroAbogado(TramitesAsignados $objTramitesAsignados) {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this unsaved Abogados.');
			if ((is_null($objTramitesAsignados->IdTramiteAsignado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this Abogados with an unsaved TramitesAsignados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`id_tramite_asignado` = ' . $objDatabase->SqlVariable($objTramitesAsignados->IdTramiteAsignado) . ' AND
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTramitesAsignados->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TramitesAsignadosesAsNroAbogado
		 * @return void
		*/ 
		public function DeleteAllTramitesAsignadosesAsNroAbogado() {
			if ((is_null($this->intIdAbogado)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTramitesAsignadosAsNroAbogado on this unsaved Abogados.');

			// Get the Database Object for this Class
			$objDatabase = Abogados::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (TramitesAsignados::LoadArrayByNroAbogado($this->intIdAbogado) as $objTramitesAsignados) {
					$objTramitesAsignados->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tramites_asignados`
				WHERE
					`nro_abogado` = ' . $objDatabase->SqlVariable($this->intIdAbogado) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Abogados"><sequence>';
			$strToReturn .= '<element name="IdAbogado" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Apellido" type="xsd:string"/>';
			$strToReturn .= '<element name="Telefono" type="xsd:string"/>';
			$strToReturn .= '<element name="NroAbogado" type="xsd:string"/>';
			$strToReturn .= '<element name="Activo" type="xsd:int"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Abogados', $strComplexTypeArray)) {
				$strComplexTypeArray['Abogados'] = Abogados::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Abogados::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Abogados();
			if (property_exists($objSoapObject, 'IdAbogado'))
				$objToReturn->intIdAbogado = $objSoapObject->IdAbogado;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Apellido'))
				$objToReturn->strApellido = $objSoapObject->Apellido;
			if (property_exists($objSoapObject, 'Telefono'))
				$objToReturn->strTelefono = $objSoapObject->Telefono;
			if (property_exists($objSoapObject, 'NroAbogado'))
				$objToReturn->strNroAbogado = $objSoapObject->NroAbogado;
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
				array_push($objArrayToReturn, Abogados::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $IdAbogado
	 * @property-read QQNode $Nombre
	 * @property-read QQNode $Apellido
	 * @property-read QQNode $Telefono
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNode $Activo
	 * @property-read QQNode $Observaciones
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsNroAbogado
	 * @property-read QQReverseReferenceNodeDeclaratorias $DeclaratoriasAsNroAbogado
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsNroAbogado
	 */
	class QQNodeAbogados extends QQNode {
		protected $strTableName = 'abogados';
		protected $strPrimaryKey = 'id_abogado';
		protected $strClassName = 'Abogados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdAbogado':
					return new QQNode('id_abogado', 'IdAbogado', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Apellido':
					return new QQNode('apellido', 'Apellido', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'CedulasAsNroAbogado':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasnroabogado', 'reverse_reference', 'nro_abogado');
				case 'DeclaratoriasAsNroAbogado':
					return new QQReverseReferenceNodeDeclaratorias($this, 'declaratoriasasnroabogado', 'reverse_reference', 'nro_abogado');
				case 'TramitesAsignadosAsNroAbogado':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasnroabogado', 'reverse_reference', 'nro_abogado');

				case '_PrimaryKeyNode':
					return new QQNode('id_abogado', 'IdAbogado', 'integer', $this);
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
	 * @property-read QQNode $IdAbogado
	 * @property-read QQNode $Nombre
	 * @property-read QQNode $Apellido
	 * @property-read QQNode $Telefono
	 * @property-read QQNode $NroAbogado
	 * @property-read QQNode $Activo
	 * @property-read QQNode $Observaciones
	 * @property-read QQReverseReferenceNodeCedulas $CedulasAsNroAbogado
	 * @property-read QQReverseReferenceNodeDeclaratorias $DeclaratoriasAsNroAbogado
	 * @property-read QQReverseReferenceNodeTramitesAsignados $TramitesAsignadosAsNroAbogado
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeAbogados extends QQReverseReferenceNode {
		protected $strTableName = 'abogados';
		protected $strPrimaryKey = 'id_abogado';
		protected $strClassName = 'Abogados';
		public function __get($strName) {
			switch ($strName) {
				case 'IdAbogado':
					return new QQNode('id_abogado', 'IdAbogado', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Apellido':
					return new QQNode('apellido', 'Apellido', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'NroAbogado':
					return new QQNode('nro_abogado', 'NroAbogado', 'string', $this);
				case 'Activo':
					return new QQNode('activo', 'Activo', 'integer', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'CedulasAsNroAbogado':
					return new QQReverseReferenceNodeCedulas($this, 'cedulasasnroabogado', 'reverse_reference', 'nro_abogado');
				case 'DeclaratoriasAsNroAbogado':
					return new QQReverseReferenceNodeDeclaratorias($this, 'declaratoriasasnroabogado', 'reverse_reference', 'nro_abogado');
				case 'TramitesAsignadosAsNroAbogado':
					return new QQReverseReferenceNodeTramitesAsignados($this, 'tramitesasignadosasnroabogado', 'reverse_reference', 'nro_abogado');

				case '_PrimaryKeyNode':
					return new QQNode('id_abogado', 'IdAbogado', 'integer', $this);
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