<h2>Listing Postarticles</h2>
<br>
<?php if ($postarticles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>標題</th>
			<th>子標題</th>
			<th>文章分類</th>
			<th>您所選擇的PDF</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($postarticles as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->subtitle; ?></td>
			<td><?php echo $item->catalog; ?></td>
			<td><?php echo $item->select_pdf; ?>
			<?php 
				$a = $pdffiles[$item->select_pdf];
				echo $a;
				?>
				</td>
			<td>
				<?php echo Html::anchor('admin/postarticle/edit/'.$item->id, '編輯'); ?> |
				<?php echo Html::anchor('admin/postarticle/delete/'.$item->id, '刪除', array('onclick' => "return confirm('真的嗎?要刪掉了喔喔喔QQ')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>沒有東西QQ</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/postarticle/create', '新增新的文章', array('class' => 'btn btn-success')); ?>

</p>
