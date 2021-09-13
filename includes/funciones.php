<?php

require 'app.php';

function incluirTemplate(string $nombre){
    include TEMPLATE_URL."/${nombre}.php";
}