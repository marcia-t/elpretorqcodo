<?php 
$strPageTitle = 'Carpeta de tr�mites';
require(__INCLUDES__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>


	<div id="dashboard">
		<div id="left4">
			<p><strong> Seleccione el agente y la zona a consultar </strong></p>
			<p><?php $this->lblResponse->Render() ?></p>
			<p>Agente: <?php $this->lstAgentes->Render('FontSize=10px','Width=100px'); ?></p>
			<p>Zona: <?php $this->lstZonas->Render('FontSize=10px','Width=100px'); ?></p>
			<p>Fecha de ingreso:</p>
			<p><?php $this->calFechaIngreso->Render() ?></p>
			<p>Fecha de salida:</p>
			<p><?php $this->calFechaSalida->Render() ?></p>
			<p><?php $this->chkFinalizados->Render() ?> Tr�mites finalizados</p>
			<p><?php $this->btnMostrar->Render() ?></p>
		</div>
		<div id="right">
			<?php $this->dtgTramitesAsignadoses->Render(); ?>
		</div>
	</div>

<?php $this->RenderEnd(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>