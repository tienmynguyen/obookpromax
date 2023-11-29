<?php 

class user extends DB{
   
    function checkuser($email,$pass){
       $conn = $this->connect();
       $stmt = $conn->prepare("SELECT * FROM account WHERE email='".$email."'AND pass='".$pass."");
       $stmt->execute();
       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq=$stmt->fetchAll();
       Var_dump($kq);
       return $kq;  
    }
}




?>