<?php

class Home extends Controller{
    public function index($param = '', $paramTwo = ''){
        
        
        $user = $this->model('Users');
        $user->name = 'emmanuel';
        $this->view('home', ['username' =>$user->name]);

        
    }
    public function login(){

    }
}