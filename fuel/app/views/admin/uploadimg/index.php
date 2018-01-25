<h2>圖檔</h2>
<br>
<hr>
<?php if ($uploadimgs): ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th>名稱</th>
        <th>類型</th>
        <th>檔案大小</th>
    </tr>
    </thead>
<tbody>
<?php foreach ($uploadimgs as $item): ?>
    <tr>
        <td><?php echo $item -> file_name; ?>
          <?php echo Asset::img('../../uploads/img/'.$item -> file_name, array('class'=>'img-responsive', 'style' => 'width:200px;height:auto;'));?>
        </td>
        <td><?php echo $item -> type; ?></td>
        <td><?php echo $item -> size; ?></td>
        <td><?php echo Html::anchor('admin/uploadimg/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<p>沒有資料喔QQ</p>
<p>快在下面新增~~</p>
<?php endif; ?>
<p>
	<?php echo Html::anchor('admin/uploadimg/add', '新增GOGO', array('class' => 'btn btn-success')); ?>
</p>