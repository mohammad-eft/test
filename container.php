<?php


// class container{
//     public static $container;
//     public static function bind($abstract, $concrete){
//         $closure = self :: getClosure($concrete);
//         self :: $container[$abstract] = $closure;
//     }
//     public static function getClosure($className){
//         return function () use ($className) { return new $className;};
//     }
//     public static function resolve(string $instanceName){
//         if(isset(self :: $container[$instanceName])){
//             return self :: $container[$instanceName];
//         } else {
//             self :: bind($instanceName, $instanceName);
//             return self :: $container[$instanceName];
//         }
//     }
// }


// class container{
//     public static $container;
//     public static function bind($abstract, $concrete){
//         $closure = self :: getClosure($concrete);
//         self :: $container[$abstract] = $closure;
//     }
//     public static function getClosure($className){
//         return function () use ($className) { return new $className;};
//     }
//     public static function resolve(string $instanceName){
//         if(!isset(self :: $container[$instanceName])){
//              self :: $container[$instanceName];
//         } 
//         return self :: $container[$instanceName];
//     }
// }


// class container{
//     public static $container;
//     public static $instance;
//     public static function bind($abstract, $concrete){
//         $closure = self :: getClosure($concrete);
//         self :: $container[$abstract] = $closure;
//         echo "</br>";
//         echo "----------------------------------------------------";
//         echo "</br>";
//         var_dump(self :: $container);
//         echo "</br>";
//         echo "----------------------------------------------------";
//         echo "</br>";
//     }
//     public static function getClosure($className){
//         return function () use ($className) { return new $className;};
//     }
//     public static function resolve(string $instanceName){
//         // echo "</br>";
//         // echo 'self :: $container is : ';
//         // echo "</br>";
//         // var_dump(self :: $container);
//         // echo "</br>";
//         // echo "</br>";
//         // if(!self::$instance){
//             if(isset(self :: $container[$instanceName])){
//                 self::$instance = self::$container[$instanceName];
//                 // return self :: $container[$instanceName];
//                 return singleton::makeObject(self :: $container[$instanceName], $instanceName);
//             } else {
//                 self :: bind($instanceName, $instanceName);
//                 self::$instance = self::$container[$instanceName];
//                 // return self :: $container[$instanceName];
//                 return singleton::makeObject(self :: $container[$instanceName], $instanceName);
//                 // return self::$instance;
//             }
//         // }
//     }
// }



// class container{
//     public static $container;
//     public static function bind($abstract, $concrete){
//         $closure = self :: getClosure($concrete);
//         self :: $container[$abstract] = $closure;
//     }
//     public static function getClosure($className){
//         return function () use ($className) {
//             return singleton :: makeObject($className, $className);
//             };
//     }
//     public static function resolve(string $instanceName){
//         if(isset(self :: $container[$instanceName])){
//             return self :: $container[$instanceName];
//         } else {
//             self :: bind($instanceName, $instanceName);
//             return self :: $container[$instanceName];
//         }
//     }
// }



// !-----------------------------------------------------------------------------------------------------------



interface containerInterface{
    public static function bind(string $abstraction, string $concrete);
    public static function getClosure(string $className);
    public static function resolve(string $instanceName);
}

class container extends singleton implements containerInterface{
    public static $container;
    public static function bind(string $abstraction, string $concrete){
        $closure = self :: getClosure($concrete);
        self :: $container [$abstraction]= $closure;
    }
    public static function getClosure(string $className){
        return function ($bool) use ($className) {
            return self :: makeObject($className, $bool);
        };
    }
    public static function resolve(string $instanceName, $bool = false){
        if(isset(self :: $container[$instanceName])){
            return self :: $container[$instanceName]($bool);
        } else {
            echo "$instanceName abstraction not exists!";
        }
    }
    public static function singleton(string $abstraction){
        return self :: resolve($abstraction, true);
        // return self :: makeObject($abstraction, true);
    }
}