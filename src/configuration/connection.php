<?php

define('HOST','localhost');
define('DATABASE','crud-mvc-php-poo');
define('USER','root');
define('PASSWORD','');

class Connect{
    protected $connection;

    function __construct()
    {
        $this->connectDataBase();
    }

    function connectDataBase()
    {

        try{
            $this->connection = new PDO('mysql:host='.HOST.';dbaname='.DATABASE,USER,PASSWORD);
           }

           catch(PDOException)
           {
            echo"Error". $e->getMessage();
            die();
           }

        }
     }

     $testConnection = new Connect;
     
?>