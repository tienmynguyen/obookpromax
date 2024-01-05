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
       
        
        $maxid = $this->duyetsach_model->getmaxid() ;
        $max = $maxid['max(id)'] + 1;
        
        $data2 = $this->duyetsach_model->find($_GET['id']);

            $old_location = "../views/images/chuakiemduyet/".$data2['img'];
            $new_location = "../views/images/trangbia/".$data2['img'];
            $fn = "".$data2['img'];

            
            if (file_exists($new_location)) {
                $path_parts = pathinfo($new_location);
                $extension = isset($path_parts['extension']) ? '.' . $path_parts['extension'] : '';
                $filename = $path_parts['filename'];
                 $data2['img'] = "trangbia/" . $filename;
                $fn = $filename;
                $counter = 1;
                while (file_exists($new_location)) {
                    $new_location = "../views/images/trangbia/" . $filename . '_' . $counter . $extension;
                    $fn = $filename.'_'.$counter . $extension;
                    $counter++;
                    
                }
            }

            if (copy($old_location, $new_location)) {
                echo 'File đã được di chuyển hoặc đổi tên thành công!'.$fn;
                $data2['img'] = "trangbia/".$fn;
            } 
            //file sach 
             $old_location = "../views/images/chuakiemduyet/".$data2['file'];
            $new_location = "../views/reading/samples/docs/sach/".$max.'.pdf';
            $fn = "";

            
            if (file_exists($new_location)) {
                $path_parts = pathinfo($new_location);
                $extension = isset($path_parts['extension']) ? '.' . $path_parts['extension'] : '';
                $filename = $path_parts['filename'];
            }

            if (copy($old_location, $new_location)) {
                echo 'File đã được di chuyển hoặc đổi tên thành công!';
            } 

        
        $query = "INSERT INTO thuvien (id,name, note, img, dodai, theloai, gioithieu) VALUES ('".$max."','".$data2['name']."', '".$data2['note']."','".$data2['img']."','".$data2['dodai']."','".$data2['theloai']."','".$data2['gioithieu']."');";
        $id = $_GET['id'];
        $this->duyetsach_model->duyet($query,$id,$data2['userid'],$max);
        
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
