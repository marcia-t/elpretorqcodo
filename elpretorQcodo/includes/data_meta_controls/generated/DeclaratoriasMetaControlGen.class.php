<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Declaratorias class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Declaratorias object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DeclaratoriasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Declaratorias $Declaratorias the actual Declaratorias data class being edited
	 * property QLabel $IdDeclaratoriaControl
	 * property-read QLabel $IdDeclaratoriaLabel
	 * property QDateTimePicker $FechaInicioControl
	 * property-read QLabel $FechaInicioLabel
	 * property QListBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QTextBox $HonorariosControl
	 * property-read QLabel $HonorariosLabel
	 * property QTextBox $TimbradoControl
	 * property-read QLabel $TimbradoLabel
	 * property QListBox $NroAbogadoControl
	 * property-read QLabel $NroAbogadoLabel
	 * property QTextBox $ContactoControl
	 * property-read QLabel $ContactoLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property QTextBox $AutosControl
	 * property-read QLabel $AutosLabel
	 * property QDateTimePicker $FechaFinControl
	 * property-read QLabel $FechaFinLabel
	 * property QIntegerTextBox $ObservadaControl
	 * property-read QLabel $ObservadaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DeclaratoriasMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Declaratorias objDeclaratorias
		 * @access protected
		 */
		protected $objDeclaratorias;

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

		// Controls that allow the editing of Declaratorias's individual data fields
        /**
         * @var QLabel lblIdDeclaratoria;
         * @access protected
         */
		protected $lblIdDeclaratoria;

        /**
         * @var QDateTimePicker calFechaInicio;
         * @access protected
         */
		protected $calFechaInicio;

        /**
         * @var QListBox lstEstadoObject;
         * @access protected
         */
		protected $lstEstadoObject;

        /**
         * @var QTextBox txtHonorarios;
         * @access protected
         */
		protected $txtHonorarios;

        /**
         * @var QTextBox txtTimbrado;
         * @access protected
         */
		protected $txtTimbrado;

        /**
         * @var QListBox lstNroAbogadoObject;
         * @access protected
         */
		protected $lstNroAbogadoObject;

        /**
         * @var QTextBox txtContacto;
         * @access protected
         */
		protected $txtContacto;

        /**
         * @var QTextBox txtObservaciones;
         * @access protected
         */
		protected $txtObservaciones;

        /**
         * @var QTextBox txtAutos;
         * @access protected
         */
		protected $txtAutos;

        /**
         * @var QDateTimePicker calFechaFin;
         * @access protected
         */
		protected $calFechaFin;

        /**
         * @var QIntegerTextBox txtObservada;
         * @access protected
         */
		protected $txtObservada;


		// Controls that allow the viewing of Declaratorias's individual data fields
        /**
         * @var QLabel lblFechaInicio
         * @access protected
         */
		protected $lblFechaInicio;

        /**
         * @var QLabel lblEstado
         * @access protected
         */
		protected $lblEstado;

        /**
         * @var QLabel lblHonorarios
         * @access protected
         */
		protected $lblHonorarios;

        /**
         * @var QLabel lblTimbrado
         * @access protected
         */
		protected $lblTimbrado;

        /**
         * @var QLabel lblNroAbogado
         * @access protected
         */
		protected $lblNroAbogado;

        /**
         * @var QLabel lblContacto
         * @access protected
         */
		protected $lblContacto;

        /**
         * @var QLabel lblObservaciones
         * @access protected
         */
		protected $lblObservaciones;

        /**
         * @var QLabel lblAutos
         * @access protected
         */
		protected $lblAutos;

        /**
         * @var QLabel lblFechaFin
         * @access protected
         */
		protected $lblFechaFin;

        /**
         * @var QLabel lblObservada
         * @access protected
         */
		protected $lblObservada;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DeclaratoriasMetaControl to edit a single Declaratorias object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Declaratorias object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DeclaratoriasMetaControl
		 * @param Declaratorias $objDeclaratorias new or existing Declaratorias object
		 */
		 public function __construct($objParentObject, Declaratorias $objDeclaratorias) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DeclaratoriasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Declaratorias object
			$this->objDeclaratorias = $objDeclaratorias;

			// Figure out if we're Editing or Creating New
			if ($this->objDeclaratorias->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DeclaratoriasMetaControl
		 * @param integer $intIdDeclaratoria primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Declaratorias object creation - defaults to CreateOrEdit
 		 * @return DeclaratoriasMetaControl
		 */
		public static function Create($objParentObject, $intIdDeclaratoria = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdDeclaratoria)) {
				$objDeclaratorias = Declaratorias::Load($intIdDeclaratoria);

				// Declaratorias was found -- return it!
				if ($objDeclaratorias)
					return new DeclaratoriasMetaControl($objParentObject, $objDeclaratorias);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Declaratorias object with PK arguments: ' . $intIdDeclaratoria);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DeclaratoriasMetaControl($objParentObject, new Declaratorias());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DeclaratoriasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Declaratorias object creation - defaults to CreateOrEdit
		 * @return DeclaratoriasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdDeclaratoria = QApplication::PathInfo(0);
			return DeclaratoriasMetaControl::Create($objParentObject, $intIdDeclaratoria, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DeclaratoriasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Declaratorias object creation - defaults to CreateOrEdit
		 * @return DeclaratoriasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdDeclaratoria = QApplication::QueryString('intIdDeclaratoria');
			return DeclaratoriasMetaControl::Create($objParentObject, $intIdDeclaratoria, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdDeclaratoria
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdDeclaratoria_Create($strControlId = null) {
			$this->lblIdDeclaratoria = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdDeclaratoria->Name = QApplication::Translate('Id Declaratoria');
			if ($this->blnEditMode)
				$this->lblIdDeclaratoria->Text = $this->objDeclaratorias->IdDeclaratoria;
			else
				$this->lblIdDeclaratoria->Text = 'N/A';
			return $this->lblIdDeclaratoria;
		}

		/**
		 * Create and setup QDateTimePicker calFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaInicio_Create($strControlId = null) {
			$this->calFechaInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->calFechaInicio->DateTime = $this->objDeclaratorias->FechaInicio;
			$this->calFechaInicio->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaInicio->Required = true;
			return $this->calFechaInicio;
		}

		/**
		 * Create and setup QLabel lblFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaInicio_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaInicio = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->strFechaInicioDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaInicio->Text = sprintf($this->objDeclaratorias->FechaInicio) ? $this->objDeclaratorias->FechaInicio->__toString($this->strFechaInicioDateTimeFormat) : null;
			$this->lblFechaInicio->Required = true;
			return $this->lblFechaInicio;
		}

		protected $strFechaInicioDateTimeFormat;

		/**
		 * Create and setup QListBox lstEstadoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstEstadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstEstadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstEstadoObject->Name = QApplication::Translate('Estado Object');
			$this->lstEstadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objEstadoObjectCursor = EstadoDeclaratoria::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objEstadoObject = EstadoDeclaratoria::InstantiateCursor($objEstadoObjectCursor)) {
				$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstadoDeclaratoria);
				if (($this->objDeclaratorias->EstadoObject) && ($this->objDeclaratorias->EstadoObject->IdEstadoDeclaratoria == $objEstadoObject->IdEstadoDeclaratoria))
					$objListItem->Selected = true;
				$this->lstEstadoObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstEstadoObject;
		}

		/**
		 * Create and setup QLabel lblEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEstado_Create($strControlId = null) {
			$this->lblEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstado->Name = QApplication::Translate('Estado Object');
			$this->lblEstado->Text = ($this->objDeclaratorias->EstadoObject) ? $this->objDeclaratorias->EstadoObject->__toString() : null;
			$this->lblEstado->Required = true;
			return $this->lblEstado;
		}

		/**
		 * Create and setup QTextBox txtHonorarios
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtHonorarios_Create($strControlId = null) {
			$this->txtHonorarios = new QTextBox($this->objParentObject, $strControlId);
			$this->txtHonorarios->Name = QApplication::Translate('Honorarios');
			$this->txtHonorarios->Text = $this->objDeclaratorias->Honorarios;
			return $this->txtHonorarios;
		}

		/**
		 * Create and setup QLabel lblHonorarios
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHonorarios_Create($strControlId = null) {
			$this->lblHonorarios = new QLabel($this->objParentObject, $strControlId);
			$this->lblHonorarios->Name = QApplication::Translate('Honorarios');
			$this->lblHonorarios->Text = $this->objDeclaratorias->Honorarios;
			return $this->lblHonorarios;
		}

		/**
		 * Create and setup QTextBox txtTimbrado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTimbrado_Create($strControlId = null) {
			$this->txtTimbrado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTimbrado->Name = QApplication::Translate('Timbrado');
			$this->txtTimbrado->Text = $this->objDeclaratorias->Timbrado;
			return $this->txtTimbrado;
		}

		/**
		 * Create and setup QLabel lblTimbrado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTimbrado_Create($strControlId = null) {
			$this->lblTimbrado = new QLabel($this->objParentObject, $strControlId);
			$this->lblTimbrado->Name = QApplication::Translate('Timbrado');
			$this->lblTimbrado->Text = $this->objDeclaratorias->Timbrado;
			return $this->lblTimbrado;
		}

		/**
		 * Create and setup QListBox lstNroAbogadoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstNroAbogadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstNroAbogadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstNroAbogadoObject->Name = QApplication::Translate('Nro Abogado Object');
			$this->lstNroAbogadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objNroAbogadoObjectCursor = Abogados::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objNroAbogadoObject = Abogados::InstantiateCursor($objNroAbogadoObjectCursor)) {
				$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
				if (($this->objDeclaratorias->NroAbogadoObject) && ($this->objDeclaratorias->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
					$objListItem->Selected = true;
				$this->lstNroAbogadoObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstNroAbogadoObject;
		}

		/**
		 * Create and setup QLabel lblNroAbogado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNroAbogado_Create($strControlId = null) {
			$this->lblNroAbogado = new QLabel($this->objParentObject, $strControlId);
			$this->lblNroAbogado->Name = QApplication::Translate('Nro Abogado Object');
			$this->lblNroAbogado->Text = ($this->objDeclaratorias->NroAbogadoObject) ? $this->objDeclaratorias->NroAbogadoObject->__toString() : null;
			$this->lblNroAbogado->Required = true;
			return $this->lblNroAbogado;
		}

		/**
		 * Create and setup QTextBox txtContacto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtContacto_Create($strControlId = null) {
			$this->txtContacto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtContacto->Name = QApplication::Translate('Contacto');
			$this->txtContacto->Text = $this->objDeclaratorias->Contacto;
			$this->txtContacto->MaxLength = Declaratorias::ContactoMaxLength;
			return $this->txtContacto;
		}

		/**
		 * Create and setup QLabel lblContacto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblContacto_Create($strControlId = null) {
			$this->lblContacto = new QLabel($this->objParentObject, $strControlId);
			$this->lblContacto->Name = QApplication::Translate('Contacto');
			$this->lblContacto->Text = $this->objDeclaratorias->Contacto;
			return $this->lblContacto;
		}

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objDeclaratorias->Observaciones;
			$this->txtObservaciones->MaxLength = Declaratorias::ObservacionesMaxLength;
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
			$this->lblObservaciones->Text = $this->objDeclaratorias->Observaciones;
			return $this->lblObservaciones;
		}

		/**
		 * Create and setup QTextBox txtAutos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAutos_Create($strControlId = null) {
			$this->txtAutos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAutos->Name = QApplication::Translate('Autos');
			$this->txtAutos->Text = $this->objDeclaratorias->Autos;
			$this->txtAutos->MaxLength = Declaratorias::AutosMaxLength;
			return $this->txtAutos;
		}

		/**
		 * Create and setup QLabel lblAutos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAutos_Create($strControlId = null) {
			$this->lblAutos = new QLabel($this->objParentObject, $strControlId);
			$this->lblAutos->Name = QApplication::Translate('Autos');
			$this->lblAutos->Text = $this->objDeclaratorias->Autos;
			return $this->lblAutos;
		}

		/**
		 * Create and setup QDateTimePicker calFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFin_Create($strControlId = null) {
			$this->calFechaFin = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->calFechaFin->DateTime = $this->objDeclaratorias->FechaFin;
			$this->calFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFin;
		}

		/**
		 * Create and setup QLabel lblFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaFin_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaFin = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->strFechaFinDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaFin->Text = sprintf($this->objDeclaratorias->FechaFin) ? $this->objDeclaratorias->FechaFin->__toString($this->strFechaFinDateTimeFormat) : null;
			return $this->lblFechaFin;
		}

		protected $strFechaFinDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtObservada
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtObservada_Create($strControlId = null) {
			$this->txtObservada = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtObservada->Name = QApplication::Translate('Observada');
			$this->txtObservada->Text = $this->objDeclaratorias->Observada;
			$this->txtObservada->Required = true;
			return $this->txtObservada;
		}

		/**
		 * Create and setup QLabel lblObservada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblObservada_Create($strControlId = null, $strFormat = null) {
			$this->lblObservada = new QLabel($this->objParentObject, $strControlId);
			$this->lblObservada->Name = QApplication::Translate('Observada');
			$this->lblObservada->Text = $this->objDeclaratorias->Observada;
			$this->lblObservada->Required = true;
			$this->lblObservada->Format = $strFormat;
			return $this->lblObservada;
		}



		/**
		 * Refresh this MetaControl with Data from the local Declaratorias object.
		 * @param boolean $blnReload reload Declaratorias from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDeclaratorias->Reload();

			if ($this->lblIdDeclaratoria) if ($this->blnEditMode) $this->lblIdDeclaratoria->Text = $this->objDeclaratorias->IdDeclaratoria;

			if ($this->calFechaInicio) $this->calFechaInicio->DateTime = $this->objDeclaratorias->FechaInicio;
			if ($this->lblFechaInicio) $this->lblFechaInicio->Text = sprintf($this->objDeclaratorias->FechaInicio) ? $this->objDeclaratorias->__toString($this->strFechaInicioDateTimeFormat) : null;

			if ($this->lstEstadoObject) {
					$this->lstEstadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objEstadoObjectArray = EstadoDeclaratoria::LoadAll();
				if ($objEstadoObjectArray) foreach ($objEstadoObjectArray as $objEstadoObject) {
					$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstadoDeclaratoria);
					if (($this->objDeclaratorias->EstadoObject) && ($this->objDeclaratorias->EstadoObject->IdEstadoDeclaratoria == $objEstadoObject->IdEstadoDeclaratoria))
						$objListItem->Selected = true;
					$this->lstEstadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblEstado) $this->lblEstado->Text = ($this->objDeclaratorias->EstadoObject) ? $this->objDeclaratorias->EstadoObject->__toString() : null;

			if ($this->txtHonorarios) $this->txtHonorarios->Text = $this->objDeclaratorias->Honorarios;
			if ($this->lblHonorarios) $this->lblHonorarios->Text = $this->objDeclaratorias->Honorarios;

			if ($this->txtTimbrado) $this->txtTimbrado->Text = $this->objDeclaratorias->Timbrado;
			if ($this->lblTimbrado) $this->lblTimbrado->Text = $this->objDeclaratorias->Timbrado;

			if ($this->lstNroAbogadoObject) {
					$this->lstNroAbogadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNroAbogadoObjectArray = Abogados::LoadAll();
				if ($objNroAbogadoObjectArray) foreach ($objNroAbogadoObjectArray as $objNroAbogadoObject) {
					$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
					if (($this->objDeclaratorias->NroAbogadoObject) && ($this->objDeclaratorias->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
						$objListItem->Selected = true;
					$this->lstNroAbogadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblNroAbogado) $this->lblNroAbogado->Text = ($this->objDeclaratorias->NroAbogadoObject) ? $this->objDeclaratorias->NroAbogadoObject->__toString() : null;

			if ($this->txtContacto) $this->txtContacto->Text = $this->objDeclaratorias->Contacto;
			if ($this->lblContacto) $this->lblContacto->Text = $this->objDeclaratorias->Contacto;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objDeclaratorias->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objDeclaratorias->Observaciones;

			if ($this->txtAutos) $this->txtAutos->Text = $this->objDeclaratorias->Autos;
			if ($this->lblAutos) $this->lblAutos->Text = $this->objDeclaratorias->Autos;

			if ($this->calFechaFin) $this->calFechaFin->DateTime = $this->objDeclaratorias->FechaFin;
			if ($this->lblFechaFin) $this->lblFechaFin->Text = sprintf($this->objDeclaratorias->FechaFin) ? $this->objDeclaratorias->__toString($this->strFechaFinDateTimeFormat) : null;

			if ($this->txtObservada) $this->txtObservada->Text = $this->objDeclaratorias->Observada;
			if ($this->lblObservada) $this->lblObservada->Text = $this->objDeclaratorias->Observada;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DECLARATORIAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Declaratorias instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDeclaratorias() {
			try {
				// Update any fields for controls that have been created
				if ($this->calFechaInicio) $this->objDeclaratorias->FechaInicio = $this->calFechaInicio->DateTime;
				if ($this->lstEstadoObject) $this->objDeclaratorias->Estado = $this->lstEstadoObject->SelectedValue;
				if ($this->txtHonorarios) $this->objDeclaratorias->Honorarios = $this->txtHonorarios->Text;
				if ($this->txtTimbrado) $this->objDeclaratorias->Timbrado = $this->txtTimbrado->Text;
				if ($this->lstNroAbogadoObject) $this->objDeclaratorias->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->txtContacto) $this->objDeclaratorias->Contacto = $this->txtContacto->Text;
				if ($this->txtObservaciones) $this->objDeclaratorias->Observaciones = $this->txtObservaciones->Text;
				if ($this->txtAutos) $this->objDeclaratorias->Autos = $this->txtAutos->Text;
				if ($this->calFechaFin) $this->objDeclaratorias->FechaFin = $this->calFechaFin->DateTime;
				if ($this->txtObservada) $this->objDeclaratorias->Observada = $this->txtObservada->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Declaratorias object
				$this->objDeclaratorias->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Declaratorias instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDeclaratorias() {
			$this->objDeclaratorias->Delete();
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
				case 'Declaratorias': return $this->objDeclaratorias;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Declaratorias fields -- will be created dynamically if not yet created
				case 'IdDeclaratoriaControl':
					if (!$this->lblIdDeclaratoria) return $this->lblIdDeclaratoria_Create();
					return $this->lblIdDeclaratoria;
				case 'IdDeclaratoriaLabel':
					if (!$this->lblIdDeclaratoria) return $this->lblIdDeclaratoria_Create();
					return $this->lblIdDeclaratoria;
				case 'FechaInicioControl':
					if (!$this->calFechaInicio) return $this->calFechaInicio_Create();
					return $this->calFechaInicio;
				case 'FechaInicioLabel':
					if (!$this->lblFechaInicio) return $this->lblFechaInicio_Create();
					return $this->lblFechaInicio;
				case 'EstadoControl':
					if (!$this->lstEstadoObject) return $this->lstEstadoObject_Create();
					return $this->lstEstadoObject;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'HonorariosControl':
					if (!$this->txtHonorarios) return $this->txtHonorarios_Create();
					return $this->txtHonorarios;
				case 'HonorariosLabel':
					if (!$this->lblHonorarios) return $this->lblHonorarios_Create();
					return $this->lblHonorarios;
				case 'TimbradoControl':
					if (!$this->txtTimbrado) return $this->txtTimbrado_Create();
					return $this->txtTimbrado;
				case 'TimbradoLabel':
					if (!$this->lblTimbrado) return $this->lblTimbrado_Create();
					return $this->lblTimbrado;
				case 'NroAbogadoControl':
					if (!$this->lstNroAbogadoObject) return $this->lstNroAbogadoObject_Create();
					return $this->lstNroAbogadoObject;
				case 'NroAbogadoLabel':
					if (!$this->lblNroAbogado) return $this->lblNroAbogado_Create();
					return $this->lblNroAbogado;
				case 'ContactoControl':
					if (!$this->txtContacto) return $this->txtContacto_Create();
					return $this->txtContacto;
				case 'ContactoLabel':
					if (!$this->lblContacto) return $this->lblContacto_Create();
					return $this->lblContacto;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
				case 'AutosControl':
					if (!$this->txtAutos) return $this->txtAutos_Create();
					return $this->txtAutos;
				case 'AutosLabel':
					if (!$this->lblAutos) return $this->lblAutos_Create();
					return $this->lblAutos;
				case 'FechaFinControl':
					if (!$this->calFechaFin) return $this->calFechaFin_Create();
					return $this->calFechaFin;
				case 'FechaFinLabel':
					if (!$this->lblFechaFin) return $this->lblFechaFin_Create();
					return $this->lblFechaFin;
				case 'ObservadaControl':
					if (!$this->txtObservada) return $this->txtObservada_Create();
					return $this->txtObservada;
				case 'ObservadaLabel':
					if (!$this->lblObservada) return $this->lblObservada_Create();
					return $this->lblObservada;
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
					// Controls that point to Declaratorias fields
					case 'IdDeclaratoriaControl':
						return ($this->lblIdDeclaratoria = QType::Cast($mixValue, 'QControl'));
					case 'FechaInicioControl':
						return ($this->calFechaInicio = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->lstEstadoObject = QType::Cast($mixValue, 'QControl'));
					case 'HonorariosControl':
						return ($this->txtHonorarios = QType::Cast($mixValue, 'QControl'));
					case 'TimbradoControl':
						return ($this->txtTimbrado = QType::Cast($mixValue, 'QControl'));
					case 'NroAbogadoControl':
						return ($this->lstNroAbogadoObject = QType::Cast($mixValue, 'QControl'));
					case 'ContactoControl':
						return ($this->txtContacto = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
					case 'AutosControl':
						return ($this->txtAutos = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinControl':
						return ($this->calFechaFin = QType::Cast($mixValue, 'QControl'));
					case 'ObservadaControl':
						return ($this->txtObservada = QType::Cast($mixValue, 'QControl'));
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