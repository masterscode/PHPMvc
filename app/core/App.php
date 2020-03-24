<?php 

class App{
     protected $controller = 'home';
     protected $method = 'index';
     protected $params = [];
     
     public function __construct(){
        $url = $this->parseUrl();

        if(file_exists("../app/controllers/$url[0].php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require "../app/controllers/$this->controller.php";
        print $this->controller;
     }

     public function parseUrl(){
         if(isset($_GET['url'])){
            //  var_dump( parse_url($_GET['url']));
            $sanitizedUrl = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
            return explode('/',$sanitizedUrl);
             
         }
     }
}
