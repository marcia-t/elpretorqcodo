<?php
	require(__DATAGEN_CLASSES__ . '/AgentesGen.class.php');

	/**
	 * The Agentes class defined here contains any
	 * customized code for the Agentes class in the
	 * Object Relational Model.  It represents the "agentes" table 
	 * in the database, and extends from the code generated abstract AgentesGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Agentes extends AgentesGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objAgentes->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('%s',  $this->strNombreApellido);
		}


		public function bindAll(){
			$objDatabase = Agentes::GetDatabase();
				
			$sql = "SELECT *
			FROM agentes
			WHERE activo = 1";
				
			$objDbResult = $objDatabase->Query($sql);
			return Agentes::InstantiateDbResult($objDbResult);
		}
		
		
		public function Delete() {
			if ((is_null($this->intIdAgente)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Agentes with an unset primary key.');
		
			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();
		
		
			// Perform the SQL Query
			$objDatabase->NonQuery('
					UPDATE
					`agentes`
					SET `activo` = 0
					WHERE
					`id_agente` = ' . $objDatabase->SqlVariable($this->intIdAgente) . '');
		
			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}
		
		
		
		
		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Agentes objects
			return Agentes::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Agentes()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Agentes()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Agentes object
			return Agentes::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Agentes()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Agentes()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Agentes objects
			return Agentes::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Agentes()->Param1, $strParam1),
					QQ::Equal(QQN::Agentes()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Agentes::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`agentes`.*
				FROM
					`agentes` AS `agentes`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Agentes::InstantiateDbResult($objDbResult);
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