<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <form action="<?php echo base_url("basiccrud/userdo/insertnewuser");?>" method="post">
        <table width="400" border="0" cellpading="5">
            <tr>
                <th width="213" align="right" scope="row">Enter First Name</th>
                <td width="161"><input type="text" name="namaper" size="20" required></td>
            </tr>
            <tr>
                <th width="213" align="right" scope="row">Enter Last Name</th>
                <td width="161"><input type="text" name="namaked" size="20" required></td>
            </tr>
            <tr>
                <th width="213" align="right" scope="row">Enter Email</th>
                <td width="161"><input type="text" name="email" size="20" required</td>
            </tr>
            <tr>
                <th width="213" align="right" scope="row">Enter Password</th>
                <td width="161"><input type="password" name="pass" size="20" required></td>
            </tr>
            <tr>
                <th align="right" scope="row">&nbsp;</th>
                <td><input type="submit" value="Send"></td>
            </tr>
        </table>
    </form>
</body>

</html>