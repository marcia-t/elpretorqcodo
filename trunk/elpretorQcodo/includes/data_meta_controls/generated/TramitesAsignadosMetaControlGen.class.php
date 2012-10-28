<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TramitesAsignados class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TramitesAsignados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TramitesAsignadosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read TramitesAsignados $TramitesAsignados the actual TramitesAsignados data class being edited
	 * property QLabel $IdTramiteAsignadoControl
	 * property-read QLabel $IdTramiteAsignadoLabel
	 * property QListBox $IdAgenteControl
	 * property-read QLabel $IdAgenteLabel
	 * property QListBox $NroAbogadoControl
	 * property-read QLabel $NroAbogadoLabel
	 * property QListBox $IdEstadoControl
	 * property-read QLabel $IdEstadoLabel
	 * property QDateTimePicker $FechaIngresoControl
	 * property-read QLabel $FechaIngresoLabel
	 * property QDateTimePicker $FechaSalidaControl
	 * property-read QLabel $FechaSalidaLabel
	 * property QListBox $TipoTramiteControl
	 * property-read QLabel $TipoTramiteLabel
	 * property QTextBox $AutosControl
	 * property-read QLabel $AutosLabel
	 * property QDateTimePicker $FechaVencimientoControl
	 * property-read QLabel $FechaVencimientoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TramitesAsignadosMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var TramitesAsignados objTramitesAsignados
		 * @access protected
		 */
		protected $objTramitesAsignados;

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

		// Controls that allow the editing of TramitesAsignados's individual data fields
        /**
         * @var QLabel lblIdTramiteAsignado;
         * @access protected
         */
		protected $lblIdTramiteAsignado;

        /**
         * @var QListBox lstIdAgenteObject;
         * @access protected
         */
		protected $lstIdAgenteObject;

        /**
         * @var QListBox lstNroAbogadoObject;
         * @access protected
         */
		protected $lstNroAbogadoObject;

        /**
         * @var QListBox lstIdEstadoObject;
         * @access protected
         */
		protected $lstIdEstadoObject;

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
         * @var QListBox lstTipoTramiteObject;
         * @access protected
         */
		protected $lstTipoTramiteObject;

        /**
         * @var QTextBox txtAutos;
         * @access protected
         */
		protected $txtAutos;

        /**
         * @var QDateTimePicker calFechaVencimiento;
         * @access protected
         */
		protected $calFechaVencimiento;


		// Controls that allow the viewing of TramitesAsignados's individual data fields
        /**
         * @var QLabel lblIdAgente
         * @access protected
         */
		protected $lblIdAgente;

        /**
         * @var QLabel lblNroAbogado
         * @access protected
         */
		protected $lblNroAbogado;

        /**
         * @var QLabel lblIdEstado
         * @access protected
         */
		protected $lblIdEstado;

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
         * @var QLabel lblTipoTramite
         * @access protected
         */
		protected $lblTipoTramite;

        /**
         * @var QLabel lblAutos
         * @access protected
         */
		protected $lblAutos;

        /**
         * @var QLabel lblFechaVencimiento
         * @access protected
         */
		protected $lblFechaVencimiento;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TramitesAsignadosMetaControl to edit a single TramitesAsignados object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TramitesAsignados object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TramitesAsignadosMetaControl
		 * @param TramitesAsignados $objTramitesAsignados new or existing TramitesAsignados object
		 */
		 public function __construct($objParentObject, TramitesAsignados $objTramitesAsignados) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TramitesAsignadosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked TramitesAsignados object
			$this->objTramitesAsignados = $objTramitesAsignados;

			// Figure out if we're Editing or Creating New
			if ($this->objTramitesAsignados->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TramitesAsignadosMetaControl
		 * @param integer $intIdTramiteAsignado primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing TramitesAsignados object creation - defaults to CreateOrEdit
 		 * @return TramitesAsignadosMetaControl
		 */
		public static function Create($objParentObject, $intIdTramiteAsignado = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdTramiteAsignado)) {
				$objTramitesAsignados = TramitesAsignados::Load($intIdTramiteAsignado);

				// TramitesAsignados was found -- return it!
				if ($objTramitesAsignados)
					return new TramitesAsignadosMetaControl($objParentObject, $objTramitesAsignados);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TramitesAsignados object with PK arguments: ' . $intIdTramiteAsignado);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TramitesAsignadosMetaControl($objParentObject, new TramitesAsignados());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TramitesAsignadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TramitesAsignados object creation - defaults to CreateOrEdit
		 * @return TramitesAsignadosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTramiteAsignado = QApplication::PathInfo(0);
			return TramitesAsignadosMetaControl::Create($objParentObject, $intIdTramiteAsignado, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TramitesAsignadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TramitesAsignados object creation - defaults to CreateOrEdit
		 * @return TramitesAsignadosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTramiteAsignado = QApplication::QueryString('intIdTramiteAsignado');
			return TramitesAsignadosMetaControl::Create($objParentObject, $intIdTramiteAsignado, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdTramiteAsignado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTramiteAsignado_Create($strControlId = null) {
			$this->lblIdTramiteAsignado = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTramiteAsignado->Name = QApplication::Translate('Id Tramite Asignado');
			if ($this->blnEditMode)
				$this->lblIdTramiteAsignado->Text = $this->objTramitesAsignados->IdTramiteAsignado;
			else
				$this->lblIdTramiteAsignado->Text = 'N/A';
			return $this->lblIdTramiteAsignado;
		}

		/**
		 * Create and setup QListBox lstIdAgenteObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdAgenteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdAgenteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdAgenteObject->Name = QApplication::Translate('Id Agente Object');
			$this->lstIdAgenteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdAgenteObjectCursor = Agentes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objIdAgenteObject = Agentes::InstantiateCursor($objIdAgenteObjectCursor)) {
				$objListItem = new QListItem($objIdAgenteObject->__toString(), $objIdAgenteObject->IdAgente);
				if (($this->objTramitesAsignados->IdAgenteObject) && ($this->objTramitesAsignados->IdAgenteObject->IdAgente == $objIdAgenteObject->IdAgente))
					$objListItem->Selected = true;
				$this->lstIdAgenteObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstIdAgenteObject;
		}

		/**
		 * Create and setup QLabel lblIdAgente
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdAgente_Create($strControlId = null) {
			$this->lblIdAgente = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdAgente->Name = QApplication::Translate('Id Agente Object');
			$this->lblIdAgente->Text = ($this->objTramitesAsignados->IdAgenteObject) ? $this->objTramitesAsignados->IdAgenteObject->__toString() : null;
			$this->lblIdAgente->Required = true;
			return $this->lblIdAgente;
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
				if (($this->objTramitesAsignados->NroAbogadoObject) && ($this->objTramitesAsignados->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
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
			$this->lblNroAbogado->Text = ($this->objTramitesAsignados->NroAbogadoObject) ? $this->objTramitesAsignados->NroAbogadoObject->__toString() : null;
			$this->lblNroAbogado->Required = true;
			return $this->lblNroAbogado;
		}

		/**
		 * Create and setup QListBox lstIdEstadoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdEstadoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdEstadoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdEstadoObject->Name = QApplication::Translate('Id Estado Object');
			$this->lstIdEstadoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdEstadoObjectCursor = Estados::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objIdEstadoObject = Estados::InstantiateCursor($objIdEstadoObjectCursor)) {
				$objListItem = new QListItem($objIdEstadoObject->__toString(), $objIdEstadoObject->IdEstado);
				if (($this->objTramitesAsignados->IdEstadoObject) && ($this->objTramitesAsignados->IdEstadoObject->IdEstado == $objIdEstadoObject->IdEstado))
					$objListItem->Selected = true;
				$this->lstIdEstadoObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstIdEstadoObject;
		}

		/**
		 * Create and setup QLabel lblIdEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdEstado_Create($strControlId = null) {
			$this->lblIdEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEstado->Name = QApplication::Translate('Id Estado Object');
			$this->lblIdEstado->Text = ($this->objTramitesAsignados->IdEstadoObject) ? $this->objTramitesAsignados->IdEstadoObject->__toString() : null;
			$this->lblIdEstado->Required = true;
			return $this->lblIdEstado;
		}

		/**
		 * Create and setup QDateTimePicker calFechaIngreso
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaIngreso_Create($strControlId = null) {
			$this->calFechaIngreso = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaIngreso->Name = QApplication::Translate('Fecha Ingreso');
			$this->calFechaIngreso->DateTime = $this->objTramitesAsignados->FechaIngreso;
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
			$this->lblFechaIngreso->Text = sprintf($this->objTramitesAsignados->FechaIngreso) ? $this->objTramitesAsignados->FechaIngreso->__toString($this->strFechaIngresoDateTimeFormat) : null;
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
			$this->calFechaSalida->DateTime = $this->objTramitesAsignados->FechaSalida;
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
			$this->lblFechaSalida->Text = sprintf($this->objTramitesAsignados->FechaSalida) ? $this->objTramitesAsignados->FechaSalida->__toString($this->strFechaSalidaDateTimeFormat) : null;
			return $this->lblFechaSalida;
		}

		protected $strFechaSalidaDateTimeFormat;

		/**
		 * Create and setup QListBox lstTipoTramiteObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTipoTramiteObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTipoTramiteObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTipoTramiteObject->Name = QApplication::Translate('Tipo Tramite Object');
			$this->lstTipoTramiteObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTipoTramiteObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTipoTramiteObjectCursor = TipoTramites::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTipoTramiteObject = TipoTramites::InstantiateCursor($objTipoTramiteObjectCursor)) {
				$objListItem = new QListItem($objTipoTramiteObject->__toString(), $objTipoTramiteObject->IdTipoTramite);
				if (($this->objTramitesAsignados->TipoTramiteObject) && ($this->objTramitesAsignados->TipoTramiteObject->IdTipoTramite == $objTipoTramiteObject->IdTipoTramite))
					$objListItem->Selected = true;
				$this->lstTipoTramiteObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTipoTramiteObject;
		}

		/**
		 * Create and setup QLabel lblTipoTramite
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipoTramite_Create($strControlId = null) {
			$this->lblTipoTramite = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipoTramite->Name = QApplication::Translate('Tipo Tramite Object');
			$this->lblTipoTramite->Text = ($this->objTramitesAsignados->TipoTramiteObject) ? $this->objTramitesAsignados->TipoTramiteObject->__toString() : null;
			$this->lblTipoTramite->Required = true;
			return $this->lblTipoTramite;
		}

		/**
		 * Create and setup QTextBox txtAutos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAutos_Create($strControlId = null) {
			$this->txtAutos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAutos->Name = QApplication::Translate('Autos');
			$this->txtAutos->Text = $this->objTramitesAsignados->Autos;
			$this->txtAutos->MaxLength = TramitesAsignados::AutosMaxLength;
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
			$this->lblAutos->Text = $this->objTramitesAsignados->Autos;
			return $this->lblAutos;
		}

		/**
		 * Create and setup QDateTimePicker calFechaVencimiento
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaVencimiento_Create($strControlId = null) {
			$this->calFechaVencimiento = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaVencimiento->Name = QApplication::Translate('Fecha Vencimiento');
			$this->calFechaVencimiento->DateTime = $this->objTramitesAsignados->FechaVencimiento;
			$this->calFechaVencimiento->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaVencimiento->Required = true;
			return $this->calFechaVencimiento;
		}

		/**
		 * Create and setup QLabel lblFechaVencimiento
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaVencimiento_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaVencimiento = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaVencimiento->Name = QApplication::Translate('Fecha Vencimiento');
			$this->strFechaVencimientoDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaVencimiento->Text = sprintf($this->objTramitesAsignados->FechaVencimiento) ? $this->objTramitesAsignados->FechaVencimiento->__toString($this->strFechaVencimientoDateTimeFormat) : null;
			$this->lblFechaVencimiento->Required = true;
			return $this->lblFechaVencimiento;
		}

		protected $strFechaVencimientoDateTimeFormat;



		/**
		 * Refresh this MetaControl with Data from the local TramitesAsignados object.
		 * @param boolean $blnReload reload TramitesAsignados from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTramitesAsignados->Reload();

			if ($this->lblIdTramiteAsignado) if ($this->blnEditMode) $this->lblIdTramiteAsignado->Text = $this->objTramitesAsignados->IdTramiteAsignado;

			if ($this->lstIdAgenteObject) {
					$this->lstIdAgenteObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdAgenteObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdAgenteObjectArray = Agentes::LoadAll();
				if ($objIdAgenteObjectArray) foreach ($objIdAgenteObjectArray as $objIdAgenteObject) {
					$objListItem = new QListItem($objIdAgenteObject->__toString(), $objIdAgenteObject->IdAgente);
					if (($this->objTramitesAsignados->IdAgenteObject) && ($this->objTramitesAsignados->IdAgenteObject->IdAgente == $objIdAgenteObject->IdAgente))
						$objListItem->Selected = true;
					$this->lstIdAgenteObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdAgente) $this->lblIdAgente->Text = ($this->objTramitesAsignados->IdAgenteObject) ? $this->objTramitesAsignados->IdAgenteObject->__toString() : null;

			if ($this->lstNroAbogadoObject) {
					$this->lstNroAbogadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNroAbogadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNroAbogadoObjectArray = Abogados::LoadAll();
				if ($objNroAbogadoObjectArray) foreach ($objNroAbogadoObjectArray as $objNroAbogadoObject) {
					$objListItem = new QListItem($objNroAbogadoObject->__toString(), $objNroAbogadoObject->IdAbogado);
					if (($this->objTramitesAsignados->NroAbogadoObject) && ($this->objTramitesAsignados->NroAbogadoObject->IdAbogado == $objNroAbogadoObject->IdAbogado))
						$objListItem->Selected = true;
					$this->lstNroAbogadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblNroAbogado) $this->lblNroAbogado->Text = ($this->objTramitesAsignados->NroAbogadoObject) ? $this->objTramitesAsignados->NroAbogadoObject->__toString() : null;

			if ($this->lstIdEstadoObject) {
					$this->lstIdEstadoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdEstadoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdEstadoObjectArray = Estados::LoadAll();
				if ($objIdEstadoObjectArray) foreach ($objIdEstadoObjectArray as $objIdEstadoObject) {
					$objListItem = new QListItem($objIdEstadoObject->__toString(), $objIdEstadoObject->IdEstado);
					if (($this->objTramitesAsignados->IdEstadoObject) && ($this->objTramitesAsignados->IdEstadoObject->IdEstado == $objIdEstadoObject->IdEstado))
						$objListItem->Selected = true;
					$this->lstIdEstadoObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdEstado) $this->lblIdEstado->Text = ($this->objTramitesAsignados->IdEstadoObject) ? $this->objTramitesAsignados->IdEstadoObject->__toString() : null;

			if ($this->calFechaIngreso) $this->calFechaIngreso->DateTime = $this->objTramitesAsignados->FechaIngreso;
			if ($this->lblFechaIngreso) $this->lblFechaIngreso->Text = sprintf($this->objTramitesAsignados->FechaIngreso) ? $this->objTramitesAsignados->__toString($this->strFechaIngresoDateTimeFormat) : null;

			if ($this->calFechaSalida) $this->calFechaSalida->DateTime = $this->objTramitesAsignados->FechaSalida;
			if ($this->lblFechaSalida) $this->lblFechaSalida->Text = sprintf($this->objTramitesAsignados->FechaSalida) ? $this->objTramitesAsignados->__toString($this->strFechaSalidaDateTimeFormat) : null;

			if ($this->lstTipoTramiteObject) {
					$this->lstTipoTramiteObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTipoTramiteObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objTipoTramiteObjectArray = TipoTramites::LoadAll();
				if ($objTipoTramiteObjectArray) foreach ($objTipoTramiteObjectArray as $objTipoTramiteObject) {
					$objListItem = new QListItem($objTipoTramiteObject->__toString(), $objTipoTramiteObject->IdTipoTramite);
					if (($this->objTramitesAsignados->TipoTramiteObject) && ($this->objTramitesAsignados->TipoTramiteObject->IdTipoTramite == $objTipoTramiteObject->IdTipoTramite))
						$objListItem->Selected = true;
					$this->lstTipoTramiteObject->AddItem($objListItem);
				}
			}
			if ($this->lblTipoTramite) $this->lblTipoTramite->Text = ($this->objTramitesAsignados->TipoTramiteObject) ? $this->objTramitesAsignados->TipoTramiteObject->__toString() : null;

			if ($this->txtAutos) $this->txtAutos->Text = $this->objTramitesAsignados->Autos;
			if ($this->lblAutos) $this->lblAutos->Text = $this->objTramitesAsignados->Autos;

			if ($this->calFechaVencimiento) $this->calFechaVencimiento->DateTime = $this->objTramitesAsignados->FechaVencimiento;
			if ($this->lblFechaVencimiento) $this->lblFechaVencimiento->Text = sprintf($this->objTramitesAsignados->FechaVencimiento) ? $this->objTramitesAsignados->__toString($this->strFechaVencimientoDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TRAMITESASIGNADOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's TramitesAsignados instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTramitesAsignados() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstIdAgenteObject) $this->objTramitesAsignados->IdAgente = $this->lstIdAgenteObject->SelectedValue;
				if ($this->lstNroAbogadoObject) $this->objTramitesAsignados->NroAbogado = $this->lstNroAbogadoObject->SelectedValue;
				if ($this->lstIdEstadoObject) $this->objTramitesAsignados->IdEstado = $this->lstIdEstadoObject->SelectedValue;
				if ($this->calFechaIngreso) $this->objTramitesAsignados->FechaIngreso = $this->calFechaIngreso->DateTime;
				if ($this->calFechaSalida) $this->objTramitesAsignados->FechaSalida = $this->calFechaSalida->DateTime;
				if ($this->lstTipoTramiteObject) $this->objTramitesAsignados->TipoTramite = $this->lstTipoTramiteObject->SelectedValue;
				if ($this->txtAutos) $this->objTramitesAsignados->Autos = $this->txtAutos->Text;
				if ($this->calFechaVencimiento) $this->objTramitesAsignados->FechaVencimiento = $this->calFechaVencimiento->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the TramitesAsignados object
				$this->objTramitesAsignados->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's TramitesAsignados instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTramitesAsignados() {
			$this->objTramitesAsignados->Delete();
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
				case 'TramitesAsignados': return $this->objTramitesAsignados;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TramitesAsignados fields -- will be created dynamically if not yet created
				case 'IdTramiteAsignadoControl':
					if (!$this->lblIdTramiteAsignado) return $this->lblIdTramiteAsignado_Create();
					return $this->lblIdTramiteAsignado;
				case 'IdTramiteAsignadoLabel':
					if (!$this->lblIdTramiteAsignado) return $this->lblIdTramiteAsignado_Create();
					return $this->lblIdTramiteAsignado;
				case 'IdAgenteControl':
					if (!$this->lstIdAgenteObject) return $this->lstIdAgenteObject_Create();
					return $this->lstIdAgenteObject;
				case 'IdAgenteLabel':
					if (!$this->lblIdAgente) return $this->lblIdAgente_Create();
					return $this->lblIdAgente;
				case 'NroAbogadoControl':
					if (!$this->lstNroAbogadoObject) return $this->lstNroAbogadoObject_Create();
					return $this->lstNroAbogadoObject;
				case 'NroAbogadoLabel':
					if (!$this->lblNroAbogado) return $this->lblNroAbogado_Create();
					return $this->lblNroAbogado;
				case 'IdEstadoControl':
					if (!$this->lstIdEstadoObject) return $this->lstIdEstadoObject_Create();
					return $this->lstIdEstadoObject;
				case 'IdEstadoLabel':
					if (!$this->lblIdEstado) return $this->lblIdEstado_Create();
					return $this->lblIdEstado;
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
				case 'TipoTramiteControl':
					if (!$this->lstTipoTramiteObject) return $this->lstTipoTramiteObject_Create();
					return $this->lstTipoTramiteObject;
				case 'TipoTramiteLabel':
					if (!$this->lblTipoTramite) return $this->lblTipoTramite_Create();
					return $this->lblTipoTramite;
				case 'AutosControl':
					if (!$this->txtAutos) return $this->txtAutos_Create();
					return $this->txtAutos;
				case 'AutosLabel':
					if (!$this->lblAutos) return $this->lblAutos_Create();
					return $this->lblAutos;
				case 'FechaVencimientoControl':
					if (!$this->calFechaVencimiento) return $this->calFechaVencimiento_Create();
					return $this->calFechaVencimiento;
				case 'FechaVencimientoLabel':
					if (!$this->lblFechaVencimiento) return $this->lblFechaVencimiento_Create();
					return $this->lblFechaVencimiento;
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
					// Controls that point to TramitesAsignados fields
					case 'IdTramiteAsignadoControl':
						return ($this->lblIdTramiteAsignado = QType::Cast($mixValue, 'QControl'));
					case 'IdAgenteControl':
						return ($this->lstIdAgenteObject = QType::Cast($mixValue, 'QControl'));
					case 'NroAbogadoControl':
						return ($this->lstNroAbogadoObject = QType::Cast($mixValue, 'QControl'));
					case 'IdEstadoControl':
						return ($this->lstIdEstadoObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaIngresoControl':
						return ($this->calFechaIngreso = QType::Cast($mixValue, 'QControl'));
					case 'FechaSalidaControl':
						return ($this->calFechaSalida = QType::Cast($mixValue, 'QControl'));
					case 'TipoTramiteControl':
						return ($this->lstTipoTramiteObject = QType::Cast($mixValue, 'QControl'));
					case 'AutosControl':
						return ($this->txtAutos = QType::Cast($mixValue, 'QControl'));
					case 'FechaVencimientoControl':
						return ($this->calFechaVencimiento = QType::Cast($mixValue, 'QControl'));
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