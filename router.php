<?php


interface routerInterface{}

// class router implements routerInterface{
//     public static $id;
//     public static function userController(){
//         container :: bind(userController :: class, userController :: class);
//         return container :: singleton(userController :: class);
//     }
//     public static function loginUser(){
//         container :: bind(loginUserController :: class, loginUserController :: class);
//         return container :: singleton(loginUserController :: class);
//     }
//     public function getId($data){
//         self :: $id = $data[count($data) - 1];
//     }
//     public static function isUserLoggedIn(){
//         // unset($_COOKIE['token']);
//         if (isset($_COOKIE['token'])) {
//             return true;
//         } else{
//             return false;
//         }
//     }
//     public static function post(string $address){
//         if (self :: isUserLoggedIn()) {
//             if ($address == "/router_MVC/view/home" || $address == "/router_MVC/view/" || $address == "/router_MVC/") {
//                 self :: userController() -> goToHome();
//             }
//             if ($address == "/router_MVC/view/user/userForm") {
//                 self :: userController() -> userForm();
//             }
//             if ($address == "/router_MVC/view/user/viewUser") {
//                 self :: userController() -> viewUser();
//             }
//             if ($address == "/router_MVC/view/user/create") {
//                 self :: userController() -> insert($_POST);
//             }
//             if($address == "/router_MVC/view/user/editUserForm/".self :: $id){
//                 self :: userController() -> editUserForm(self :: $id);
//             }
//             if ($address == "/router_MVC/view/user/updateUserForm") {
//                 self :: userController() -> update($_POST);
//             }
//             if ($address == "/router_MVC/view/user/deleteUser/".self :: $id) {
//                 self :: userController() -> delete(self :: $id);
//             }
//             if ($address == "/router_MVC/view/user/loginUser") {
//                 self :: loginUser() -> check($_POST);
//             }
//             if ($address == "/router_MVC/view/user/login") {
//                 self :: userController() -> login();
//             }
//             if ($address == "/router_MVC/view/user/profile/".self :: $id) {
//                 self :: userController() -> profile(self :: $id);
//             }
//         } if (!self :: isUserLoggedIn()) {
//             if ($address == "/router_MVC/view/home" || $address == "/router_MVC/view/" || $address == "/router_MVC/") {
//                 self :: userController() -> goToHome();
//             }
//             if ($address == "/router_MVC/view/user/userForm") {
//                 self :: userController() -> login();
//             }
//             if ($address == "/router_MVC/view/user/viewUser") {
//                 self :: userController() -> login();
//             }
//             if ($address == "/router_MVC/view/user/loginUser") {
//                 self :: loginUser() -> check($_POST);
//             }
//             if ($address == "/router_MVC/view/user/login") {
//                 self :: userController() -> login();
//             }
//             if ($address == "/router_MVC/view/user/profile/".self :: $id) {
//                 self :: userController() -> profile(self :: $id);
//             }
//         }
//     }
// }



// class router implements routerInterface{
//     public static function isUserLoggedIn(){
//         // unset($_COOKIE['token']);
//         if (isset($_COOKIE['token'])) {
//             return true;
//         } else{
//             return false;
//         }
//     }
//     public static function publicRoutes(array $post){
//         return array(
//             '/router_MVC' => ['userController', 'goToHome'],
//             '/router_MVC/view' => ['userController', 'goToHome'],
//             '/router_MVC/view/home' => ['userController', 'goToHome'],
//             '/router_MVC/view/user/loginUser' => ['loginUserController', 'check', $post],
//             '/router_MVC/view/user/login' => ['userController', 'login'],            
//             '/router_MVC/view/user/create' => ['userController', 'insert', $post],
//             '/router_MVC/view/user/userForm' => ['userController', 'userForm']
//         );
//     }
//     public static function privateRoutes(array $data, array $post){
//         return array(
//             '/router_MVC/view/user/viewUser' => ['userController', 'viewUser'],
//             '/router_MVC/view/user/create' => ['userController', 'insert', $post],
//             '/router_MVC/view/user/editUserForm/'.$data[count($data) - 1] => ['userController', 'editUserForm'],
//             '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
//             '/router_MVC/view/user/updateUserForm' => ['userController', 'update', $post],
//             '/router_MVC/view/user/deleteUser/'.$data[count($data) - 1] => ['userController', 'delete'],
//             '/router_MVC/view/user/profile/'.$data[count($data) - 1] => ['userController', 'profile', $data[count($data) - 1]]
//         );
//     }
//     public static function post(string $address, array $requestArr, array $post = null){
//         foreach(self :: publicRoutes($post) as $key => $value){
//             if ($address == $key) {
//                 container :: bind($value[0] , $value[0]);
//                 $controller = container :: singleton($value[0]);
//                 $method = $value[1];
//                 if (count($value) == 2) {
//                     $controller -> $method();
//                     return;
//                 }
//                 if (count($value) == 3) {
//                     $controller -> $method($value[2]);
//                     return;
//                 }
//             } 
//         }
//         if (self :: isUserLoggedIn()) {
//             foreach(self :: privateRoutes($requestArr, $post) as $key => $value){
//                 if ($address == $key) {
//                     $method = $value[1];
//                     container :: bind($value[0], $value[0]);
//                     $controller = container :: singleton($value[0]);
//                     if (count($value) == 2) {
//                         $controller -> $method();
//                     }
//                     if (count($value) == 3) {
//                         $controller -> $method($value[2]);
//                     }
//                 } 
//             }
//         } else {
//             container :: bind(userController :: class, userController :: class);
//             $controller = container :: singleton(userController :: class);
//             $controller -> login();
//             return;
//         }
//     }
// }


// class router implements routerInterface{
//     public static function isUserLoggedIn(){
//         if (isset($_COOKIE['token'])) {
//             return true;
//         } else{
//             return false;
//         }
//     }
//     public static function post(string $address, array $requestArr, array $post = null){
//         foreach(routerList :: publicRoutes($post) as $key => $value){
//             if ($address == $key) {
//                 container :: bind($value[0] , $value[0]);
//                 $controller = container :: singleton($value[0]);
//                 $method = $value[1];
//                 if (count($value) == 2) {
//                     $controller -> $method();
//                     return;
//                 }
//                 if (count($value) == 3) {
//                     $controller -> $method($value[2]);
//                     return;
//                 }
//             } 
//         }
//         if (self :: isUserLoggedIn()) {
//             foreach(routerList :: privateRoutes($requestArr, $post) as $key => $value){
//                 if ($address == $key) {
//                     $method = $value[1];
//                     container :: bind($value[0], $value[0]);
//                     $controller = container :: singleton($value[0]);
//                     if (count($value) == 2) {
//                         $controller -> $method();
//                     }
//                     if (count($value) == 3) {
//                         $controller -> $method($value[2]);
//                     }
//                 } 
//             }
//         } else {
//             container :: bind(userController :: class, userController :: class);
//             $controller = container :: singleton(userController :: class);
//             $controller -> login();
//             return;
//         }
//     }
// }



// class router implements routerInterface{
//     public static function isUserLoggedIn(){
//         if (isset($_COOKIE['token'])) {
//             return true;
//         } else{
//             return false;
//         }
//     }
//     public static function post(string $address, array $requestArr, array $post = null){
//         foreach(routerList :: publicRoutes($post) as $key => $value){
//             $bool = str_contains($key, "{");
//             echo $bool;
            
//             if ($address == $key) {
//                 container :: bind($value[0] , $value[0]);
//                 $controller = container :: singleton($value[0]);
//                 $method = $value[1];
//                 if (count($value) == 2) {
//                     $controller -> $method();
//                     return;
//                 }
//                 if (count($value) == 3) {
//                     $controller -> $method($value[2]);
//                     return;
//                 }
//             } 
//         }
//         if (self :: isUserLoggedIn()) {
//             foreach(routerList :: privateRoutes($requestArr, $post) as $key => $value){
//                 if ($address == $key) {
//                     $method = $value[1];
//                     container :: bind($value[0], $value[0]);
//                     $controller = container :: singleton($value[0]);
//                     if (count($value) == 2) {
//                         $controller -> $method();
//                     }
//                     if (count($value) == 3) {
//                         $controller -> $method($value[2]);
//                     }
//                 } 
//                 $bool = str_contains($key, "{");
//                 if($bool){
//                     $singleRouteArray = explode('/', $key);
//                     foreach($singleRouteArray as $index => $array){
//                         $c = str_contains($array , "{");
//                         if($c){
//                             $x = $index;
//                             $start = strpos($key, "{");
//                             $end = strpos($key, "}");
//                             $param = substr($key, $start + 1, - 1)."</br>";
//                             if(isset($requestArr[$x])){
//                                 $routParams = [$param => $requestArr[$x]];
//                             }
//                             print_r($value);
//                             echo "</br>";
//                         }
//                     }
//                 }
//             }
//         } else {
//             container :: bind(userController :: class, userController :: class);
//             $controller = container :: singleton(userController :: class);
//             $controller -> login();
//             return;
//         }
//     }
// }



// class router implements routerInterface{
//     public static function isUserLoggedIn(){
//         if (isset($_COOKIE['token'])) {
//             return true;
//         } else{
//             return false;
//         }
//     }
//     public static function post(string $address, array $requestArr, array $post = null){
//         foreach(routerList :: publicRoutes($post) as $key => $value){
            
//             if ($address == $key) {
//                 container :: bind($value[0] , $value[0]);
//                 $controller = container :: singleton($value[0]);
//                 $method = $value[1];
//                 if (count($value) == 2) {
//                     $controller -> $method();
//                     return;
//                 }
//                 if (count($value) == 3) {
//                     $controller -> $method($value[2]);
//                     return;
//                 }
//             } 
//         }
//         if (self :: isUserLoggedIn()) {
//             foreach(routerList :: privateRoutes($requestArr, $post) as $key => $value){
                // $bool = str_contains($key, "{");
                // if($bool){
                //     $singleRouteArray = explode('/', $key);
                //     foreach($singleRouteArray as $index => $array){
                //         $c = str_contains($array , "{");
                //         if($c){
                //             $x = $index;
                //             $start = strpos($key, "{");
                //             $end = strpos($key, "}");
                //             $param = substr($key, $start + 1, - 1);
                //             if(isset($requestArr[$x])){
                //                 // id is :
                //                 // باید به متد پرایوت روتس فرستاده شود اما چطور؟
                //                 $routParams = [$param => $requestArr[$x]];
                //                 routerList :: privateRoutes($routParams, $post);
                //             }
                //             print_r($value);
                //             echo "</br>";
                //         }
                //     }
                // }
//                 if ($address == $key) {
//                     $method = $value[1];
//                     container :: bind($value[0], $value[0]);
//                     $controller = container :: singleton($value[0]);
//                     if (count($value) == 2) {
//                         $controller -> $method();
//                     }
//                     if (count($value) == 3) {
//                         $controller -> $method($value[2]);
//                     }
//                 } 
//             }
//         } else {
//             container :: bind(userController :: class, userController :: class);
//             $controller = container :: singleton(userController :: class);
//             $controller -> login();
//             return;
//         }
//     }
// }




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