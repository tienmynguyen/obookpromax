<?php
require_once("MVC/Models/sanpham.php");
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
        $this->sanpham_model = new sanpham();
    }
    public function list()
    {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/detail.php");
    }
    public function add()
    {
       
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/add.php");
    }
    public function store()
    {
        $target_dir = "../views/images/baikiemtragiuaki/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "baikiemtragiuaki/".basename($_FILES["HinhAnh1"]["name"]);
        }
        $theloai = "";
        if (isset($_POST['phieuluu'])) {
            $theloai = $theloai .' '.$_POST['phieuluu'];
        }
        if (isset($_POST['langman'])) {
            $theloai = $theloai .' '.$_POST['langman'];
        }
        if (isset($_POST['doithuong'])) {
            $theloai = $theloai .' '.$_POST['doithuong'];
        }
        if (isset($_POST['tieuthuyet'])) {
            $theloai = $theloai .' '.$_POST['tieuthuyet'];
        }
        if (isset($_POST['khoahoc'])) {
            $theloai = $theloai .' '.$_POST['khoahoc'];
        }
        if (isset($_POST['treem'])) {
            $theloai = $theloai .' '.$_POST['treem'];
        }
        if (isset($_POST['nghethuat'])) {
            $theloai = $theloai .' '.$_POST['nghethuat'];
        }
        $maxid = $this->sanpham_model->getmaxid();
        $max = $maxid['max(id)'] + 1;
        $data = array(
            'id' => $max,
            'name'  =>   $_POST['TenSP'],
            'note'  =>   $_POST['Butdanh'],
            'img' => $HinhAnh1,
            'dodai' =>  $_POST['Dodai'],
            'theloai'=> $theloai,
            'gioithieu' =>  $_POST['MoTa'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->sanpham_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {

         $target_dir = "../views/images/baikiemtragiuaki/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "baikiemtragiuaki/".basename($_FILES["HinhAnh1"]["name"]);
        }
         $theloai = "";
        if (isset($_POST['phieuluu'])) {
            $theloai = $theloai .' '.$_POST['phieuluu'];
        }
        if (isset($_POST['langman'])) {
            $theloai = $theloai .' '.$_POST['langman'];
        }
        if (isset($_POST['doithuong'])) {
            $theloai = $theloai .' '.$_POST['doithuong'];
        }
        if (isset($_POST['tieuthuyet'])) {
            $theloai = $theloai .' '.$_POST['tieuthuyet'];
        }
        if (isset($_POST['khoahoc'])) {
            $theloai = $theloai .' '.$_POST['khoahoc'];
        }
        if (isset($_POST['treem'])) {
            $theloai = $theloai .' '.$_POST['treem'];
        }
        if (isset($_POST['nghethuat'])) {
            $theloai = $theloai .' '.$_POST['nghethuat'];
        }
        $maxid = $this->sanpham_model->getmaxid();
        $max = $maxid['max(id)'] + 1;
        $data = array(
            'id' => $max,
            'name'  =>   $_POST['TenSP'],
            'note'  =>   $_POST['Butdanh'],
            'img' => $HinhAnh1,
            'dodai' =>  $_POST['Dodai'],
            'theloai'=> $theloai,
            'gioithieu' =>  $_POST['MoTa'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh1 == "") {
            unset($data['HinhAnh1']);
        }
        $this->sanpham_model->update($data);
    }
}
