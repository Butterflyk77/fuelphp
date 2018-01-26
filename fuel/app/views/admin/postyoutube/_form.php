<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('', 'title', array('class'=>'control-label')); ?>
				<?php echo Form::input('title', Input::post('title', isset($postyoutube) ? $postyoutube->title : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Title')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Subtitle', 'subtitle', array('class'=>'control-label')); ?>
				<?php echo Form::input('subtitle', Input::post('subtitle', isset($postyoutube) ? $postyoutube->subtitle : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Subtitle')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Catalog', 'catalog', array('class'=>'control-label')); ?>
				<?php echo Form::select('catalog', Input::post('catalog', isset($postyoutube) ? $postyoutube->catalog : ''),  array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'all' => 'ALL')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Youtubeid', 'youtubeid', array('class'=>'control-label')); ?>
				<?php echo Form::input('youtubeid', Input::post('youtubeid', isset($postyoutube) ? $postyoutube->youtubeid : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Youtubeid')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body', array('class'=>'control-label')); ?>
				<?php echo Form::textarea('body', Input::post('body', isset($postyoutube) ? $postyoutube->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Body')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
