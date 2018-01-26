<h2>Listing Postyoutubes</h2>
<br>
<?php if ($postyoutubes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Subtitle</th>
			<th>Catalog</th>
			<th>Youtubeid</th>
			<th>Body</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($postyoutubes as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->subtitle; ?></td>
			<td><?php echo $item->catalog; ?></td>
			<td><?php echo $item->youtubeid; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('admin/postyoutube/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/postyoutube/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/postyoutube/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Postyoutubes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/postyoutube/create', 'Add new Postyoutube', array('class' => 'btn btn-success')); ?>

</p>
