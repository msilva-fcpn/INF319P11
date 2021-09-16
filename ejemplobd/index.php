<html>
	<head>
		<title>Tabla BD</title>
		<style>
table {
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
  background: white;
}

th, td {
  border: 1px solid lightgray;
  padding: 8px; 
  text-align: left;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  
  &:first-child {
    width: 90px;
  }
  &:last-child {
    text-align: right;
    width: 60px;
  }
}

th {
  background: teal;
  color: white;
  text-transform: uppercase;
  font-weight: normal;
}

table tr:first-child td {
  border-top: none;
}

.container {
  background: tan;
  width: 100%;
  padding: 24px;
  height: 300px;
}

.tWrap {
  height: 100%;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  
  &__head {
    flex: 0 0 37px; // for Safari and IE
    overflow-y: scroll;
  }
  
  &__body {
    overflow-y: scroll;
  }
}
		</style>
	</head>
<body>
	<?php
	include "conexion.inc.php";
	$sql="select * from alumno";
	$resultado=mysqli_query($conn, $sql);
	//print_r($resultado);
	?>
	<table border="1">
		<thead>
		<tr>
			<th>Carnet</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Operaciones</th>
		</tr>
		</thead>
		<tbody>
		<?php
			//$fila=mysqli_fetch_array($resultado)
			while($fila=mysqli_fetch_array($resultado)) {
				//print_r($fila);
				//echo $fila["nombre"]."<br/>";
				echo "<tr>";
				echo "<td>".$fila["ci"]."</td>";
				echo "<td>$fila[nombre]</td>";
				echo "<td>".$fila['paterno']."</td>";
				echo "<td>";
				echo "<a href='editar.php?tipo=editar&ci=$fila[ci]'>Editar</a>";
				echo " - ";
				echo "<a href='eliminar.php?ci=$fila[ci]'>Eliminar</a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
		</tbody>
	</table>
	<form action="editar.php" method="GET">
		<input type="hidden" name="tipo" value="nuevo"/>
		<input type="submit" value="Adicionar"/>
	</form>
</body>
</html>