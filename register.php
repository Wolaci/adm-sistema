<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\User;
use \App\Session\Login;

Login::requireLogout();

if(isset($_POST['acao'])){
  if(isset($_POST['name'], $_POST['email'], $_POST['password'],$_POST['cpf'],$_POST['phone'])){
        
    $user = User::getUserEmail($_POST['email']);
    if($user instanceof User){
      echo '<script>alert("O e-mail digitado já está em uso")</script>';
      echo '<script>window.location.href = "register.php"</script>';
      die();
    }

    $user = new User();
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->cpf = $_POST['cpf'];
    $user->phone = $_POST['phone'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->status = "SIM";
    $user->register();
    Login::login($user);
  }
}

include __DIR__.'/includes/formRegister.php';