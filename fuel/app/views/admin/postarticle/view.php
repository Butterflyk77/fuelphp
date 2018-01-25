<h2>Viewing #<?php echo $postarticle->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $postarticle->title; ?></p>
<p>
	<strong>Subtitle:</strong>
	<?php echo $postarticle->subtitle; ?></p>
<p>
	<strong>Catalog:</strong>
	<?php echo $postarticle->catalog; ?></p>
<p>
	<strong>Select pdf:</strong>
	<?php echo $postarticle->select_pdf; ?>
</p>

<?php echo Html::anchor('admin/postarticle/edit/'.$postarticle->id, '編輯'); ?> |
<?php echo Html::anchor('admin/postarticle', '返回'); ?>