<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User</title>
</head>
<body>
    <form action="http://localhost/router_MVC/view/user/updateUserForm" method="post">
    <?php
        foreach($data as $value){
    ?>
        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
        <input type="text" name="name" value="<?php echo $value['name']; ?>" placeholder="enter your name ...">
        <input type="text" name="family" value="<?php echo $value['family']; ?>" placeholder="enter your family ...">
        <input type="text" name="age" value="<?php echo $value['age']; ?>" placeholder="enter your age ...">
        <input type="text" name="userName" value="<?php echo $value['userName']; ?>" placeholder="enter your userName ...">
        <input type="password" name="password" value="<?php echo $value['password']; ?>" placeholder="enter your pass ...">
        <button type="submit">submit</button>
        <?php
        }
        ?>
    </form>
</body>
</html>