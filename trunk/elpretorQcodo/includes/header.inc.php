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
<!-- 		<h1>Sistema de Gestión</h1> -->
<!-- 		</div> -->
		<div id='cssmenu'>
<ul>
   <li class='active'><a href='http://qcodo/drafts/carpeta_tramites.php'><span>Inicio</span></a></li>
   <li class='active'><a href='#'><span>Trámites</span></a>
      <ul>
         <li><a href='http://qcodo/drafts/tramites_asignados_list.php'><span>Ver todos los trámites</span></a></li>
         <li><a href='http://qcodo/drafts/buscar_tramites.php'><span>Buscar trámite</span></a></li>
         <li><a href='http://qcodo/drafts/tramites_asignados_que_vencen_esta_semana.php'><span>Trámites que vencen esta semana</span></a></li>
         <li><a href='http://qcodo/drafts/tramites_asignados_edit.php'><span>Asignar nuevo trámite</span></a></li>
         <li><a href='http://qcodo/drafts/tipo_tramites_list.php'><span>Ver tipos de trámite</span></a></li>
         <li><a href='http://qcodo/drafts/tipo_tramites_edit.php'><span>Crear un nuevo tipo de trámite</span></a></li>
         <li><a href='http://qcodo/drafts/tramites_asignados_en_curso.php'><span>Ver trámites en curso</span></a></li>
      </ul>
   </li>
   <li class='active '><a href='#'><span>Sistema</span></a>
 	  <ul>
         <li><a href='http://qcodo/drafts/agentes_list.php'><span>Ver agentes</span></a></li>
         <li><a href='http://qcodo/drafts/agentes_edit.php'><span>Agregar nuevo agente</span></a></li>
         <li><a href='http://qcodo/drafts/zonas_list.php'><span>Ver zonas</span></a></li>
         <li><a href='http://qcodo/drafts/zonas_edit.php'><span>Agregar una nueva zona</span></a></li>
         <li><a href='http://qcodo/drafts/abogados_list.php'><span>Ver abogados</span></a></li>
         <li><a href='http://qcodo/drafts/abogados_edit.php'><span>Agregar un nuevo abogado</span></a></li>
         <li><a href='http://qcodo/drafts/modalidades_list.php'><span>Ver modalidades</span></a></li>
         <li><a href='http://qcodo/drafts/modalidades_edit.php'><span>Agregar una nueva modalidad</span></a></li>
          <li><a href='http://qcodo/drafts/carpeta_tramites.php'><span>Carpeta de trámites</span></a></li>
      </ul>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>
	</head><body> 
