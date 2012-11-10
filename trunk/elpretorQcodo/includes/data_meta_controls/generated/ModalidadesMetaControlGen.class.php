<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Modalidades class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Modalidades object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ModalidadesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Modalidades $Modalidades the actual Modalidades data class being edited
	 * property QLabel $IdModalidadControl
	 * property-read QLabel $IdModalidadLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QIntegerTextBox $ActivoControl
	 * property-read QLabel $ActivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ModalidadesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Modalidades objModalidades
		 * @access protected
		 */
		protected $objModalidades;

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

		// Controls that allow the editing of Modalidades's individual data fields
        /**
         * @var QLabel lblIdModalidad;
         * @access protected
         */
		protected $lblIdModalidad;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;

        /**
         * @var QIntegerTextBox txtActivo;
         * @access protected
         */
		protected $txtActivo;


		// Controls that allow the viewing of Modalidades's individual data fields
        /**
         * @var QLabel lblNombre
         * @access protected
         */
		protected $lblNombre;

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
		 * ModalidadesMetaControl to edit a single Modalidades object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Modalidades object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModalidadesMetaControl
		 * @param Modalidades $objModalidades new or existing Modalidades object
		 */
		 public function __construct($objParentObject, Modalidades $objModalidades) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ModalidadesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Modalidades object
			$this->objModalidades = $objModalidades;

			// Figure out if we're Editing or Creating New
			if ($this->objModalidades->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModalidadesMetaControl
		 * @param integer $intIdModalidad primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Modalidades object creation - defaults to CreateOrEdit
 		 * @return ModalidadesMetaControl
		 */
		public static function Create($objParentObject, $intIdModalidad = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdModalidad)) {
				$objModalidades = Modalidades::Load($intIdModalidad);

				// Modalidades was found -- return it!
				if ($objModalidades)
					return new ModalidadesMetaControl($objParentObject, $objModalidades);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Modalidades object with PK arguments: ' . $intIdModalidad);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ModalidadesMetaControl($objParentObject, new Modalidades());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModalidadesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Modalidades object creation - defaults to CreateOrEdit
		 * @return ModalidadesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModalidad = QApplication::PathInfo(0);
			return ModalidadesMetaControl::Create($objParentObject, $intIdModalidad, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ModalidadesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Modalidades object creation - defaults to CreateOrEdit
		 * @return ModalidadesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdModalidad = QApplication::QueryString('intIdModalidad');
			return ModalidadesMetaControl::Create($objParentObject, $intIdModalidad, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdModalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdModalidad_Create($strControlId = null) {
			$this->lblIdModalidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdModalidad->Name = QApplication::Translate('Id Modalidad');
			if ($this->blnEditMode)
				$this->lblIdModalidad->Text = $this->objModalidades->IdModalidad;
			else
				$this->lblIdModalidad->Text = 'N/A';
			return $this->lblIdModalidad;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objModalidades->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Modalidades::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objModalidades->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtActivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActivo_Create($strControlId = null) {
			$this->txtActivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActivo->Name = QApplication::Translate('Activo');
			$this->txtActivo->Text = $this->objModalidades->Activo;
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
			$this->lblActivo->Text = $this->objModalidades->Activo;
			$this->lblActivo->Required = true;
			$this->lblActivo->Format = $strFormat;
			return $this->lblActivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local Modalidades object.
		 * @param boolean $blnReload reload Modalidades from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objModalidades->Reload();

			if ($this->lblIdModalidad) if ($this->blnEditMode) $this->lblIdModalidad->Text = $this->objModalidades->IdModalidad;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objModalidades->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objModalidades->Nombre;

			if ($this->txtActivo) $this->txtActivo->Text = $this->objModalidades->Activo;
			if ($this->lblActivo) $this->lblActivo->Text = $this->objModalidades->Activo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MODALIDADES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Modalidades instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveModalidades() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objModalidades->Nombre = $this->txtNombre->Text;
				if ($this->txtActivo) $this->objModalidades->Activo = $this->txtActivo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Modalidades object
				$this->objModalidades->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Modalidades instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteModalidades() {
			$this->objModalidades->Delete();
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
				case 'Modalidades': return $this->objModalidades;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Modalidades fields -- will be created dynamically if not yet created
				case 'IdModalidadControl':
					if (!$this->lblIdModalidad) return $this->lblIdModalidad_Create();
					return $this->lblIdModalidad;
				case 'IdModalidadLabel':
					if (!$this->lblIdModalidad) return $this->lblIdModalidad_Create();
					return $this->lblIdModalidad;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
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
					// Controls that point to Modalidades fields
					case 'IdModalidadControl':
						return ($this->lblIdModalidad = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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