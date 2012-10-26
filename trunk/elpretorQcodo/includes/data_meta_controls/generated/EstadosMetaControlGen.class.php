<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Estados class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Estados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EstadosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Estados $Estados the actual Estados data class being edited
	 * property QLabel $IdEstadoControl
	 * property-read QLabel $IdEstadoLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EstadosMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Estados objEstados
		 * @access protected
		 */
		protected $objEstados;

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

		// Controls that allow the editing of Estados's individual data fields
        /**
         * @var QLabel lblIdEstado;
         * @access protected
         */
		protected $lblIdEstado;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;


		// Controls that allow the viewing of Estados's individual data fields
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
		 * EstadosMetaControl to edit a single Estados object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Estados object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadosMetaControl
		 * @param Estados $objEstados new or existing Estados object
		 */
		 public function __construct($objParentObject, Estados $objEstados) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EstadosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Estados object
			$this->objEstados = $objEstados;

			// Figure out if we're Editing or Creating New
			if ($this->objEstados->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadosMetaControl
		 * @param integer $intIdEstado primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Estados object creation - defaults to CreateOrEdit
 		 * @return EstadosMetaControl
		 */
		public static function Create($objParentObject, $intIdEstado = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdEstado)) {
				$objEstados = Estados::Load($intIdEstado);

				// Estados was found -- return it!
				if ($objEstados)
					return new EstadosMetaControl($objParentObject, $objEstados);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Estados object with PK arguments: ' . $intIdEstado);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EstadosMetaControl($objParentObject, new Estados());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Estados object creation - defaults to CreateOrEdit
		 * @return EstadosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEstado = QApplication::PathInfo(0);
			return EstadosMetaControl::Create($objParentObject, $intIdEstado, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EstadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Estados object creation - defaults to CreateOrEdit
		 * @return EstadosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEstado = QApplication::QueryString('intIdEstado');
			return EstadosMetaControl::Create($objParentObject, $intIdEstado, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdEstado_Create($strControlId = null) {
			$this->lblIdEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEstado->Name = QApplication::Translate('Id Estado');
			if ($this->blnEditMode)
				$this->lblIdEstado->Text = $this->objEstados->IdEstado;
			else
				$this->lblIdEstado->Text = 'N/A';
			return $this->lblIdEstado;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objEstados->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Estados::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objEstados->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local Estados object.
		 * @param boolean $blnReload reload Estados from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEstados->Reload();

			if ($this->lblIdEstado) if ($this->blnEditMode) $this->lblIdEstado->Text = $this->objEstados->IdEstado;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objEstados->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objEstados->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ESTADOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Estados instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEstados() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objEstados->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Estados object
				$this->objEstados->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Estados instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEstados() {
			$this->objEstados->Delete();
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
				case 'Estados': return $this->objEstados;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Estados fields -- will be created dynamically if not yet created
				case 'IdEstadoControl':
					if (!$this->lblIdEstado) return $this->lblIdEstado_Create();
					return $this->lblIdEstado;
				case 'IdEstadoLabel':
					if (!$this->lblIdEstado) return $this->lblIdEstado_Create();
					return $this->lblIdEstado;
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
					// Controls that point to Estados fields
					case 'IdEstadoControl':
						return ($this->lblIdEstado = QType::Cast($mixValue, 'QControl'));
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