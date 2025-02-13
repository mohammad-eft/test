<?php

interface loginUserControllerInterface{}

// class loginUserController implements loginUserControllerInterface{
//     public static function userController(){
//         container :: bind(userController :: class, userController :: class);
//         return container :: singleton(userController :: class);
//     }
//     public static function cookie(){
//         container :: bind(cookie :: class, cookie :: class);
//         return container :: resolve(cookie :: class);
//     }
//     public static function loginModel(){
//         container :: bind(loginModel :: class, loginModel :: class);
//         return container :: resolve(loginModel :: class);
//     }
//     public function check($data){
//         $token = sha1($data['userName']);
//         self :: cookie() -> getCoockie($token);
//         $all = self :: userController() -> getSelect();
//         $bool = false;
//         foreach($all as $data){
//             if ($data['token'] == $token) { 
//                 $bool = true;
?>
<!--                  <h1 style="text-align: center; color: green;">
//                     login successed!
//                 </h1>
//                 <h2 style="text-align: center; margin-top: 80px;">
//                     <a href="http://localhost/router_MVC/view/user/profile/<?//echo $data['id']?>" style="text-decoration: none;">
//                         👈 go to profile page 
//                     </a>
                </h2> -->
<?php
//             } 
//         }
//         if (!$bool) { 
?>
<!--                  <h1 style="text-align: center;">
                     <a href="http://localhost/router_MVC/view/user/userForm">
                        please sign up!
                     </a>
                 </h1> -->
<?php
//         }
//     }
//     public function insert($data){
//         $token = sha1($data['userName']);
//         $all = self :: userController() -> getSelect();
//         foreach($all as $val){
           
//             if ($data['userName'] == $val['userName']) {
//                 self :: loginModel() -> insert($val);
//             }
//         }
//         echo "😂😂😂";
//     }
// }


class loginUserController implements loginUserControllerInterface{
    public static function userController(){
        container :: bind(userController :: class, userController :: class);
        return container :: singleton(userController :: class);
    }
    public static function loginModel(){
        container :: bind(loginModel :: class, loginModel :: class);
        return container :: resolve(loginModel :: class);
    }
    public function check($data){
        $token = sha1($data['userName']);
        $all = self :: userController() -> getSelect();
        $bool = false;
        foreach($all as $data){
            if ($data['token'] == $token) { 
                $bool = true;
                ?>
                <h1 style="text-align: center; color: green;">
                    login successed!
                </h1>
                <h2 style="text-align: center; margin-top: 80px;">
                    <a href="http://localhost/router_MVC/view/user/profile/<?=$data['id']?>" style="text-decoration: none;">
                        👈 go to profile page 
                    </a>
                </h2>
                <?php
            } 
        }
        if (!$bool) { 
            ?>
                <h1 style="text-align: center;">
                    <a href="http://localhost/router_MVC/view/user/userForm">
                        please sign up!
                    </a>
                </h1>
            <?php
        }
    }
    public function insert($data){
        $token = sha1($data['userName']);
        $all = self :: userController() -> getSelect();
        foreach($all as $val){
           
            if ($data['userName'] == $val['userName']) {
                self :: loginModel() -> insert($val);
            }
        }
    }   
}