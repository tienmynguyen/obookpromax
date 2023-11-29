<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "hoadon";
    var $contens = "MaHD";
    function trangthai($id){
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitiethoadon($id){
        $query = "select ct.*, s.name as Ten from chitiethoadon as ct, thuvien as s where ct.MaSP = s.id and ct.MaHD = $id ";

        require("result.php");
        
        return $data;
    }
}