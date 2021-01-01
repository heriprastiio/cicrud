<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo base_url('/codepolitan/blog/edit/'.$blog['id']); ?>">
	<h1>Form Edit Artikel</h1>
	<div>
		<label>Judul</label>
		<input type="text" name="judul" value="<?php echo $blog['title'];?>">
	</div>
	<div>
		<label>URL</label>
		<input type="text" name="link"  value="<?php echo $blog['url'];?>">
	</div>
	<div>
		<label>Konten</label>
		<textarea name="konten" cols="30" rows="10" >
		<?php echo $blog['content'];?>
		</textarea>
	</div>
	<button type="submit">Simpan Artikel</button>
</form>
</body>
</html>
