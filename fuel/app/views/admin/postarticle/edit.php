<h2>Editing Postarticle</h2>
<br>

<?php echo render('admin/postarticle/_form'); ?>
<p>
	<?php echo Html::anchor('admin/postarticle/view/'.$postarticle->id, '觀看'); ?> |
	<?php echo Html::anchor('admin/postarticle', '返回'); ?></p>
