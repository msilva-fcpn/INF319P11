<?php
	$tipo=$_GET["tipo"];
	if ($_GET["tipo"]=="editar")
	{
		include "conexion.inc.php";
		$sql="select * from alumno where ci=".$_GET["ci"];
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$ci=$fila["ci"];
		$nombre=$fila["nombre"];
		$paterno=$fila["paterno"];
	}
	else
	{
		$ci="";
		$nombre="";
		$paterno="";
	}
?>

	<form method="POST" action="editar_guardar.php">
		<input type="hidden" name="tipo" value="<?php echo $tipo;?>"/>
		Carnet<input type="text" name="ci" value="<?php echo $ci;?>"/><br/>
		Nombre<input type="text" name="nombre" value="<?php echo $nombre;?>"/><br/>
		Paterno<input type="text" name="paterno" value="<?php echo $paterno;?>"/><br/>
		<input type="submit" name="Aceptar" value="Aceptar"/>
		<input type="submit" name="Cancelar" value="Cancelar"/>
	</form>