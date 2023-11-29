<?php
require_once("MVC/models/nguoidung.php");
class NguoiDungController
{
    var $nguoidung_model;
    public function __construct()
    {
        $this->nguoidung_model = new nguoidung();
    }
    public function list()
    {
        $data = $this->nguoidung_model->All();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/detail.php");
    }
    public function add()
    {
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/add.php");
    }
    public function store()
    {
        $data = array(
            
            'name'  =>   $_POST['Ten'],
            
            'email' =>    $_POST['Email'],
            
            'user' => $_POST['TaiKhoan'],
            'pass' => $_POST['MatKhau'],
            'role' =>  $_POST['MaQuyen'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->nguoidung_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/edit.php");
    }
    public function update()
    {
        $data = array(
            "ID" => $_POST['MaND'],
            'name'  =>   $_POST['Ten'],
            'age'  =>   $_POST['age'],
            'email' =>    $_POST['Email'],
            'user' => $_POST['TaiKhoan'],
            'pass' => ($_POST['MatKhau']),
            'role' =>  $_POST['MaQuyen'],
            
        );
       
        foreach ($data as $key => $value) {
            
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
                 
            }
           
        }
        $this->nguoidung_model->update($data);
    }
}
