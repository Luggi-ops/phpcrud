<?php

function conectarDB() : mysqli{

    $db = mysqli_connect('localhost', 'root', '', 'bienesraices');
    $db->set_charset('utf8');

    if(!$db){
        echo 'No hay conexión con la DB';
        exit;
    } 

    return $db;
}