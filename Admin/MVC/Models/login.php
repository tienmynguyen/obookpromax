<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function tk_sanpham(){
        $query = "SELECT count(*) as total from thuvien";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_sanphamchuaduyet(){
        $query = "SELECT count(*) as total FROM sachcho WHERE TrangThai = 0";

        return $this->conn->query($query)->fetch_assoc();
    }
  
   
    function tk_nguoidung($id){
        $query = "SELECT count(*) as total FROM account WHERE role = $id";
        
        return $this->conn->query($query)->fetch_assoc();
    }
}
