<?php

    namespace Luizhenrique\CrudMvc\controllers;

    require_once('./controllers/clientsControllers.php');

    $controller = new clientsController;

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller->{$action}();

?>