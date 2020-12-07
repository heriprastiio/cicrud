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
        <form action="<?php  echo base_url('User_login/aksiedit')?>" method="post">
        <tr>
            <td>Nama Pertama</td>
            <td>:</td>
            <td><input type="text" name="namaper" value="<?php echo $datauser->firstname?>"></td>
        </tr>
        <tr>
            <td>Nama Kedua</td>
            <td>:</td>
            <td><input type="text" name="namaked" value="<?php echo  $datauser->lastname?>" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" value="<?php echo $datauser->email?>" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" value="<?php echo $datauser->password?>" required></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="simpan" required></td>
        </tr>
    

        </td>
        </form>
    </table>
</body>
</html>
