<?php


interface requestInterface{}

class request implements requestInterface{
    public $uri;
    public $uriArr;
    public function __construct(){
        $this -> uri = $_SERVER['REQUEST_URI'];
    }
    public function parsUri(){
        $this -> uriArr = explode("/", $this -> uri);
    }
    public function getUriArr(){
        $this -> parsUri();
        return $this -> uriArr;
    }
    public function request(){
        return $this -> uri;
    }
    public function post(){
        return $_POST;
    }
}