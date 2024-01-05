<?php
require_once("model.php");
class cmt extends Model
{
    var $table = "cmt";
    var $contens = "id";
    function cmt($id){
        $query = "select * from cmt where report >=1 ";

        require("result.php");

        return $data;
    }
    function chitietduyetsach($id){
        $query = "select * from cmt where id= $id ";

        require("result.php");
        
        return $data;
    }
}