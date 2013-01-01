<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the EstadoDeclaratoria class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single EstadoDeclaratoria object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EstadoDeclaratoriaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read EstadoDeclaratoria $EstadoDeclaratoria the actual EstadoDeclaratoria data class being edited
	 * property QLabel $IdEstadoDeclaratoriaControl
	 * property-read QLabel $IdEstadoDeclaratoriaLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EstadoDeclaratoriaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var EstadoDeclaratoria objEstadoDeclaratoria
		 * @access protected
		 */
		protected $objEstadoDeclaratoria;

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

		// Controls that allow the editing of EstadoDeclaratoria's individual data fields
        /**
         * @var QLabel lblIdEstadoDeclaratoria;
         * @access protected
         */
		protected $lblIdEstadoDeclaratoria;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;


		// Controls that allow the viewing of EstadoDeclaratoria's individual data fields
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
		 * EstadoDeclaratoriaMetaControl to edit a single EstadoDeclaratoria object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single EstadoDeclaratoria object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadoDeclaratoriaMetaControl
		 * @param EstadoDeclaratoria $objEstadoDeclaratoria new or existing EstadoDeclaratoria object
		 */
		 public function __construct($objParentObject, EstadoDeclaratoria $objEstadoDeclaratoria) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EstadoDeclaratoriaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked EstadoDeclaratoria object
			$this->objEstadoDeclaratoria = $objEstadoDeclaratoria;

			// Figure out if we're Editing or Creating New
			if ($this->objEstadoDeclaratoria->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadoDeclaratoriaMetaControl
		 * @param integer $intIdEstadoDeclaratoria primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing EstadoDeclaratoria object creation - defaults to CreateOrEdit
 		 * @return EstadoDeclaratoriaMetaControl
		 */
		public static function Create($objParentObject, $intIdEstadoDeclaratoria = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdEstadoDeclaratoria)) {
				$objEstadoDeclaratoria = EstadoDeclaratoria::Load($intIdEstadoDeclaratoria);

				// EstadoDeclaratoria was found -- return it!
				if ($objEstadoDeclaratoria)
					return new EstadoDeclaratoriaMetaControl($objParentObject, $objEstadoDeclaratoria);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a EstadoDeclaratoria object with PK arguments: ' . $intIdEstadoDeclaratoria);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EstadoDeclaratoriaMetaControl($objParentObject, new EstadoDeclaratoria());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadoDeclaratoriaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing EstadoDeclaratoria object creation - defaults to CreateOrEdit
		 * @return EstadoDeclaratoriaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEstadoDeclaratoria = QApplication::PathInfo(0);
			return EstadoDeclaratoriaMetaControl::Create($objParentObject, $intIdEstadoDeclaratoria, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadoDeclaratoriaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing EstadoDeclaratoria object creation - defaults to CreateOrEdit
		 * @return EstadoDeclaratoriaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEstadoDeclaratoria = QApplication::QueryString('intIdEstadoDeclaratoria');
			return EstadoDeclaratoriaMetaControl::Create($objParentObject, $intIdEstadoDeclaratoria, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdEstadoDeclaratoria
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdEstadoDeclaratoria_Create($strControlId = null) {
			$this->lblIdEstadoDeclaratoria = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEstadoDeclaratoria->Name = QApplication::Translate('Id Estado Declaratoria');
			if ($this->blnEditMode)
				$this->lblIdEstadoDeclaratoria->Text = $this->objEstadoDeclaratoria->IdEstadoDeclaratoria;
			else
				$this->lblIdEstadoDeclaratoria->Text = 'N/A';
			return $this->lblIdEstadoDeclaratoria;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objEstadoDeclaratoria->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = EstadoDeclaratoria::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objEstadoDeclaratoria->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local EstadoDeclaratoria object.
		 * @param boolean $blnReload reload EstadoDeclaratoria from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEstadoDeclaratoria->Reload();

			if ($this->lblIdEstadoDeclaratoria) if ($this->blnEditMode) $this->lblIdEstadoDeclaratoria->Text = $this->objEstadoDeclaratoria->IdEstadoDeclaratoria;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objEstadoDeclaratoria->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objEstadoDeclaratoria->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ESTADODECLARATORIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's EstadoDeclaratoria instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEstadoDeclaratoria() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objEstadoDeclaratoria->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the EstadoDeclaratoria object
				$this->objEstadoDeclaratoria->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's EstadoDeclaratoria instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEstadoDeclaratoria() {
			$this->objEstadoDeclaratoria->Delete();
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
				case 'EstadoDeclaratoria': return $this->objEstadoDeclaratoria;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to EstadoDeclaratoria fields -- will be created dynamically if not yet created
				case 'IdEstadoDeclaratoriaControl':
					if (!$this->lblIdEstadoDeclaratoria) return $this->lblIdEstadoDeclaratoria_Create();
					return $this->lblIdEstadoDeclaratoria;
				case 'IdEstadoDeclaratoriaLabel':
					if (!$this->lblIdEstadoDeclaratoria) return $this->lblIdEstadoDeclaratoria_Create();
					return $this->lblIdEstadoDeclaratoria;
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
					// Controls that point to EstadoDeclaratoria fields
					case 'IdEstadoDeclaratoriaControl':
						return ($this->lblIdEstadoDeclaratoria = QType::Cast($mixValue, 'QControl'));
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