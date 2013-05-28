<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Cedulas class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Cedulas objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this CedulasListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class CedulasListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Cedulases
		public $dtgCedulases;

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
			$this->Template = 'CedulasListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgCedulases = new CedulasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCedulases->CssClass = 'datagrid';
			$this->dtgCedulases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCedulases->Paginator = new QPaginator($this->dtgCedulases);
			$this->dtgCedulases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgCedulases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for cedulas's properties, or you
			// can traverse down QQN::cedulas() to display fields that are down the hierarchy)
			$this->dtgCedulases->MetaAddColumn('IdCedulas');
			$this->dtgCedulases->MetaAddColumn('Localidad');
			$this->dtgCedulases->MetaAddColumn('Autos');
			$this->dtgCedulases->MetaAddColumn('Direccion');
			$this->dtgCedulases->MetaAddColumn(QQN::Cedulas()->AgenteObject);
			$this->dtgCedulases->MetaAddColumn('FechaIngreso');
			$this->dtgCedulases->MetaAddColumn('FechaSalida');
			$this->dtgCedulases->MetaAddColumn('FechaFin');
			$this->dtgCedulases->MetaAddColumn('Audiencia');
			$this->dtgCedulases->MetaAddColumn('Observaciones');
			$this->dtgCedulases->MetaAddColumn(QQN::Cedulas()->EstadoObject);
			$this->dtgCedulases->MetaAddColumn('Honorarios');
			$this->dtgCedulases->MetaAddColumn('Timbrado');
			$this->dtgCedulases->MetaAddColumn(QQN::Cedulas()->NroAbogadoObject);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Cedulas');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new CedulasEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new CedulasEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>