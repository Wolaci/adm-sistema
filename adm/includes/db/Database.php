<?php

namespace includes\Db\Database;
use \PDO;
use \PDOException;

class Database{
  const HOST = 'localhost';
  const NAME = 'adm_sistema';
  const USER = 'root';
  const PASS = '';
  private $table;
  private $connection;

}