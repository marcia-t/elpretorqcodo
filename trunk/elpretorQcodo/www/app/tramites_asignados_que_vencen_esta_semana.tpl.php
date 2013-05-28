<?php
	// This is the HTML template include file (.tpl.php) for the tramites_asignados_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Tr�mites que vencen esta semana';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
			<h2><?php _t('Listado de tr�mites que vencen esta semana.'); ?></h2>
	</div>
	<div id="titleBar">
			<h2><?php _t('Tr�mites.'); ?></h2>
			<?php $this->dtgTramitesAsignadoses->Render(); ?>
	</div>
	
	<div id="titleBar">
			<h2><?php _t('C�dulas.'); ?></h2>
			<?php $this->dtgCedulases->Render(); ?>
	</div>
	

	<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APP__) ?>/tramites_asignados_edit.php">Asignar nuevo tr�mite</a>
	</p>
	<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APP__) ?>/cedulas_edit.php">Asignar nueva c�dula</a>
	</p>

	<?php $this->RenderEnd() ?>
	
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>