<?php 
$strPageTitle = 'Buscar abogados';
require(__INCLUDES__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div id="titleBar">
	<h2>Buscar abogados</h2>
</div>
<div id="dashboard">
	<div id="left5">
		<div id="formControls">

		
			<?php $this->txtNombre->RenderWithName(); ?>

			<?php $this->txtApellido->RenderWithName(); ?>
			
			<?php $this->txtNroAbogado->RenderWithName(); ?>

			<?php $this->txtTelefono->RenderWithName(); ?>
			
			<div id="save">
				<?php $this->btnBuscar->Render(); ?>
				<?php $this->btnLimpiar->Render(); ?>
			</div>

		</div>
	</div>
	<div id="right3"><?php $this->dtgAbogadoses->Render(); ?></div>
</div>






<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>