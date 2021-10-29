<?php 
include_once 'config.php';
include_once 'conexion.php';
include_once 'persona.php';
/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (?, ?)");
// Bind
$name = "Peter";
$age = 30;
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $age);
// Excecute
$stmt->execute();*/
////
/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
// Bind
$nombre = "Charles";
$edad = 25;
$stmt->bindParam(':name', $nombre);
$stmt->bindParam(':age', $edad);
// Excecute
$stmt->execute();
*/
$stmt = $pdo->prepare("INSERT INTO tbl_persona (id, name, age) VALUES (:id, :name, :age)");
$name = $_REQUEST['nombre'];
$age =  $_REQUEST['edad'];
$id=null;
$persona = new Persona($id, $name, $age);

try{
    if($stmt -> execute((array) $persona)){
        echo 'bien';
    }else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
    echo  $e->getMessage();
}

header('Location: view/tabla.php');

/*$persona=new Persona("pepe",32);
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/
// $persona=new Persona(null,"pepito",34);
// $stmt = $pdo->prepare("INSERT INTO tbl_persona(id, name, age) VALUES (:id, :name, :age)" );
// if($stmt->execute((array) $persona)){
//     echo 'bien';
// }else{ echo 'mal';}

