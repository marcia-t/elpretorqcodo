<?php
	// This is the HTML template include file (.tpl.php) for the casilleros_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Casilleros') . ' - ' . $this->mctCasilleros->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctCasilleros->TitleVerb); ?></h2>
		<h1><?php _t('Casilleros')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblIdCasillero->RenderWithName(); ?>

		<?php $this->txtNroCasillero->RenderWithName(); ?>

		<?php $this->txtTitular->RenderWithName(); ?>

		<?php $this->txtObservacion->RenderWithName(); ?>

		<?php $this->txtActivo->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>