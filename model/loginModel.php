<?php

// include "mainDb.php";

class loginModel extends mainDB{
    public $table = "login";
    public function insert($data){
        $token = sha1($data['userName']);
        $userId = $data['id'];
        $query = "INSERT INTO login (userId, token) VALUES ('$userId', '$token')";
        $this -> conn -> query($query);
    }
    public function update($data){
        $userId = $data['id'];
        $token = sha1($data['userName']);
        $query = "UPDATE login SET userId = '$userId', token = '$token' WHERE id =" . $userId;
        $this -> conn -> query($query);
    }
}