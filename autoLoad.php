<?php

class autoLoad{
    public function load($className){
        $obj = $className . ".php";
        if ($className == "modelUser" || $className == "loginModel" || $className == "mainDB") {
            $obj = "model/" . $obj;
        } if ($className == "userController" || $className == "loginUserController") {
            $obj = "controller/" . $obj;
        } if($className == "loadViewUser" || $className == "viewUser" || $className == "create" || $className == "updateUser") {
            $obj = "view/user/" . $obj;
        }
        if (file_exists($obj)){
            include "$obj";
        } else {
            die("class \"$className\" not exists");
        }
    }
}

spl_autoLoad_register([new autoLoad, "load"]);