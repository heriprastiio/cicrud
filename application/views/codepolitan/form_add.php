<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php echo form_open_multipart();?>
	<div>
		<label>Judul</label>
		<input type="text" name="judul">
	</div>
	<div>
		<label>URL</label>
		<input type="text" name="link">
	</div>
	<div>
		<label>Konten</label>
		<textarea name="konten" cols="30" rows="10"></textarea>
	</div>
	<div>
		<label>Upload Cover</label>
		<?php echo form_upload('content', null, 'class="form-control"')?>;
	</div>
	<button type="submit">Simpan Artikel</button>
</form>
</body>
</html>
