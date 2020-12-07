<div class="col-md-12">
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Ponsel</th>
			<th>Tipe Ponsel</th>
			<th>Tahun</th>
			<th>Harga</th>
		</tr>
		</thead>
		<tbody>
<?php
$no =1;
foreach ($databases as $db) : ?>
<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $db->nama_hp;?></td>
	<td><?php echo $db->type_hp;?></td>
	<td><?php echo $db->tahun;?></td>
	<td><?php echo $db->harga;?></td>

</tr>
<?php
endforeach;
?>
		</tbody>
	</table>
</div>
</div>
