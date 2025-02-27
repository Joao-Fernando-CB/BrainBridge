<?php

    define('INCLUDE_PATH', 'http://localhost/BrainBridge');
	define('FILES_PATH','http://localhost/BrainBridge/Views/pages/');

    class Application{
        
        public function execute(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url .= 'Controller';

            if(file_exists('Controllers/'.$url.'.php')){
                $class = "Controllers\\".$url;
                $controller = new $class();
                $controller->execute();
            }else{
                Die("Your URL path is incorrect");
            }
        }

    }


?>