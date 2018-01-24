<h2><?php echo $aboutmod->id; ?></h2>

<p>
	<strong>標題:</strong>
	<?php echo $aboutmod->title; ?></p>
<p>
	<strong>子標題:</strong>
	<?php echo $aboutmod->subtitle; ?></p>
<p>
	<strong>姓名:</strong>
	<?php echo $aboutmod->name; ?></p>
<p>
	<strong>簡介:</strong>
	<?php echo $aboutmod->body; ?></p>

<?php echo Html::anchor('admin/aboutmod/edit/'.$aboutmod->id, '編輯'); ?> |
<?php echo Html::anchor('admin/aboutmod', '返回'); ?>