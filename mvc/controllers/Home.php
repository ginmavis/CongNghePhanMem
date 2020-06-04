<?php
class Home extends Controller{ 
    public $users;
    public $home;
    public $admin;
    public function __construct(){
        $this->users= $this->model("UserModel");
    }
    public function SayHi(){
        $this->view("materpage",[
            "page" => "home"
        ]);
    }
}

?>