<?php

class Home extends Controller{
    public function index(string $param = '', string $paramTwo = ''):void{
        
        
        $user = $this->model('Users');
        $user->name = 'emmanuel';
        $this->view('home', ['username' =>$user->name]);

        
    }
    public function login():void{

    }
}