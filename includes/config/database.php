<?php

function conectarDB() : mysqli{

    $db = mysqli_connect('localhost', 'root', '', 'bienesraices');

    if(!$db){
        echo 'No hay conexión con la DB';
        exit;
    } 

    return $db;
}