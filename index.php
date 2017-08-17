<?php
	require "Usuario.php";
	require "Lance.php";
	require "Leilao.php";
	require "Avaliador.php";

	$leilao = new Leilao("Produto 1");

	$renan = new Usuario("Renan");
	$caio = new Usuario("Caio");
	$felipe = new Usuario("Felipe");

	$leilao->propoe(new Lance ($renan, 400));
	$leilao->propoe(new Lance ($caio, 350));
	$leilao->propoe(new Lance ($felipe, 250));

	$leiloeiro = new Avaliador();
	$leiloeiro->avalia($leilao);

	var_dump($leiloeiro->get_maior_lance());
	var_dump($leiloeiro->get_menor_lance());
?>