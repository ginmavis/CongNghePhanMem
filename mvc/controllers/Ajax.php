<?php
class Ajax extends Controller{
    public  $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    public function CheckExistsUser(){

        $un = $_POST['un'];
        echo $this->UserModel->CheckUserName($un);
    }
    public function GetListSpeciality(){
        $dbchuyennganh = $_POST['dbchuyennganh'];
        $idkhoa = $_POST['idkhoa'];
        $chuyennganh =  $this->UserModel->GetList_dk($dbchuyennganh,$idkhoa);
         echo $chuyennganh;
        
    }
    
public function GetListDoctor(){
    $idkhoa = $_POST['idkhoa'];
    $dbbacsi = $_POST['dbbacsi'];
    $bacsi = $this->UserModel->GetList_dk($dbbacsi,$idkhoa);
    echo $bacsi;
}
}
?>