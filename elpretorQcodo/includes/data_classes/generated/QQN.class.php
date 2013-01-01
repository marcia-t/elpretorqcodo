<?php
	class QQN {
		/**
		 * @return QQNodeAbogados
		 */
		static public function Abogados() {
			return new QQNodeAbogados('abogados', null, null);
		}
		/**
		 * @return QQNodeAgentes
		 */
		static public function Agentes() {
			return new QQNodeAgentes('agentes', null, null);
		}
		/**
		 * @return QQNodeCasilleros
		 */
		static public function Casilleros() {
			return new QQNodeCasilleros('casilleros', null, null);
		}
		/**
		 * @return QQNodeCedulas
		 */
		static public function Cedulas() {
			return new QQNodeCedulas('cedulas', null, null);
		}
		/**
		 * @return QQNodeDeclaratorias
		 */
		static public function Declaratorias() {
			return new QQNodeDeclaratorias('declaratorias', null, null);
		}
		/**
		 * @return QQNodeEstadoDeclaratoria
		 */
		static public function EstadoDeclaratoria() {
			return new QQNodeEstadoDeclaratoria('estado_declaratoria', null, null);
		}
		/**
		 * @return QQNodeEstados
		 */
		static public function Estados() {
			return new QQNodeEstados('estados', null, null);
		}
		/**
		 * @return QQNodeModalidades
		 */
		static public function Modalidades() {
			return new QQNodeModalidades('modalidades', null, null);
		}
		/**
		 * @return QQNodeTipoTramites
		 */
		static public function TipoTramites() {
			return new QQNodeTipoTramites('tipo_tramites', null, null);
		}
		/**
		 * @return QQNodeTramitesAsignados
		 */
		static public function TramitesAsignados() {
			return new QQNodeTramitesAsignados('tramites_asignados', null, null);
		}
		/**
		 * @return QQNodeZonas
		 */
		static public function Zonas() {
			return new QQNodeZonas('zonas', null, null);
		}
	}
?>