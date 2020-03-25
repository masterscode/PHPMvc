<?php
declare(strict_types=1);

class Controller{
    /**
     * @param string $model holds the model to be used and 
     * @method model() returns the model as object for child controllers
     */

    public function model(string $model):object {
        require "../app/models/$model.php";
        return new $model();
    }

    public function view(string $view, array $data = []):void{
        require "../app/views/$view.php";
        
    }
}

// $dom = new DOMElement('p');


$name = 'james';

/**
 * Parameters
 *
 * @param int $int
 * @param string $string
 * @param array $array
 * @param bool $bool
 */


 /**
  * my own way of learning phpDocs

  *@var string $name holds the name of the user
  *@param string $status holds the priviledge of the user
  
  */
