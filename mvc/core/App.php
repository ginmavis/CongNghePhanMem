<?php 
class App{
    public $controller = "Home" ;
    public $action = "SayHi";
    public $params = [];
    public function __construct()
    {
        //get url
        $arr  = $this->UrlProcess();
        
        //controller
        if(isset($arr[0])){
            if(file_exists("./mvc/controllers/". $arr[0].".php")){
                $this->controller = $arr[0];
                //huy $arr[0] de xu li params
                unset($arr[0]);
                
            }
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller,$this->action],$this->params);
    } 
    public function UrlProcess(){
        if(isset($_GET["url"])){
        $url = $_GET["url"];
        return explode("/",filter_var(trim($url,"/")));
        }
    }


}

?>