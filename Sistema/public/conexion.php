<?php
function conectar()
{
	$user = 'postgres';
	$passwd = '123456';
	$db = 'postgrado';
	$port = 5432;
	$host = 'localhost';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
	
}

function desconectar()
{
	pg_close();
}
?>