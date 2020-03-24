<?php 

class App{
     protected $controller = 'home';
     protected $method = 'index';
     protected $params = [];
     
     public function __construct(){
        $url = $this->parseUrl();
        // print_r($url);
        if(file_exists("../app/controllers/$url[0].php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require "../app/controllers/$this->controller.php";
         $this->controller = new $this->controller();
        //  print_r($this->controller);
        if ( isset($url[1]) && method_exists($this->controller, $url[1])){
            // echo 'ok';
            $this->method = $url[1];
            unset($url[1]);
            
        }

        $this->params = $url ? array_values($url) : [];
        // print $this->params;
        call_user_func_array([$this->controller, $this->method], $this->params); 
     }

     public function parseUrl(){
         if(isset($_GET['url'])){
            //  var_dump( parse_url($_GET['url']));
            $sanitizedUrl = filter_var(
                rtrim($_GET['url'], '/'), 
                FILTER_SANITIZE_URL);
            return explode('/',$sanitizedUrl);
             
         }
     }
}
