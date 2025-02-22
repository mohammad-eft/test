<?php


interface cookieInterface{}

class cookie implements cookieInterface{
    public function getCoockie(string $token){
        return setcookie('token', $token, time() + 3600, "/");
    }
}
