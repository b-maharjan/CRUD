<?php
namespace Console\database;

class dhHandler{

    protected $db_host = 'localhost';
    protected $db_username = 'root';
    protected $db_password = '';
    protected $db_name='crud';
    public $results=[];
    public $con=null;



    public function __construct()
    {
        $this->con = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name);
        
        if ($this->con->connect_errno) {
            $this->results['mode']="Database connection";
            $this->results['status']="Error";
            $this->results['message']=$this->con->connect_errno;
            die ("Unable to connect to database:".$this->con->connect_errno);
        }else{
            $this->results['mode'] = "Database Connection";
            $this->results['status'] = "Success";
            $this->results['message']  = "Database Connected Successfully";
        }
    }
}
?>