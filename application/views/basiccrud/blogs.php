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
            <h2>
            <a href="<?php echo site_url('/basiccrud/Blog/detail/' . $val['url']);?>">
            <?php echo $val['judul'];?>
            </a>
    </h2>
    <?php echo $val['konten'];
    endforeach;
    ?>
</body>
</html>