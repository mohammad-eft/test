<?php


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
    }
}