<?php

    define('INCLUDE_PATH', 'http://localhost/BrainBridge');
    define('FILES_PATH','http://localhost/BrainBridge/Views/pages/');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'BrainBridge');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    class Application{

        public function execute(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            
            $url = ucfirst($url);
            $url.="Controller";

            if(file_exists('Controllers/'.$url.'.php')){
                $className = "Controllers\\".$url;
                $controller = new $className;
                $controller->execute();
            }else{
                Die("Incorrect Route");
            }
        }

    }

?>