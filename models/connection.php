<?php

class Connection {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "developers";

   protected function konekcija(){
     $dsn = 'mysql:host=' . $this->server . ';dbname=' .$this->dbname;
     $pdo = new PDO($dsn, $this->username, $this->password);
	   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	   return $pdo;
   }        
}