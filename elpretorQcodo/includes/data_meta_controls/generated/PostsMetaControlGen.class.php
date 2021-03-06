<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Posts class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Posts object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PostsMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Posts $Posts the actual Posts data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $TitleControl
	 * property-read QLabel $TitleLabel
	 * property QTextBox $BodyControl
	 * property-read QLabel $BodyLabel
	 * property QDateTimePicker $CreatedControl
	 * property-read QLabel $CreatedLabel
	 * property QDateTimePicker $ModifiedControl
	 * property-read QLabel $ModifiedLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class PostsMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Posts objPosts
		 * @access protected
		 */
		protected $objPosts;

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

		// Controls that allow the editing of Posts's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtTitle;
         * @access protected
         */
		protected $txtTitle;

        /**
         * @var QTextBox txtBody;
         * @access protected
         */
		protected $txtBody;

        /**
         * @var QDateTimePicker calCreated;
         * @access protected
         */
		protected $calCreated;

        /**
         * @var QDateTimePicker calModified;
         * @access protected
         */
		protected $calModified;


		// Controls that allow the viewing of Posts's individual data fields
        /**
         * @var QLabel lblTitle
         * @access protected
         */
		protected $lblTitle;

        /**
         * @var QLabel lblBody
         * @access protected
         */
		protected $lblBody;

        /**
         * @var QLabel lblCreated
         * @access protected
         */
		protected $lblCreated;

        /**
         * @var QLabel lblModified
         * @access protected
         */
		protected $lblModified;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * PostsMetaControl to edit a single Posts object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Posts object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PostsMetaControl
		 * @param Posts $objPosts new or existing Posts object
		 */
		 public function __construct($objParentObject, Posts $objPosts) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PostsMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Posts object
			$this->objPosts = $objPosts;

			// Figure out if we're Editing or Creating New
			if ($this->objPosts->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this PostsMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Posts object creation - defaults to CreateOrEdit
 		 * @return PostsMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objPosts = Posts::Load($intId);

				// Posts was found -- return it!
				if ($objPosts)
					return new PostsMetaControl($objParentObject, $objPosts);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Posts object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PostsMetaControl($objParentObject, new Posts());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PostsMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Posts object creation - defaults to CreateOrEdit
		 * @return PostsMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return PostsMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PostsMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Posts object creation - defaults to CreateOrEdit
		 * @return PostsMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return PostsMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objPosts->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitle_Create($strControlId = null) {
			$this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitle->Name = QApplication::Translate('Title');
			$this->txtTitle->Text = $this->objPosts->Title;
			$this->txtTitle->MaxLength = Posts::TitleMaxLength;
			return $this->txtTitle;
		}

		/**
		 * Create and setup QLabel lblTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitle_Create($strControlId = null) {
			$this->lblTitle = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitle->Name = QApplication::Translate('Title');
			$this->lblTitle->Text = $this->objPosts->Title;
			return $this->lblTitle;
		}

		/**
		 * Create and setup QTextBox txtBody
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBody_Create($strControlId = null) {
			$this->txtBody = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBody->Name = QApplication::Translate('Body');
			$this->txtBody->Text = $this->objPosts->Body;
			$this->txtBody->TextMode = QTextMode::MultiLine;
			return $this->txtBody;
		}

		/**
		 * Create and setup QLabel lblBody
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBody_Create($strControlId = null) {
			$this->lblBody = new QLabel($this->objParentObject, $strControlId);
			$this->lblBody->Name = QApplication::Translate('Body');
			$this->lblBody->Text = $this->objPosts->Body;
			return $this->lblBody;
		}

		/**
		 * Create and setup QDateTimePicker calCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreated_Create($strControlId = null) {
			$this->calCreated = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreated->Name = QApplication::Translate('Created');
			$this->calCreated->DateTime = $this->objPosts->Created;
			$this->calCreated->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calCreated;
		}

		/**
		 * Create and setup QLabel lblCreated
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblCreated_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblCreated->Name = QApplication::Translate('Created');
			$this->strCreatedDateTimeFormat = $strDateTimeFormat;
			$this->lblCreated->Text = sprintf($this->objPosts->Created) ? $this->objPosts->Created->__toString($this->strCreatedDateTimeFormat) : null;
			return $this->lblCreated;
		}

		protected $strCreatedDateTimeFormat;

		/**
		 * Create and setup QDateTimePicker calModified
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calModified_Create($strControlId = null) {
			$this->calModified = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calModified->Name = QApplication::Translate('Modified');
			$this->calModified->DateTime = $this->objPosts->Modified;
			$this->calModified->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calModified;
		}

		/**
		 * Create and setup QLabel lblModified
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblModified_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblModified = new QLabel($this->objParentObject, $strControlId);
			$this->lblModified->Name = QApplication::Translate('Modified');
			$this->strModifiedDateTimeFormat = $strDateTimeFormat;
			$this->lblModified->Text = sprintf($this->objPosts->Modified) ? $this->objPosts->Modified->__toString($this->strModifiedDateTimeFormat) : null;
			return $this->lblModified;
		}

		protected $strModifiedDateTimeFormat;



		/**
		 * Refresh this MetaControl with Data from the local Posts object.
		 * @param boolean $blnReload reload Posts from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objPosts->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPosts->Id;

			if ($this->txtTitle) $this->txtTitle->Text = $this->objPosts->Title;
			if ($this->lblTitle) $this->lblTitle->Text = $this->objPosts->Title;

			if ($this->txtBody) $this->txtBody->Text = $this->objPosts->Body;
			if ($this->lblBody) $this->lblBody->Text = $this->objPosts->Body;

			if ($this->calCreated) $this->calCreated->DateTime = $this->objPosts->Created;
			if ($this->lblCreated) $this->lblCreated->Text = sprintf($this->objPosts->Created) ? $this->objPosts->__toString($this->strCreatedDateTimeFormat) : null;

			if ($this->calModified) $this->calModified->DateTime = $this->objPosts->Modified;
			if ($this->lblModified) $this->lblModified->Text = sprintf($this->objPosts->Modified) ? $this->objPosts->__toString($this->strModifiedDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC POSTS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Posts instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePosts() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitle) $this->objPosts->Title = $this->txtTitle->Text;
				if ($this->txtBody) $this->objPosts->Body = $this->txtBody->Text;
				if ($this->calCreated) $this->objPosts->Created = $this->calCreated->DateTime;
				if ($this->calModified) $this->objPosts->Modified = $this->calModified->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Posts object
				$this->objPosts->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Posts instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePosts() {
			$this->objPosts->Delete();
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
				case 'Posts': return $this->objPosts;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Posts fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'TitleControl':
					if (!$this->txtTitle) return $this->txtTitle_Create();
					return $this->txtTitle;
				case 'TitleLabel':
					if (!$this->lblTitle) return $this->lblTitle_Create();
					return $this->lblTitle;
				case 'BodyControl':
					if (!$this->txtBody) return $this->txtBody_Create();
					return $this->txtBody;
				case 'BodyLabel':
					if (!$this->lblBody) return $this->lblBody_Create();
					return $this->lblBody;
				case 'CreatedControl':
					if (!$this->calCreated) return $this->calCreated_Create();
					return $this->calCreated;
				case 'CreatedLabel':
					if (!$this->lblCreated) return $this->lblCreated_Create();
					return $this->lblCreated;
				case 'ModifiedControl':
					if (!$this->calModified) return $this->calModified_Create();
					return $this->calModified;
				case 'ModifiedLabel':
					if (!$this->lblModified) return $this->lblModified_Create();
					return $this->lblModified;
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
					// Controls that point to Posts fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'TitleControl':
						return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
					case 'BodyControl':
						return ($this->txtBody = QType::Cast($mixValue, 'QControl'));
					case 'CreatedControl':
						return ($this->calCreated = QType::Cast($mixValue, 'QControl'));
					case 'ModifiedControl':
						return ($this->calModified = QType::Cast($mixValue, 'QControl'));
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