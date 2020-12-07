<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
</head>
<body>
    <p>Ini data user</p>
    <table>
        <tr>
            <td><b>Nomor</b</td>
            <td>Nama Pertama</td>
            <td>Nama Kedua</td>
            <td>Email</td>
        </tr>
    <?php
    $nilai= 1;
    foreach($dataorang as $row):?>
    <!-- $nilai++; -->
    <tr>
        <td><?php echo $nilai++?></td>
        <td><?= $row->firstname?></td>
        <td><?= $row->lastname?></td>
        <td><?= $row->email?></td>
        <td><a href="<?php echo base_url('/User_login/formedit/').$row->firstname?>">Edit</td>
        <td><a href="">Hapus</a></td>
    </tr>
    <?php
    endforeach;?>
    </table>
    <button onclick="document.location.href='<?php echo base_url()?>User_login/formtambah'">Tambah Data</button>
</body>
</html>