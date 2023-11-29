<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $data['name'] ?>">
        <div class="form-group">
            <label for="">Tên sách</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenSP" value="<?=$data['name']?>">
        </div>
        <div class="form-group">
      <label for="">Bút danh</label>
      <input type="text" class="form-control" id="" placeholder="" name="Butdanh" value="<?=$data['note']?>">
    </div>
     <div class="form-group">
      <label for="">Thể loại</label>
      <br>
      
      <input type="checkbox" id="vehicle1" name="phieuluu" value="phieuluu" <?php if (strpos($data['theloai'], "phieuluu") === false) {
      }else echo "checked";?> >
      <label for="phieuluu"> Phiêu lưu</label><br>
      <input type="checkbox" id="vehicle2" name="langman" value="langman" <?php if (strpos($data['theloai'], "langman")) echo "checked";?>>
      <label for="langman"> Lãng mạn</label><br>
      <input type="checkbox" id="vehicle3" name="doithuong" value="doithuong" <?php if (strpos($data['theloai'], "doithuong")) echo "checked";?>>
      <label for="doithuong"> Đời thường</label><br>
       <input type="checkbox" id="vehicle4" name="tieuthuyet" value="tieuthuyet" <?php if (strpos($data['theloai'], "tieuthuyet")) echo "checked";?>>
      <label for="tieuthuyet"> Tiểu thuyết</label><br>
       <input type="checkbox" id="vehicle5" name="khoahoc" value="khoahoc" <?php if (strpos($data['theloai'], "khoahoc")) echo "checked";?>>
      <label for="khoahoc">Khoa học</label><br>
      <input type="checkbox" id="vehicle6" name="treem" value="treem" <?php if (strpos($data['theloai'], "treem")) echo "checked";?>>
      <label for="treem">Trẻ em</label><br>
       <input type="checkbox" id="vehicle7" name="nghethuat" value="nghethuat" <?php if (strpos($data['theloai'], "nghethuat")) echo "checked";?>>
      <label for="nghethuat">Nghệ thuật</label><br>
    </div>
        <div class="form-group">
            <label for="">Ảnh bìa</label>
            <img src="../views/images/<?=$data['img']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?=$data['img']?>">
        </div>
        <div class="form-group">
      <label for="">file sách</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
    </div>
       <div class="form-group">
      <label for="">Độ dài</label>
      <input type="number" class="form-control" id="" placeholder="" name="Dodai" value="<?=$data['dodai']?>">
    </div>
        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="MoTa"><?=$data['gioithieu']?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    