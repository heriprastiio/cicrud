<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1>Data Blog</h1>
<?php foreach($blogview as $blog=> $data):?>
<div class = "blog">
	<h2><a href="<?php echo base_url('codepolitan/Blog/index/'.$data['url']);?>"></a></h2>
	<?php echo $data['content'];
	endforeach;
	?>
</div>
</body>
</html>
