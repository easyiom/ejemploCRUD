<?php include_once '../ver.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
    integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/iconos_g.js"></script>
    <script type="text/javascript" src="../js/js.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<button id="btn-abrir-popup" class="btn-abrirPop btn btn-warning">Crear</button>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>age</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        
    <?php

//data="" data-name="<?php echo "{$registro['name']}" "
    foreach($listaProductos as $registro) {
        $ids=$registro['id'];
    ?>
        <tr class="table-dark text-dark"> 
            <td id="<?php echo "{$registro['id']}";?>" ><?php echo "{$registro['id']}";?></td>
            <td class="nombre" data="<?php echo "{$registro['id']}"."||"."{$registro['name']}";?>" data-name="<?php echo "{$registro['name']}" ?>"><?php echo "{$registro['name']}";?></td>
            <td class="edad" data="<?php echo "{$registro['id']}"."||"."{$registro['age']}";?>" data-age="<?php echo "{$registro['age']}" ?>"> <?php echo "{$registro['age']}";?></td>
            
            <td><button id="btn-abrir-popup2" value="modificar" onclick="getvalues(<?php echo $ids ?>)" class="btn-abrirPop2 btn btn-warning">Modificar</button></td>

            <form METHOD='GET' ACTION='../eliminar.php'>
                <INPUT TYPE='HIDDEN' NAME='id' VALUE=<?php echo "'$registro[id]'";?>>
                <td><INPUT TYPE='SUBMIT' VALUE='Eliminar' onclick="return confirm('¿Quieres eliminar?')" class="btn btn-danger"></td>
            </form>
        </tr>

    <?php
    }?>
    </table>
    <div class="overlay" id="overlay">
        <div class="crearUser" id="crearUser">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Insertar usuario</h3>
                <form action="../insertar.php">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                    <label for="edad">Edad</label>
                    <input type="text" id="edad" name="edad">
                    <input type="submit" value="insertar" class="btn btn-danger">
                </form>
            </div>
        </div>
        <div class="modUser" id="modUser">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrarPop"><i class="fas fa-times"></i></a>
                <h3>Modificar usuario</h3>
                <form action="../modificar.php">
                    <input type="hidden" id="id" name="id">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                    <label for="edad">Edad</label>
                    <input type="text" id="edad" name="edad">
                    <input type="submit" value="modificar" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>
</html>