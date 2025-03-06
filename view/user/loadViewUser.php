<?php


include "header.php";

class loadViewUser{
    public static function index($fileName, $data = null){
        $file = $fileName . ".php";
        if ($fileName == "home") {
            $file = "view/" . $file;
        }
        if ($fileName !== "home") {
            $file = "view/user/" . $file;
        }
        if (file_exists($file)) {
            include "$file";
        } 
        if (!file_exists($file)) {
            include "404.php";
        }
    }
}