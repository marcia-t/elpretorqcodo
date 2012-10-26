<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Zonas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Zonas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ZonasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Zonas $Zonas the actual Zonas data class being edited
	 * property QLabel $IdZonaControl
	 * property-read QLabel $IdZonaLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ZonasMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Zonas objZonas
		 * @access protected
		 */
		protected $objZonas;

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

		// Controls that allow the editing of Zonas's individual data fields
        /**
         * @var QLabel lblIdZona;
         * @access protected
         */
		protected $lblIdZona;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;


		// Controls that allow the viewing of Zonas's individual data fields
        /**
         * @var QLabel lblNombre
         * @access protected
         */
		protected $lblNombre;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ZonasMetaControl to edit a single Zonas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Zonas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ZonasMetaControl
		 * @param Zonas $objZonas new or existing Zonas object
		 */
		 public function __construct($objParentObject, Zonas $objZonas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ZonasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Zonas object
			$this->objZonas = $objZonas;

			// Figure out if we're Editing or Creating New
			if ($this->objZonas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ZonasMetaControl
		 * @param integer $intIdZona primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Zonas object creation - defaults to CreateOrEdit
 		 * @return ZonasMetaControl
		 */
		public static function Create($objParentObject, $intIdZona = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdZona)) {
				$objZonas = Zonas::Load($intIdZona);

				// Zonas was found -- return it!
				if ($objZonas)
					return new ZonasMetaControl($objParentObject, $objZonas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Zonas object with PK arguments: ' . $intIdZona);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ZonasMetaControl($objParentObject, new Zonas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ZonasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Zonas object creation - defaults to CreateOrEdit
		 * @return ZonasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdZona = QApplication::PathInfo(0);
			return ZonasMetaControl::Create($objParentObject, $intIdZona, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ZonasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Zonas object creation - defaults to CreateOrEdit
		 * @return ZonasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdZona = QApplication::QueryString('intIdZona');
			return ZonasMetaControl::Create($objParentObject, $intIdZona, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdZona
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdZona_Create($strControlId = null) {
			$this->lblIdZona = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdZona->Name = QApplication::Translate('Id Zona');
			if ($this->blnEditMode)
				$this->lblIdZona->Text = $this->objZonas->IdZona;
			else
				$this->lblIdZona->Text = 'N/A';
			return $this->lblIdZona;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objZonas->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Zonas::NombreMaxLength;
			return $this->txtNombre;
		}

		/**
		 * Create and setup QLabel lblNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombre_Create($strControlId = null) {
			$this->lblNombre = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombre->Name = QApplication::Translate('Nombre');
			$this->lblNombre->Text = $this->objZonas->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local Zonas object.
		 * @param boolean $blnReload reload Zonas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objZonas->Reload();

			if ($this->lblIdZona) if ($this->blnEditMode) $this->lblIdZona->Text = $this->objZonas->IdZona;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objZonas->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objZonas->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ZONAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Zonas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveZonas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objZonas->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Zonas object
				$this->objZonas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Zonas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteZonas() {
			$this->objZonas->Delete();
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
				case 'Zonas': return $this->objZonas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Zonas fields -- will be created dynamically if not yet created
				case 'IdZonaControl':
					if (!$this->lblIdZona) return $this->lblIdZona_Create();
					return $this->lblIdZona;
				case 'IdZonaLabel':
					if (!$this->lblIdZona) return $this->lblIdZona_Create();
					return $this->lblIdZona;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
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
					// Controls that point to Zonas fields
					case 'IdZonaControl':
						return ($this->lblIdZona = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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