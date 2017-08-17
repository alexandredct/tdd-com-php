<?php
	class Avaliador {

		public $maior_valor = -INF;
		public $menor_valor = INF;

		public function avalia(Leilao $leilao) {
			foreach ($leilao->get_lances() as $lance) {
				if ($lance->get_valor() > $this->maior_valor) {
					$this->maior_valor = $lance->get_valor();
				}
				if ($lance->get_valor() < $this->menor_valor) {
					$this->menor_valor = $lance->get_valor();
				}
			}
		}

		public function get_maior_lance() {
			return $this->maior_valor;
		}

		public function get_menor_lance() {
			return $this->menor_valor;
		}
	}
?>