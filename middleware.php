<?php

interface middlewareInterface{}

class middleware implements middlewareInterface{
    public static function publicRoutes(array $post){
        return array(
            '/router_MVC' => ['userController', 'goToHome'],
            '/router_MVC/view' => ['userController', 'goToHome'],
            '/router_MVC/view/home' => ['userController', 'goToHome'],
            '/router_MVC/view/user/loginUser' => ['loginUserController', 'check', $post],
            '/router_MVC/view/user/login' => ['userController', 'login'],            
            '/router_MVC/view/user/create' => ['userController', 'insert', $post],
            '/router_MVC/view/user/userForm' => ['userController', 'userForm']
        );
    }
    public static function privateRoutes(array $data, array $post){
        return array(
            '/router_MVC/view/user/viewUser' => ['userController', 'viewUser'],
            '/router_MVC/view/user/create' => ['userController', 'insert', $post],
            '/router_MVC/view/user/editUserForm/'.$data[count($data) - 1] => ['userController', 'editUserForm'],
            '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
            '/router_MVC/view/user/updateUserForm' => ['userController', 'update', $post],
            '/router_MVC/view/user/deleteUser/'.$data[count($data) - 1] => ['userController', 'delete'],
            '/router_MVC/view/user/profile/'.$data[count($data) - 1] => ['userController', 'profile', $data[count($data) - 1]]
        );
    }
}