<?php
include_once 'config.php';
include_once 'conexion.php';
include_once 'persona.php';
$sentencia=$pdo->prepare("SELECT * FROM tbl_persona");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
//foreach($listaProductos as $producto){ }
?>
