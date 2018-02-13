<!DOCTYPE html>
<html>
<head>
	<title>formularios clase 1</title>
</head>
<body>

<center>
	<h1>manejo de formularios</h1>
</center>
<h5>html form</h5>
<form method="POST" action="graba.php">
	<input type="text" name="nombre1" placeholder="Ingrese su nombre">
	<br>
	<input type="text" name="apellido" placeholder="Ingrese su apellido">
	<br>
	<input type="number" name="edad" min="0" max="5" placeholder="Ingrese su edad">
	<br>
	<input type="email" name="email" placeholder="Ingrese su E-mail">
	<br>
	<select name="genero">
		<option value="">seleccione</option>
		<option value="F">Femenino</option>
		<option value="M">Masculino</option>
	</select>
	<br>
	<input type="radio" name="semestre" checked value="1">1
	<input type="radio" disabled="" name="semestre"  value="2">2
	<input type="radio" name="semestre" value="3" >3
	<br>
	<input type="checkbox" checked name="deporte">Deporte
	<input type="checkbox" name="cine">Cine
	<input type="checkbox" name="musica">Musica
	<br>
	<textarea placeholder="Observaciones" rows="4" cols="30"></textarea>
	<br>
	<input type="submit" name="enviar" value="Grabar">
	<input type="reset" name="cancela" value="Cancelar">
</form>


</body>
</html>