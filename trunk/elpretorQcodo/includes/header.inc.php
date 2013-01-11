<?php
// This example header.inc.php is intended to be modified for your application.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type"
	content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
<title><?php _p($strPageTitle); ?></title>
<?php } ?>
<style type="text/css">
@import
	url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");
</style>
<link href="/menu_assets/styles.css" rel="stylesheet" type="text/css">

	<!-- 		<div id="header">   -->
	<!-- 		<h1>Sistema de Gestión</h1> -->
	<!-- 		</div> -->
	<div id='cssmenu'>
		<ul>
			<li class='active'><a href='/app/carpeta_tramites.php'><span>Inicio</span>
			</a></li>
			<li class='has-sub'><a href='#'><span>Trámites</span> </a>
				<ul>
					<li class='has-sub'><a href='#'><span>Listados</span> </a>
						<ul>
							<li><a href='/app/tramites_asignados_list.php'><span>Ver todos
										los trámites</span> </a></li>
							<li><a href='/app/tramites_asignados_que_vencen_esta_semana.php'><span>Trámites
										que vencen esta semana</span> </a></li>
							<li><a href='/app/tramites_asignados_en_curso.php'><span>Ver
										trámites en curso</span> </a></li>
						</ul>

						<li><a href='/app/buscar_tramites.php'><span>Buscar trámite</span>
						</a></li>
						<li><a href='/app/tramites_asignados_edit.php'><span>Asignar nuevo
									trámite</span> </a></li>

						<li><a href='/app/carpeta_tramites.php'><span>Carpeta de trámites</span>
						</a></li>
				
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>Sistema</span> </a>
				<ul>
					<li class='has-sub'><a href='#'><span>Agentes</span> </a>
						<ul>
							<li><a href='/app/agentes_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/agentes_edit.php'><span>Agregar</span> </a></li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span>Zonas</span> </a>
						<ul>
							<li><a href='/app/zonas_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/zonas_edit.php'><span>Agregar</span> </a></li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span>Abogados</span> </a>
						<ul>
							<li><a href='/app/abogados_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/abogados_edit.php'><span>Agregar</span> </a></li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span>Modalidades</span> </a>
						<ul>
							<li><a href='/app/modalidades_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/modalidades_edit.php'><span>Agregar</span> </a>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span>Tipo de trámites</span> </a>
						<ul>
							<li><a href='/app/tipo_tramites_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/tipo_tramites_edit.php'><span>Agregar</span> </a>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span>Casilleros</span> </a>
						<ul>
							<li><a href='/app/casilleros_list.php'><span>Ver</span> </a></li>
							<li><a href='/app/casilleros_edit.php'><span>Agregar</span> </a>
							</li>
						</ul>
					</li>

				</ul>
				<li class='has-sub'><a href='#'><span>Caja</span> </a>
					<ul>
						<li><a href='/app/movimiento_list.php'><span>Movimientos</span> </a>
						</li>
						<li><a href='/app/movimiento_edit.php'><span>Agregar movimiento</span>
						</a></li>
						<li><a href='/app/caja_diaria_list.php'><span>Caja diaria</span>
						</a></li>
					</ul>
			</li>
				<li class='has-sub'><a href='#'><span>Declaratorias</span> </a>
					<ul>
						<li><a href='/app/declaratorias_list.php'><span>Ver</span> </a></li>
						<li><a href='/app/declaratorias_edit.php'><span>Agregar</span> </a>
							<li><a href='/app/buscar_declaratorias.php'><span>Buscar</span> </a>
						</li>
					
					</ul>
			</li>
			</li>
			<li class='has-sub'><a href='#'><span>Cédulas</span> </a>
				<ul>
					<li><a href='/app/cedulas_list.php'><span>Ver</span> </a></li>
					<li><a href='/app/cedulas_edit.php'><span>Agregar</span> </a>
						<li><a href='/app/buscar_cedulas.php'><span>Buscar</span> </a>
					</li>
				
				</ul>
			</li>

		</ul>
	</div>

</head>
<body>