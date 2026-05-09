<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/api/products':
        require './controllers/ProductController.php';
        break;

    case '/api/register':
        require './controllers/AuthController.php';
        register($pdo);
        break;

    case '/api/login':
        require './controllers/AuthController.php';
        login($pdo);
        break;

    default:
        echo json_encode([
            "message" => "Route not found"
        ]);
        break;
}
