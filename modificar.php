<?php
include_once 'config.php';
include_once 'conexion.php';
include_once 'persona.php';
// $stmt = $pdo->prepare("UPDATE tbl_persona SET name=?, age=? WHERE id=?");
// // Bind
// $nombre = "Peter";
// $edad = 19;
// $id=2;
// $stmt->bindParam(1, $nombre);
// $stmt->bindParam(2, $edad);
// $stmt->bindParam(3,$id);
// // Excecute
// $stmt->execute();
// $persona=new Persona(2,"pepito",36);
// $stmt = $pdo->prepare("UPDATE tbl_persona SET name=:name, age=:age WHERE id=:id" );
// if($stmt->execute((array) $persona)){
//     echo 'bien';
// }else{ echo 'mal';}







$stmt = $pdo->prepare("UPDATE tbl_persona SET name=?, age=? WHERE id=?");
$name = $_REQUEST['nombre'];
$age =  $_REQUEST['edad'];
$id =$_REQUEST['id'];
//echo $name."   ".$age."   ".$id."</br>";//debugger
$stmt->bindParam(1, $name, PDO::PARAM_STR);
$stmt->bindParam(2, $age, PDO::PARAM_INT);
$stmt->bindParam(3, $id, PDO::PARAM_INT);

$persona = new Persona($id, $name, $age);


$stmt->execute();
try{
    if($stmt->execute((array) $persona)){
        echo 'bien';
    }else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
    echo  $e->getMessage();
}

header('Location: view/tabla.php');
