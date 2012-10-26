<?php
	require(__DATAGEN_META_CONTROLS__ . '/TramitesAsignadosDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the TramitesAsignados class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of TramitesAsignados
	 * objects.  It includes functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create an instance of this DataGrid in a QForm or QPanel.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * 
	 */
	class TramitesAsignadosEnTramiteDataGrid extends TramitesAsignadosDataGridGen {
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->SetDataBinder('BindRowsByState', $this);
			$this->UseAjax = true;
		}
		
		public function BindRowsByState(QPaginatedControl $objPaginatedControl) {
			// Use MetaDataBinder to Bind QQ::All() to this datagrid
			// Don't pass in any additional / optional clauses
			$this->MetaDataBinder(TramitesAsignados::LoadArrayByIdEstado(2), null);
		}
		
	}
?>