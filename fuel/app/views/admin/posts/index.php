<h2>YouTube新增登錄</h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>標題</th>
			<th>副標題</th>
			<th>內文</th>
			<th>YouTube ID</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/posts/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/posts/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/posts/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('你確定嗎?要刪掉了喔喔喔喔')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/posts/create', '新增貼文', array('class' => 'btn btn-success')); ?>

</p>
