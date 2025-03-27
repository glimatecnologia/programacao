<?php
	$servidor	= "localhost";
	$usuario	= "estoque";
	$senha		= "estoque";
	$banco		="controle_estoque";
	$conexao 	=mysql_connect($servidor, $usuario, $senha) or die (mysql_error());
	$banco		= mysql_select_db($banco, $conexao) or die(mysql_error());
	//echo 	="sucesso!"
?>
