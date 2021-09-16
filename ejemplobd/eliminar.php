<?php
	$ci=$_GET["ci"];
	$sql ="delete from alumno ";
	$sql.="where ci='$ci'";
	include "conexion.inc.php";
	mysqli_query($conn, $sql);
	header("Location: index.php");
?>