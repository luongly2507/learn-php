<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>
    <form action="16_form_data.php" method="post">
        <label for="Username">Username:</label>
        <input type="text" name="username" >
        <label for="Password">Password:</label>
        <input type="password" name="password" >
        <button type="submit" name="login">Login</button>
    </form>
    <?php
        if(isset($_POST['login'])){
            echo $_POST['username'];
            echo $_POST['password'];
        }
    ?>
</body>
</html>