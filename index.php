<?php
$conexion = new mysqli('localhost', 'ejemplo', 'ejemplo', 'ejemplo');
$laconsulta = "SELECT id, ciclo_escolar FROM ciclos";
$elquery = $conexion->query($laconsulta);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select name="select">
	<?php
	while ($resultado = $elquery->fetch_assoc()){
		echo "<option value='".$resultado['id']."'>".$resultado['ciclo_escolar']."</option>";
	}
	?>
</select>
</body>
</html>