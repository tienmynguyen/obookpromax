<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
   
    <div class="form-group">
      <label for="">Tên sách</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP">
    </div>
     <div class="form-group">
      <label for="">Bút danh</label>
      <input type="text" class="form-control" id="" placeholder="" name="Butdanh">
    </div>
     <div class="form-group">
      <label for="">Thể loại</label>
      <br>
      <input type="checkbox" id="vehicle1" name="phieuluu" value="phieuluu">
      <label for="phieuluu"> Phiêu lưu</label><br>
      <input type="checkbox" id="vehicle2" name="langman" value="langman">
      <label for="langman"> Lãng mạn</label><br>
      <input type="checkbox" id="vehicle3" name="doithuong" value="doithuong">
      <label for="doithuong"> Đời thường</label><br>
       <input type="checkbox" id="vehicle4" name="tieuthuyet" value="tieuthuyet">
      <label for="tieuthuyet"> Tiểu thuyết</label><br>
       <input type="checkbox" id="vehicle5" name="khoahoc" value="khoahoc">
      <label for="khoahoc">Khoa học</label><br>
      <input type="checkbox" id="vehicle6" name="treem" value="treem">
      <label for="treem">Trẻ em</label><br>
       <input type="checkbox" id="vehicle7" name="nghethuat" value="nghethuat">
      <label for="nghethuat">Nghệ thuật</label><br>
    </div>
    <div class="form-group">
      <label for="">Ảnh bìa </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
    </div>
    <div class="form-group">
      <label for="">file sách</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
    </div>
    <div class="form-group">
      <label for="">Độ dài</label>
      <input type="number" class="form-control" id="" placeholder="" name="Dodai">
    </div>
    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  
</table>