<?php
	// This is the HTML template include file (.tpl.php) for the tramites_asignados_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Trámites asignados';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2>Crear/editar un trámite</h2>
	</div>

	<div id="formControls">
		<?php $this->lblIdTramiteAsignado->RenderWithName(); ?>

		<?php $this->lstIdAgenteObject->RenderWithName(); ?>

		<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

		<?php $this->lstIdEstadoObject->RenderWithName(); ?>

		<?php $this->calFechaIngreso->RenderWithName(); ?>

		<?php $this->calFechaSalida->RenderWithName(); ?>

		<?php $this->lstTipoTramiteObject->RenderWithName(); ?>

		<?php $this->txtAutos->RenderWithName(); ?>

		<?php $this->calFechaVencimiento->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>