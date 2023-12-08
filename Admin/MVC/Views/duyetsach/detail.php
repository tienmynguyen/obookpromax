<?php if(isset($data) and $data != null){ ?>
<a href="?mod=duyetsach&act=xetduyet&id=<?= $data['0']['id'] ?>" class="btn btn-success">Duyệt</a>
<a href="?mod=duyetsach&act=delete&id=<?= $data['0']['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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
      <th scope="col">Tác giả</th>
      <th scope="col">Trang bìa</th>
      <th scope="col">Độ dài</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Giới thiệu</th>
      <th scope="col">File sách</th>
      <th scope="col">Trạng thái</th>
      
    </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['note'] ?></td>
        <td><img style="max-width: 150px;" src="/views/images/chuakiemduyet/<?= $row['img']?>" alt=""></td>
        
        
        <td><?= $row['dodai'] ?></td>
        <td><?= $row['theloai'] ?></td>
        <td><?= $row['gioithieu'] ?></td>
        <td><a href="/views/images/chuakiemduyet/<?= $row['file']?>"><?= $row['file']?></a></td>
        
        <td><?php if($row['TrangThai']==0){
            echo 'Chưa xét duyệt';
        }else{
            echo 'Đã xét duyệt';
        }
        ?></td>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>