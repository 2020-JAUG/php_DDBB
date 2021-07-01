<h1>Lista de Platos</h1>

<?php

    //conexion a db
    require './db/connect.php';
    $mysqli = conectar();

    //consulta DDBB ESTO ES PASAR POR REFERENCIA EN OBJETOS
    $resultado = $mysqli -> query( "SELECT id, titulo FROM plato" );

    //Imprimo Resultado
              echo '</ol>';
              while( $reg = $resultado -> fetch_assoc()){
                echo '<li>';
                echo '<a href="http://localhost/dev/dia4/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
                echo '</li>';
            }
            echo '</ol>';

?>