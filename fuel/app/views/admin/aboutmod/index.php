<?php if ($aboutmods): ?>
<div class="panel">
	<div class="panel-heading">
		<h2 class="panel-title">關於門診修改</h2>
	</div>
	<div class="panel-body">
		<?php foreach ($aboutmods as $item): ?>	
			<div class="panel">
				<div class="panel-body">
					<div class="col-xs-12">
						<h3><?php echo $item->title; ?></h3>
					</div>
				<div class="panel-body">
					<div class="col-xs-12">
						<h4><?php echo $item->subtitle; ?></h4>
					</div>					
				</div>	
				<div class="panel-body">
					<div class="col-xs-12">
					<p><?php echo $item->name; ?></p>
					</div>				
				</div>
				<div class="panel-body">
					<div class="col-xs-12">
					<p>
					<?php 
					$var = $item->body;
					$pieces = explode("，", $var);
					foreach($pieces as $element)
						{
					echo $element."，"."<br/>";
						}
					?>					
						</p>
					</div>				
				</div>
		<?php echo Html::anchor('admin/aboutmod/edit/'.$item->id, '編輯', array('class' => 'btn btn-primary')); ?> |
			</div>
	</div>
<?php endforeach; ?>
<?php endif; ?>
	</div>
</div>


