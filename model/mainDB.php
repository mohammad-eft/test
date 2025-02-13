<?php

abstract class mainDB{
    abstract public function insert($data);
    abstract public function update($data);
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "ecommerce";
    protected $conn;
    protected $table;
    public function __construct(){
        $this -> conn = new mysqli($this -> server, $this -> user, $this -> pass, $this -> dbName);
    }
    public function all(){
        $query = "SELECT * FROM {$this -> table}";
        return $this -> conn -> query($query);
    }
    public function getSelect(){
        $select = $this -> all();
        while($item = $select -> fetch_assoc()){
            $arr[] = $item;
        }
        return $arr;
    }
    public function delete($id){
        $query = "DELETE FROM {$this -> table} WHERE id =". $id;
        return $this -> conn -> query($query);
    }
    public function find($id){
        $query = "SELECT * FROM {$this -> table} WHERE id =" . $id;
        return $this -> conn -> query($query);
    }
}