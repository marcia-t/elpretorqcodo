<?php
	// This example header.inc.php is intended to be modified for your application.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
		<title><?php _p($strPageTitle); ?></title>
<?php } ?>
		<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
		<link href="/menu_assets/styles.css" rel="stylesheet" type="text/css">
		
<!-- 		<div id="header">   -->
<!-- 		<h1>Sistema de Gesti�n</h1> -->
<!-- 		</div> -->
		<div id='cssmenu'>
<ul>
   <li class='active'><a href='/app/buscar_tramites_visita.php'><span>Inicio</span></a></li>
</ul>
</div>
</head><body> 
