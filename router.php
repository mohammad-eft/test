<?php


interface routerInterface{}

class router implements routerInterface{
    public static function isUserLoggedIn(){
        if (isset($_COOKIE['token'])) {
            return true;
        } else {
            return false;
        }
    }
    public static function getData(string $address, array $requestArr, array $post = null){
        $controller = analyze :: request($requestArr);
        self :: post($controller, $post);
    }
    public static function post(array $control, array $post = null){
        if (self :: isUserLoggedIn()) {
            container :: bind($control[0][0], $control[0][0]);
            $controller = container :: singleton($control[0][0]);
            $method = $control[0][1];
            if (count($control) == 1) {
                $controller -> $method();
            }
            if (count($control) == 2) {
                if(isset($control[1]["id"])){
                    $controller -> $method($control[1]["id"]);
                } 
                else {
                    if (count($control[0]) == 3) {
                        $controller -> $method($post);
                    } else {
                        $controller -> $method();
                    }
                }
            }
        } else {
            container :: bind(userController :: class, userController :: class);
            $controller = container :: singleton(userController :: class);
            $controller -> login();
            return;
        }
    }
}