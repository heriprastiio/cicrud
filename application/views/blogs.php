<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru Codepolitan</h1>
    <?php foreach ($blogskey as $key=> $val): ?>
        <div class="blog">
            <h2><?php echo $val['title']; ?></h2>
            <?php echo $val['content'];
            endforeach;
            ?>
            
</body>
</html>