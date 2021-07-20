<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;
use \App\Session\Login;

Login::requireLogin();

$users = User::getUsers();

include __DIR__.'/includes/listaUsers.php';