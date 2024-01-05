<?php

session_start();
ob_start();
$_SESSION['is_login'] = false;
require("../controller/functions.php");

// todo : validations needed for admin verification

if (!isset($_POST['dangnhap'])) {
    
    $_SESSION["errorArray"]["adminError"] = "Cannot Let You Enter Admin Area. Try Entering Data";
    header("location: /");
    exit;
}


require_once "../controller/database_functions.php";
$conn = db_connect();

$name = validateField($_POST['email']);
$pass = validateField($_POST['pass']);

if ($name === "" || $pass === "") {
    
    $error_message = "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    setcookie('login_error', $error_message, time() + 5, '/'); 
    header("location: /");
    exit;
}

$name = mysqli_real_escape_string($conn, $name);
$pass = mysqli_real_escape_string($conn, $pass);
// $pass = sha1($pass);

$query = "SELECT * from account";
$result = mysqli_query($conn, $query);
if (!$result) {
   
    echo "Empty data " . mysqli_error($conn);
    exit;
}



while($row = mysqli_fetch_assoc($result)){
    
    if ($name == $row['email'] && $pass == $row['pass'] ) {
        
        if($row['bandate']!=NULL){
            $now = new DateTime();
        
        $bandate = new DateTime($row['bandate']);
        $interval = $now->diff($bandate);
        $daysDifference = $interval->days;

            if($daysDifference < 30){
                $banday = 30 - $daysDifference;
            }else{
                setcookie("email", $name , time()+60);
        setcookie("pass", $pass , time()+60);
        $_SESSION['email'] = $name;
        $_SESSION['pass'] = $pass;
        $_SESSION['avt'] = $row['avt'];
        $_SESSION['name'] = $row['user'];
        $_SESSION['id'] = $row['ID'];
        $_SESSION['is_login'] = true;
        if (isset($conn)) {
            mysqli_close($conn);
        }
        if($row['role']!=0){
            $_SESSION['isLogin_Admin'] = true;
            
        }else{
             $_SESSION['isLogin_Admin'] = false;
        }
        
        header("location: /trangchu");
        ob_end_flush();
            }
        }else{
            setcookie("email", $name , time()+60);
        setcookie("pass", $pass , time()+60);
        $_SESSION['email'] = $name;
        $_SESSION['pass'] = $pass;
        $_SESSION['avt'] = $row['avt'];
        $_SESSION['name'] = $row['user'];
        $_SESSION['id'] = $row['ID'];
        $_SESSION['is_login'] = true;
        if (isset($conn)) {
            mysqli_close($conn);
        }
        if($row['role']!=0){
            $_SESSION['isLogin_Admin'] = true;
            
        }else{
             $_SESSION['isLogin_Admin'] = false;
        }
        
        header("location: /trangchu");
        ob_end_flush();
        }
    }
}
if($_SESSION['is_login']==false ){
    $error_message = "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    if(isset($banday)){
         $error_message = "Tài khoản của bạn đã bị khoá. Vui lòng quay lai sau: ".$banday." ngày";
    }
    setcookie('login_error', $error_message, time() + 5, '/'); 
    header("location: /");
}
?>





