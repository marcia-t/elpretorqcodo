<?php
	// This is the HTML template include file (.tpl.php) for the tramites_asignados_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Trámites asignados en curso';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
			<h2><?php _t('Listado de trámites en curso'); ?></h2>
	</div>

	<?php $this->dtgTramitesAsignadoses->Render(); ?>

	

	<?php $this->RenderEnd() ?>
	
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>