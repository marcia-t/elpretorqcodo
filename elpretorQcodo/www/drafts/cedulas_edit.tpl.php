<?php
	// This is the HTML template include file (.tpl.php) for the cedulas_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Cedulas') . ' - ' . $this->mctCedulas->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctCedulas->TitleVerb); ?></h2>
		<h1><?php _t('Cedulas')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblIdCedulas->RenderWithName(); ?>

		<?php $this->txtLocalidad->RenderWithName(); ?>

		<?php $this->txtAutos->RenderWithName(); ?>

		<?php $this->txtDireccion->RenderWithName(); ?>

		<?php $this->lstAgenteObject->RenderWithName(); ?>

		<?php $this->calFechaIngreso->RenderWithName(); ?>

		<?php $this->calFechaSalida->RenderWithName(); ?>

		<?php $this->calFechaFin->RenderWithName(); ?>

		<?php $this->calAudiencia->RenderWithName(); ?>

		<?php $this->txtObservaciones->RenderWithName(); ?>

		<?php $this->lstEstadoObject->RenderWithName(); ?>

		<?php $this->txtHonorarios->RenderWithName(); ?>

		<?php $this->txtTimbrado->RenderWithName(); ?>

		<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>