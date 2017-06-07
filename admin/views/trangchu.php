<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<div class="panel-heading"><b>Danh sách tin tức</b>
</div>
<div class="panel-body">
  <?php


  $tintuc = $data['tintuc'];
  //print_r($tintuc);


  ?>
<?php
if(isset($_COOKIE['thanhcong'])){
?>
<div class="fixed-top alert alert-success" style="z-index: 2000; position: fixed;right:10px;bottom: 10px;">
    <?=$_COOKIE['thanhcong']?>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<?php
}

if(isset($_COOKIE['khongthanhcong'])){
?>
<div class="fixed-top alert alert-danger" style="z-index: 2000; position: fixed;right:10px;bottom: 10px;">
    <?=$_COOKIE['khongthanhcong']?>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<?php
}
?>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>STT</th>
                <th width="20%">Tiêu đề</th>
                <th width="20%">Tóm tắt</th>
                <th width="20%">Nội dung</th>
                <th>Hình</th>
                <th>Nổi bật</th>
                <th>Số lượt xem</th>
                <th>Sửa | Xóa</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        $stt = 1;
        foreach($tintuc as $tin){


        ?>
            <tr>
                <td><?=$stt?></td>
                <td width="20%"><?=$tin->TieuDe?></td>
                <td width="20%"><?=$tin->TomTat?></td>
                <td width="20%"><?=$tin->NoiDung?></td>
                <td>
                    <img src="../public/images/tintuc/<?=$tin->Hinh?>"  style="width: 100px">
                </td>
                <td>
                    <input type="checkbox" <?=$tin->NoiBat==1?"checked":""?> >
                </td>
                <td><?=$tin->SoLuotXem?></td>
                <td><a href="editnews.php?id=<?=$tin->id?>">Sửa</a> | <a href="deletenews.php?id=<?=$tin->id?>">Xóa</a></td>
            </tr>
        <?php
        $stt++;
        }
        ?>
        </tbody>

    </table>



</div>
