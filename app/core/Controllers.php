<?php
// declare(strict_types=1);

class Controller{
    

    public function model(string $model):object {
        require "../app/models/$model.php";
        return new $model();
    }

    public function view(string $view, array $data = []):void{
        require "../app/views/$view.php";
        
    }
}

// $dom = new DOMElement('p');