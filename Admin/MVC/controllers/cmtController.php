<?php
require_once("MVC/models/cmt.php");
class CmtController
{
    var $cmt_model;
     var $conn;
    public function __construct()
    {
        $this->cmt_model = new cmt();
         $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    public function list()
    {
        $data = $this->cmt_model->viewreport();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/list.php");
    }
   
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->cmt_model->delete($_GET['id']);
        }
    }
    function ban(){
        if (isset($_GET['id'])) {
            $this->cmt_model->ban($_GET['id']);
        }
    }
    // function chitiet()
    // {
    //     $id = isset($_GET['id']) ? $_GET['id'] : 1;
    //     $data = $this->cmt_model->chitietCmt($id);
    //     require_once("MVC/Views/Admin/index.php");
    // }
}
