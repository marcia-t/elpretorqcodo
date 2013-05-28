<?php
	require(__DATAGEN_META_CONTROLS__ . '/TipoTramitesDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the TipoTramites class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of TipoTramites
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
	class TipoTramitesDataGrid extends TipoTramitesDataGridGen {
		
		public function AgregarColumna($mixContent, $nombre) {
			if (is_array($mixContent)) {
				$objNodeArray = array();
		
				try {
					foreach ($mixContent as $mixItem) {
						$objNodeArray[] = $this->ResolveContentItem($mixItem);
					}
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		
				if (count($objNodeArray) == 0)
					throw new QCallerException('No content specified');
		
				// Create Various Arrays to be used by DGC
				$strNameArray = '';
				$strHtmlArray = '';
				$objSort = array();
				$objSortDescending = array();
				foreach ($objNodeArray as $objNode) {
					$strNameArray[] = QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName));
					$strHtmlArray[] = $objNode->GetDataGridHtml();
					$objSort[] = $objNode->GetDataGridOrderByNode();
					$objSortDescending[] = $objNode->GetDataGridOrderByNode();
					$objSortDescending[] = false;
				}
		
				$objNewColumn = new QDataGridColumn(
						implode(', ', $strNameArray),
						'<?=' . implode(' . ", " . ', $strHtmlArray) . '?>',
						array(
								'OrderByClause' => new QQOrderBy($objNodeArray),
								'ReverseOrderByClause' => new QQOrderBy($objSortDescending)
						)
				);
			} else {
				try {
					$objNode = $this->ResolveContentItem($mixContent);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		
				$objNewColumn = new QDataGridColumn(
						$nombre,
						'<?=' . $objNode->GetDataGridHtml() . '?>'/*,
						array(
								'OrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode()),
								'ReverseOrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode(), false)
						)*/
				);
			}
		
			
			$this->AddColumn($objNewColumn);
			return $objNewColumn;
		}
		
		
		public function MetaAddColumn($mixContent, $objOverrideParameters = null) {
			if (is_array($mixContent)) {
				$objNodeArray = array();
		
				try {
					foreach ($mixContent as $mixItem) {
						$objNodeArray[] = $this->ResolveContentItem($mixItem);
					}
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		
				if (count($objNodeArray) == 0)
					throw new QCallerException('No content specified');
		
				// Create Various Arrays to be used by DGC
				$strNameArray = '';
				$strHtmlArray = '';
				$objSort = array();
				$objSortDescending = array();
				foreach ($objNodeArray as $objNode) {
					$strNameArray[] = QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName));
					$strHtmlArray[] = $objNode->GetDataGridHtml();
					$objSort[] = $objNode->GetDataGridOrderByNode();
					$objSortDescending[] = $objNode->GetDataGridOrderByNode();
					$objSortDescending[] = false;
				}
		
				$objNewColumn = new QDataGridColumn(
						implode(', ', $strNameArray),
						'<?=' . implode(' . ", " . ', $strHtmlArray) . '?>',
						array(
								'OrderByClause' => new QQOrderBy($objNodeArray),
								'ReverseOrderByClause' => new QQOrderBy($objSortDescending)
						)
				);
			} else {
				try {
					$objNode = $this->ResolveContentItem($mixContent);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		
				$objNewColumn = new QDataGridColumn(
						QApplication::Translate(QConvertNotation::WordsFromCamelCase($objNode->_PropertyName)),
						'<?=' . $objNode->GetDataGridHtml() . '?>'/*,
						array(
								'OrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode()),
								'ReverseOrderByClause' => QQ::OrderBy($objNode->GetDataGridOrderByNode(), false)
						)*/
				);
			}
		
			$objOverrideArray = func_get_args();
			if (count($objOverrideArray) > 1)
				try {
				unset($objOverrideArray[0]);
				$objNewColumn->OverrideAttributes($objOverrideArray);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		
			$this->AddColumn($objNewColumn);
			return $objNewColumn;
		}
		
	}
?>