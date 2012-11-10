<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Agentes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Agentes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AgentesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Agentes $Agentes the actual Agentes data class being edited
	 * property QLabel $IdAgenteControl
	 * property-read QLabel $IdAgenteLabel
	 * property QTextBox $NombreApellidoControl
	 * property-read QLabel $NombreApellidoLabel
	 * property QIntegerTextBox $ActivoControl
	 * property-read QLabel $ActivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AgentesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Agentes objAgentes
		 * @access protected
		 */
		protected $objAgentes;

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

		// Controls that allow the editing of Agentes's individual data fields
        /**
         * @var QLabel lblIdAgente;
         * @access protected
         */
		protected $lblIdAgente;

        /**
         * @var QTextBox txtNombreApellido;
         * @access protected
         */
		protected $txtNombreApellido;

        /**
         * @var QIntegerTextBox txtActivo;
         * @access protected
         */
		protected $txtActivo;


		// Controls that allow the viewing of Agentes's individual data fields
        /**
         * @var QLabel lblNombreApellido
         * @access protected
         */
		protected $lblNombreApellido;

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
		 * AgentesMetaControl to edit a single Agentes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Agentes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgentesMetaControl
		 * @param Agentes $objAgentes new or existing Agentes object
		 */
		 public function __construct($objParentObject, Agentes $objAgentes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AgentesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Agentes object
			$this->objAgentes = $objAgentes;

			// Figure out if we're Editing or Creating New
			if ($this->objAgentes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgentesMetaControl
		 * @param integer $intIdAgente primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Agentes object creation - defaults to CreateOrEdit
 		 * @return AgentesMetaControl
		 */
		public static function Create($objParentObject, $intIdAgente = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdAgente)) {
				$objAgentes = Agentes::Load($intIdAgente);

				// Agentes was found -- return it!
				if ($objAgentes)
					return new AgentesMetaControl($objParentObject, $objAgentes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Agentes object with PK arguments: ' . $intIdAgente);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AgentesMetaControl($objParentObject, new Agentes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgentesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Agentes object creation - defaults to CreateOrEdit
		 * @return AgentesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdAgente = QApplication::PathInfo(0);
			return AgentesMetaControl::Create($objParentObject, $intIdAgente, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgentesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Agentes object creation - defaults to CreateOrEdit
		 * @return AgentesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdAgente = QApplication::QueryString('intIdAgente');
			return AgentesMetaControl::Create($objParentObject, $intIdAgente, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdAgente
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdAgente_Create($strControlId = null) {
			$this->lblIdAgente = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdAgente->Name = QApplication::Translate('Id Agente');
			if ($this->blnEditMode)
				$this->lblIdAgente->Text = $this->objAgentes->IdAgente;
			else
				$this->lblIdAgente->Text = 'N/A';
			return $this->lblIdAgente;
		}

		/**
		 * Create and setup QTextBox txtNombreApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombreApellido_Create($strControlId = null) {
			$this->txtNombreApellido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombreApellido->Name = QApplication::Translate('Nombre Apellido');
			$this->txtNombreApellido->Text = $this->objAgentes->NombreApellido;
			$this->txtNombreApellido->Required = true;
			$this->txtNombreApellido->MaxLength = Agentes::NombreApellidoMaxLength;
			return $this->txtNombreApellido;
		}

		/**
		 * Create and setup QLabel lblNombreApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombreApellido_Create($strControlId = null) {
			$this->lblNombreApellido = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombreApellido->Name = QApplication::Translate('Nombre Apellido');
			$this->lblNombreApellido->Text = $this->objAgentes->NombreApellido;
			$this->lblNombreApellido->Required = true;
			return $this->lblNombreApellido;
		}

		/**
		 * Create and setup QIntegerTextBox txtActivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActivo_Create($strControlId = null) {
			$this->txtActivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActivo->Name = QApplication::Translate('Activo');
			$this->txtActivo->Text = $this->objAgentes->Activo;
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
			$this->lblActivo->Text = $this->objAgentes->Activo;
			$this->lblActivo->Required = true;
			$this->lblActivo->Format = $strFormat;
			return $this->lblActivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local Agentes object.
		 * @param boolean $blnReload reload Agentes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAgentes->Reload();

			if ($this->lblIdAgente) if ($this->blnEditMode) $this->lblIdAgente->Text = $this->objAgentes->IdAgente;

			if ($this->txtNombreApellido) $this->txtNombreApellido->Text = $this->objAgentes->NombreApellido;
			if ($this->lblNombreApellido) $this->lblNombreApellido->Text = $this->objAgentes->NombreApellido;

			if ($this->txtActivo) $this->txtActivo->Text = $this->objAgentes->Activo;
			if ($this->lblActivo) $this->lblActivo->Text = $this->objAgentes->Activo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC AGENTES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Agentes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAgentes() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombreApellido) $this->objAgentes->NombreApellido = $this->txtNombreApellido->Text;
				if ($this->txtActivo) $this->objAgentes->Activo = $this->txtActivo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Agentes object
				$this->objAgentes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Agentes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAgentes() {
			$this->objAgentes->Delete();
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
				case 'Agentes': return $this->objAgentes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Agentes fields -- will be created dynamically if not yet created
				case 'IdAgenteControl':
					if (!$this->lblIdAgente) return $this->lblIdAgente_Create();
					return $this->lblIdAgente;
				case 'IdAgenteLabel':
					if (!$this->lblIdAgente) return $this->lblIdAgente_Create();
					return $this->lblIdAgente;
				case 'NombreApellidoControl':
					if (!$this->txtNombreApellido) return $this->txtNombreApellido_Create();
					return $this->txtNombreApellido;
				case 'NombreApellidoLabel':
					if (!$this->lblNombreApellido) return $this->lblNombreApellido_Create();
					return $this->lblNombreApellido;
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
					// Controls that point to Agentes fields
					case 'IdAgenteControl':
						return ($this->lblIdAgente = QType::Cast($mixValue, 'QControl'));
					case 'NombreApellidoControl':
						return ($this->txtNombreApellido = QType::Cast($mixValue, 'QControl'));
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