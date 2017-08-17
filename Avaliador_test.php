<?php
	require "Usuario.php";
	require "Lance.php";
	require "Leilao.php";
	require "Avaliador.php";

	class Avaliador_test extends PHPUnit_Framework_TestCase{
		public function test_aceitar_lances_decrescentes() {
			$leilao = new Leilao("Produto 1");

			$renan = new Usuario("Renan");
			$caio = new Usuario("Caio");
			$felipe = new Usuario("Felipe");

			$leilao->propoe(new Lance ($renan, 100));
			$leilao->propoe(new Lance ($caio, 350));
			$leilao->propoe(new Lance ($felipe, 250));

			$leiloeiro = new Avaliador();
			$leiloeiro->avalia($leilao);

			$maior_esperado = 350;
			$menor_esperado = 100;

			$this->assertEquals($maior_esperado, $leiloeiro->get_maior_lance());
			$this->assertEquals($menor_esperado, $leiloeiro->get_menor_lance());
		}
	}
	
?>