<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class User{
  
  public $id;
  public $name;
  public $email;
  public $password;
  public $cpf;
  public $phone;
  public $status;

  public static function getUsers($where=null, $order=null, $limit = null){
    return (new Database('users'))->select($where, $order, $limit)
    ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public function register(){
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

  public static function getUserEmail($email){
    return (new Database('users'))->select('email = "'.$email.'"')->fetchObject(self::class);
  }


}