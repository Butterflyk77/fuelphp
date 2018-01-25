<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('標題', 'title', array('class'=>'control-label')); ?>
				<?php echo Form::input('title', Input::post('title', isset($postarticle) ? $postarticle->title : ''), array('class' => 'col-md-8 form-control', 'placeholder'=>'標題')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('子標題', 'subtitle', array('class'=>'control-label')); ?>
				<?php echo Form::input('subtitle', Input::post('subtitle', isset($postarticle) ? $postarticle->subtitle : ''), array('class' => 'col-md-8 form-control', 'placeholder'=>'子標題')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('文章分類', 'catalog', array('class'=>'control-label')); ?>
				<?php echo Form::select('catalog',Input::post('catalog', isset($postarticle) ? $postarticle->catalog : ''), array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'all' => 'ALL') ); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('請選擇您要的PDF', 'select_pdf', array('class'=>'control-label')); ?>
				<?php echo Form::select('select_pdf', Input::post('select_pdf', isset($postarticle) ? $postarticle->select_pdf: $current_user->id), $pdffiles,array('class' => 'col-md-8 form-control', 'placeholder'=>'請選')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '存檔', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>