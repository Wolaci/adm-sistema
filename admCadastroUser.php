<?php

use \App\Entity\User;

$obUser = new User;
if(isset($_POST['name'], $_POST['email'])){
    $obUser->name = $_POST['name'];
    $obUser->email = $_POST['email'];
    $obUser->cadastrar();
    exit;
}

?>