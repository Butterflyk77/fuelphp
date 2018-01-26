<h2>Viewing #<?php echo $postyoutube->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $postyoutube->title; ?></p>
<p>
	<strong>Subtitle:</strong>
	<?php echo $postyoutube->subtitle; ?></p>
<p>
	<strong>Catalog:</strong>
	<?php echo $postyoutube->catalog; ?></p>
<p>
	<strong>Youtubeid:</strong>
	<?php echo $postyoutube->youtubeid; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $postyoutube->body; ?></p>

<?php echo Html::anchor('admin/postyoutube/edit/'.$postyoutube->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/postyoutube', 'Back'); ?>