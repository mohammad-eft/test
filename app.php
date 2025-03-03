<?php

// class app{
//     // public $request;
//     // public $router;
//     // public static $objects;
//     public $x;
//     // public function __construct(){
//     //     // $this -> getCreate();
//     //     // $this -> request = new request();
//     //     // $this -> router = new router();
//     //     // $this -> callRouterMethod();
//     //     // var_dump(self::$objects);
//     //     var_dump($this -> getCreateUser());
//     // }
//     public function makeRequest(){
//         return new request;
//     }
//     public function makeRouter(){
//         return new router;
//     }
//     // public function getCreateUser(){
//     //     return new create;
//     // }
//     public function getData(){
//         $request = $this -> makeRequest();
//         $this -> x = $request -> latestIndex();
//     }
//     public function callRouterMethod(){
//         $this ->getData();
//         $request = $this -> makeRequest();
//         $router = $this -> makeRouter();
//         $data = $request -> sendData();
//         // $router -> post($this -> x);
//         // $data = $this -> getCreateUser() -> sendData();
//         $this -> makeRouter() -> post($this -> x, $data);
//     }
// }
// app::$objects[] = new router;
// app::$objects[] = new request;
// app::getCreateUser($create);



// class app{
//     public $lastIndex;
//     public function makeRequest(){
//         return container :: resolve(request::class)();
//     }
//     public function makeRouter(){
//         return container :: resolve(router::class)();
//     }
//     public function getData(){
//         $request = $this -> makeRequest();
//         $this -> lastIndex = $request -> latestIndex();
//     }
//     public function callRouterMethod(){
//         $this ->getData();
//         $request = $this -> makeRequest();
//         $router = $this -> makeRouter();
//         echo $this -> lastIndex;
//         $router -> post($this -> lastIndex);
//         // $endRequest = $this -> lastIndex[0];
//         // $request = (int)  $endRequest;
//         // if($request > 0 ){
//         //     $router ->post($this -> lastIndex[1], $endRequest);
//         // }
//         // if($request == 0 ){
//         //     $router ->post($endRequest);
//         // }
//     }
// }




// class app{
//     public $request;
//     public function makeRequest(){
//         return container :: resolve(request::class)();
//     }
//     public function makeRouter(){
//         return container :: resolve(router::class)();
//     }
//     public function getData(){
//         $requestObj = $this -> makeRequest();
//         $this -> request = $requestObj -> request();
//         $routerObj = $this -> makeRouter();
//         $routerObj -> getId($requestObj -> getUriArr());
//     }
//     public function callRouterMethod(){
//         $this ->getData();
//         $routerObj = $this -> makeRouter();
//         $routerObj -> post($this -> request);
//     }
// }


// !---------------------------------------------------------------------------------------------------------


interface appInterface{
    public static function startApp();
}

// class app{
//     public static $request;
//     public static function makeRequest(){
//         container :: bind(request :: class, request :: class);
//         return container :: singleton(request :: class);
//     }
//     public static function makeRouter(){
//         container :: bind(router :: class, router :: class);
//         return container :: singleton(router :: class);
//     }
//     public static function getData(){
//         $requestObj = self :: makeRequest();
//         self :: $request = $requestObj -> request();
//         $routerObj = self :: makeRouter();
//         // $routerObj -> getId($requestObj -> getUriArr());
//     }
//     public static function startApp(){
//         self :: getData();
//         $requestObj = self :: makeRequest();
//         $routerObj = self :: makeRouter();
//         $routerObj -> post(self :: $request, $requestObj -> getUriArr());
//     }
// }


// class app implements appInterface{
//     public static $request;
//     public static function makeRequest(){
//         container :: bind(request :: class, request :: class);
//         return container :: singleton(request :: class);
//     }
//     public static function cookie(){
//         container :: bind(cookie :: class, cookie :: class);
//         return container :: singleton(cookie :: class);
//     }
//     public static function makeRouter(){
//         container :: bind(router :: class, router :: class);
//         return container :: singleton(router :: class);
//     }
//     public static function getData(){
//         $requestObj = self :: makeRequest();
//         self :: $request = $requestObj -> request();
//         // $routerObj = self :: makeRouter();
//         // $routerObj -> getId($requestObj -> getUriArr());
//     }
//     public static function startApp(){
//         self :: getData();
//         $requestObj = self :: makeRequest();
//         if ($requestObj -> post()) {
//             self :: cookie() -> getCoockie(sha1($_POST['userName']));
//         }
//        self :: sendData();
//     }
//     public static function sendData(){
//         // self :: getData();
//         $requestObj = self :: makeRequest();
//         $routerObj = self :: makeRouter();
//         $routerObj -> post(self :: $request, $requestObj -> getUriArr(), $requestObj -> post());
//     }
// }


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
        $routerObj -> post($requestObj -> request(), $requestObj -> getUriArr(), $requestObj -> post());
    }
}
