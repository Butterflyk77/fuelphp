<?php echo Form::open(array('name'=>'form_upload','action'=>'admin/uploadimg/add','enctype'=>'multipart/form-data','method'=>'post',)); ?>
     <div class="form-group row">
        <div class="col-md-12">
            <label for="exampleInputFile">圖片上傳</label>
            <span>上傳前請先確認檔案格式是否正確，必須是jpg,jpeg,gif,png其中之一</span>
            <?php echo Form::file(array('name'=>'upload','accept'=>'.jpg, .jpeg, .gif, .png')); ?>
        </div>
    </div>
 
    <div class="form-group row">
        <div class="col-md-2">
            <?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
 <?php echo Form::close(); ?>