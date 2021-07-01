<?php

function conectar(){
//Conexion con base de datos
    $mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "bc0e64cce3b626","2375637e", "heroku_03038a41988bc02");
    if ( $mysqli -> connect_errno) {
        echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;

}

?>