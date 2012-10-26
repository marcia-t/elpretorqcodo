<?php
	// This is the HTML template include file (.tpl.php) for the abogados_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Abogados') . ' - ' . $this->mctAbogados->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2>Agregar abogado</h2>
	</div>

	<div id="formControls">
		

		<?php $this->txtNombre->RenderWithName(); ?>

		<?php $this->txtApellido->RenderWithName(); ?>

		<?php $this->txtTelefono->RenderWithName(); ?>

		<?php $this->txtNroAbogado->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>