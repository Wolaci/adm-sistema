<?php

namespace App\Entity;
use \App\Db\Database;

class User{
  
  public $id;
  public $name;
  public $email;
  public $password;
  public $cpf;
  public $phone;
  public $status;

  public function cadastrar(){
    $database = new Database('users');
    
    $this->id = $database->insert([
      'name' => $this->name,
      'email' => $this->email,
      'password' => $this->password,
      'cpf' => $this->cpf,
      'phone' => $this->phone,
      'status' => $this->status
    ]);

    return true;
  }

  public static function getUsuarioPorEmail($email){
    return (new Database('users'))->select('email = "'.$email.'"')->fetchObject(self::class);
  }


}