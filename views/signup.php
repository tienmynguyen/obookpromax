<?php

session_start();
ob_start();

require("../controller/functions.php");

// todo : validations needed for admin verification

if (!isset($_POST['dangki'])) {
    
    header("location:http://localhost:3000/views/index.php");
    exit;
}

require_once "../controller/database_functions.php";
$conn = db_connect();

$name = validateField($_POST['name']);
$email = validateField($_POST['email']);
$pass = validateField($_POST['pass']);
$phone = validateField($_POST['phonenumber']);

if ($name === "" || $pass === "" || $email ==="" || $phone === "") {
    
    header("location:http://localhost:3000/views/index.php");
    exit;
}
$query1 = "SELECT email, pass from account";
$result1 = mysqli_query($conn, $query1);


while($row = mysqli_fetch_assoc($result1)){
    
    if ($email == $row['email']) {
        echo "email da duoc dang ki truoc do";
      
       
    }
}

$query = "insert into account (user,pass,email) values ('".$name."','".$pass."','".$email."')";
$result = mysqli_query($conn, $query);
if (!$result) {
   
    echo "Empty data " . mysqli_error($conn);
    exit;
}else {
    echo "dang ki thanh cong vui long dang nhap";
    
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
    <br>
    dang ki that bai
    <br>
   vui long dang ki lai
    
    <a href="/"> tai day</a>
</body>
</html>
<?php 


header("Refresh:1; location:http://localhost:3000/views/index.php");


// $_SESSION["errorArray"]["adminIncorrect"] = "Username or Password is Wrong. Try to Enter Correct Data";
//         header("url=http://localhost:3000/views/index.php");
//         $_SESSION['admin'] = false;
//         exit;
?>



