En la raiz se encuenran los servicios y dentro la carpeta view la pagina que crea la tabla

En persona definimos la clase.

El CRUD se encuentra dentro de insertar, elimina y modificar. 
La interfaz del programa es de solo una pantalla todo el rato, ya que usa modal/popups para interactuar con ella. 

hay uso de js para el uso correcto del CRUD

Se tiene que crear un config.php para el correcto uso, donde se defina el servidor, el user, la pass y el nombre de la base de datos. Debemos incluirlo como minimo en el archivo conexion.php para que funcione

```php
<?php 

 define("SERVIDOR","localhost");
 define("USUARIO","root");
 define("PASSWORD","");
 define("BD","bd_prueba");
 ```
