<?php
    include_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <section class="signup-form"></section>
    <h2>Login In</h2>
    <div class="signup-form-form">
        <form action="login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log In</button>


        </form>
    </div>
</body>
</html>

<?php
    include_once 'footer.php';
?>