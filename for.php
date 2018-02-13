<!DOCTYPE html>
<html>
<head>
	<title>formularios clase 2</title>
</head>
<body>

<center>
	<h1>Tablas de multiplicar</h1>
</center>
<form method="POST" action=" ">
<input type="number" name="num" placeholder="Ingrese un numero">
	<br>
	<select name="opcion">
		<option value="">Repetir</option>
		<option value="S">Si</option>
		<option value="N">No</option>
	</select>
	<br>

<br>
	<input type="submit" name="enviar" value="Grabar">
	<input type="reset" name="cancela" value="Cancelar">
<br>
</form>
	
</body>
</html>

<?php
$option=$_POST['opcion'];
$num=$_POST['num'];
	
	while($option == 'S'){
		for($i=1; $i<=10; $i++){
			echo $num." x ".$i."=".$i*$num."<br>";
		}
		exit;	
	}


 

