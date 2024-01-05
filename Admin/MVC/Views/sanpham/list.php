<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<a href="?mod=sanpham&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Tác giả</th>
      <th scope="col">Độ dài</th>
      <th scope="col">Time Upload</th>
      <th scope="col">File</th>
      <th scope="col">Giới thiệu</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['name'] ?></td>
        <td><?= $row['note'] ?></td>
        <td><?= $row['dodai'] ?></td>
        <td><?= $row['ngaydang'] ?></td>
        <td><a href="../views/reading/samples/docs/sach/<?php echo $row['id']?>.pdf">pdf</a></td>
        <td><?= $row['gioithieu'] ?></td>
        <td>
          
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=sanpham&act=edit&id=<?= $row['id'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=sanpham&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>