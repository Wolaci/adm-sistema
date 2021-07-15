<?php

namespace \App\Entity;
use \App\Db\Database;

class User{
  public $id;
  public $name;
  public $email;
  public $cpf;
  public $telefone;
  public $status;

  public static function getUsers($where=null, $order=null, $limit = null){
    return (new Database('users'))->select($where, $order, $limit)
    ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function getUser($id){
      return (new Database('users'))->select('id='.$id)
      ->fetchObject(self::class);
  }

  public function cadastrar(){
      $this->data = date('Y-m-d H:i:s');
      $obDatabase = new Database('users');
      $this->id = $obDatabase->insert([
                                          'titulo' => $this->titulo,
                                          'descricao' => $this->descricao,
                                          'ativo' => $this->ativo,
                                          'data' => $this->data
                                      ]);
      return true;                             
  }

  public function atualizar(){
      return (new Database('users'))->update('id='.$this->id,[
                                                  'titulo' => $this->titulo,
                                                  'descricao' => $this->descricao,
                                                  'ativo' => $this->ativo,
                                                  'data' => $this->data
                                              ]);                  
  }

  public function excluir(){
      return (new Database('users'))->delete('id = '.$this->id);
  }

}