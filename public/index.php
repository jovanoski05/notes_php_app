<?php

    use Core\App;
    use Core\Container;
    use Core\Database;
    use Core\Session; 

    use Http\Forms\LoginForm;
    
    session_start();

    const BASE_PATH = __DIR__ . '/../';
    
    include BASE_PATH ."Core/functions.php";
    $config = require base_path('config.php');
    
    spl_autoload_register(function ($class){

        $class=str_replace('//', DIRECTORY_SEPARATOR, $class);

        require base_path("{$class}.php");
    });


   $router = new Core\Router;

   $routes = require base_path('routes.php');
   $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

   $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

   $router->route($uri, $method);

