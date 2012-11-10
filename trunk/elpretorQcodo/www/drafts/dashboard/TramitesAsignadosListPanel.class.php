<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the TramitesAsignados class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of TramitesAsignados objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this TramitesAsignadosListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class TramitesAsignadosListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list TramitesAsignadoses
		public $dtgTramitesAsignadoses;

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
			$this->Template = 'TramitesAsignadosListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgTramitesAsignadoses = new TramitesAsignadosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTramitesAsignadoses->CssClass = 'datagrid';
			$this->dtgTramitesAsignadoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTramitesAsignadoses->Paginator = new QPaginator($this->dtgTramitesAsignadoses);
			$this->dtgTramitesAsignadoses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgTramitesAsignadoses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tramites_asignados's properties, or you
			// can traverse down QQN::tramites_asignados() to display fields that are down the hierarchy)
			$this->dtgTramitesAsignadoses->MetaAddColumn('IdTramiteAsignado');
			$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->IdAgenteObject);
			$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->NroAbogadoObject);
			$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->IdEstadoObject);
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaIngreso');
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaSalida');
			$this->dtgTramitesAsignadoses->MetaAddColumn(QQN::TramitesAsignados()->TipoTramiteObject);
			$this->dtgTramitesAsignadoses->MetaAddColumn('Autos');
			$this->dtgTramitesAsignadoses->MetaAddColumn('FechaVencimiento');
			$this->dtgTramitesAsignadoses->MetaAddColumn('Observaciones');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('TramitesAsignados');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new TramitesAsignadosEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new TramitesAsignadosEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>