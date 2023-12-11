<?php

session_start();
ob_start();

require("../controller/functions.php");

// todo : validations needed for admin verification

if (!isset($_POST['dangki'])) {
    
    header("location: /");
    exit;
}

require_once "../controller/database_functions.php";
$conn = db_connect();

$name = validateField($_POST['name']);
$email = validateField($_POST['email']);
$pass = validateField($_POST['pass']);
$phone = validateField($_POST['phonenumber']);

if ($name === "" || $pass === "" || $email ==="" || $phone === "") {
     $error_message = "vui lòng nhập đầy đủ thông tin để tiến hành đăng ký";
    setcookie('signup_error', $error_message, time() + 5, '/'); 
    header("location: /");
    exit;
}
$query1 = "SELECT email, pass from account";
$result1 = mysqli_query($conn, $query1);


while($row = mysqli_fetch_assoc($result1)){
    
    if ($email == $row['email']) {
        $error_message = "email đã được đăng ký trước đó";
        setcookie('signup_error', $error_message, time() + 5, '/'); 
        
      header("location: /");
       
    }
}

$query = "insert into account (user,pass,email) values ('".$name."','".$pass."','".$email."')";
$result = mysqli_query($conn, $query);
if (!$result) {
   
    echo "Empty data " . mysqli_error($conn);
    exit;
}else {
    $error_message = "Đăng ký tài khoản thành công";
    setcookie('signup_error', $error_message, time() + 5, '/'); 
    
}
header("location: /");
?>





