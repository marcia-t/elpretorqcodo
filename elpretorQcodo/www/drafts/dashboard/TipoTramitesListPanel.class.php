<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the TipoTramites class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of TipoTramites objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this TipoTramitesListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class TipoTramitesListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list TipoTramiteses
		public $dtgTipoTramiteses;

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
			$this->Template = 'TipoTramitesListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgTipoTramiteses = new TipoTramitesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTipoTramiteses->CssClass = 'datagrid';
			$this->dtgTipoTramiteses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTipoTramiteses->Paginator = new QPaginator($this->dtgTipoTramiteses);
			$this->dtgTipoTramiteses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgTipoTramiteses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tipo_tramites's properties, or you
			// can traverse down QQN::tipo_tramites() to display fields that are down the hierarchy)
			$this->dtgTipoTramiteses->MetaAddColumn('IdTipoTramite');
			$this->dtgTipoTramiteses->MetaAddColumn('Nombre');
			$this->dtgTipoTramiteses->MetaAddColumn('Timbrado');
			$this->dtgTipoTramiteses->MetaAddColumn('Honorario');
			$this->dtgTipoTramiteses->MetaAddColumn('OtrosCostos');
			$this->dtgTipoTramiteses->MetaAddColumn('Observaciones');
			$this->dtgTipoTramiteses->MetaAddColumn(QQN::TipoTramites()->IdModalidadObject);
			$this->dtgTipoTramiteses->MetaAddColumn(QQN::TipoTramites()->IdZonaObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('TipoTramites');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new TipoTramitesEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new TipoTramitesEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>