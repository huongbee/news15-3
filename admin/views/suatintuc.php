<script src="public/ckeditor/ckeditor.js"></script>
<div class="panel-heading"><b>Sửa tin tức</b>
</div>

<?php

$loaitin = $data['loaitin'];
$tintuc = $data['tintuc'];

include('../inc/function.php');

if(isset($_POST['luu'])){

    $id_loai = $_POST['loaitin'];
    $tieude = $_POST['tieude'];
    $tieudekhongdau = changeTitle($tieude);
    $tomtat = $_POST['summary'];
    $noidungdaydu = $_POST['content'];
    if($_FILES['hinh']['error']==0){
        $hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], "../public/images/tintuc/$hinh");
    }
    else{
        $hinh = '';
    }

    
    if($_POST['noibat'] == 'on'){
        $noibat = 1;
    }
    else{
        $noibat = 0;
    }
    $id_tin = $_GET['id'];
    $controller = new AdminController();
    $tin = $controller->postUpdateNews($id_tin,$id_loai,$tieude,$tieudekhongdau,$tomtat,$noidungdaydu,$hinh,$noibat );
}






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
?>
<?php
if(isset($_COOKIE['khongthanhcong'])){
?>
<div class="fixed-top alert alert-danger" style="z-index: 2000; position: fixed;right:10px;bottom: 10px;">
    <?=$_COOKIE['khongthanhcong']?>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<?php
}
?>
<div class="panel-body">
<form class="form-horizontal" method="POST" enctype="multipart/form-data">
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Loại tin:</label>
    <div class="col-sm-10">
      <select class="form-control" name="loaitin">
      <?php 
	      foreach($loaitin as $loai){

	      ?>
	      	<option value="<?=$loai->id?>"
            <?php if($tintuc->idLoaiTin == $loai->id){echo 'selected';}?>  > 
              <?=$loai->Ten?>
            
          </option>
	      	<?php
	      	}
	      	?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tiêu đề:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tieude" value="<?=$tintuc->TieuDe?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Nội dung tóm tắt:</label>
    <div class="col-sm-10"> 
      <textarea name="summary" class="form-control" rows="5
      "><?=$tintuc->TomTat?></textarea>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nội dung đầy đủ:</label>
    <div class="col-sm-10">
      <textarea name="content" id="content" class="form-control"><?=$tintuc->NoiDung?></textarea>
      <script>
      	CKEDITOR.replace('content'); 
      </script>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Hình :</label>
    <div class="col-sm-10"> 
      <input type="file" name="hinh">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Nổi bật :</label>
    <div class="col-sm-10"> 
      <input type="checkbox" name="noibat" <?php if($tintuc->NoiBat==1){ echo 'checked';}?> >
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="luu"  class="btn btn-default">Lưu</button>
    </div>
  </div>
</form>
</div>