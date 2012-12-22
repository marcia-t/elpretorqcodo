<?php 
$strPageTitle = 'Buscar trámites';
require(__INCLUDES__ . '/headervisita.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div id="titleBar">
	<h2>Buscar trámites</h2>
</div>
<div id="dashboard">
	<div id="left3" >
		<div id="formControls">

		
			<?php $this->lblResponse->Render(); ?>


			<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

			<?php $this->lstIdEstadoObject->RenderWithName(); ?>

			<?php $this->calFechaIngreso->RenderWithName(); ?>


			<?php $this->txtAbogado->RenderWithName(); ?>

			
			<?php $this->txtAutos->RenderWithName(); ?>


			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>

		</div>
	</div>
	<div id="right"></div>
</div>
<?php $this->dtgTramitesAsignadoses->Render(); ?>





<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
