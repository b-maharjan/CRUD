<?php
include_once ('database/dbconn.php');

function test_input($data){
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $con->prepare("Select * from adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($user as $user){
        if(($user['username'] == $username) &&
        ($user['password'] == $password)) {
            header("location: validate.php");
        } else{
            echo "<script language='JavaScript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>