<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaND" value="<?= $data['ID']?>">
           <div class="form-group">
               <label for="">Tên</label>
               <input type="text" class="form-control" id="" placeholder="" name="Ten" value="<?= $data['name']?>">
           </div>
           <div class="form-group">
               <label for="">Tuổi</label>
               <input type="text" class="form-control" id="" placeholder="" name="age" value="<?= $data['age']?>">
           </div>
           <div class="form-group">
               <label for="">Tên Tài Khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan" value="<?= $data['user']?>">
           </div>
           <div class="form-group">
               <label for="">Mật Khẩu</label>
               <input type="Password" class="form-control" id="" placeholder="" name="MatKhau" value="<?= $data['pass']?>">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="Email" class="form-control" id="" placeholder="" name="Email" value="<?= $data['email']?>">
           </div>
           <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <img src="<?=$data['avt']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="avt" value="<?=$data['avt']?>">
        </div>
           <div class="form-group">

           <div class="form-group">
               <label for="">Mã quyền</label>
               <select id="" name="MaQuyen" class="form-control">
                    <option <?= ($data['role'] == '0')?'selected':''?> value="0"> Khách hàng</option>
                    <option <?= ($data['role'] == '1')?'selected':''?> value="1"> Quản trị viên</option>
                    <option <?= ($data['role'] == '2')?'selected':''?> value="2"> Nhân viên</option>
               </select>
           </div>
           </div>
           <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </tbody>
</table>