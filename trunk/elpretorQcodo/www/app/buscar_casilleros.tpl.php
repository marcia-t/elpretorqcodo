<?php 
$strPageTitle = 'Buscar casilleros';
require(__INCLUDES__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div id="titleBar">
	<h2>Buscar casilleros</h2>
</div>
<div id="dashboard">
	<div id="left5">
		<div id="formControls">

		
			<?php $this->txtNroCasillero->RenderWithName(); ?>

			<?php $this->txtTitular->RenderWithName(); ?>
			
			<?php $this->txtObservacion->RenderWithName(); ?>


			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>

		</div>
	</div>
	<div id="right"></div>
</div>
<?php $this->dtgCasilleros->Render(); ?>





<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
