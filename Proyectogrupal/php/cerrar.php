<?php
	session_start();
	include "../conexion.php";
	unset($_SESSION['Usuario']);

	$re=mysql_query("DELETE FROM usuarios");

	header("Location: ../php/registroUsuarios.php");
?>