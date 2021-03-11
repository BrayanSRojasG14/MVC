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

    $updateUser = $objUsuario->updateUser(2,"mauricio",311495860,"MAU11@gmail.com");
    echo $updateUser;

    $user = $objUsuario->getUser(2);
    print_r("<pre>");
    print_r($user);
    print_r("</pre>");

    $detele = $objUsuario->deluser(2);
    echo $detele;
?>