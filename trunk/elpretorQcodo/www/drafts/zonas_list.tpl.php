<?php
	// This is the HTML template include file (.tpl.php) for the zonas_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Zonases') . ' - ' . QApplication::Translate('List All');
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2>Listado de zonas</h2>
	</div>

	<?php $this->dtgZonases->Render(); ?>

	<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?>/zonas_edit.php"><?php _t('Create a New'); ?> <?php _t('Zonas');?></a>
	</p>

	<?php $this->RenderEnd() ?>
	
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>