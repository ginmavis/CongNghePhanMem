<?php 

class  User extends Controller{
    
    public $ModelUser;
    
    public function __construct()
    {
        $this->ModelUser= $this->model("UserModel");
        
    }
     public function SayHi(){
        $this->view("materpage",[
            "page" => "home"
        ]);
    }
    public function login(){
    $this->view("pages/user/login");
    }
    
    public function register(){
    $this->view("pages/user/register");
    }
    public function KhachHangDangKi(){
        if(isset($_POST['btnregister'])){
           $phone = $_POST['phone'];
           $password = $_POST["password"];
           $password = password_hash($password,PASSWORD_DEFAULT);
           $name = $_POST["name"];
           $email = $_POST["email"];
           $birth = $_POST['birth'];
           $address = $_POST['address'];
          $kq= $this->ModelUser->AddUser($name,$birth,$email,$address,$phone,$password);
        $this->view("pages/user/register",[
        "page" => "register", 
        "result" =>$kq
        ]);

        }
    }
    public function CheckLogin(){
        if(isset($_POST['btnlogin'])){
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $kq= $this->ModelUser->CheckLoginUser($phone,$password);
            $kq = json_decode($kq,true);
            if($kq["kq"] == "true" ){
            
            $_SESSION['UserLogin'] = $kq["kq"];
            $_SESSION['UserPass'] = $password;
            $_SESSION['UserData'] = $kq["data"][0];
        // 
            $this->view("UserManage",[
                "page"=>"account",
                "user"=>$kq["data"][0],
            "ListKhoa" =>$this->ModelUser->GetList('department'),
            ]);
        

        }else{
            $this->view("pages/user/login",[
                'user'=>$kq["data"][0]
            ]);
        }}}

    // info
    public function info(){
    $this->view("UserManage",[
        "page"=>"account"
    ]);
    }
    // dat lich
      public function datlich(){
    $kq = $this->ModelUser->GetList('department');    
    $this->view("UserManage",[
        "page"=>"datlich",
        "listkhoa"=>$kq
    ]);
    }

       public function nguoidungdatlich(){
        $id_user= $_POST['id_user'];
        
        $id_department= $_POST['id_department'];
        $id_doctor = $_POST['id_doctor'];
        $id_speciality= $_POST['id_speciality'];
        
        $data_date= $_POST['data_date'];
        $data_time = $_POST['data_time'];

        foreach ( $id_speciality as $key){
           $kq= $this->ModelUser->insertOrder($id_department,$id_doctor,$id_user,$key,$data_date,$data_time);
        }
       
        echo "Đặt lịch thành công"; 
    }


    // lich da dat
  public function lichdadat(){
      $kq = $this->ModelUser->lichdadat();
    $this->view("UserManage",[
        "page"=>"lichdadat",
        "lichdadat"=>$kq
    ]);
    }

    
    public function lichdadat_search_date(){
     
        $date = $_POST['date'];
        $kq = $this->ModelUser->lichdadat_check_date($date);
        echo $kq;
    }
    public function lichdadat_remove(){
        $id = $_POST['id_remove'];
        $kq = $this->ModelUser->lichdadat_remove($id);
        echo $kq;
    }
// 
    //lich su kham
      public function lichsukham(){
    $this->view("UserManage",[
        "page"=>"lichsukham"
    ]);
    }
    //doi mat khau
   public function doimk(){
    $this->view("UserManage",[
        "page"=>"doimk"
    ]);
    }
    public function changePass(){
        $id_user = $_POST['id'];
        $newPass = $_POST['newPass'];
        $kq = $this->ModelUser->doimk($id_user,$newPass);
        if($kq){
          echo "Đổi mật khẩu thành công";  
        }
        else{
            echo "Đổi mật khẩu thất bại";        }
  
    }
    // 

}

?>