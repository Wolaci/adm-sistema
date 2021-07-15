<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;

$obUser = new User;
if(isset($_POST['name'], $_POST['email'])){
    $obUser->name = $_POST['name'];
    $obUser->email = $_POST['email'];
    $obUser->status = "SIM";
    $obUser->cadastrar();
    exit;
}

include __DIR__.'/includes/formUser.php';
?>