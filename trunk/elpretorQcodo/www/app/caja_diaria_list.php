<?php
// Load the Qcodo Development Framework
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Movimiento class.  It uses the code-generated
 * MovimientoDataGrid control which has meta-methods to help with
 * easily creating/defining Movimiento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both movimiento_list.php AND
 * movimiento_list.tpl.php out of this Form Drafts directory.
 *
 * @package My Application
 * @subpackage Drafts
 */
class CajaDiariaListForm extends QForm {
	protected $dtgCajaDiaria;
	protected $lblTimbrado;
	protected $lblHonorarios;
	protected $lblGastos;
	protected $lblDeben;
	protected $lblDoy;
	protected $lblOtros;
	protected $lblCaption;

	protected function Form_Run() {
		// Security check for ALLOW_REMOTE_ADMIN
		// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
		QApplication::CheckRemoteAdmin();
	}

	protected function Form_Create() {

		
		$this->lblCaption = new QLabel($this);
		$this->lblCaption->Text = 'Caja diaria del día '.QDateTime::Now(false);
		$this->lblTimbrado = new QLabel($this);
		$this->lblTimbrado->Text = $this->getTotalMovimientoPorId(1);
		$this->lblHonorarios = new QLabel($this);
		$this->lblHonorarios->Text = $this->getTotalMovimientoPorId(2);
		$this->lblGastos = new QLabel($this);
		$this->lblGastos->Text = $this->getTotalMovimientoPorId(3);
		$this->lblDeben = new QLabel($this);
		$this->lblDeben->Text = $this->getTotalMovimientoPorId(4);
		$this->lblDoy = new QLabel($this);
		$this->lblDoy->Text = $this->getTotalMovimientoPorId(5);
		$this->lblOtros = new QLabel($this);
		$this->lblOtros->Text = $this->getTotalMovimientoPorId(6);
		

		
		$this->dtgCajaDiaria = new MovimientoDataGrid($this);
		
		$this->dtgCajaDiaria->CssClass = 'datagrid';
		$this->dtgCajaDiaria->AlternateRowStyle->CssClass = 'alternate';
		
		// Add Pagination (if desired)
		$this->dtgCajaDiaria->Paginator = new QPaginator($this->dtgCajaDiaria);
		$this->dtgCajaDiaria->ItemsPerPage = 20;
		
		// Use the MetaDataGrid functionality to add Columns for this datagrid
		
		
		$this->dtgCajaDiaria->MetaAddColumn('Monto');
		$this->dtgCajaDiaria->AgregarColumna(QQN::Movimiento()->TipoMovimientoObject, 'Tipo de Movimiento');
		$this->dtgCajaDiaria->MetaAddColumn('Observaciones');
		$this->dtgCajaDiaria->DataSource = Movimiento::QueryArray(QQ::Equal(QQN::Movimiento()->Fecha, QDateTime::Now(false)));
		
		
	}

	
	public function  getTotalMovimientoPorId ($id){
		$timbrado = Movimiento::QueryArray(QQ::AndCondition(
					       QQ::Equal(QQN::Movimiento()->Fecha, QDateTime::Now(false)),
						   QQ::Equal(QQN::Movimiento()->TipoMovimientoObject->IdTipoMovimiento, $id))); 
		$retorno = 0;
		foreach ($timbrado as $t){
			$retorno = $retorno + $t->Monto;
		}
		return $retorno;
	}
	
	
	
	
}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// movimiento_list.tpl.php as the included HTML template file
CajaDiariaListForm::Run('CajaDiariaListForm');
?>