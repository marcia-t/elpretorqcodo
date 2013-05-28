<?php
	// This is the HTML template include file (.tpl.php) for cedulasEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdCedulas->RenderWithName(); ?>

		<?php $_CONTROL->txtLocalidad->RenderWithName(); ?>

		<?php $_CONTROL->txtAutos->RenderWithName(); ?>

		<?php $_CONTROL->txtDireccion->RenderWithName(); ?>

		<?php $_CONTROL->lstAgenteObject->RenderWithName(); ?>

		<?php $_CONTROL->calFechaIngreso->RenderWithName(); ?>

		<?php $_CONTROL->calFechaSalida->RenderWithName(); ?>

		<?php $_CONTROL->calFechaFin->RenderWithName(); ?>

		<?php $_CONTROL->calAudiencia->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

		<?php $_CONTROL->lstEstadoObject->RenderWithName(); ?>

		<?php $_CONTROL->txtHonorarios->RenderWithName(); ?>

		<?php $_CONTROL->txtTimbrado->RenderWithName(); ?>

		<?php $_CONTROL->lstNroAbogadoObject->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
