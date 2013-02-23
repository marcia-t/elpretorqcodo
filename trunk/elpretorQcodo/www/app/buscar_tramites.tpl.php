<?php 
$strPageTitle = 'Buscar trámites';
require(__INCLUDES__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div id="titleBar">
	<h2>Buscar trámites</h2>
</div>
<div id="dashboard">
	<div id="left2">
		<div id="formControls">

		
			<?php $this->lblResponse->Render(); ?>

			<?php $this->lstIdAgenteObject->RenderWithName(); ?>

			<?php $this->lstNroAbogadoObject->RenderWithName(); ?>

			<?php $this->lstIdEstadoObject->RenderWithName(); ?>

			<?php $this->calFechaIngreso->RenderWithName(); ?>

			<?php $this->calFechaSalida->RenderWithName(); ?>

			<?php $this->lstTipoTramiteObject->RenderWithName(); ?>

			<?php $this->calFechaVencimiento->RenderWithName(); ?>
			
			<?php $this->txtAutos->RenderWithName(); ?>


			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>

		</div>
	</div>
	<div id="right3"><?php $this->dtgTramitesAsignadoses->Render(); ?></div>
</div>






<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
