<a href="?mod=duyetsach&id=1" type="button" class="btn btn-primary">Đã duyệt</a>
<a href="?mod=duyetsach&id=0" type="button" class="btn btn-primary">Chưa duyệt</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên sach</th>
      <th scope="col">Tac gia</th>
      
      
      <th scope="col">The loai</th>
    
      <th scope="col">Trạng thái</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['note'] ?></td>
        
        <td><?= $row['theloai'] ?></td>
        
        <td><?php if($row['TrangThai']==0){
            echo 'Chưa xét duyệt';
        }else{
            echo 'Đã xét duyệt';
        }
        ?></td>
        <td>
          <a href="?mod=duyetsach&act=chitiet&id=<?= $row['id'] ?>" class="btn btn-success" >Xem chi tiết</a>
          <a href="?mod=duyetsach&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>