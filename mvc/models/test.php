<?php 
class test{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = 'root';
    private $dbname = 'clinic';

    private $conn ;
    private $result;

    public function connect(){
        $this->conn = new mysqli(
            $this->hostname,
            $this->username,
            $this->pass,
            $this->dbname) ;
    
    if (!$this->conn) {
    echo "Kết nối thất bại";    
        exit();
    }
    else{
        mysqli_set_charset($this->conn,'utf8');
    }
    return $this->conn;
    } 

    // thực thi câu lệnh truy vấn
    public function execute($sql){
        $this->result = $this->conn->query($sql);
        // $this->result = mysqli_query($this->conn,$sql);
        return $this->result;
    }

    //phương thức lấy dữ liệu
    public function getData(){
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    //Phuong thuc lay toan bo du lieu
    public function getAllData(){
        if(!$this->result){
            $data= 0;
        }
        else{ while($datas = $this->getData()){
            $data[]  = $datas;
        }
    }
        return $data;
    }

    //Phuong thuc dem so ban ghi

    //Phuong thuc them du lieu
    public function InssertData($hoten,$namsinh,$quequan){
        $qr = "INSERT INTO thanhvien(id,hoten,namsinh,quequan) VALUES 
        (null,'$hoten','$namsinh','$quequan')
        ";
        return  $this->execute($qr);
    }
    //update
    public function UpdateData($id,$hoten,$namsinh,$quequan){
        $qr = "UPDATE thanhvien SET 
        hoten='$hoten',namsinh='$namsinh',quequan ='$quequan'";
        return $this->execute($qr);
    }
    // phuong thuc xoa 
    public function delete($id){
        $sql = "DELETE FROM thanhvien WHERE id = '$id'";
        return $this->execute($sql);
    }


}


?>