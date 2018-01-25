<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			<?php echo Form::label('標題', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'標題')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('副標題', 'slug', array('class'=>'control-label')); ?>

				<?php echo Form::input('slug', Input::post('slug', isset($post) ? $post->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'副標題')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('內文', 'summary', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('summary', Input::post('summary', isset($post) ? $post->summary : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'內文')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('YouTube ID', 'body', array('class'=>'control-label')); ?>

				<?php echo Form::input('body', Input::post('body', isset($post) ? $post->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'YouTube ID')); ?>

		</div>
		<!-- <div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($post) ? $post->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div> -->
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '儲存', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>