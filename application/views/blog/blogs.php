<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <!-- <?php print_r($blogs);?> -->
    <?php foreach($blogs as $key=> $val):?>
        <div class="blog">
            <h2><?php echo $val['judul']?></h2>
            <?php echo $val['content'];

    endforeach;
    ?>
        </div>
</body>
</html>