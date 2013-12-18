<?php
$conexion =  mysqli_connect('localhost', 'ejemplo', 'ejemplo', 'ejemplo'); 
$ciclos = "SELECT ciclo_escolar FROM ciclos ORDER BY ciclo_escolar asc";
$res_ciclo= mysqli_query($conexion, $ciclos);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<select name="select" id="txtCiclo">
	<?php
	while ($result = mysqli_fetch_assoc($res_ciclo)){
		echo "<option value='".$result['ciclo_escolar']."'> ".$result['ciclo_escolar']."</option>";
	}
	?>
</select>
</body>
</html>