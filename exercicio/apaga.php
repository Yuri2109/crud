<?php 
	include 'conexao.php';
	$rm = 2;
	$sql = "DELETE FROM cadastro WHERE rm = '$rm'";
		$resultado = $conexao->prepare($sql);
		$resultado->execute();
?>