<?php
	require(__DATAGEN_CLASSES__ . '/DeclaratoriasGen.class.php');

	/**
	 * The Declaratorias class defined here contains any
	 * customized code for the Declaratorias class in the
	 * Object Relational Model.  It represents the "declaratorias" table 
	 * in the database, and extends from the code generated abstract DeclaratoriasGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Declaratorias extends DeclaratoriasGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objDeclaratorias->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('Declaratorias Object %s',  $this->intIdDeclaratoria);
		}
		
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
					return $this->strHonorarios;
		
				case 'Timbrado':
					// Gets the value for intTimbrado (Not Null)
					// @return integer
					return $this->strTimbrado;
		
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
					if ($this->intObservada == 0){
						return 'No';
					}else{
						return 'Sí';
					}
					//return $this->intObservada;
		
		
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
		


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Declaratorias objects
			return Declaratorias::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Declaratorias()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Declaratorias()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Declaratorias object
			return Declaratorias::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Declaratorias()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Declaratorias()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Declaratorias objects
			return Declaratorias::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Declaratorias()->Param1, $strParam1),
					QQ::Equal(QQN::Declaratorias()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Declaratorias::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`declaratorias`.*
				FROM
					`declaratorias` AS `declaratorias`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Declaratorias::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/
	}
?>