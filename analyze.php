<?php

interface analyzeInterface{}

class analyze implements analyzeInterface{
    public static function getId($route, $request){
        $arr = [];
        for($i = 0; $i < count($route); $i++){
            if($route[$i] != $request[$i]){
                $start = strpos($route[$i], "{");
                $end = strpos($route[$i], "}");
                $param = substr($route[$i], $start + 1, - 1);
                $arr [$param]= $request[$i];
            }
        }
        return $arr;
    }
    public static function checkFalse($rout){
        if($rout == "{id}"){
            return true;
        }
        
        if($rout == "{id}"){
            return true;
        }
    }
    public static function check($routListArray, $requestArray){
        $num = 0;
        for($i = 0; $i < count($routListArray); $i++){
            if($routListArray[$i] == $requestArray[$i]){
                $num += 1;
            } 
            if($routListArray[$i] != $requestArray[$i]){
                $r = self :: checkFalse($routListArray[$i]);
                if($r){
                    $num += 1;
                }
            }
        }
        if(count($requestArray) == $num){
            return true;
        }
    }
    public static function request(array $requestArr){
        $sincArray = [];

        foreach(routerList :: routes() as $key => $value){
            $routListArr = explode("/", $key);
            if (count($routListArr) == count($requestArr)) {
                $sincArray [$key]= $routListArr;
                $r = self :: check($routListArr ,$requestArr, $key);
                if($r){
                    return [$value, self :: getId($routListArr, $requestArr)];
                }
            }
        }
    }
}