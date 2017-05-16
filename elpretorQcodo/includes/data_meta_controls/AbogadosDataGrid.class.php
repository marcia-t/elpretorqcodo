<?php
require(__DATAGEN_META_CONTROLS__ . '/AbogadosDataGridGen.class.php');

/**
 * This is the "Meta" DataGrid customizable subclass for the List functionality
 * of the Abogados class.  This code-generated class extends
 * from the generated Meta DataGrid class which contains a QDataGrid class which
 * can be used by any QForm or QPanel, listing a collection of Abogados
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
class AbogadosDataGrid extends AbogadosDataGridGen {

	

	/**
	 * Default / simple DataBinder for this Meta DataGrid.  This can easily be overridden
	 * by calling SetDataBinder() on this DataGrid with another DataBinder of your choice.
	 *
	 * @param QPaginatedControl $objPaginatedControl the QDataGrid object being bound, which will essentially be the same as $this
	 * @return void
	 */
	public function BindAllRows(QPaginatedControl $objPaginatedControl) {
		// Use MetaDataBinder to Bind QQ::All() to this datagrid
		// Don't pass in any additional / optional clauses
		$this->MetaDataBinder(QQ::Equal(QQN::Abogados()->Activo, 1), null);
	}
	
}

?>