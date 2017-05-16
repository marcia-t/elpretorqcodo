<?php
// This is the HTML template include file (.tpl.php) for the cedulas_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = 'Buscar cédulas';
require(__INCLUDES__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
	<h2>Buscar cédulas</h2>
</div>

<div id="dashboard">
	<div id="left5">
		<div id="formControls">

			<?php $this->txtLocalidad->RenderWithName(); ?>

			<?php $this->txtAutos->RenderWithName(); ?>

			<?php $this->txtDireccion->RenderWithName(); ?>

			<?php $this->lstNroAbogado->RenderWithName(); ?>
			
			<?php $this->lstAgenteObject->RenderWithName(); ?>

			<?php $this->calFechaIngreso->RenderWithName(); ?>

			<?php $this->calFechaSalida->RenderWithName(); ?>

			<?php $this->calFechaFin->RenderWithName(); ?>

			<?php $this->calAudiencia->RenderWithName(); ?>

			<?php $this->txtObservaciones->RenderWithName(); ?>

			<?php $this->lstEstadoObject->RenderWithName(); ?>
			
			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>
		</div>
	</div>
	<div id="right"><?php $this->dtgCedulases->Render(); ?></div>

</div>





<?php $this->RenderEnd() ?>

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>