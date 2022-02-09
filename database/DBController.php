<?php

class DBController{
    //db connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "myshopee";


    //connection property
    public $con = null;

    //constructor
    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if($this->con->connect_error) {
            echo "Fail".$this->con->connect_error;
        }

        echo "connection successfull !";
    }

    public function __destruc(){
        $this->closeConnection();
    }

    //mysqli closing connection
    protected function closeConnection() {
        if($this->con!=null) {
            $this->con->close();
            $this->con= null;
        }
    }    

}


?>