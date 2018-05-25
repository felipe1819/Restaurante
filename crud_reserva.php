<?php

include_once 'db.php';

if(isset($_POST['save']))
{

    $nome = $MySQLiconn->real_escape_string($_POST['nome']);
    $q_pessoas = $MySQLiconn->real_escape_string($_POST['q_pessoas']);
	$horario = $MySQLiconn->real_escape_string($_POST['horario']);
	$data = $MySQLiconn->real_escape_string($_POST['data']);
	$telefone = $MySQLiconn->real_escape_string($_POST['telefone']);


	$SQL = $MySQLiconn->query("INSERT INTO reserva(nome,q_pessoas,horario,data,telefone) VALUES('$nome','$q_pessoas','$horario','$data','$telefone')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
}

?>