<?php 
class UserModel extends DB{
    
    
    public function GetList($str){
        $qr = "SELECT * from $str";
        
        $result = mysqli_query($this->con,$qr);
        $arr = array();
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return json_encode($arr);
    }
    //
     public function GetList_dk($str,$id){
        $qr = "SELECT * from $str where id_department='$id'" ;
        
        $result = mysqli_query($this->con,$qr);
        $arr = array();
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return json_encode($arr);
    }
    // getlist 1 dieu kien 
    public function GetList_1dk($dbname,$stm,$data){
        $qr = "SELECT * from $dbname where $stm='$data'" ;
        
        $result = mysqli_query($this->con,$qr);
        $arr = array();
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return json_encode($arr);
    }


    
    public function AddUser($name,$birth,$email,$address,$phone,$password){
        $qr = "INSERT INTO users VALUE
        (null,'$name','$birth','$email','$address','$phone','$password')
        ";
        $result = false;
       if(mysqli_query($this->con,$qr)){
           $result = true;
       }
       return json_encode($result);
    }

    public function CheckUserName($un){
        $qr = "SELECT id FROM users WHERE phone = '$un'";
        $result = mysqli_query($this->con,$qr);
        $kq = false;
        if(mysqli_num_rows($result)>0){
            $kq = true;
        }
        return json_encode($kq);
    }

    public function CheckLoginUser($un,$pw){
        $qr = "SELECT * FROM users WHERE phone ='$un'";
        $result = mysqli_query($this->con,$qr);
        $data = array();
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        $result1 = mysqli_query($this->con,$qr);
        $kq = false;
        if(mysqli_num_rows($result1)>0){
            if($r = mysqli_fetch_assoc($result1)){
                $CheckPass = password_verify($pw,$r['Password']);
                if($CheckPass){
                    $kq =true;
                    
                }
            }
        }
        $data1   = ["kq" =>$kq
            ,"data" => $data];
             
        return json_encode($data1);
    }

    
    public function insertOrder($id_department,$id_doctor,$id_user,$key,$data_date,$data_time){
        $rand = uniqid('',true);
        
        $qr="
        INSERT INTO `orders` (`id`, `id_department`, `id_doctor`, `id_user`, `id_speciality`, `code`, `date`, `time`, `Note`) 
        VALUES (NULL, '$id_department', '$id_doctor', '$id_user', '$key', '$rand', '$data_date', '$data_time', '')";

        $kq=mysqli_query($this->con,$qr);
        return $kq;

}
    public function doimk($id,$password){
      $password = password_hash($password,PASSWORD_DEFAULT);
        $qr="
        update users set Password = '$password' where id='$id' 
        ";
        $qr=mysqli_query($this->con,$qr);
        return $qr;
    }
        // lich da dat
    public function lichdadat(){
        $arr = array();
        $qr="SELECT orders.id as ID,users.Fullname as nameUser ,doctor.Name as nameDoctor ,department.Name as nameDepartment ,
        speciality.Name as nameSpeciality ,speciality.Price as cost ,orders.date as ngaykham,orders.time as khunggio,orders.code as code
            FROM `orders` JOIN `users` on orders.id_user=users.id  
            JOIN `department` on orders.id_department = department.id
            JOIN `speciality` on orders.id_speciality =speciality.id
            JOIN `doctor` on orders.id_doctor=doctor.id";
                    
        $result=mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($result)){
            $arr[] =  $row;
        }
        return  json_encode($arr);
    }
    // check date    
    public function lichdadat_check_date($date){
        $arr = array();
        $qr="SELECT orders.id as ID,users.Fullname as nameUser ,doctor.Name as nameDoctor ,department.Name as nameDepartment ,
        speciality.Name as nameSpeciality ,speciality.Price as cost ,orders.date as ngaykham,orders.time as khunggio,orders.code as code
            FROM `orders` JOIN `users` on orders.id_user=users.id  
            JOIN `department` on orders.id_department = department.id
            JOIN `speciality` on orders.id_speciality =speciality.id
            JOIN `doctor` on orders.id_doctor=doctor.id
            WHERE orders.date='$date'
            ";
    
        $result=mysqli_query($this->con,$qr);
        while($row = mysqli_fetch_array($result)){
            $arr[] =  $row;
        }
        return  json_encode($arr);
       
    }
     public function lichdadat_remove($id){
            $qr="DELETE FROM orders WHERE id='$id'";
        $kq = mysqli_query($this->con,$qr);
            return $kq;
        }
// 

 
}
?>