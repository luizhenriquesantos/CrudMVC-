<?php

    require_once('./configuration/connection.php');

    class clientModel extends Connect{
        private $table;

        function __construct(){
            parent::__construct();
            $this->$table = 'clients';
        }

        function getAll(){
            $sqlSelect = $this->$connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }

?>