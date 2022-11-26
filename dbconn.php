<?php


class dhHandler
{
    protected $servername = 'localhost';
    protected $dbusername = 'root';
    protected $dbpassword = '';
    private $dbname = 'crud';
    public $results = [];
    public $con = null;
    public $tbname = 'employee';

    public function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);
        
        if ($this->con->connect_errno) {
            $this->results['mode'] = "Database connection";
            $this->results['status'] = "Error";
            $this->results['message'] = $this->con->connect_errno;
            die("Unable to connect to database:" . $this->con->connect_errno);
        } else {
            $this->results['mode'] = "Database Connection";
            $this->results['status'] = "Success";
            $this->results['message'] = "Database Connected Successfully";
        }
    }
    public function executeQuery($sql)
    {
        // print_r(mysqli_query($this->con,'SELECT*from employee'));
        
        return mysqli_query($this->con,$sql);
    }
    // public function authenticate($supplied_host, $supplied_username, $supplied_password)
    // {
    //     if ($supplied_host == $this->servername && $supplied_username == $this->dbusername && $supplied_password == $this->dbpassword) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // /*
    //  * Data sanitization and modification before inserting to the database
    //  */
    // public function sanitize($data)
    // {
    //     $data = $this->con->real_escape_string($data);
    //     $data = strtolower($data);
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    // /*
    //  * To check if the email is in correct format
    //  */
    // public function validateEmail($email)
    // {
    //     // Remove all illegal characters from email
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //     // Validate e-mail
    //     $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    //     return $email;
    // }
    public function saveRecords($tbname,$data){
        
        if(isset($data)) {
            $username = $data['username'];
            $password = $data['password'];
            $phone = $data['contactno'];
            $email = $data['email'];
            $role = $data['role'];
        
            $insertSql= "INSERT INTO `employee`(`Username`, `Password`, `Phone`, `Email`, `Role`) VALUES ('$username','$password','$phone','$email','$role')";
            print_r($insertSql);
            // $this->executeQuery($insertSql);

            // mysqli_query($conn,"INSERT*$tbname values('$username','$password','$phone','$email','$role')");    
        }
        
    }
    public function getAllUsers()
    {
        $sql = "SELECT * from employee";

        $result = $this->executeQuery($sql);
        // print_r($result);

        $numRows = $result->num_rows;

        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }else{
            return [];
        }
    }
    // // public function showAllUsers()
    // // {
    // //     $datas = $this->getAllUsers();
    // //     foreach ($datas as $data) {
    // //         echo $data['uid'] . "<br>";
    // //         echo $data['pwd'] . "<br>";
    // //     }
    // // }
}
//Initiate dbHandler class
$db= new dhHandler();
?>