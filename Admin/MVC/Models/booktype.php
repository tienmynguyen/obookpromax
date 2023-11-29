<?php
require_once("model.php");
class Booktype extends Model
{
    var $table = "thuvien";
    var $contens = "id";
    function type($id){
        $query = "SELECT * FROM thuvien t join booktype b on t.id=b.bookid WHERE b.typeid = ".$id;

        require("result.php");

        return $data;
    }
    function chitietbooktype($id){
        $query = "SELECT * FROM thuvien t join booktype b on t.id=b.bookid WHERE t.id = ".$id;

        require("result.php");
        
        return $data;
    }
}