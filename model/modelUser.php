<?php

// include("mainDB.php");

class modelUser extends mainDB{
    public $table = "users";
    public function insert($data){
        $name = $data['name'];
        $family = $data['family'];
        $age = $data['age'];
        $userName = $data['userName'];
        $token = sha1($data['userName']);
        $password = $data['password'];
        $query = "INSERT INTO users (name, family, age, token, userName, password) VALUES ('$name', '$family', '$age', '$token', '$userName', '$password')";
        $this -> conn -> query($query);
    }
    public function update($data){
        $id = $data['id'];
        $name = $data['name'];
        $family = $data['family'];
        $userName = $data['userName'];
        $token = sha1($data['userName']);
        $age = $data['age'];
        $password = $data['password'];
        $query = "UPDATE users SET name = '$name', family = '$family', age = '$age', token = '$token', userName = '$userName', password = '$password' WHERE id =" . $id;
        $this -> conn -> query($query);
    }
}