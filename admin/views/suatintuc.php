<script src="public/ckeditor/ckeditor.js"></script>
<div class="panel-heading"><b>Sửa tin tức</b>
</div>

<?php

$loaitin = $data['loaitin'];

?>


<div class="panel-body">
<form class="form-horizontal">
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Loại tin:</label>
    <div class="col-sm-10">
      <select class="form-control">
      <?php 
	      foreach($loaitin as $loai){

	      ?>
	      	<option><?=$loai->Ten?></option>
	      	<?php
	      	}
	      	?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tiêu đề:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tieude" value="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Nội dung tóm tắt:</label>
    <div class="col-sm-10"> 
      <textarea name="summary" class="form-control" rows="5
      "></textarea>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nội dung đầy đủ:</label>
    <div class="col-sm-10">
      <textarea name="content" id="content" class="form-control"></textarea>
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
      <input type="checkbox" name="noibat">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="luu"  class="btn btn-default">Lưu</button>
    </div>
  </div>
</form>
</div>