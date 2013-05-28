<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Cedulas class.  It uses the code-generated
	 * CedulasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Cedulas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cedulas_edit.php AND
	 * cedulas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class BuscarAbogadosForm extends QForm {
		
		
		protected $txtNombre;
		protected $txtNroAbogado;
		protected $txtApellido;
		protected $txtTelefono;
		protected $datos = array();
		protected $btnBuscar;
		protected $btnLimpiar;
		protected $dtgAbogadoses;
		
		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}
		
		protected function Form_Create() {
			
			$this->txtApellido = new QTextBox($this);
			$this->txtApellido->Name = 'Apellido';
			$this->txtNombre = new QTextBox($this);
			$this->txtNombre->Name = 'Nombre';
			$this->txtNroAbogado = new QTextBox($this);
			$this->txtNroAbogado->Name = 'Número de abogado';
			$this->txtTelefono = new QTextBox($this);
			$this->txtTelefono->Name = 'Telefono';
			
			$this->btnBuscar = new QButton($this);
			$this->btnBuscar->Text = 'Buscar';
			$this->btnBuscar->AddAction(new QClickEvent(), new QAjaxAction('btnBuscar_Click'));
			
			$this->btnLimpiar = new QButton($this);
			$this->btnLimpiar->Text = 'Limpiar';
			$this->btnLimpiar->AddAction(new QClickEvent(), new QAjaxAction('btnLimpiar_Click'));
			
			$this->dtgAbogadoses = new AbogadosDataGrid($this);
			
			// Style the DataGrid (if desired)
			$this->dtgAbogadoses->CssClass = 'datagrid';
			$this->dtgAbogadoses->AlternateRowStyle->CssClass = 'alternate';
			
			// Add Pagination (if desired)
			$this->dtgAbogadoses->Paginator = new QPaginator($this->dtgAbogadoses);
			$this->dtgAbogadoses->ItemsPerPage = 20;
			
			// Use the MetaDataGrid functionality to add Columns for this datagrid
			
			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APP__ . '/abogados_edit.php';
			$this->dtgAbogadoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');
			 
			// Create the Other Columns (note that you can use strings for abogados's properties, or you
			// can traverse down QQN::abogados() to display fields that are down the hierarchy)
			$this->dtgAbogadoses->MetaAddColumn('Nombre');
			$this->dtgAbogadoses->MetaAddColumn('Apellido');
			$this->dtgAbogadoses->MetaAddColumn('Telefono');
			$this->dtgAbogadoses->MetaAddColumn('NroAbogado');
			$this->dtgAbogadoses->MetaAddColumn('Observaciones');
			
		}
		
		protected function btnBuscar_Click($strFormId, $strControlId, $strParameter) {
			if ($this->txtApellido) $this->datos['apellido'] = $this->txtApellido->Text;
			if ($this->txtNombre) $this->datos['nombre'] = $this->txtNombre->Text;
			if ($this->txtTelefono) $this->datos['telefono'] = $this->txtTelefono->Text;
			if ($this->txtNroAbogado) $this->datos['nroAbogado'] = $this->txtNroAbogado->Text;
			$this->dtgAbogadoses->DataSource = $this->generarSQLYBuscar();
		}
		
		protected function btnLimpiar_Click($strFormId, $strControlId, $strParameter) {
			
			$this->txtApellido->Text = null;
			$this->txtNombre->Text = null;
			$this->txtNroAbogado->Text = null;
			$this->txtTelefono->Text = null;
		}
		
		public function generarSQLYBuscar(){
			$objDatabase = Abogados::GetDatabase();
				
			$sql = "SELECT *
			FROM sistema.abogados
			WHERE 1 = 1";
			
			
			if ($this->datos['apellido'] != ''){
				$cond = $this->datos['apellido'];
				$sql .= " AND apellido LIKE '%$cond%'";
			}
			
			if ($this->datos['nombre'] != ''){
				$cond = $this->datos['nombre'];
				$sql .= " AND nombre LIKE '%$cond%'";
			}
			
			if ($this->datos['nroAbogado'] != ''){
				$cond = $this->datos['nroAbogado'];
				$sql .= " AND nro_abogado LIKE '%$cond%'";
			}
			
			if ($this->datos['telefono'] != ''){
				$cond = $this->datos['telefono'];
				$sql .= " AND telefono LIKE '%$cond%'";
			}
			
			
			$objDbResult = $objDatabase->Query($sql);
			return Abogados::InstantiateDbResult($objDbResult);
		}
		
		
		
	}
	
	BuscarAbogadosForm::Run('BuscarAbogadosForm');

?>