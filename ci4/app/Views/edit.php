<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Registeration</h1>
    <form method="POST" action="<?php echo site_url('Home/update'); ?>">
    <input type="hidden" name="id" value="<?php echo $users['user_id'];?>"><br><br>
    <label><b>User Name:</b></label>
    <input type="text" name="user_name" value="<?php echo $users['user_name'];?>"><br><br>
    <label><b>User Email:</b></label>
    <input type="text" name="user_email" value="<?php echo $users['user_email'];?>"><br><br>
    <label><b>User Password:</b></label>
    <input type="password" name="user_password" value="<?php echo $users['user_password'];?>"><br><br>
    <input type="submit" name="submit" value="Update">
</form>
</body>
</html>