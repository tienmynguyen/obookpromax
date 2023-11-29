<?php
require_once("MVC/models/booktype.php");
class BooktypeController
{
    var $booktype_model;
     var $conn;
    public function __construct()
    {
        $this->booktype_model = new Booktype();
         $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
           
            $data = $this->booktype_model->type($id);
        } else {
            $data = $this->booktype_model->hd();
        }
        require_once("MVC/Views/Admin/index.php");
    }
    function delete()
    {
        if (isset($_GET['bookid']) && isset($_GET['typeid'])) {
           
            $this->booktype_model->deletetype($_GET['bookid'],$_GET['typeid']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->booktype_model->chitietbooktype($id);
        require_once("MVC/Views/Admin/index.php");
    }
}
