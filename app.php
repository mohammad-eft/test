<?php


interface appInterface{
    public static function startApp();
}



class app implements appInterface{
    public static function makeRequest(){
        container :: bind(request :: class, request :: class);
        return container :: singleton(request :: class);
    }
    public static function cookie(){
        container :: bind(cookie :: class, cookie :: class);
        return container :: singleton(cookie :: class);
    }
    public static function makeRouter(){
        container :: bind(router :: class, router :: class);
        return container :: singleton(router :: class);
    }
    public static function startApp(){
        $requestObj = self :: makeRequest();
        if ($requestObj -> post()) {
            self :: cookie() -> getCoockie(sha1($_POST['userName']));
        }
       self :: sendData();
    }
    public static function sendData(){
        $requestObj = self :: makeRequest();
        $routerObj = self :: makeRouter();
        $routerObj -> getData($requestObj -> request(), $requestObj -> getUriArr(), $requestObj -> post());
    }
}
