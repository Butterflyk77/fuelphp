<div class="panel-body">
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
		<div class="form-group">
		<h4><?php echo Form::label('標題', 'title', array('class'=>'control-label')); ?></h4>
				<?php echo Form::textarea('title', Input::post('title', isset($aboutmod) ? $aboutmod->title : ''), array('class' => 'col-md-8 form-control', 'placeholder'=>'標題')); ?>
		</div>
		<div class="form-group">
			<h4><?php echo Form::label('子標題', 'subtitle', array('class'=>'control-label')); ?></h4>
				<?php echo Form::textarea('subtitle', Input::post('subtitle', isset($aboutmod) ? $aboutmod->subtitle : ''), array('class' => 'col-md-8 form-control', 'placeholder'=>'子標題')); ?>
		</div>
		<div class="form-group">
			<h4><?php echo Form::label('姓名', 'name', array('class'=>'control-label')); ?></h4>
				<?php echo Form::textarea('name', Input::post('name', isset($aboutmod) ? $aboutmod->name : ''), array('class' => 'col-md-8 form-control', 'placeholder'=>'姓名')); ?>
		</div>
		<div class="form-group">
			<h4><?php echo Form::label('簡介', 'body', array('class'=>'control-label')); ?></h4>
			<span>請用全形逗號隔開，<small><----可以複製這個</small></span>
			<?php echo Form::textarea('body', Input::post('body', isset($aboutmod) ? $aboutmod->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'簡介')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '儲存', array('class' => 'btn btn-primary')); ?>		</div>
			<?php echo Form::close(); ?>
</div>
