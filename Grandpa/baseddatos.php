<?php
// conectar conecta a 127.0.0.1
$m = new MongoClient();

// seleccionar una base de datos (formulario)
$bd = $m->formulario;

// seleccionar una colección (equivalente a una tabla en una base de datos relacional) en este caso usuario
$colección = $bd->usuario;

// añadir un registro
$documento = array("nombre" => "Irving", "apellido" => "gabriel", "edad" => "25", "matricula" => "2009", "carrera" => "Ing. computacion");
$colección->insert($documento);

// añadir un nuevo registro, con un distinto "perfil"
//$documento = array( "title" => "XKCD", "online" => true );
//$colección->insert($documento);

// encontrar todo lo que haya en la colección
$cursor = $colección->find();

// recorrer el resultado
foreach ($cursor as $documento) {
    echo $documento["title"] . "\n";
}

?>
