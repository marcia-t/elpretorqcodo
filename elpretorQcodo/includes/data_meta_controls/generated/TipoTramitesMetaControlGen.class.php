<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TipoTramites class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TipoTramites object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TipoTramitesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read TipoTramites $TipoTramites the actual TipoTramites data class being edited
	 * property QLabel $IdTipoTramiteControl
	 * property-read QLabel $IdTipoTramiteLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QIntegerTextBox $TimbradoControl
	 * property-read QLabel $TimbradoLabel
	 * property QIntegerTextBox $HonorarioControl
	 * property-read QLabel $HonorarioLabel
	 * property QIntegerTextBox $OtrosCostosControl
	 * property-read QLabel $OtrosCostosLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property QListBox $IdModalidadControl
	 * property-read QLabel $IdModalidadLabel
	 * property QListBox $IdZonaControl
	 * property-read QLabel $IdZonaLabel
	 * property QIntegerTextBox $ActivoControl
	 * property-read QLabel $ActivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TipoTramitesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var TipoTramites objTipoTramites
		 * @access protected
		 */
		protected $objTipoTramites;

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

		// Controls that allow the editing of TipoTramites's individual data fields
        /**
         * @var QLabel lblIdTipoTramite;
         * @access protected
         */
		protected $lblIdTipoTramite;

        /**
         * @var QTextBox txtNombre;
         * @access protected
         */
		protected $txtNombre;

        /**
         * @var QIntegerTextBox txtTimbrado;
         * @access protected
         */
		protected $txtTimbrado;

        /**
         * @var QIntegerTextBox txtHonorario;
         * @access protected
         */
		protected $txtHonorario;

        /**
         * @var QIntegerTextBox txtOtrosCostos;
         * @access protected
         */
		protected $txtOtrosCostos;

        /**
         * @var QTextBox txtObservaciones;
         * @access protected
         */
		protected $txtObservaciones;

        /**
         * @var QListBox lstIdModalidadObject;
         * @access protected
         */
		protected $lstIdModalidadObject;

        /**
         * @var QListBox lstIdZonaObject;
         * @access protected
         */
		protected $lstIdZonaObject;

        /**
         * @var QIntegerTextBox txtActivo;
         * @access protected
         */
		protected $txtActivo;


		// Controls that allow the viewing of TipoTramites's individual data fields
        /**
         * @var QLabel lblNombre
         * @access protected
         */
		protected $lblNombre;

        /**
         * @var QLabel lblTimbrado
         * @access protected
         */
		protected $lblTimbrado;

        /**
         * @var QLabel lblHonorario
         * @access protected
         */
		protected $lblHonorario;

        /**
         * @var QLabel lblOtrosCostos
         * @access protected
         */
		protected $lblOtrosCostos;

        /**
         * @var QLabel lblObservaciones
         * @access protected
         */
		protected $lblObservaciones;

        /**
         * @var QLabel lblIdModalidad
         * @access protected
         */
		protected $lblIdModalidad;

        /**
         * @var QLabel lblIdZona
         * @access protected
         */
		protected $lblIdZona;

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
		 * TipoTramitesMetaControl to edit a single TipoTramites object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TipoTramites object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoTramitesMetaControl
		 * @param TipoTramites $objTipoTramites new or existing TipoTramites object
		 */
		 public function __construct($objParentObject, TipoTramites $objTipoTramites) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TipoTramitesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked TipoTramites object
			$this->objTipoTramites = $objTipoTramites;

			// Figure out if we're Editing or Creating New
			if ($this->objTipoTramites->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoTramitesMetaControl
		 * @param integer $intIdTipoTramite primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing TipoTramites object creation - defaults to CreateOrEdit
 		 * @return TipoTramitesMetaControl
		 */
		public static function Create($objParentObject, $intIdTipoTramite = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdTipoTramite)) {
				$objTipoTramites = TipoTramites::Load($intIdTipoTramite);

				// TipoTramites was found -- return it!
				if ($objTipoTramites)
					return new TipoTramitesMetaControl($objParentObject, $objTipoTramites);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TipoTramites object with PK arguments: ' . $intIdTipoTramite);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TipoTramitesMetaControl($objParentObject, new TipoTramites());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoTramitesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TipoTramites object creation - defaults to CreateOrEdit
		 * @return TipoTramitesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTipoTramite = QApplication::PathInfo(0);
			return TipoTramitesMetaControl::Create($objParentObject, $intIdTipoTramite, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoTramitesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TipoTramites object creation - defaults to CreateOrEdit
		 * @return TipoTramitesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTipoTramite = QApplication::QueryString('intIdTipoTramite');
			return TipoTramitesMetaControl::Create($objParentObject, $intIdTipoTramite, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdTipoTramite
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTipoTramite_Create($strControlId = null) {
			$this->lblIdTipoTramite = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTipoTramite->Name = QApplication::Translate('Id Tipo Tramite');
			if ($this->blnEditMode)
				$this->lblIdTipoTramite->Text = $this->objTipoTramites->IdTipoTramite;
			else
				$this->lblIdTipoTramite->Text = 'N/A';
			return $this->lblIdTipoTramite;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objTipoTramites->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = TipoTramites::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objTipoTramites->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtTimbrado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTimbrado_Create($strControlId = null) {
			$this->txtTimbrado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTimbrado->Name = QApplication::Translate('Timbrado');
			$this->txtTimbrado->Text = $this->objTipoTramites->Timbrado;
			$this->txtTimbrado->Required = true;
			return $this->txtTimbrado;
		}

		/**
		 * Create and setup QLabel lblTimbrado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTimbrado_Create($strControlId = null, $strFormat = null) {
			$this->lblTimbrado = new QLabel($this->objParentObject, $strControlId);
			$this->lblTimbrado->Name = QApplication::Translate('Timbrado');
			$this->lblTimbrado->Text = $this->objTipoTramites->Timbrado;
			$this->lblTimbrado->Required = true;
			$this->lblTimbrado->Format = $strFormat;
			return $this->lblTimbrado;
		}

		/**
		 * Create and setup QIntegerTextBox txtHonorario
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtHonorario_Create($strControlId = null) {
			$this->txtHonorario = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtHonorario->Name = QApplication::Translate('Honorario');
			$this->txtHonorario->Text = $this->objTipoTramites->Honorario;
			$this->txtHonorario->Required = true;
			return $this->txtHonorario;
		}

		/**
		 * Create and setup QLabel lblHonorario
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblHonorario_Create($strControlId = null, $strFormat = null) {
			$this->lblHonorario = new QLabel($this->objParentObject, $strControlId);
			$this->lblHonorario->Name = QApplication::Translate('Honorario');
			$this->lblHonorario->Text = $this->objTipoTramites->Honorario;
			$this->lblHonorario->Required = true;
			$this->lblHonorario->Format = $strFormat;
			return $this->lblHonorario;
		}

		/**
		 * Create and setup QIntegerTextBox txtOtrosCostos
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOtrosCostos_Create($strControlId = null) {
			$this->txtOtrosCostos = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOtrosCostos->Name = QApplication::Translate('Otros Costos');
			$this->txtOtrosCostos->Text = $this->objTipoTramites->OtrosCostos;
			return $this->txtOtrosCostos;
		}

		/**
		 * Create and setup QLabel lblOtrosCostos
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblOtrosCostos_Create($strControlId = null, $strFormat = null) {
			$this->lblOtrosCostos = new QLabel($this->objParentObject, $strControlId);
			$this->lblOtrosCostos->Name = QApplication::Translate('Otros Costos');
			$this->lblOtrosCostos->Text = $this->objTipoTramites->OtrosCostos;
			$this->lblOtrosCostos->Format = $strFormat;
			return $this->lblOtrosCostos;
		}

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objTipoTramites->Observaciones;
			$this->txtObservaciones->MaxLength = TipoTramites::ObservacionesMaxLength;
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
			$this->lblObservaciones->Text = $this->objTipoTramites->Observaciones;
			return $this->lblObservaciones;
		}

		/**
		 * Create and setup QListBox lstIdModalidadObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdModalidadObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdModalidadObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdModalidadObject->Name = 'Modalidad';
			$this->lstIdModalidadObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdModalidadObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdModalidadObjectCursor = Modalidades::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objIdModalidadObject = Modalidades::InstantiateCursor($objIdModalidadObjectCursor)) {
				$objListItem = new QListItem($objIdModalidadObject->__toString(), $objIdModalidadObject->IdModalidad);
				if (($this->objTipoTramites->IdModalidadObject) && ($this->objTipoTramites->IdModalidadObject->IdModalidad == $objIdModalidadObject->IdModalidad))
					$objListItem->Selected = true;
				$this->lstIdModalidadObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstIdModalidadObject;
		}

		/**
		 * Create and setup QLabel lblIdModalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdModalidad_Create($strControlId = null) {
			$this->lblIdModalidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdModalidad->Name = QApplication::Translate('Id Modalidad Object');
			$this->lblIdModalidad->Text = ($this->objTipoTramites->IdModalidadObject) ? $this->objTipoTramites->IdModalidadObject->__toString() : null;
			$this->lblIdModalidad->Required = true;
			return $this->lblIdModalidad;
		}

		/**
		 * Create and setup QListBox lstIdZonaObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstIdZonaObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstIdZonaObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstIdZonaObject->Name = 'Zona';
			$this->lstIdZonaObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstIdZonaObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objIdZonaObjectCursor = Zonas::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objIdZonaObject = Zonas::InstantiateCursor($objIdZonaObjectCursor)) {
				$objListItem = new QListItem($objIdZonaObject->__toString(), $objIdZonaObject->IdZona);
				if (($this->objTipoTramites->IdZonaObject) && ($this->objTipoTramites->IdZonaObject->IdZona == $objIdZonaObject->IdZona))
					$objListItem->Selected = true;
				$this->lstIdZonaObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstIdZonaObject;
		}

		/**
		 * Create and setup QLabel lblIdZona
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdZona_Create($strControlId = null) {
			$this->lblIdZona = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdZona->Name = QApplication::Translate('Id Zona Object');
			$this->lblIdZona->Text = ($this->objTipoTramites->IdZonaObject) ? $this->objTipoTramites->IdZonaObject->__toString() : null;
			$this->lblIdZona->Required = true;
			return $this->lblIdZona;
		}

		/**
		 * Create and setup QIntegerTextBox txtActivo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtActivo_Create($strControlId = null) {
			$this->txtActivo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtActivo->Name = QApplication::Translate('Activo');
			$this->txtActivo->Text = $this->objTipoTramites->Activo;
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
			$this->lblActivo->Text = $this->objTipoTramites->Activo;
			$this->lblActivo->Required = true;
			$this->lblActivo->Format = $strFormat;
			return $this->lblActivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local TipoTramites object.
		 * @param boolean $blnReload reload TipoTramites from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTipoTramites->Reload();

			if ($this->lblIdTipoTramite) if ($this->blnEditMode) $this->lblIdTipoTramite->Text = $this->objTipoTramites->IdTipoTramite;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objTipoTramites->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objTipoTramites->Nombre;

			if ($this->txtTimbrado) $this->txtTimbrado->Text = $this->objTipoTramites->Timbrado;
			if ($this->lblTimbrado) $this->lblTimbrado->Text = $this->objTipoTramites->Timbrado;

			if ($this->txtHonorario) $this->txtHonorario->Text = $this->objTipoTramites->Honorario;
			if ($this->lblHonorario) $this->lblHonorario->Text = $this->objTipoTramites->Honorario;

			if ($this->txtOtrosCostos) $this->txtOtrosCostos->Text = $this->objTipoTramites->OtrosCostos;
			if ($this->lblOtrosCostos) $this->lblOtrosCostos->Text = $this->objTipoTramites->OtrosCostos;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objTipoTramites->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objTipoTramites->Observaciones;

			if ($this->lstIdModalidadObject) {
					$this->lstIdModalidadObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdModalidadObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdModalidadObjectArray = Modalidades::LoadAll();
				if ($objIdModalidadObjectArray) foreach ($objIdModalidadObjectArray as $objIdModalidadObject) {
					$objListItem = new QListItem($objIdModalidadObject->__toString(), $objIdModalidadObject->IdModalidad);
					if (($this->objTipoTramites->IdModalidadObject) && ($this->objTipoTramites->IdModalidadObject->IdModalidad == $objIdModalidadObject->IdModalidad))
						$objListItem->Selected = true;
					$this->lstIdModalidadObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdModalidad) $this->lblIdModalidad->Text = ($this->objTipoTramites->IdModalidadObject) ? $this->objTipoTramites->IdModalidadObject->__toString() : null;

			if ($this->lstIdZonaObject) {
					$this->lstIdZonaObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstIdZonaObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objIdZonaObjectArray = Zonas::LoadAll();
				if ($objIdZonaObjectArray) foreach ($objIdZonaObjectArray as $objIdZonaObject) {
					$objListItem = new QListItem($objIdZonaObject->__toString(), $objIdZonaObject->IdZona);
					if (($this->objTipoTramites->IdZonaObject) && ($this->objTipoTramites->IdZonaObject->IdZona == $objIdZonaObject->IdZona))
						$objListItem->Selected = true;
					$this->lstIdZonaObject->AddItem($objListItem);
				}
			}
			if ($this->lblIdZona) $this->lblIdZona->Text = ($this->objTipoTramites->IdZonaObject) ? $this->objTipoTramites->IdZonaObject->__toString() : null;

			if ($this->txtActivo) $this->txtActivo->Text = $this->objTipoTramites->Activo;
			if ($this->lblActivo) $this->lblActivo->Text = $this->objTipoTramites->Activo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TIPOTRAMITES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's TipoTramites instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTipoTramites() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objTipoTramites->Nombre = $this->txtNombre->Text;
				if ($this->txtTimbrado) $this->objTipoTramites->Timbrado = $this->txtTimbrado->Text;
				if ($this->txtHonorario) $this->objTipoTramites->Honorario = $this->txtHonorario->Text;
				if ($this->txtOtrosCostos) $this->objTipoTramites->OtrosCostos = $this->txtOtrosCostos->Text;
				if ($this->txtObservaciones) $this->objTipoTramites->Observaciones = $this->txtObservaciones->Text;
				if ($this->lstIdModalidadObject) $this->objTipoTramites->IdModalidad = $this->lstIdModalidadObject->SelectedValue;
				if ($this->lstIdZonaObject) $this->objTipoTramites->IdZona = $this->lstIdZonaObject->SelectedValue;
				if ($this->txtActivo) $this->objTipoTramites->Activo = $this->txtActivo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the TipoTramites object
				$this->objTipoTramites->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's TipoTramites instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTipoTramites() {
			$this->objTipoTramites->Delete();
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
				case 'TipoTramites': return $this->objTipoTramites;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TipoTramites fields -- will be created dynamically if not yet created
				case 'IdTipoTramiteControl':
					if (!$this->lblIdTipoTramite) return $this->lblIdTipoTramite_Create();
					return $this->lblIdTipoTramite;
				case 'IdTipoTramiteLabel':
					if (!$this->lblIdTipoTramite) return $this->lblIdTipoTramite_Create();
					return $this->lblIdTipoTramite;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'TimbradoControl':
					if (!$this->txtTimbrado) return $this->txtTimbrado_Create();
					return $this->txtTimbrado;
				case 'TimbradoLabel':
					if (!$this->lblTimbrado) return $this->lblTimbrado_Create();
					return $this->lblTimbrado;
				case 'HonorarioControl':
					if (!$this->txtHonorario) return $this->txtHonorario_Create();
					return $this->txtHonorario;
				case 'HonorarioLabel':
					if (!$this->lblHonorario) return $this->lblHonorario_Create();
					return $this->lblHonorario;
				case 'OtrosCostosControl':
					if (!$this->txtOtrosCostos) return $this->txtOtrosCostos_Create();
					return $this->txtOtrosCostos;
				case 'OtrosCostosLabel':
					if (!$this->lblOtrosCostos) return $this->lblOtrosCostos_Create();
					return $this->lblOtrosCostos;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
				case 'IdModalidadControl':
					if (!$this->lstIdModalidadObject) return $this->lstIdModalidadObject_Create();
					return $this->lstIdModalidadObject;
				case 'IdModalidadLabel':
					if (!$this->lblIdModalidad) return $this->lblIdModalidad_Create();
					return $this->lblIdModalidad;
				case 'IdZonaControl':
					if (!$this->lstIdZonaObject) return $this->lstIdZonaObject_Create();
					return $this->lstIdZonaObject;
				case 'IdZonaLabel':
					if (!$this->lblIdZona) return $this->lblIdZona_Create();
					return $this->lblIdZona;
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
					// Controls that point to TipoTramites fields
					case 'IdTipoTramiteControl':
						return ($this->lblIdTipoTramite = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'TimbradoControl':
						return ($this->txtTimbrado = QType::Cast($mixValue, 'QControl'));
					case 'HonorarioControl':
						return ($this->txtHonorario = QType::Cast($mixValue, 'QControl'));
					case 'OtrosCostosControl':
						return ($this->txtOtrosCostos = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
					case 'IdModalidadControl':
						return ($this->lstIdModalidadObject = QType::Cast($mixValue, 'QControl'));
					case 'IdZonaControl':
						return ($this->lstIdZonaObject = QType::Cast($mixValue, 'QControl'));
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