<?php
	class Usuario{
		private $id;
		private $nome;

		function __construct($nome,$id = null) {
			$this->nome = $nome;
			$this->id = $id;
		}

		public function get_id() {
			return $this->id;
		}

		public function get_nome() {
			return $this->nome;
		}
	}
?>