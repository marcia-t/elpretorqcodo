<?php
// This is the HTML template include file (.tpl.php) for the cedulas_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = 'Caja';
require(__INCLUDES__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
	<h2>Caja</h2>
</div>

<table class="datagrid">
	<caption><?php $this->lblCaption->Render(); ?></caption>
	<thead>
		<th>Timbrado</th>
		<th>Honorarios</th>
		<th>Gastos</th>
		<th>Deben</th>
		<th>Doy</th>
		<th>Otros</th>
	</thead>
	<tr>
		<td><?php $this->lblTimbrado->Render(); ?></td>
		<td><?php $this->lblHonorarios->Render(); ?></td>
		<td><?php $this->lblGastos->Render(); ?></td>
		<td><?php $this->lblDeben->Render(); ?></td>
		<td><?php $this->lblDoy->Render(); ?></td>
		<td><?php $this->lblOtros->Render(); ?></td>
	</tr>
</table>


<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APP__) ?>/movimiento_edit.php"><?php _t('Create a New'); ?> <?php _t('Movimiento');?></a>
	</p>



<?php $this->RenderEnd() ?>

<?php require(__INCLUDES__ . '/footer.inc.php'); ?>