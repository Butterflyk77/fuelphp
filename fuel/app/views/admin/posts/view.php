<h2>Viewing #<?php echo $post->id; ?></h2>

<p>
	<strong>標題:</strong>
	<?php echo $post->title; ?></p>
<p>
	<strong>副標題:</strong>
	<?php echo $post->slug; ?></p>
<p>
	<strong>內文:</strong>
	<?php echo $post->summary; ?></p>
<p>
	<strong>YouTube ID:</strong>
	<?php echo $post->body; ?></p>


<?php echo Html::anchor('admin/posts/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/posts', 'Back'); ?>