<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$matricula = $_POST["matricula"];
$carrera = $_POST["carrera"];
$archivo = $_POST["archivo"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"formulario");
$tildes=$link->query("SET NAMES 'utf8'");//para que se muestren las tildes 

$query = "INSERT INTO registro VALUES('','$nombre','$apellido','$edad','$matricula','$carrera','$archivo')";
if(!is_null($nombre))
if (mysqli_query($link, $query)) {
	    echo "<h1>Se a registrado correctamente :D</h2>";
	    echo "<button><a href='index.php'>Salir</a></button>";
		} else {
		    echo "Error insert record: " . mysqli_error($link);
		    echo "<button><a href='index.php'>Volver a intentar</a></button>";
	}
?>


