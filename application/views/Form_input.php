<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Tambah</h3>
    <table>
        <form action="<?php  echo base_url('User_login/aksitambah')?>" method="post">
        <tr>
            <td>Nama Pertama</td>
            <td>:</td>
            <td><input type="text" name="namaper" required></td>
        </tr>
        <tr>
            <td>Nama Kedua</td>
            <td>:</td>
            <td><input type="text" name="namaked" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="simpan" required></td>
        </tr>
    

        </td>
        </form>
    </table>
</body>
</html>