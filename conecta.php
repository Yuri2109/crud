<?php  
	

 	$host  = "localhost";
 	$usuario = "root";
 	$senha = "";
 	$banco = "etecmcm";

 	$conexao = new MySQLi("$host","$usuario","$senha","$banco");
 	if ($conexao->connect_error) {
 		echo "Falha na conexão!";
 	}
 	/*
 	else {
 		echo "Conexão bem sucedida";
 	}
	*/

?>