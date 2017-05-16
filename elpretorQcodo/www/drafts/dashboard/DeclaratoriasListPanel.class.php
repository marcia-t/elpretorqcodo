<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Declaratorias class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Declaratorias objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DeclaratoriasListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class DeclaratoriasListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Declaratoriases
		public $dtgDeclaratoriases;

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
			$this->Template = 'DeclaratoriasListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDeclaratoriases = new DeclaratoriasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDeclaratoriases->CssClass = 'datagrid';
			$this->dtgDeclaratoriases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDeclaratoriases->Paginator = new QPaginator($this->dtgDeclaratoriases);
			$this->dtgDeclaratoriases->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDeclaratoriases->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for declaratorias's properties, or you
			// can traverse down QQN::declaratorias() to display fields that are down the hierarchy)
			$this->dtgDeclaratoriases->MetaAddColumn('IdDeclaratoria');
			$this->dtgDeclaratoriases->MetaAddColumn('FechaInicio');
			$this->dtgDeclaratoriases->MetaAddColumn(QQN::Declaratorias()->EstadoObject);
			$this->dtgDeclaratoriases->MetaAddColumn('Honorarios');
			$this->dtgDeclaratoriases->MetaAddColumn('Timbrado');
			$this->dtgDeclaratoriases->MetaAddColumn(QQN::Declaratorias()->NroAbogadoObject);
			$this->dtgDeclaratoriases->MetaAddColumn('Contacto');
			$this->dtgDeclaratoriases->MetaAddColumn('Observaciones');
			$this->dtgDeclaratoriases->MetaAddColumn('Autos');
			$this->dtgDeclaratoriases->MetaAddColumn('FechaFin');
			$this->dtgDeclaratoriases->MetaAddColumn('Observada');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Declaratorias');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DeclaratoriasEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DeclaratoriasEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>