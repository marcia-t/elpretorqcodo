<?php
	// This is the HTML template include file (.tpl.php) for the tipo_tramites_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Tipo de trámites';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2>Crear nuevo tipo de trámite</h2>
	</div>

	<div id="formControls">
		

		<?php $this->txtNombre->RenderWithName(); ?>

		<?php $this->txtTimbrado->RenderWithName(); ?>

		<?php $this->txtHonorario->RenderWithName(); ?>

		<?php $this->txtOtrosCostos->RenderWithName(); ?>

		<?php $this->txtObservaciones->RenderWithName(); ?>

		<?php $this->lstIdModalidadObject->RenderWithName(); ?>

		<?php $this->lstIdZonaObject->RenderWithName(); ?>

		

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>