<?php

    require_once 'controller/CreaturesController.php';
    require_once 'controller/LoginController.php';

    $operation = isset($_GET['r']) ? $_GET['r'] : NULL;

    try {

        // Hook in here the password matching
        
        if (!$operation) {
            $controller = new LoginController;
            $controller->handleRequest();
        } else {
            if (file_exists(__DIR__ . '/controller/' . ucfirst($operation) . 'Controller.php')) {
                $controllerName = ucfirst($operation).'Controller';
                $controller = new $controllerName;
                $controller->handleRequest();
            } else {
                // throw error page
                $title = 'Not Found';
                $message = 'The requested URL ' . $operation . ' was not found on this server.';
                include 'view/error.php';
            }
        }

    } catch ( Exception $e ) {
        $this->showError("Application error", $e->getMessage());
    }

?>
