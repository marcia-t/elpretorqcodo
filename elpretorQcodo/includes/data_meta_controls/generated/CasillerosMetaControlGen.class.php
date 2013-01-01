<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Casilleros class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Casilleros object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CasillerosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Casilleros $Casilleros the actual Casilleros data class being edited
	 * property QLabel $IdCasilleroControl
	 * property-read QLabel $IdCasilleroLabel
	 * property QTextBox $NroCasilleroControl
	 * property-read QLabel $NroCasilleroLabel
	 * property QTextBox $TitularControl
	 * property-read QLabel $TitularLabel
	 * property QTextBox $ObservacionControl
	 * property-read QLabel $ObservacionLabel
	 * property QIntegerTextBox $ActivoControl
	 * property-read QLabel $ActivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CasillerosMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Casilleros objCasilleros
		 * @access protected
		 */
		protected $objCasilleros;

		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;

		/**
		 * @var string  strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;

		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Casilleros's individual data fields
        /**
         * @var QLabel lblIdCasillero;
         * @access protected
         */
		protected $lblIdCasillero;

        /**
         * @var QTextBox txtNroCasillero;
         * @access protected
         */
		protected $txtNroCasillero;

        /**
         * @var QTextBox txtTitular;
         * @access protected
         */
		protected $txtTitular;

        /**
         * @var QTextBox txtObservacion;
         * @access protected
         */
		protected $txtObservacion;

        /**
         * @var QIntegerTextBox txtActivo;
         * @access protected
         */
		protected $txtActivo;


		// Controls that allow the viewing of Casilleros's individual data fields
        /**
         * @var QLabel lblNroCasillero
         * @access protected
         */
		protected $lblNroCasillero;

        /**
         * @var QLabel lblTitular
         * @access protected
         */
		protected $lblTitular;

        /**
         * @var QLabel lblObservacion
         * @access protected
         */
		protected $lblObservacion;

        /**
         * @var QLabel lblActivo
         * @access protected
         */
		protected $lblActivo;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CasillerosMetaControl to edit a single Casilleros object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Casilleros object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasillerosMetaControl
		 * @param Casilleros $objCasilleros new or existing Casilleros object
		 */
		 public function __construct($objParentObject, Casilleros $objCasilleros) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CasillerosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Casilleros object
			$this->objCasilleros = $objCasilleros;

			// Figure out if we're Editing or Creating New
			if ($this->objCasilleros->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasillerosMetaControl
		 * @param integer $intIdCasillero primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Casilleros object creation - defaults to CreateOrEdit
 		 * @return CasillerosMetaControl
		 */
		public static function Create($objParentObject, $intIdCasillero = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdCasillero)) {
				$objCasilleros = Casilleros::Load($intIdCasillero);

				// Casilleros was found -- return it!
				if ($objCasilleros)
					return new CasillerosMetaControl($objParentObject, $objCasilleros);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Casilleros object with PK arguments: ' . $intIdCasillero);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CasillerosMetaControl($objParentObject, new Casilleros());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasillerosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Casilleros object creation - defaults to CreateOrEdit
		 * @return CasillerosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdCasillero = QApplication::PathInfo(0);
			return CasillerosMetaControl::Create($objParentObject, $intIdCasillero, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasillerosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Casilleros object creation - defaults to CreateOrEdit
		 * @return CasillerosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdCasillero = QApplication::QueryString('intIdCasillero');
			return CasillerosMetaControl::Create($objParentObject, $intIdCasillero, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdCasillero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdCasillero_Create($strControlId = null) {
			$this->lblIdCasillero = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdCasillero->Name = QApplication::Translate('Id Casillero');
			if ($this->blnEditMode)
				$this->lblIdCasillero->Text = $this->objCasilleros->IdCasillero;
			else
				$this->lblIdCasillero->Text = 'N/A';
			return $this->lblIdCasillero;
		}

		/**
		 * Create and setup QTextBox txtNroCasillero
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNroCasillero_Create($strControlId = null) {
			$this->txtNroCasillero = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNroCasillero->Name = QApplication::Translate('Nro Casillero');
			$this->txtNroCasillero->Text = $this->objCasilleros->NroCasillero;
			$this->txtNroCasillero->Required = true;
			$this->txtNroCasillero->MaxLength = Casilleros::NroCasilleroMaxLength;
			return $this->txtNroCasillero;
		}

		/**
		 * Create and setup QLabel lblNroCasillero
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNroCasillero_Create($strControlId = null) {
			$this->lblNroCasillero = new QLabel($this->objParentObject, $strControlId);
			$this->lblNroCasillero->Name = QApplication::Translate('Nro Casillero');
			$this->lblNroCasillero->Text = $this->objCasilleros->NroCasillero;
			$this->lblNroCasillero->Required = true;
			return $this->lblNroCasillero;
		}

		/**
		 * Create and setup QTextBox txtTitular
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitular_Create($strControlId = null) {
			$this->txtTitular = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitular->Name = QApplication::Translate('Titular');
			$this->txtTitular->Text = $this->objCasilleros->Titular;
			$this->txtTitular->Required = true;
			$this->txtTitular->MaxLength = Casilleros::TitularMaxLength;
			return $this->txtTitular;
		}

		/**
		 * Create and setup QLabel lblTitular
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitular_Create($strControlId = null) {
			$this->lblTitular = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitular->Name = QApplication::Translate('Titular');
			$this->lblTitular->Text = $this->objCasilleros->Titular;
			$this->lblTitular->Required = true;
			return $this->lblTitular;
		}

		/**
		 * Create and setup QTextBox txtObservacion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservacion_Create($strControlId = null) {
			$this->txtObservacion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservacion->Name = QApplication::Translate('Observacion');
			$this->txtObservacion->Text = $this->objCasilleros->Observacion;
			$this->txtObservacion->Required = false;
			$this->txtObservacion->MaxLength = Casilleros::ObservacionMaxLength;
			return $this->txtObservacion;
		}

		/**
		 * Create and setup QLabel lblObservacion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblObservacion_Create($strControlId = null) {
			$this->lblObservacion = new QLabel($this->objParentObject, $strControlId);
			$this->lblObservacion->Name = QApplication::Translate('Observacion');
			$this->lblObservacion->Text = $this->objCasilleros->Observacion;
			$this->lblObservacion->Required = true;
			return $this->lblObservacion;
		}

		/**
		 * Create and setup QIntegerTextBox txtActivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActivo_Create($strControlId = null) {
			$this->txtActivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActivo->Name = QApplication::Translate('Activo');
			$this->txtActivo->Text = $this->objCasilleros->Activo;
			$this->txtActivo->Required = true;
			return $this->txtActivo;
		}

		/**
		 * Create and setup QLabel lblActivo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblActivo_Create($strControlId = null, $strFormat = null) {
			$this->lblActivo = new QLabel($this->objParentObject, $strControlId);
			$this->lblActivo->Name = QApplication::Translate('Activo');
			$this->lblActivo->Text = $this->objCasilleros->Activo;
			$this->lblActivo->Required = true;
			$this->lblActivo->Format = $strFormat;
			return $this->lblActivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local Casilleros object.
		 * @param boolean $blnReload reload Casilleros from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCasilleros->Reload();

			if ($this->lblIdCasillero) if ($this->blnEditMode) $this->lblIdCasillero->Text = $this->objCasilleros->IdCasillero;

			if ($this->txtNroCasillero) $this->txtNroCasillero->Text = $this->objCasilleros->NroCasillero;
			if ($this->lblNroCasillero) $this->lblNroCasillero->Text = $this->objCasilleros->NroCasillero;

			if ($this->txtTitular) $this->txtTitular->Text = $this->objCasilleros->Titular;
			if ($this->lblTitular) $this->lblTitular->Text = $this->objCasilleros->Titular;

			if ($this->txtObservacion) $this->txtObservacion->Text = $this->objCasilleros->Observacion;
			if ($this->lblObservacion) $this->lblObservacion->Text = $this->objCasilleros->Observacion;

			if ($this->txtActivo) $this->txtActivo->Text = $this->objCasilleros->Activo;
			if ($this->lblActivo) $this->lblActivo->Text = $this->objCasilleros->Activo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CASILLEROS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Casilleros instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCasilleros() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNroCasillero) $this->objCasilleros->NroCasillero = $this->txtNroCasillero->Text;
				if ($this->txtTitular) $this->objCasilleros->Titular = $this->txtTitular->Text;
				if ($this->txtObservacion) $this->objCasilleros->Observacion = $this->txtObservacion->Text;
				if ($this->txtActivo) $this->objCasilleros->Activo = $this->txtActivo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Casilleros object
				$this->objCasilleros->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Casilleros instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCasilleros() {
			$this->objCasilleros->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Casilleros': return $this->objCasilleros;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Casilleros fields -- will be created dynamically if not yet created
				case 'IdCasilleroControl':
					if (!$this->lblIdCasillero) return $this->lblIdCasillero_Create();
					return $this->lblIdCasillero;
				case 'IdCasilleroLabel':
					if (!$this->lblIdCasillero) return $this->lblIdCasillero_Create();
					return $this->lblIdCasillero;
				case 'NroCasilleroControl':
					if (!$this->txtNroCasillero) return $this->txtNroCasillero_Create();
					return $this->txtNroCasillero;
				case 'NroCasilleroLabel':
					if (!$this->lblNroCasillero) return $this->lblNroCasillero_Create();
					return $this->lblNroCasillero;
				case 'TitularControl':
					if (!$this->txtTitular) return $this->txtTitular_Create();
					return $this->txtTitular;
				case 'TitularLabel':
					if (!$this->lblTitular) return $this->lblTitular_Create();
					return $this->lblTitular;
				case 'ObservacionControl':
					if (!$this->txtObservacion) return $this->txtObservacion_Create();
					return $this->txtObservacion;
				case 'ObservacionLabel':
					if (!$this->lblObservacion) return $this->lblObservacion_Create();
					return $this->lblObservacion;
				case 'ActivoControl':
					if (!$this->txtActivo) return $this->txtActivo_Create();
					return $this->txtActivo;
				case 'ActivoLabel':
					if (!$this->lblActivo) return $this->lblActivo_Create();
					return $this->lblActivo;
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
			try {
				switch ($strName) {
					// Controls that point to Casilleros fields
					case 'IdCasilleroControl':
						return ($this->lblIdCasillero = QType::Cast($mixValue, 'QControl'));
					case 'NroCasilleroControl':
						return ($this->txtNroCasillero = QType::Cast($mixValue, 'QControl'));
					case 'TitularControl':
						return ($this->txtTitular = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionControl':
						return ($this->txtObservacion = QType::Cast($mixValue, 'QControl'));
					case 'ActivoControl':
						return ($this->txtActivo = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>