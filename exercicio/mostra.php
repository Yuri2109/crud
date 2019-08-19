<?php 

	include 'conexao.php';

	$consulta = "SELECT * FROM cadastro";

	foreach ($conexao ->query($consulta) as $linha) {
		echo "RM:{$linha['RM']} <br>";
		echo "NOME:{$linha['NOME']} <br>";
		echo "IDADE:{$linha['IDADE']} <br>";
	}

 ?>