<?php

interface analyzeInterface{}

class analyze implements analyzeInterface{
    public static function request(string $request, array $requestArr, array $post){
        $data = routerList :: routes($request, $post);
        echo "data : ";
        var_dump($data);
        echo "</br><hr>";
        echo "requestArr : ";
        var_dump($requestArr);
        echo "</br><hr>";
        // $requestStr = explode("/", $requestArr);
        foreach($data as $key => $value){
            $str = explode("/", $key);
            if (count($str) === count($requestArr)) {
                echo "str : ";
                var_dump($str);
                echo "</br><hr>";
                // echo $key."</br>";
                // print_r($value);
                // echo "</br><hr></br>";

                $bool = str_contains($key, "{");
                echo "bool : ";
                var_dump($bool);
                echo "</br><hr>";
                if($bool){
                    $singleRouteArray = explode('/', $key);
                    foreach($singleRouteArray as $index => $array){
                        $c = str_contains($array , "{");
                        if($c){
                            $x = $index;
                            $start = strpos($key, "{");
                            $end = strpos($key, "}");
                            $param = substr($key, $start + 1, - 1);
                            if(isset($requestArr[$x])){
                                echo "😂😂";
                                // // id is :
                                // // باید به متد پرایوت روتس فرستاده شود اما چطور؟
                                // $routParams = [$param => $requestArr[$x]];
                                // // به روتر فرستاده بشه
                                // routerList :: privateRoutes($routParams, $post);
                            }
                            echo "print_r array : ";
                            print_r($array);
                            echo "</br>";
                        }
                    }
                }
            }
        }
    }
}