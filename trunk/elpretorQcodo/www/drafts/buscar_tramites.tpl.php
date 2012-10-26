<?php require(__INCLUDES__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div id="titleBar">
		<h2>Buscar tr�mites</h2>
	</div>

<div id="formControls">

		<?php $this->lblResponse->Render(); ?>

		<?php $this->lstIdAgenteObject->RenderWithName(); ?>

		<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

		<?php $this->lstIdEstadoObject->RenderWithName(); ?>

		<?php $this->calFechaIngreso->RenderWithName(); ?>

		<?php $this->calFechaSalida->RenderWithName(); ?>

		<?php $this->lstTipoTramiteObject->RenderWithName(); ?>

		<?php $this->calFechaVencimiento->RenderWithName(); ?>

	</div>
	
	<div id="formActions">
	
		<div id="save"><?php $this->btnBuscar->Render(); ?></div>
		<div id="save"><?php $this->btnLimpiar->Render(); ?></div>
	</div>
	
	<?php $this->dtgTramitesAsignadoses->Render(); ?>
	
	
	
	
	
<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
