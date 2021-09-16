<?php
	$tipo=$_POST["tipo"];
	$ci=$_POST["ci"];
	$nombre=$_POST["nombre"];
	$paterno=$_POST["paterno"];

	include "conexion.inc.php";
	if ($_POST["tipo"]!="editar")
	{
		$sql ="insert into alumno(ci,nombre, paterno) ";
		$sql.="values ('$ci','$nombre','$paterno')";
	}
	else
	{
		$sql ="update alumno set nombre='$nombre', paterno='$paterno' ";
		$sql.="where ci='$ci'";
	}
	mysqli_query($conn, $sql);
	header("Location: index.php");
?>