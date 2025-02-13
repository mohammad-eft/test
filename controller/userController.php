<?php


// class userController{
//     public static $modelUser;
//     public function modelUser(){
//         return container :: resolve(modelUser::class)();
//     }
//     public function getSelect(){
//         return $this -> modelUser() -> getSelect();
//     }
//     public function find($id){
//         return $this -> modelUser() -> find($id);
//     }
//     public function goToHome(){
//         loadViewUser::index("home");
//     }
//     public function index($address, $id = null){
//         if ($address == "/router_MVC/view/user/viewUser") {
//             loadViewUser::index($address, $this -> getSelect());
//         }
//         // if ($address == "home" || $address == "") {
//         //     loadViewUser::index("home");
//         // }
//         if ($address == "/router_MVC/view/user/userForm") {
//             loadViewUser::index($address);
//         }
//         if ($address == "editUserForm") {
//             loadViewUser::index($address, $this -> find($id));
//         }
//     }
//     public function insert($data){
//         $this -> modelUser() -> insert($data);
//     }
//     public function update($id){
//         $this -> modelUser() -> update($id);
//     }
//     public function delete($id){
//         $this -> modelUser() -> delete($id);
//     }
// }



// !-------------------------------------------------

interface userControllerInterface{}



class userController implements userControllerInterface{
    public function modelUser(){
        container :: bind("modelUser", modelUser :: class);
        return container :: singleton(modelUser::class);
    }
    public static function loginUserController(){
        container :: bind(loginUserController :: class, loginUserController :: class);
        return container :: resolve(loginUserController :: class);
    }
    public function getSelect(){
        return $this -> modelUser() -> getSelect();
    }
    public function find($id){
        return $this -> modelUser() -> find($id);
    }
    public function goToHome(){
        loadViewUser::index("home");
    }
    public function editUserForm($id){
        loadViewUser::index("editUserForm", $this -> find($id));
    }
    public function viewUser(){
        loadViewUser::index("viewUser", $this -> getSelect());
    }
    public function login(){
        loadViewUser::index("login");
    }
    public function userForm(){
        loadViewUser::index("userForm");
    }
    public function insert($data){
        $this -> modelUser() -> insert($data);
        $this -> loginUserController() -> insert($data);
    }
    public function update($data){
        $this -> modelUser() -> update($data);
    }
    public function delete($id){
        $this -> modelUser() -> delete($id);
    }
    public function profile($id){
        loadViewUser :: index("profile", $this -> find($id));
    }
}