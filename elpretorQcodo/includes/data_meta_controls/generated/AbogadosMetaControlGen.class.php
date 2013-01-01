<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Abogados class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Abogados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AbogadosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Abogados $Abogados the actual Abogados data class being edited
	 * property QLabel $IdAbogadoControl
	 * property-read QLabel $IdAbogadoLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $ApellidoControl
	 * property-read QLabel $ApellidoLabel
	 * property QIntegerTextBox $TelefonoControl
	 * property-read QLabel $TelefonoLabel
	 * property QTextBox $NroAbogadoControl
	 * property-read QLabel $NroAbogadoLabel
	 * property QIntegerTextBox $ActivoControl
	 * property-read QLabel $ActivoLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AbogadosMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Abogados objAbogados
		 * @access protected
		 */
		protected $objAbogados;

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

		// Controls that allow the editing of Abogados's individual data fields
        /**
         * @var QLabel lblIdAbogado;
         * @access protected
         */
		protected $lblIdAbogado;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;

        /**
         * @var QTextBox txtApellido;
         * @access protected
         */
		protected $txtApellido;

        /**
         * @var QIntegerTextBox txtTelefono;
         * @access protected
         */
		protected $txtTelefono;

        /**
         * @var QTextBox txtNroAbogado;
         * @access protected
         */
		protected $txtNroAbogado;

        /**
         * @var QIntegerTextBox txtActivo;
         * @access protected
         */
		protected $txtActivo;

        /**
         * @var QTextBox txtObservaciones;
         * @access protected
         */
		protected $txtObservaciones;


		// Controls that allow the viewing of Abogados's individual data fields
        /**
         * @var QLabel lblNombre
         * @access protected
         */
		protected $lblNombre;

        /**
         * @var QLabel lblApellido
         * @access protected
         */
		protected $lblApellido;

        /**
         * @var QLabel lblTelefono
         * @access protected
         */
		protected $lblTelefono;

        /**
         * @var QLabel lblNroAbogado
         * @access protected
         */
		protected $lblNroAbogado;

        /**
         * @var QLabel lblActivo
         * @access protected
         */
		protected $lblActivo;

        /**
         * @var QLabel lblObservaciones
         * @access protected
         */
		protected $lblObservaciones;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AbogadosMetaControl to edit a single Abogados object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Abogados object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AbogadosMetaControl
		 * @param Abogados $objAbogados new or existing Abogados object
		 */
		 public function __construct($objParentObject, Abogados $objAbogados) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AbogadosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Abogados object
			$this->objAbogados = $objAbogados;

			// Figure out if we're Editing or Creating New
			if ($this->objAbogados->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AbogadosMetaControl
		 * @param integer $intIdAbogado primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Abogados object creation - defaults to CreateOrEdit
 		 * @return AbogadosMetaControl
		 */
		public static function Create($objParentObject, $intIdAbogado = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdAbogado)) {
				$objAbogados = Abogados::Load($intIdAbogado);

				// Abogados was found -- return it!
				if ($objAbogados)
					return new AbogadosMetaControl($objParentObject, $objAbogados);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Abogados object with PK arguments: ' . $intIdAbogado);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AbogadosMetaControl($objParentObject, new Abogados());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AbogadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Abogados object creation - defaults to CreateOrEdit
		 * @return AbogadosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdAbogado = QApplication::PathInfo(0);
			return AbogadosMetaControl::Create($objParentObject, $intIdAbogado, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AbogadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Abogados object creation - defaults to CreateOrEdit
		 * @return AbogadosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdAbogado = QApplication::QueryString('intIdAbogado');
			return AbogadosMetaControl::Create($objParentObject, $intIdAbogado, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdAbogado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdAbogado_Create($strControlId = null) {
			$this->lblIdAbogado = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdAbogado->Name = QApplication::Translate('Id Abogado');
			if ($this->blnEditMode)
				$this->lblIdAbogado->Text = $this->objAbogados->IdAbogado;
			else
				$this->lblIdAbogado->Text = 'N/A';
			return $this->lblIdAbogado;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objAbogados->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Abogados::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objAbogados->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtApellido_Create($strControlId = null) {
			$this->txtApellido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtApellido->Name = QApplication::Translate('Apellido');
			$this->txtApellido->Text = $this->objAbogados->Apellido;
			$this->txtApellido->Required = true;
			$this->txtApellido->MaxLength = Abogados::ApellidoMaxLength;
			return $this->txtApellido;
		}

		/**
		 * Create and setup QLabel lblApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblApellido_Create($strControlId = null) {
			$this->lblApellido = new QLabel($this->objParentObject, $strControlId);
			$this->lblApellido->Name = QApplication::Translate('Apellido');
			$this->lblApellido->Text = $this->objAbogados->Apellido;
			$this->lblApellido->Required = true;
			return $this->lblApellido;
		}

		/**
		 * Create and setup QIntegerTextBox txtTelefono
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTelefono_Create($strControlId = null) {
			$this->txtTelefono = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTelefono->Name = QApplication::Translate('Telefono');
			$this->txtTelefono->Text = $this->objAbogados->Telefono;
			return $this->txtTelefono;
		}

		/**
		 * Create and setup QLabel lblTelefono
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTelefono_Create($strControlId = null, $strFormat = null) {
			$this->lblTelefono = new QLabel($this->objParentObject, $strControlId);
			$this->lblTelefono->Name = QApplication::Translate('Telefono');
			$this->lblTelefono->Text = $this->objAbogados->Telefono;
			$this->lblTelefono->Format = $strFormat;
			return $this->lblTelefono;
		}

		/**
		 * Create and setup QTextBox txtNroAbogado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNroAbogado_Create($strControlId = null) {
			$this->txtNroAbogado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNroAbogado->Name = QApplication::Translate('Nro Abogado');
			$this->txtNroAbogado->Text = $this->objAbogados->NroAbogado;
			$this->txtNroAbogado->Required = true;
			$this->txtNroAbogado->MaxLength = Abogados::NroAbogadoMaxLength;
			return $this->txtNroAbogado;
		}

		/**
		 * Create and setup QLabel lblNroAbogado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNroAbogado_Create($strControlId = null) {
			$this->lblNroAbogado = new QLabel($this->objParentObject, $strControlId);
			$this->lblNroAbogado->Name = QApplication::Translate('Nro Abogado');
			$this->lblNroAbogado->Text = $this->objAbogados->NroAbogado;
			$this->lblNroAbogado->Required = true;
			return $this->lblNroAbogado;
		}

		/**
		 * Create and setup QIntegerTextBox txtActivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActivo_Create($strControlId = null) {
			$this->txtActivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActivo->Name = QApplication::Translate('Activo');
			$this->txtActivo->Text = $this->objAbogados->Activo;
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
			$this->lblActivo->Text = $this->objAbogados->Activo;
			$this->lblActivo->Required = true;
			$this->lblActivo->Format = $strFormat;
			return $this->lblActivo;
		}

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objAbogados->Observaciones;
			$this->txtObservaciones->MaxLength = Abogados::ObservacionesMaxLength;
			return $this->txtObservaciones;
		}

		/**
		 * Create and setup QLabel lblObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblObservaciones_Create($strControlId = null) {
			$this->lblObservaciones = new QLabel($this->objParentObject, $strControlId);
			$this->lblObservaciones->Name = QApplication::Translate('Observaciones');
			$this->lblObservaciones->Text = $this->objAbogados->Observaciones;
			return $this->lblObservaciones;
		}



		/**
		 * Refresh this MetaControl with Data from the local Abogados object.
		 * @param boolean $blnReload reload Abogados from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAbogados->Reload();

			if ($this->lblIdAbogado) if ($this->blnEditMode) $this->lblIdAbogado->Text = $this->objAbogados->IdAbogado;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objAbogados->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objAbogados->Nombre;

			if ($this->txtApellido) $this->txtApellido->Text = $this->objAbogados->Apellido;
			if ($this->lblApellido) $this->lblApellido->Text = $this->objAbogados->Apellido;

			if ($this->txtTelefono) $this->txtTelefono->Text = $this->objAbogados->Telefono;
			if ($this->lblTelefono) $this->lblTelefono->Text = $this->objAbogados->Telefono;

			if ($this->txtNroAbogado) $this->txtNroAbogado->Text = $this->objAbogados->NroAbogado;
			if ($this->lblNroAbogado) $this->lblNroAbogado->Text = $this->objAbogados->NroAbogado;

			if ($this->txtActivo) $this->txtActivo->Text = $this->objAbogados->Activo;
			if ($this->lblActivo) $this->lblActivo->Text = $this->objAbogados->Activo;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objAbogados->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objAbogados->Observaciones;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ABOGADOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Abogados instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAbogados() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAbogados->Nombre = $this->txtNombre->Text;
				if ($this->txtApellido) $this->objAbogados->Apellido = $this->txtApellido->Text;
				if ($this->txtTelefono) $this->objAbogados->Telefono = $this->txtTelefono->Text;
				if ($this->txtNroAbogado) $this->objAbogados->NroAbogado = $this->txtNroAbogado->Text;
				if ($this->txtActivo) $this->objAbogados->Activo = $this->txtActivo->Text;
				if ($this->txtObservaciones) $this->objAbogados->Observaciones = $this->txtObservaciones->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Abogados object
				$this->objAbogados->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Abogados instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAbogados() {
			$this->objAbogados->Delete();
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
				case 'Abogados': return $this->objAbogados;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Abogados fields -- will be created dynamically if not yet created
				case 'IdAbogadoControl':
					if (!$this->lblIdAbogado) return $this->lblIdAbogado_Create();
					return $this->lblIdAbogado;
				case 'IdAbogadoLabel':
					if (!$this->lblIdAbogado) return $this->lblIdAbogado_Create();
					return $this->lblIdAbogado;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'ApellidoControl':
					if (!$this->txtApellido) return $this->txtApellido_Create();
					return $this->txtApellido;
				case 'ApellidoLabel':
					if (!$this->lblApellido) return $this->lblApellido_Create();
					return $this->lblApellido;
				case 'TelefonoControl':
					if (!$this->txtTelefono) return $this->txtTelefono_Create();
					return $this->txtTelefono;
				case 'TelefonoLabel':
					if (!$this->lblTelefono) return $this->lblTelefono_Create();
					return $this->lblTelefono;
				case 'NroAbogadoControl':
					if (!$this->txtNroAbogado) return $this->txtNroAbogado_Create();
					return $this->txtNroAbogado;
				case 'NroAbogadoLabel':
					if (!$this->lblNroAbogado) return $this->lblNroAbogado_Create();
					return $this->lblNroAbogado;
				case 'ActivoControl':
					if (!$this->txtActivo) return $this->txtActivo_Create();
					return $this->txtActivo;
				case 'ActivoLabel':
					if (!$this->lblActivo) return $this->lblActivo_Create();
					return $this->lblActivo;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
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
					// Controls that point to Abogados fields
					case 'IdAbogadoControl':
						return ($this->lblIdAbogado = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'ApellidoControl':
						return ($this->txtApellido = QType::Cast($mixValue, 'QControl'));
					case 'TelefonoControl':
						return ($this->txtTelefono = QType::Cast($mixValue, 'QControl'));
					case 'NroAbogadoControl':
						return ($this->txtNroAbogado = QType::Cast($mixValue, 'QControl'));
					case 'ActivoControl':
						return ($this->txtActivo = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
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