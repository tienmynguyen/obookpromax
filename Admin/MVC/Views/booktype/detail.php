<?php if(isset($data) and $data != null){ ?>

<a href="?mod=booktype&act=delete&id=<?= $data['0']['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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
      <th scope="col">Tên</th>
      <th scope="col">Tac gia</th>
      <th scope="col">Image</th>
      <th scope="col">Do dai</th>
      <th scope="col">The loai</th>
      <th scope="col">Gioi thieu</th>
      
     
      
    </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['note'] ?></td>
        <td><?= $row['img']?></td>
        
        <td><?= $row['dodai'] ?></td>
        <td><?= $row['theloai'] ?></td>
        <td><?= $row['gioithieu'] ?></td>
        
        
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>