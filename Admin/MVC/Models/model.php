<?php
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function All()
    {
        $query = "select * from $this->table ORDER BY $this->contens DESC ";

        require("result.php");

        return $data;
        
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where $this->contens=$id";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Thêm vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=add');
        }
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        echo "<script>console.log('Debug Objects:  ".$this->contens."' );</script>";
        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];
             echo "<script>console.log('Debug Objects:  ".$query."' );</script>";
        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }
     function duyet($query,$id)
    {
        // echo "<script>console.log('Debug Objects: " . $query . "' );</script>";
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
        } else {
            setcookie('msg','Duyệt không thành công', time() + 2);
        }
        echo "<script>console.log('Debug Objects: " .$query. "' );</script>";

        $this->conn->query("DELETE from sachcho where id=$id");

          header('Location: ?mod=' . $this->table);
    }
    function getmaxid(){
        return $this->conn->query("SELECT max(id) FROM thuvien")->fetch_assoc();
    }
    function deletetype($bookid, $typeid){
        $query = "DELETE from booktype where bookid = '".$bookid."' and typeid ='".$typeid."'";
         $status = $this->conn->query($query);
         if ($status == true) {
            setcookie('msg', 'Xoá thành công', time() + 2);
        } else {
            setcookie('msg','Xoá không thành công', time() + 2);
        }
        echo "<script>console.log('Debug Objects: " .$query. "' );</script>";
         header('Location: ?mod=' . $this->table.'&id=1');
    }
    function hd(){

         header('Location: ?mod=booktype&id=1');
    }
}
