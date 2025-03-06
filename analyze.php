<?php

interface analyzeInterface{}

// class analyze implements analyzeInterface{
//     public static function request(string $request, array $requestArr, array $post){
//         $data = routerList :: routes($request, $post);
//         // echo "data : ";
//         // var_dump($data);
//         // echo "</br><hr>";
//         // echo "requestArr : ";
//         // var_dump($requestArr);
//         // echo "</br><hr>";
//         // $requestStr = explode("/", $requestArr);
//         foreach($data as $key => $value){
//             $str = explode("/", $key);
//             if (count($str) === count($requestArr)) {
//                 // echo "str : ";
//                 // var_dump($str);
//                 // echo "</br><hr>";
//                 // echo $key."</br>";
//                 // print_r($value);
//                 // echo "</br><hr></br>";

//                 $bool = str_contains($key, "{");
//                 echo "bool : ";
//                 var_dump($bool);
//                 echo "</br><hr>";
//                 if($bool){
//                     $singleRouteArray = explode('/', $key);
//                     foreach($singleRouteArray as $index => $array){
//                         $c = str_contains($array , "{");
//                         if($c){
//                             $x = $index;
//                             $start = strpos($key, "{");
//                             $end = strpos($key, "}");
//                             $param = substr($key, $start + 1, - 1);
//                             echo "index : ".$index."</br>";
//                             if(isset($requestArr[$x])){
//                                 print_r($requestArr);
//                                 echo "😂😂";
//                                 // // id is :
//                                 // // باید به متد پرایوت روتس فرستاده شود اما چطور؟
//                                 // $routParams = [$param => $requestArr[$x]];
//                                 // // به روتر فرستاده بشه
//                                 // routerList :: privateRoutes($routParams, $post);
//                                 echo "str : ";
//                                 print_r($str);
//                                 echo "</br><hr>";
//                                 echo "print_r array : ";
//                                 print_r($array);
//                                 echo "</br>";
//                                 // return;
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//     }
// }



class analyze implements analyzeInterface{
    // public static $error=[];
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
                // $bool = str_contains($key, "{");
                // echo "bool : ";
                // var_dump($bool);
                // echo "</br><hr>";
                // if($bool){
                //     $singleRouteArray = explode('/', $key);
                //     foreach($singleRouteArray as $index => $array){
                //         $c = str_contains($array , "{");
                //         if($c){
                //             $x = $index;
                //             $start = strpos($key, "{");
                //             $end = strpos($key, "}");
                //             $param = substr($key, $start + 1, - 1);
                //             echo "index : ".$index."</br>";
                //             if(isset($requestArr[$x])){
                //                 print_r($requestArr);
                //                 echo "😂😂";
                //                 echo "str : ";
                //                 print_r($str);
                //                 echo "</br><hr>";
                //                 echo "print_r array : ";
                //                 print_r($array);
                //                 echo "</br>";
                //             }
                //         }
                //     }
                // }
            }
        }
        // var_dump(self :: $error);
    }
}