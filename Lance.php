<?php
	class Lance {
		private $usuario;
		private $valor;

		function __construct (Usuario $usuario,$valor) {
			$this->usuario = $usuario;
			$this->valor = $valor;
		}

		public function get_usuario() {
			return $this->Usuario;
		}

		public function get_valor() {
			return $this->valor;
		}
	}
?>