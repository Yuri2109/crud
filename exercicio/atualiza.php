<?php 
	include'conexao.php';
	$rm = 6;
	$nome = 'Yuri Leal';
	$idade = 19;
	$sql = "UPDATE cadastro SET nome = '$nome',idade = '$idade' WHERE rm = '$rm'";
		$resultado = $conexao->prepare($sql);
		$resultado->execute();
 ?>