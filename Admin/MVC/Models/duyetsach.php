<?php
require_once("model.php");
class Duyetsach extends Model
{
    var $table = "sachcho";
    var $contens = "id";
    function trangthai($id){
        $query = "select * from sachcho where TrangThai = $id  ORDER BY id DESC";

        require("result.php");

        return $data;
    }
    function chitietduyetsach($id){
        $query = "select * from sachcho where id= $id ";

        require("result.php");
        
        return $data;
    }
}