<?php

session_start();
ob_start();

require("../controller/functions.php");

// todo : validations needed for admin verification

if (!isset($_POST['dangnhap'])) {
    
    $_SESSION["errorArray"]["adminError"] = "Cannot Let You Enter Admin Area. Try Entering Data";
    header("location:http://localhost:3000/views/index.php");
    exit;
}

require_once "../controller/database_functions.php";
$conn = db_connect();

$name = validateField($_POST['email']);
$pass = validateField($_POST['pass']);

if ($name === "" || $pass === "") {
    
    $_SESSION["errorArray"]["adminEmpty"] = "email or Password is Blank. Try to Enter Some Valid Data";
    header("url=");
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
    
    if ($name == $row['email'] && $pass == $row['pass']) {

        setcookie("email", $name , time()+60);
        setcookie("pass", $pass , time()+60);
        $_SESSION['email'] = $name;
        $_SESSION['pass'] = $pass;
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
        
        header("location:http://localhost:3000/trangchu");
        ob_end_flush();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    sai ten dang nhap hoac mat khau
    <br>
    vui long nhap lai
    
    <a href="/"> tai day</a>
</body>
</html>
<?php 





// $_SESSION["errorArray"]["adminIncorrect"] = "Username or Password is Wrong. Try to Enter Correct Data";
//         header("url=http://localhost:3000/views/index.php");
//         $_SESSION['admin'] = false;
//         exit;
?>



