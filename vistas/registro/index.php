<?php
require '../../estructura/header.php';
include '../../estructura/nav.php';
?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="stylesheet" href="estilos.css">
 
</head>
<body>
	<center>
		<form>
			<label>Registro</label><br>
			<hr>
			<label>Nombre</label>
			<input type="" name=""><br>
			<label>Apellido</label>
			<input type="" name=""><br>
			<label>Correo</label>
			<input type="" name=""><br>
			<label>Contraseña</label>
			<input type="" name=""><br>
			<button class="btn btn-primary btn-lg" type="button" onclick="login()">Crear cuenta</button><br>
			<button class="btn btn-secondary btn-lg" type="button" onclick="window.location.href='/vistas/contraseña/index.php'">Olvidé mi contraseña</button>

		</form>
	</center>
</body>
</html>