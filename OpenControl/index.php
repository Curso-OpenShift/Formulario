<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	
	<link href='https://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="envio.php">
	<link rel="stylesheet" type="text/css" href="conexion.php">

	<style type="text/css">

	* {
		margin:0px;
		padding: 0px;
	}

	form
	{
		background: #333333;
		width: 360px;
		border:1px solid #4e4d4d;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		box-shadow: inset 0 0 10px #000;
		margin: 50px auto;
	}

	form h1
	{
		text-align: center;
		color :#fff;
		font-weight: normal;
		font-size: 40pt;
		margin:30px 0px;
		font-family: 'Pinyon Script', cursive;
	}

	form input
	{
		width: 280px;
		height: 35px;
		padding: 0px 10px;
		margin: 10px 30px; 
		color: #6d6d6d;
		text-align: center;
	}

	form button
	{
		background-color: #286548;
		width: 135px;
		margin: 20px 0px 30px 30px;
		height: 50px;
		border:1px solid#232323;
		color: #fff;
		box-shadow: 0px 2px 0px #000;
		-moz-box-shadow: 0px 2px 0px #000;
		-webkit-box-shadow: 0px 2px 0px #000;
		border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
	}

	button:hover
	{
		background: #2897F7;
	}
	button:active
	{
		background: #2a2828;
	}


	</style>

</head>
<body>

<form action="envio.php" method="POST">
	
	<h1>Formulario</h1>
	<br>
	Nombre:<br>
	<input type="text" name="nombre" placeholder="Ingresa tu nombre">
	<br>
	Apellido:<br>
	<input type="text" name="apellido" placeholder="Ingresa tu apellido">
	<br>
	Edad:<br>
	<input type="text" name="edad" placeholder="Ingresa tu edad">
	<br>
	Matricula:<br>
	<input type="text" name="matricula" placeholder="Ingresa tu matricula">
	<br>
	Carrera:<br>
	<input type="text" name="carrera" placeholder="Ingresa tu carrera">
	<br>
	Archivo:<br>
	<input type="file" name="archivo" value="Archivo">
	<br>
	<br>
	<input type="submit" value="REGISTRARSE">
</form>
<?php
?>
</body>
</html>