<?php 
class DB{
    public $con;
    protected $server = "localhost";
    protected $username  = "root";
    protected $password = "root";
    protected $dbname = "clinic";

    public function __construct()
    {
        $this->con = mysqli_connect($this->server,
        $this->username,
        $this->password,
        $this->dbname);
    mysqli_select_db($this->con,$this->dbname);
    mysqli_set_charset($this->con,"utf8");
    }
    
}

?>