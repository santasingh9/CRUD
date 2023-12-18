<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Show Data</title>
    <link rel="icon" type="image/x-icon" href="https://shorturl.at/abhpN">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table border="3px" cellpadding="10px" cellspacing="10px">
                <tr>
                    <th >User Id</th>
                    <th >User Name</th>
                    <th >User Email</th>
                    <th >User Password</th>
                    <th>Delete</th>
                </tr>

            <?php foreach($users as $user) {?>
            <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['user_name']; ?></td>
            <td><?php echo $user['user_email']; ?></td>
            <td><?php echo $user['user_password']; ?></td>
            <td><a href="<?php echo base_url();?>Home/delete/<?php echo $user['user_id'];?>"><button class="btn btn-danger">Delete</button></a></td>
            <td><a href="<?php echo base_url();?>Home/edit/<?php echo $user['user_id'];?>" class="bg-secondary"><button class="btn btn-secondary">Edit</button></a></td>

            </tr>
            
            <?php  } ?>  
        </table>
    </div>
    
</body>
</html>