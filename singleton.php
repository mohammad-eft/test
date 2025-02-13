<?php

// class singleton{
//     public static $obj = [];
//     private function __construct(){}
//     private function __clone(){}
//     public static function makeObject($className, $obj){
//         if (!array_key_exists($className, self::$obj)) {
//             $test = self::$obj [$className]= new $obj;
//         }
//         return self::$obj[$className];
//     }
// }



// !---------------------------------------------------------------------------------------------------------------



class singleton{
    public static $obj = [];
    private function __construct(){}
    private function __clone(){}
    public static function makeObject($className, $bool){
        if($bool){
            self :: $obj [$className]= new $className;
        } else {
            return new $className;
        }
        return self :: $obj[$className];
    }
}