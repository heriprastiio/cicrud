<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>
<body>
    <?php echo form_open('Formcontroller/index'); ?>
    <h5>Username</h5>
    <input type=" text" name="username" value="" size="50"/>
    <h5>Password</h5>
    <input type="password" name="password" value="" size="50"/>
    <h5>Password Confirm</h5>
    <input type="password" name="passconf" value="" size="50"/>
    <h5>Email Address</h5>
    <input type="text" name="email" value="" size="50"/>
    <div><input type="submit" value="Submit"/></div>
</form>
</body>
</html>