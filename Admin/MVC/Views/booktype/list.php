<a href="?mod=booktype&id=1" type="button" class="btn btn-primary">Xu hướng</a>
<a href="?mod=booktype&id=2" type="button" class="btn btn-primary">Mới</a>
<a href="?mod=booktype&id=3" type="button" class="btn btn-primary">Cổ điển</a>
<a href="?mod=booktype&id=4" type="button" class="btn btn-primary">Tháng</a>
<a href="?mod=booktype&id=5" type="button" class="btn btn-primary">Yêu thích nhất</a>
<a href="?mod=booktype&id=6" type="button" class="btn btn-primary">Trẻ em</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên sách</th>
      <th scope="col">Tác giả</th>
      
      
      <th scope="col">Thể loại</th>
    
      
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['note'] ?></td>
        
        <td><?= $row['theloai'] ?></td>
      
        <td>
          <a href="?mod=booktype&act=chitiet&id=<?= $row['id'] ?>" class="btn btn-success" >Xem chi tiết</a>
          <a href="?mod=booktype&act=delete&bookid=<?= $row['id'] ?>&typeid=<?= $_GET['id']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>