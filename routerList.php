<?php

interface routerListInterface{}

// class routerList implements routerListInterface{
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
// }



// class routerList implements routerListInterface{ 
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
//             '/router_MVC/view/user/editUserForm/{id}' => ['userController', 'editUserForm'],
//             '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
//             '/router_MVC/view/user/updateUserForm' => ['userController', 'update', $post],
//             '/router_MVC/view/user/deleteUser/{id}' => ['userController', 'delete'],
//             '/router_MVC/view/user/profile/{id}' => ['userController', 'profile', $data[count($data) - 1]]
//         );
//     }
// }


// class routerList implements routerListInterface{ 
//     // public static function publicRoutes(array $post){
//     //     return array(
//     //         '/router_MVC' => ['userController', 'goToHome'],
//     //         '/router_MVC/view' => ['userController', 'goToHome'],
//     //         '/router_MVC/view/home' => ['userController', 'goToHome'],
//     //         '/router_MVC/view/user/loginUser' => ['loginUserController', 'check', $post],
//     //         '/router_MVC/view/user/login' => ['userController', 'login'],            
//     //         '/router_MVC/view/user/create' => ['userController', 'insert', $post],
//     //         '/router_MVC/view/user/userForm' => ['userController', 'userForm']
//     //     );
//     // }
//     public static function privateRoutes(array $data, array $post){
//         echo "----------------------------😁😁";
//         echo "</br>";
//         echo "</br>";
//         var_dump($data);
//         echo "</br>";
//         echo $data['id'];
//         echo "</br>";
//         echo "----------------------------😊😊";
//         echo "</br>";
//         return array(
//             '/router_MVC/view/user/viewUser' => ['userController', 'viewUser'],
//             '/router_MVC/view/user/create' => ['userController', 'insert', $post],
//             '/router_MVC/view/user/editUserForm/{id}' => ['userController', 'editUserForm'],
//             '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
//             '/router_MVC/view/user/updateUserForm' => ['userController', 'update', $post],
//             '/router_MVC/view/user/deleteUser/{id}' => ['userController', 'delete', $data['id']],
//             '/router_MVC/view/user/profile/{id}' => ['userController', 'profile', $data['id']]
//         );
//     }
// }

class routerList implements routerListInterface{ 
    // public static function publicRoutes(array $post){
    //     return array(
    //         '/router_MVC' => ['userController', 'goToHome'],
    //         '/router_MVC/view' => ['userController', 'goToHome'],
    //         '/router_MVC/view/home' => ['userController', 'goToHome'],
    //         '/router_MVC/view/user/loginUser' => ['loginUserController', 'check', $post],
    //         '/router_MVC/view/user/login' => ['userController', 'login'],            
    //         '/router_MVC/view/user/create' => ['userController', 'insert', $post],
    //         '/router_MVC/view/user/userForm' => ['userController', 'userForm']
    //     );
    // }
    public static function routes(){
        // echo "----------------------------😁😁";
        // echo "</br>";
        // echo "</br>";
        // var_dump($data);
        // echo "</br>";
        // // echo $data['id'];
        // echo "</br>";
        // echo "----------------------------😊😊";
        // echo "</br>";
        return array(
            // '/router_MVC/home' => ['userController', 'viewUser'],
            // '/router_MVC/view/user/viewUser' => ['userController', 'viewUser'],
            // '/router_MVC/view/user/create' => ['userController', 'insert'], // $post

            '/router_MVC/view/user/editUserForm/{id}' => ['userController', 'editUserForm'],
            '/router_MVC/view/user/editUserForm/mmd' => ['userController', 'editUserForm'],
            '/router_MVC/view/{id}/editUserForm/mmd' => ['userController', 'editUserForm',"mohammad"],

            // '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
            // '/router_MVC/view/user/updateUserForm' => ['userController', 'update'], //  $post


            '/router_MVC/view/user/deleteUser/{id}' => ['userController', 'delete'], // $data

            // /router_MVC/view/user/deleteUser/77

            '/router_MVC/view/user/{id}/deleteUser/{d-id}' => ['userController', 'delete'], // $data

            '/router_MVC/view/user/profile/{id}' => ['userController', 'profile'], // $data

            // '/router_MVC/view/user/panel/profile/{id}' => ['userController', 'profile'], // $data
        );
    }
}