<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Casilleros class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Casilleros objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this CasillerosListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class CasillerosListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Casilleroses
		public $dtgCasilleroses;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'CasillerosListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgCasilleroses = new CasillerosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCasilleroses->CssClass = 'datagrid';
			$this->dtgCasilleroses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCasilleroses->Paginator = new QPaginator($this->dtgCasilleroses);
			$this->dtgCasilleroses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgCasilleroses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for casilleros's properties, or you
			// can traverse down QQN::casilleros() to display fields that are down the hierarchy)
			$this->dtgCasilleroses->MetaAddColumn('IdCasillero');
			$this->dtgCasilleroses->MetaAddColumn('NroCasillero');
			$this->dtgCasilleroses->MetaAddColumn('Titular');
			$this->dtgCasilleroses->MetaAddColumn('Observacion');
			$this->dtgCasilleroses->MetaAddColumn('Activo');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Casilleros');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new CasillerosEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new CasillerosEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>