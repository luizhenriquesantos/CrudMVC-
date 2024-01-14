<?php

    require_once('./models/clients.php');

    class clientsController{
        private $model;

        function __construct(){
            $this->model = new clientModel();
        }

        function getAll(){
            $resultData = $this->model->getAll();
            print_r($resultData);
        }
    }


?>