<?php
// This is the HTML template include file (.tpl.php) for the cedulas_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = 'Buscar declaratorias';
require(__INCLUDES__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
	<h2>Buscar declaratorias</h2>
</div>

<div id="dashboard">
	<div id="left5">
		<div id="formControls">

			<?php $this->calFechaInicio->RenderWithName(); ?>

			<?php $this->lstEstadoObject->RenderWithName(); ?>

			<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

			<?php $this->txtContacto->RenderWithName(); ?>

			<?php $this->txtObservaciones->RenderWithName(); ?>

			<?php $this->txtAutos->RenderWithName(); ?>

			<?php $this->calFechaFin->RenderWithName(); ?>
			
			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>
		</div>
	</div>
	<div id="right4">
	<?php $this->dtgDeclaratoriases->Render(); ?></div>
</div>





<?php $this->RenderEnd() ?>

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>