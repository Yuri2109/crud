<?php 

	include 'conexao.php';
	$nome = "Joao";
	$idade = 17;

	$consulta = $conexao->prepare("INSERT INTO cadastro (nome,idade) VALUES('$nome','$idade')");

	$consulta->execute();

 ?>