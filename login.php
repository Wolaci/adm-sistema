<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;
use \App\Session\Login;

Login::requireLogout();

if(isset($_POST['acao'])){
  if(isset($_POST['email'], $_POST['password'])){

    $user = User::getUserEmail($_POST['email']);

    if(!password_verify($_POST['password'], $user->password)){
      echo '<script>alert("E-mail ou senha inválidos")</script>';
      echo '<script>window.location.href = "login.php"</script>';
      die();
    }
    Login::login($user);
  }
}

include __DIR__.'/includes/formLogin.php';