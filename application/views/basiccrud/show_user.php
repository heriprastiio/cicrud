<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script type="text/javascript">
		function show_confirm(act,goto) {
			if (act=="edit")
				var r = confirm("Apakah ingin dihapus?");
			else
				var r = confirm("Anda yakin untuk dihapus?");
			if (r== true){
				window.location"<?php echo base_url();?>index.php/basiccrud/userview/"+act+"/"+goto;
			}

		}

	</script>
</head>
<body>
<h2>Simple view CRUD</h2>
<table width="600" border="1" cellpadding="5">
	<tr>
		<th scope="col">Nomor</th>
		<th scope="col">First name</th>
		<th scope="col">Last name</th>
		<th scope="col">Email</th>
	</tr>
	<?php
	$no = 1;
	foreach ($userdata as $row):?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $row->firstname;?></td>
		<td><?php echo $row->lastname;?></td>
		<td><?php echo $row->email;?></td>
		<td width="40" align="left"><a href="<?php base_url('bassiccrud/Userview');?>" onclick="show_confirm('edit',<?php echo $row->firstname;?>)">Edit</a> </td>
		<td width="40" align="left"><a href="#" onclick="show_confirm('delete',<?php echo $row->firstname;?>)">Delete</a> </td>
	</tr>
	<?php endforeach;?>
	<tr>
		<td colspan="7" align="right"><a href="<?php echo base_url();?>basiccrud/userview/addform">Tambah Baru</a> </td>
	</tr>
</table>

</body>
</html>
