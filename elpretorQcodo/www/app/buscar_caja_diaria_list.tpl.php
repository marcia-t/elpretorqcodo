<?php
// This is the HTML template include file (.tpl.php) for the cedulas_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = 'Caja diaria';
require(__INCLUDES__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
	<h2>Caja</h2>
</div>
<div id="dashboard">
	<div id="left6">
	<?php $this->calFecha->Render(); ?>
	<?php $this->btnBuscar->Render(); ?>
		<table class="datagrid">
			<caption>
				<?php $this->lblCaption->Render(); ?>
			</caption>
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
		
	</div>
	<div id="right2">
		<?php $this->dtgCajaDiaria->Render(); ?>

		
	</div>
</div>





<?php $this->RenderEnd() ?>

<?php require(__INCLUDES__ . '/footer.inc.php'); ?>