<?php 
    require_once("MVC/Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        // public function login()
        // {
        //     require_once("MVC/Views/login/login.php");
        // }
        // public function login_action()
        // {
        //     $this->login_model->login_action();
        // }
        public function admin()
        {
            $data_tksp = $this->login_model->tk_sanpham();
           

            $data_spcd = $this->login_model->tk_sanphamchuaduyet();

            $m = date("m");

           
            $y = "20".date("y");

           

            $data_nguoidung = $this->login_model->tk_nguoidung(0);

            $data_nhanvien = $this->login_model->tk_nguoidung(2);
            require_once("MVC/Views/Admin/index.php");
        }
        // public function logout()
        // {
        //     $this->login_model->logout();
        // }
    }
?>