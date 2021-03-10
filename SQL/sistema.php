<?php
    require_once("Autoload.php");

    $objUsuario = new Usuario();

    //insertar usuario
    //$insert = $objUsuario->insertUsuario("juan",321986,"juan@info.com");
    //echo $insert;
    //Extrae registros
    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");
?>