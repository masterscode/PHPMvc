<?php

class Home extends Controller{
    public function index($param = '', $paramTwo = ''){
        echo 'no value passed in';
        echo $param . $paramTwo;
    }
    public function login(){
        print 'login here';
    }
}