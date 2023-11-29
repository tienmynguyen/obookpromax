<?php
require("model.php");
class sanpham extends model
{
    var $table = "thuvien";
    var $contens = "id";
   
    function loaisp(){
        $query = "select * from type ";
        require("result.php");
        return $data;
    }
    
}
