<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<div class="panel-heading"><b>Danh sách tin tức</b>
</div>
<div class="panel-body">
  <?php


  $tintuc = $data['tintuc'];
  //print_r($tintuc);


  ?>

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
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
        foreach($tintuc as $tin){


        ?>
            <tr>
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
                <td><a href="editnews.php?id=<?=$tin->id?>">Sửa</a> | Xóa</td>
            </tr>
        <?php
        }
        ?>
        </tbody>

    </table>



</div>
