<?php
	// This is the HTML template include file (.tpl.php) for declaratoriasEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdDeclaratoria->RenderWithName(); ?>

		<?php $_CONTROL->calFechaInicio->RenderWithName(); ?>

		<?php $_CONTROL->lstEstadoObject->RenderWithName(); ?>

		<?php $_CONTROL->txtHonorarios->RenderWithName(); ?>

		<?php $_CONTROL->txtTimbrado->RenderWithName(); ?>

		<?php $_CONTROL->lstNroAbogadoObject->RenderWithName(); ?>

		<?php $_CONTROL->txtContacto->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

		<?php $_CONTROL->txtAutos->RenderWithName(); ?>

		<?php $_CONTROL->calFechaFin->RenderWithName(); ?>

		<?php $_CONTROL->txtObservada->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
