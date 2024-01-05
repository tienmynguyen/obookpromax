
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Noi dung cmt</th>
      <th scope="col">Nguoi cmt</th>
       <th scope="col">Sach cmt</th>
      <th scope="col">Noi dung report</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
         <td><?= $row['cmt'] ?></td>
        <td><?= $row['user'] ?></td>
          <td><?= $row['name'] ?></td>
       
        
        <td><?= $row['ctreport'] ?></td>
        <td>
          <a href="?mod=cmt&act=ban&id=<?= $row['userid'] ?>" class="btn btn-success" >Ban</a>
          <a href="?mod=cmt&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>