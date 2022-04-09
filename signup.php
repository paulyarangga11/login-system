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
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Pssword">
            <button type="submit" name="submit">Sign Up</button>


        </form>
    </div>
</body>
</html>

<?php
    include_once 'footer.php';
?>