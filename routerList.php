<?php

interface routerListInterface{}


class routerList implements routerListInterface{ 
    public static function routes(){
        return array(
            '/router_MVC/home' => ['userController', 'goToHome'],
            '/router_MVC/view/home' => ['userController', 'goToHome'],
            '/router_MVC/view/user/viewUser' => ['userController', 'viewUser'],
            '/router_MVC/view/user/create' => ['userController', 'insert', 'post'], 
            '/router_MVC/view/user/editUserForm/{id}' => ['userController', 'editUserForm'],
            '/router_MVC/view/user/loginUser' => ['loginUserController', 'check', 'post'],
            '/router_MVC/view/user/userForm' => ['userController', 'userForm'],
            '/router_MVC/view/user/updateUserForm' => ['userController', 'update', 'post'],
            '/router_MVC/view/user/login' => ['userController', 'login'],
            '/router_MVC/view/user/deleteUser/{id}' => ['userController', 'delete'],
            '/router_MVC/view/user/profile/{id}' => ['userController', 'profile'],

        );
    }
}