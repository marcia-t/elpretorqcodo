<?php
	// This is the HTML template include file (.tpl.php) for the tramites_asignados_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Trámites ingresaron hoy';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
			<h2>Listado de trámites que ingresaron hoy</h2>
	</div>

	<?php $this->dtgTramitesAsignadoses->Render(); ?>
<?php $this->lblResponse->Render(); ?>
	

	<?php $this->RenderEnd() ?>
	
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>