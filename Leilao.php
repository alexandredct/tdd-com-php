<?php
	class Leilao {
		private $descricao;
		private $lances;

		function __construct ($descricao) {
			$this->descricao = $descricao;
			$this->lances = array();			
		}

		public function propoe (Lance $lance) {
			$this->lances[] = $lance;
		}

		public function get_descricao() {
			return $this->descricao;
		}

		public function get_lances() {
			return $this->lances;
		}
	}
?>