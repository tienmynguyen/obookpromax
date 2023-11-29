<?php
require_once("MVC/models/duyetsach.php");
class DuyetsachController
{
    var $duyetsach_model;
     var $conn;
    public function __construct()
    {
        $this->duyetsach_model = new Duyetsach();
         $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 1) {
                $id = 0;
            }
            $data = $this->duyetsach_model->trangthai($id);
        } else {
            $data = $this->duyetsach_model->All();
        }
        require_once("MVC/Views/Admin/index.php");
    }
    function xetduyet()
    {
        $data = array(
            'id' => $_GET['id'],
            'TrangThai' => 1,
        );
        // $this->duyetsach_model->update($data);
       
        
        $data2 = $this->duyetsach_model->find($_GET['id']);
        $maxid = $this->duyetsach_model->getmaxid() ;
        $max = $maxid['max(id)'] + 1;
        $query = "INSERT INTO thuvien (id,name, note, img, dodai, theloai, gioithieu) VALUES ('".$max."','".$data2['name']."', '".$data2['note']."','".$data2['img']."','".$data2['dodai']."','".$data2['theloai']."','".$data2['gioithieu']."');";

        $id = $_GET['id'];
        $this->duyetsach_model->duyet($query,$id);
        
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->duyetsach_model->delete($_GET['id']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->duyetsach_model->chitietduyetsach($id);
        require_once("MVC/Views/Admin/index.php");
    }
}
