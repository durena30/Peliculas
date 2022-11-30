<?php
    $db = mysqli_connect("localhost","root","","peliculas");

    if(!$db){
        echo "Error 303, no se ha podido realizar la conexion!";
    }


?>