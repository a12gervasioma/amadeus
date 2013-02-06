<?php

// Comprobamos si existe el fichero a cargar

if (isset($_GET['inc']) && $_GET['inc']!="")
    // Comprobamos si existe el fichero físico a cargar.
    if (! file_exists("{$_GET['inc']}.php"))
    { // Sacamos página de error personalizada
        header("HTTP/1.0 404 Not Found");
        require 'error/404.html';
    }
    else
    {
        require_once 'header.html';
        require_once 'menu.php';
        require_once "{$_GET['inc']}.php";
        require_once 'footer.html';
    }
?>