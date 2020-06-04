<?php 
class Admin extends Controller{
    public $AdminModel;
    public function __construct()
    {
        $this->AdminModel = $this->model("UserModel");
    } 

    public function SayHi(){
        $this->view("materpage",[
            "page" => "home"
        ]);
    }
}
?>