<?php 
include_once 'config.php';
include_once 'conexion.php';
include_once 'persona.php';
//echo $pdo->exec("DELETE FROM tbl_persona WHERE id=1");
$stmt = $pdo->prepare("DELETE FROM tbl_persona WHERE id=?");
// Bind
$id = $_REQUEST['id'];

$stmt->bindParam(1, $id);
$stmt->execute();

header ("Location: view/tabla.php");