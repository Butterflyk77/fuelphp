<h2>PDF</h2>
<br>
<hr>
<?php if ($uploadpdfs): ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th>名稱</th>
        <th>類型</th>
        <th>檔案大小</th>
    </tr>
    </thead>
<tbody>
<?php foreach ($uploadpdfs as $item): ?>
    <tr>
        <td><?php echo $item -> file_name; ?>
        </td>
        <td><?php echo $item -> type; ?></td>
        <td><?php echo $item -> size; ?></td>
        <td><?php echo Html::anchor('admin/uploadpdf/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('你確定嗎?要刪掉了喔喔喔喔')")); ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<p>沒有資料喔QQ</p>
<p>快在下面新增~~</p>
<?php endif; ?>
<p>
	<?php echo Html::anchor('admin/uploadpdf/add', '新增GOGO', array('class' => 'btn btn-success')); ?>
</p>