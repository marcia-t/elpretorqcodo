<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Movimiento class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Movimiento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MovimientoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Movimiento $Movimiento the actual Movimiento data class being edited
	 * property QLabel $IdMovimientoControl
	 * property-read QLabel $IdMovimientoLabel
	 * property QTextBox $MontoControl
	 * property-read QLabel $MontoLabel
	 * property QListBox $TipoMovimientoControl
	 * property-read QLabel $TipoMovimientoLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MovimientoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Movimiento objMovimiento
		 * @access protected
		 */
		protected $objMovimiento;

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

		// Controls that allow the editing of Movimiento's individual data fields
        /**
         * @var QLabel lblIdMovimiento;
         * @access protected
         */
		protected $lblIdMovimiento;

        /**
         * @var QTextBox txtMonto;
         * @access protected
         */
		protected $txtMonto;

        /**
         * @var QListBox lstTipoMovimientoObject;
         * @access protected
         */
		protected $lstTipoMovimientoObject;

        /**
         * @var QDateTimePicker calFecha;
         * @access protected
         */
		protected $calFecha;

        /**
         * @var QTextBox txtObservaciones;
         * @access protected
         */
		protected $txtObservaciones;


		// Controls that allow the viewing of Movimiento's individual data fields
        /**
         * @var QLabel lblMonto
         * @access protected
         */
		protected $lblMonto;

        /**
         * @var QLabel lblTipoMovimiento
         * @access protected
         */
		protected $lblTipoMovimiento;

        /**
         * @var QLabel lblFecha
         * @access protected
         */
		protected $lblFecha;

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
		 * MovimientoMetaControl to edit a single Movimiento object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Movimiento object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MovimientoMetaControl
		 * @param Movimiento $objMovimiento new or existing Movimiento object
		 */
		 public function __construct($objParentObject, Movimiento $objMovimiento) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MovimientoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Movimiento object
			$this->objMovimiento = $objMovimiento;

			// Figure out if we're Editing or Creating New
			if ($this->objMovimiento->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MovimientoMetaControl
		 * @param integer $intIdMovimiento primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Movimiento object creation - defaults to CreateOrEdit
 		 * @return MovimientoMetaControl
		 */
		public static function Create($objParentObject, $intIdMovimiento = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdMovimiento)) {
				$objMovimiento = Movimiento::Load($intIdMovimiento);

				// Movimiento was found -- return it!
				if ($objMovimiento)
					return new MovimientoMetaControl($objParentObject, $objMovimiento);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Movimiento object with PK arguments: ' . $intIdMovimiento);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MovimientoMetaControl($objParentObject, new Movimiento());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MovimientoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Movimiento object creation - defaults to CreateOrEdit
		 * @return MovimientoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMovimiento = QApplication::PathInfo(0);
			return MovimientoMetaControl::Create($objParentObject, $intIdMovimiento, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MovimientoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Movimiento object creation - defaults to CreateOrEdit
		 * @return MovimientoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdMovimiento = QApplication::QueryString('intIdMovimiento');
			return MovimientoMetaControl::Create($objParentObject, $intIdMovimiento, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdMovimiento
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdMovimiento_Create($strControlId = null) {
			$this->lblIdMovimiento = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdMovimiento->Name = QApplication::Translate('Id Movimiento');
			if ($this->blnEditMode)
				$this->lblIdMovimiento->Text = $this->objMovimiento->IdMovimiento;
			else
				$this->lblIdMovimiento->Text = 'N/A';
			return $this->lblIdMovimiento;
		}

		/**
		 * Create and setup QTextBox txtMonto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMonto_Create($strControlId = null) {
			$this->txtMonto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMonto->Name = QApplication::Translate('Monto');
			$this->txtMonto->Text = $this->objMovimiento->Monto;
			$this->txtMonto->Required = true;
			return $this->txtMonto;
		}

		/**
		 * Create and setup QLabel lblMonto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMonto_Create($strControlId = null) {
			$this->lblMonto = new QLabel($this->objParentObject, $strControlId);
			$this->lblMonto->Name = QApplication::Translate('Monto');
			$this->lblMonto->Text = $this->objMovimiento->Monto;
			$this->lblMonto->Required = true;
			return $this->lblMonto;
		}

		/**
		 * Create and setup QListBox lstTipoMovimientoObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTipoMovimientoObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTipoMovimientoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTipoMovimientoObject->Name = QApplication::Translate('Tipo Movimiento Object');
			$this->lstTipoMovimientoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTipoMovimientoObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTipoMovimientoObjectCursor = TipoMovimiento::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTipoMovimientoObject = TipoMovimiento::InstantiateCursor($objTipoMovimientoObjectCursor)) {
				$objListItem = new QListItem($objTipoMovimientoObject->__toString(), $objTipoMovimientoObject->IdTipoMovimiento);
				if (($this->objMovimiento->TipoMovimientoObject) && ($this->objMovimiento->TipoMovimientoObject->IdTipoMovimiento == $objTipoMovimientoObject->IdTipoMovimiento))
					$objListItem->Selected = true;
				$this->lstTipoMovimientoObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTipoMovimientoObject;
		}

		/**
		 * Create and setup QLabel lblTipoMovimiento
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipoMovimiento_Create($strControlId = null) {
			$this->lblTipoMovimiento = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipoMovimiento->Name = QApplication::Translate('Tipo Movimiento Object');
			$this->lblTipoMovimiento->Text = ($this->objMovimiento->TipoMovimientoObject) ? $this->objMovimiento->TipoMovimientoObject->__toString() : null;
			$this->lblTipoMovimiento->Required = true;
			return $this->lblTipoMovimiento;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objMovimiento->Fecha;
			$this->calFecha->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFecha->Required = true;
			return $this->calFecha;
		}

		/**
		 * Create and setup QLabel lblFecha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFecha_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFecha = new QLabel($this->objParentObject, $strControlId);
			$this->lblFecha->Name = QApplication::Translate('Fecha');
			$this->strFechaDateTimeFormat = $strDateTimeFormat;
			$this->lblFecha->Text = sprintf($this->objMovimiento->Fecha) ? $this->objMovimiento->Fecha->__toString($this->strFechaDateTimeFormat) : null;
			$this->lblFecha->Required = true;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objMovimiento->Observaciones;
			$this->txtObservaciones->MaxLength = Movimiento::ObservacionesMaxLength;
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
			$this->lblObservaciones->Text = $this->objMovimiento->Observaciones;
			return $this->lblObservaciones;
		}



		/**
		 * Refresh this MetaControl with Data from the local Movimiento object.
		 * @param boolean $blnReload reload Movimiento from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMovimiento->Reload();

			if ($this->lblIdMovimiento) if ($this->blnEditMode) $this->lblIdMovimiento->Text = $this->objMovimiento->IdMovimiento;

			if ($this->txtMonto) $this->txtMonto->Text = $this->objMovimiento->Monto;
			if ($this->lblMonto) $this->lblMonto->Text = $this->objMovimiento->Monto;

			if ($this->lstTipoMovimientoObject) {
					$this->lstTipoMovimientoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTipoMovimientoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objTipoMovimientoObjectArray = TipoMovimiento::LoadAll();
				if ($objTipoMovimientoObjectArray) foreach ($objTipoMovimientoObjectArray as $objTipoMovimientoObject) {
					$objListItem = new QListItem($objTipoMovimientoObject->__toString(), $objTipoMovimientoObject->IdTipoMovimiento);
					if (($this->objMovimiento->TipoMovimientoObject) && ($this->objMovimiento->TipoMovimientoObject->IdTipoMovimiento == $objTipoMovimientoObject->IdTipoMovimiento))
						$objListItem->Selected = true;
					$this->lstTipoMovimientoObject->AddItem($objListItem);
				}
			}
			if ($this->lblTipoMovimiento) $this->lblTipoMovimiento->Text = ($this->objMovimiento->TipoMovimientoObject) ? $this->objMovimiento->TipoMovimientoObject->__toString() : null;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objMovimiento->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objMovimiento->Fecha) ? $this->objMovimiento->__toString($this->strFechaDateTimeFormat) : null;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objMovimiento->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objMovimiento->Observaciones;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MOVIMIENTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Movimiento instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMovimiento() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtMonto) $this->objMovimiento->Monto = $this->txtMonto->Text;
				if ($this->lstTipoMovimientoObject) $this->objMovimiento->TipoMovimiento = $this->lstTipoMovimientoObject->SelectedValue;
				if ($this->calFecha) $this->objMovimiento->Fecha = $this->calFecha->DateTime;
				if ($this->txtObservaciones) $this->objMovimiento->Observaciones = $this->txtObservaciones->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Movimiento object
				$this->objMovimiento->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Movimiento instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMovimiento() {
			$this->objMovimiento->Delete();
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
				case 'Movimiento': return $this->objMovimiento;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Movimiento fields -- will be created dynamically if not yet created
				case 'IdMovimientoControl':
					if (!$this->lblIdMovimiento) return $this->lblIdMovimiento_Create();
					return $this->lblIdMovimiento;
				case 'IdMovimientoLabel':
					if (!$this->lblIdMovimiento) return $this->lblIdMovimiento_Create();
					return $this->lblIdMovimiento;
				case 'MontoControl':
					if (!$this->txtMonto) return $this->txtMonto_Create();
					return $this->txtMonto;
				case 'MontoLabel':
					if (!$this->lblMonto) return $this->lblMonto_Create();
					return $this->lblMonto;
				case 'TipoMovimientoControl':
					if (!$this->lstTipoMovimientoObject) return $this->lstTipoMovimientoObject_Create();
					return $this->lstTipoMovimientoObject;
				case 'TipoMovimientoLabel':
					if (!$this->lblTipoMovimiento) return $this->lblTipoMovimiento_Create();
					return $this->lblTipoMovimiento;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
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
					// Controls that point to Movimiento fields
					case 'IdMovimientoControl':
						return ($this->lblIdMovimiento = QType::Cast($mixValue, 'QControl'));
					case 'MontoControl':
						return ($this->txtMonto = QType::Cast($mixValue, 'QControl'));
					case 'TipoMovimientoControl':
						return ($this->lstTipoMovimientoObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
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