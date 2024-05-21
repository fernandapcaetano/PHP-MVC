<?php
class App{

    private $controller = "home";
    private $method = "index";

    public function __construct(){
        $this->loadController();
    }
    private function splitURL(){
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);
        return $URL;
    }

    private function loadController(){
        $URL = $this->splitURL();
        $filename = '../app/Controllers/'. ucfirst($URL[0]) .'.php';

        if(file_exists($filename)){
            require $filename;
            $this->controller = ucfirst($URL[0]);
        } else{

            //caso esteja dentro de alguma pasta
            $filename = '../app/Controllers/'. ucfirst($URL[0]) .'/'. ucfirst($URL[0]) .'.php';
            if(file_exists($filename)){
                require $filename;
                $this->controller = ucfirst($URL[0]);
            } else{
                $filename = '../app/Controllers/_404.php';
                require $filename;
                $this->controller = "_404";
            }
        }

        //chamando o controller e o método index()
        $controlller = new $this->controller;
        call_user_func_array([$controlller, $this->method],[]);
    }  

}