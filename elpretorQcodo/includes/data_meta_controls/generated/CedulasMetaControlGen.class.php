<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Cedulas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Cedulas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CedulasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Cedulas $Cedulas the actual Cedulas data class being edited
	 * property QLabel $IdCedulasControl
	 * property-read QLabel $IdCedulasLabel
	 * property QTextBox $LocalidadControl
	 * property-read QLabel $LocalidadLabel
	 * property QTextBox $AutosControl
	 * property-read QLabel $AutosLabel
	 * property QTextBox $DireccionControl
	 * property-read QLabel $DireccionLabel
	 * property QListBox $AgenteControl
	 * property-read QLabel $AgenteLabel
	 * property QDateTimePicker $FechaIngresoControl
	 * property-read QLabel $FechaIngresoLabel
	 * property QDateTimePicker $FechaSalidaControl
	 * property-read QLabel $FechaSalidaLabel
	 * property QDateTimePicker $FechaFinControl
	 * property-read QLabel $FechaFinLabel
	 * property QDateTimePicker $AudienciaControl
	 * property-read QLabel $AudienciaLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property QListBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QTextBox $HonorariosControl
	 * property-read QLabel $HonorariosLabel
	 * property QTextBox $TimbradoControl
	 * property-read QLabel $TimbradoLabel
	 * property QListBox $NroAbogadoControl
	 * property-read QLabel $NroAbogadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CedulasMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Cedulas objCedulas
		 * @access protected
		 */
		protected $objCedulas;

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

		// Controls that allow the editing of Cedulas's individual data fields
        /**
         * @var QLabel lblIdCedulas;
         * @access protected
         */
		protected $lblIdCedulas;

        /**
         * @var QTextBox txtLocalidad;
         * @access protected
         */
		protected $txtLocalidad;

        /**
         * @var QTextBox txtAutos;
         * @access protected
         */
		protected $txtAutos;

        /**
         * @var QTextBox txtDireccion;
         * @access protected
         */
		protected $txtDireccion;

        /**
         * @var QListBox lstAgenteObject;
         * @access protected
         */
		protected $lstAgenteObject;

        /**
         * @var QDateTimePicker calFechaIngreso;
         * @access protected
         */
		protected $calFechaIngreso;

        /**
         * @var QDateTimePicker calFechaSalida;
         * @access protected
         */
		protected $calFechaSalida;

        /**
         * @var QDateTimePicker calFechaFin;
         * @access protected
         */
		protected $calFechaFin;

        /**
         * @var QDateTimePicker calAudiencia;
         * @access protected
         */
		protected $calAudiencia;

        /**
         * @var QTextBox txtObservaciones;
         * @access protected
         */
		protected $txtObservaciones;

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


		// Controls that allow the viewing of Cedulas's individual data fields
        /**
         * @var QLabel lblLocalidad
         * @access protected
         */
		protected $lblLocalidad;

        /**
         * @var QLabel lblAutos
         * @access protected
         */
		protected $lblAutos;

        /**
         * @var QLabel lblDireccion
         * @access protected
         */
		protected $lblDireccion;

        /**
         * @var QLabel lblAgente
         * @access protected
         */
		protected $lblAgente;

        /**
         * @var QLabel lblFechaIngreso
         * @access protected
         */
		protected $lblFechaIngreso;

        /**
         * @var QLabel lblFechaSalida
         * @access protected
         */
		protected $lblFechaSalida;

        /**
         * @var QLabel lblFechaFin
         * @access protected
         */
		protected $lblFechaFin;

        /**
         * @var QLabel lblAudiencia
         * @access protected
         */
		protected $lblAudiencia;

        /**
         * @var QLabel lblObservaciones
         * @access protected
         */
		protected $lblObservaciones;

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


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CedulasMetaControl to edit a single Cedulas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Cedulas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CedulasMetaControl
		 * @param Cedulas $objCedulas new or existing Cedulas object
		 */
		 public function __construct($objParentObject, Cedulas $objCedulas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CedulasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Cedulas object
			$this->objCedulas = $objCedulas;

			// Figure out if we're Editing or Creating New
			if ($this->objCedulas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CedulasMetaControl
		 * @param integer $intIdCedulas primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Cedulas object creation - defaults to CreateOrEdit
 		 * @return CedulasMetaControl
		 */
		public static function Create($objParentObject, $intIdCedulas = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdCedulas)) {
				$objCedulas = Cedulas::Load($intIdCedulas);

				// Cedulas was found -- return it!
				if ($objCedulas)
					return new CedulasMetaControl($objParentObject, $objCedulas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Cedulas object with PK arguments: ' . $intIdCedulas);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CedulasMetaControl($objParentObject, new Cedulas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CedulasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Cedulas object creation - defaults to CreateOrEdit
		 * @return CedulasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdCedulas = QApplication::PathInfo(0);
			return CedulasMetaControl::Create($objParentObject, $intIdCedulas, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CedulasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Cedulas object creation - defaults to CreateOrEdit
		 * @return CedulasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdCedulas = QApplication::QueryString('intIdCedulas');
			return CedulasMetaControl::Create($objParentObject, $intIdCedulas, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdCedulas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdCedulas_Create($strControlId = null) {
			$this->lblIdCedulas = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdCedulas->Name = QApplication::Translate('Id Cedulas');
			if ($this->blnEditMode)
				$this->lblIdCedulas->Text = $this->objCedulas->IdCedulas;
			else
				$this->lblIdCedulas->Text = 'N/A';
			return $this->lblIdCedulas;
		}

		/**
		 * Create and setup QTextBox txtLocalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLocalidad_Create($strControlId = null) {
			$this->txtLocalidad = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLocalidad->Name = QApplication::Translate('Localidad');
			$this->txtLocalidad->Text = $this->objCedulas->Localidad;
			$this->txtLocalidad->Required = true;
			$this->txtLocalidad->MaxLength = Cedulas::LocalidadMaxLength;
			return $this->txtLocalidad;
		}

		/**
		 * Create and setup QLabel lblLocalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLocalidad_Create($strControlId = null) {
			$this->lblLocalidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblLocalidad->Name = QApplication::Translate('Localidad');
			$this->lblLocalidad->Text = $this->objCedulas->Localidad;
			$this->lblLocalidad->Required = true;
			return $this->lblLocalidad;
		}

		/**
		 * Create and setup QTextBox txtAutos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAutos_Create($strControlId = null) {
			$this->txtAutos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAutos->Name = QApplication::Translate('Autos');
			$this->txtAutos->Text = $this->objCedulas->Autos;
			$this->txtAutos->Required = true;
			$this->txtAutos->MaxLength = Cedulas::AutosMaxLength;
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
			$this->lblAutos->Text = $this->objCedulas->Autos;
			$this->lblAutos->Required = true;
			return $this->lblAutos;
		}

		/**
		 * Create and setup QTextBox txtDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDireccion_Create($strControlId = null) {
			$this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDireccion->Name = QApplication::Translate('Direccion');
			$this->txtDireccion->Text = $this->objCedulas->Direccion;
			$this->txtDireccion->Required = true;
			$this->txtDireccion->MaxLength = Cedulas::DireccionMaxLength;
			return $this->txtDireccion;
		}

		/**
		 * Create and setup QLabel lblDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDireccion_Create($strControlId = null) {
			$this->lblDireccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDireccion->Name = QApplication::Translate('Direccion');
			$this->lblDireccion->Text = $this->objCedulas->Direccion;
			$this->lblDireccion->Required = true;
			return $this->lblDireccion;
		}

		/**
		 * Create and setup QListBox lstAgenteObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstAgenteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstAgenteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstAgenteObject->Name = QApplication::Translate('Agente Object');
			$this->lstAgenteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAgenteObjectCursor = Agentes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objAgenteObject = Agentes::InstantiateCursor($objAgenteObjectCursor)) {
				$objListItem = new QListItem($objAgenteObject->__toString(), $objAgenteObject->IdAgente);
				if (($this->objCedulas->AgenteObject) && ($this->objCedulas->AgenteObject->IdAgente == $objAgenteObject->IdAgente))
					$objListItem->Selected = true;
				$this->lstAgenteObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstAgenteObject;
		}

		/**
		 * Create and setup QLabel lblAgente
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAgente_Create($strControlId = null) {
			$this->lblAgente = new QLabel($this->objParentObject, $strControlId);
			$this->lblAgente->Name = QApplication::Translate('Agente Object');
			$this->lblAgente->Text = ($this->objCedulas->AgenteObject) ? $this->objCedulas->AgenteObject->__toString() : null;
			$this->lblAgente->Required = true;
			return $this->lblAgente;
		}

		/**
		 * Create and setup QDateTimePicker calFechaIngreso
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaIngreso_Create($strControlId = null) {
			$this->calFechaIngreso = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaIngreso->Name = QApplication::Translate('Fecha Ingreso');
			$this->calFechaIngreso->DateTime = $this->objCedulas->FechaIngreso;
			$this->calFechaIngreso->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaIngreso->Required = true;
			return $this->calFechaIngreso;
		}

		/**
		 * Create and setup QLabel lblFechaIngreso
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaIngreso_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaIngreso = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaIngreso->Name = QApplication::Translate('Fecha Ingreso');
			$this->strFechaIngresoDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaIngreso->Text = sprintf($this->objCedulas->FechaIngreso) ? $this->objCedulas->FechaIngreso->__toString($this->strFechaIngresoDateTimeFormat) : null;
			$this->lblFechaIngreso->Required = true;
			return $this->lblFechaIngreso;
		}

		protected $strFechaIngresoDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calFechaSalida
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaSalida_Create($strControlId = null) {
			$this->calFechaSalida = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaSalida->Name = QApplication::Translate('Fecha Salida');
			$this->calFechaSalida->DateTime = $this->objCedulas->FechaSalida;
			$this->calFechaSalida->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaSalida;
		}

		/**
		 * Create and setup QLabel lblFechaSalida
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaSalida_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaSalida = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaSalida->Name = QApplication::Translate('Fecha Salida');
			$this->strFechaSalidaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaSalida->Text = sprintf($this->objCedulas->FechaSalida) ? $this->objCedulas->FechaSalida->__toString($this->strFechaSalidaDateTimeFormat) : null;
			return $this->lblFechaSalida;
		}

		protected $strFechaSalidaDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFin_Create($strControlId = null) {
			$this->calFechaFin = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->calFechaFin->DateTime = $this->objCedulas->FechaFin;
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
			$this->lblFechaFin->Text = sprintf($this->objCedulas->FechaFin) ? $this->objCedulas->FechaFin->__toString($this->strFechaFinDateTimeFormat) : null;
			return $this->lblFechaFin;
		}

		protected $strFechaFinDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calAudiencia
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calAudiencia_Create($strControlId = null) {
			$this->calAudiencia = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calAudiencia->Name = QApplication::Translate('Audiencia');
			$this->calAudiencia->DateTime = $this->objCedulas->Audiencia;
			$this->calAudiencia->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calAudiencia;
		}

		/**
		 * Create and setup QLabel lblAudiencia
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblAudiencia_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblAudiencia = new QLabel($this->objParentObject, $strControlId);
			$this->lblAudiencia->Name = QApplication::Translate('Audiencia');
			$this->strAudienciaDateTimeFormat = $strDateTimeFormat;
			$this->lblAudiencia->Text = sprintf($this->objCedulas->Audiencia) ? $this->objCedulas->Audiencia->__toString($this->strAudienciaDateTimeFormat) : null;
			return $this->lblAudiencia;
		}

		protected $strAudienciaDateTimeFormat;

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objCedulas->Observaciones;
			$this->txtObservaciones->MaxLength = Cedulas::ObservacionesMaxLength;
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
			$this->lblObservaciones->Text = $this->objCedulas->Observaciones;
			return $this->lblObservaciones;
		}

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
			$objEstadoObjectCursor = Estados::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objEstadoObject = Estados::InstantiateCursor($objEstadoObjectCursor)) {
				$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstado);
				if (($this->objCedulas->EstadoObject) && ($this->objCedulas->EstadoObject->IdEstado == $objEstadoObject->IdEstado))
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
			$this->lblEstado->Text = ($this->objCedulas->EstadoObject) ? $this->objCedulas->EstadoObject->__toString() : null;
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
			$this->txtHonorarios->Text = $this->objCedulas->Honorarios;
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
			$this->lblHonorarios->Text = $this->objCedulas->Honorarios;
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
			$this->txtTimbrado->Text = $this->objCedulas->Timbrado;
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
			$this->lblTimbrado->Text = $this->objCedulas->Timbrado;
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
				if (($this->objCedulas->NroAbogadoObject) && ($this->objCedulas->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
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
			$this->lblNroAbogado->Text = ($this->objCedulas->NroAbogadoObject) ? $this->objCedulas->NroAbogadoObject->__toString() : null;
			$this->lblNroAbogado->Required = true;
			return $this->lblNroAbogado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Cedulas object.
		 * @param boolean $blnReload reload Cedulas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCedulas->Reload();

			if ($this->lblIdCedulas) if ($this->blnEditMode) $this->lblIdCedulas->Text = $this->objCedulas->IdCedulas;

			if ($this->txtLocalidad) $this->txtLocalidad->Text = $this->objCedulas->Localidad;
			if ($this->lblLocalidad) $this->lblLocalidad->Text = $this->objCedulas->Localidad;

			if ($this->txtAutos) $this->txtAutos->Text = $this->objCedulas->Autos;
			if ($this->lblAutos) $this->lblAutos->Text = $this->objCedulas->Autos;

			if ($this->txtDireccion) $this->txtDireccion->Text = $this->objCedulas->Direccion;
			if ($this->lblDireccion) $this->lblDireccion->Text = $this->objCedulas->Direccion;

			if ($this->lstAgenteObject) {
					$this->lstAgenteObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objAgenteObjectArray = Agentes::LoadAll();
				if ($objAgenteObjectArray) foreach ($objAgenteObjectArray as $objAgenteObject) {
					$objListItem = new QListItem($objAgenteObject->__toString(), $objAgenteObject->IdAgente);
					if (($this->objCedulas->AgenteObject) && ($this->objCedulas->AgenteObject->IdAgente == $objAgenteObject->IdAgente))
						$objListItem->Selected = true;
					$this->lstAgenteObject->AddItem($objListItem);
				}
			}
			if ($this->lblAgente) $this->lblAgente->Text = ($this->objCedulas->AgenteObject) ? $this->objCedulas->AgenteObject->__toString() : null;

			if ($this->calFechaIngreso) $this->calFechaIngreso->DateTime = $this->objCedulas->FechaIngreso;
			if ($this->lblFechaIngreso) $this->lblFechaIngreso->Text = sprintf($this->objCedulas->FechaIngreso) ? $this->objCedulas->__toString($this->strFechaIngresoDateTimeFormat) : null;

			if ($this->calFechaSalida) $this->calFechaSalida->DateTime = $this->objCedulas->FechaSalida;
			if ($this->lblFechaSalida) $this->lblFechaSalida->Text = sprintf($this->objCedulas->FechaSalida) ? $this->objCedulas->__toString($this->strFechaSalidaDateTimeFormat) : null;

			if ($this->calFechaFin) $this->calFechaFin->DateTime = $this->objCedulas->FechaFin;
			if ($this->lblFechaFin) $this->lblFechaFin->Text = sprintf($this->objCedulas->FechaFin) ? $this->objCedulas->__toString($this->strFechaFinDateTimeFormat) : null;

			if ($this->calAudiencia) $this->calAudiencia->DateTime = $this->objCedulas->Audiencia;
			if ($this->lblAudiencia) $this->lblAudiencia->Text = sprintf($this->objCedulas->Audiencia) ? $this->objCedulas->__toString($this->strAudienciaDateTimeFormat) : null;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objCedulas->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objCedulas->Observaciones;

			if ($this->lstEstadoObject) {
					$this->lstEstadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objEstadoObjectArray = Estados::LoadAll();
				if ($objEstadoObjectArray) foreach ($objEstadoObjectArray as $objEstadoObject) {
					$objListItem = new QListItem($objEstadoObject->__toString(), $objEstadoObject->IdEstado);
					if (($this->objCedulas->EstadoObject) && ($this->objCedulas->EstadoObject->IdEstado == $objEstadoObject->IdEstado))
						$objListItem->Selected = true;
					$this->lstEstadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblEstado) $this->lblEstado->Text = ($this->objCedulas->EstadoObject) ? $this->objCedulas->EstadoObject->__toString() : null;

			if ($this->txtHonorarios) $this->txtHonorarios->Text = $this->objCedulas->Honorarios;
			if ($this->lblHonorarios) $this->lblHonorarios->Text = $this->objCedulas->Honorarios;

			if ($this->txtTimbrado) $this->txtTimbrado->Text = $this->objCedulas->Timbrado;
			if ($this->lblTimbrado) $this->lblTimbrado->Text = $this->objCedulas->Timbrado;

			if ($this->lstNroAbogadoObject) {
					$this->lstNroAbogadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNroAbogadoObjectArray = Abogados::LoadAll();
				if ($objNroAbogadoObjectArray) foreach ($objNroAbogadoObjectArray as $objNroAbogadoObject) {
					$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
					if (($this->objCedulas->NroAbogadoObject) && ($this->objCedulas->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
						$objListItem->Selected = true;
					$this->lstNroAbogadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblNroAbogado) $this->lblNroAbogado->Text = ($this->objCedulas->NroAbogadoObject) ? $this->objCedulas->NroAbogadoObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CEDULAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Cedulas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCedulas() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtLocalidad) $this->objCedulas->Localidad = $this->txtLocalidad->Text;
				if ($this->txtAutos) $this->objCedulas->Autos = $this->txtAutos->Text;
				if ($this->txtDireccion) $this->objCedulas->Direccion = $this->txtDireccion->Text;
				if ($this->lstAgenteObject) $this->objCedulas->Agente = $this->lstAgenteObject->SelectedValue;
				if ($this->calFechaIngreso) $this->objCedulas->FechaIngreso = $this->calFechaIngreso->DateTime;
				if ($this->calFechaSalida) $this->objCedulas->FechaSalida = $this->calFechaSalida->DateTime;
				if ($this->calFechaFin) $this->objCedulas->FechaFin = $this->calFechaFin->DateTime;
				if ($this->calAudiencia) $this->objCedulas->Audiencia = $this->calAudiencia->DateTime;
				if ($this->txtObservaciones) $this->objCedulas->Observaciones = $this->txtObservaciones->Text;
				if ($this->lstEstadoObject) $this->objCedulas->Estado = $this->lstEstadoObject->SelectedValue;
				if ($this->txtHonorarios) $this->objCedulas->Honorarios = $this->txtHonorarios->Text;
				if ($this->txtTimbrado) $this->objCedulas->Timbrado = $this->txtTimbrado->Text;
				if ($this->lstNroAbogadoObject) $this->objCedulas->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Cedulas object
				$this->objCedulas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Cedulas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCedulas() {
			$this->objCedulas->Delete();
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
				case 'Cedulas': return $this->objCedulas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Cedulas fields -- will be created dynamically if not yet created
				case 'IdCedulasControl':
					if (!$this->lblIdCedulas) return $this->lblIdCedulas_Create();
					return $this->lblIdCedulas;
				case 'IdCedulasLabel':
					if (!$this->lblIdCedulas) return $this->lblIdCedulas_Create();
					return $this->lblIdCedulas;
				case 'LocalidadControl':
					if (!$this->txtLocalidad) return $this->txtLocalidad_Create();
					return $this->txtLocalidad;
				case 'LocalidadLabel':
					if (!$this->lblLocalidad) return $this->lblLocalidad_Create();
					return $this->lblLocalidad;
				case 'AutosControl':
					if (!$this->txtAutos) return $this->txtAutos_Create();
					return $this->txtAutos;
				case 'AutosLabel':
					if (!$this->lblAutos) return $this->lblAutos_Create();
					return $this->lblAutos;
				case 'DireccionControl':
					if (!$this->txtDireccion) return $this->txtDireccion_Create();
					return $this->txtDireccion;
				case 'DireccionLabel':
					if (!$this->lblDireccion) return $this->lblDireccion_Create();
					return $this->lblDireccion;
				case 'AgenteControl':
					if (!$this->lstAgenteObject) return $this->lstAgenteObject_Create();
					return $this->lstAgenteObject;
				case 'AgenteLabel':
					if (!$this->lblAgente) return $this->lblAgente_Create();
					return $this->lblAgente;
				case 'FechaIngresoControl':
					if (!$this->calFechaIngreso) return $this->calFechaIngreso_Create();
					return $this->calFechaIngreso;
				case 'FechaIngresoLabel':
					if (!$this->lblFechaIngreso) return $this->lblFechaIngreso_Create();
					return $this->lblFechaIngreso;
				case 'FechaSalidaControl':
					if (!$this->calFechaSalida) return $this->calFechaSalida_Create();
					return $this->calFechaSalida;
				case 'FechaSalidaLabel':
					if (!$this->lblFechaSalida) return $this->lblFechaSalida_Create();
					return $this->lblFechaSalida;
				case 'FechaFinControl':
					if (!$this->calFechaFin) return $this->calFechaFin_Create();
					return $this->calFechaFin;
				case 'FechaFinLabel':
					if (!$this->lblFechaFin) return $this->lblFechaFin_Create();
					return $this->lblFechaFin;
				case 'AudienciaControl':
					if (!$this->calAudiencia) return $this->calAudiencia_Create();
					return $this->calAudiencia;
				case 'AudienciaLabel':
					if (!$this->lblAudiencia) return $this->lblAudiencia_Create();
					return $this->lblAudiencia;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
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
					// Controls that point to Cedulas fields
					case 'IdCedulasControl':
						return ($this->lblIdCedulas = QType::Cast($mixValue, 'QControl'));
					case 'LocalidadControl':
						return ($this->txtLocalidad = QType::Cast($mixValue, 'QControl'));
					case 'AutosControl':
						return ($this->txtAutos = QType::Cast($mixValue, 'QControl'));
					case 'DireccionControl':
						return ($this->txtDireccion = QType::Cast($mixValue, 'QControl'));
					case 'AgenteControl':
						return ($this->lstAgenteObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaIngresoControl':
						return ($this->calFechaIngreso = QType::Cast($mixValue, 'QControl'));
					case 'FechaSalidaControl':
						return ($this->calFechaSalida = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinControl':
						return ($this->calFechaFin = QType::Cast($mixValue, 'QControl'));
					case 'AudienciaControl':
						return ($this->calAudiencia = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->lstEstadoObject = QType::Cast($mixValue, 'QControl'));
					case 'HonorariosControl':
						return ($this->txtHonorarios = QType::Cast($mixValue, 'QControl'));
					case 'TimbradoControl':
						return ($this->txtTimbrado = QType::Cast($mixValue, 'QControl'));
					case 'NroAbogadoControl':
						return ($this->lstNroAbogadoObject = QType::Cast($mixValue, 'QControl'));
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