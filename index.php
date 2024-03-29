<?php
require_once('./db/db_connection.php');
require_once('./db/db_login.php');

$error_message = "";

if (isset($error_message) && !empty($error_message)) {
    $error_message = "<div class='error-message'>Invalid username or password. Please try again.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEJE| Login</title>
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
<body>
<body>
    <div class="container">
        <div class="login-box">
            <img src="./assets/images/logo.png" alt="btr">
            <form method="POST">
                <?php echo $error_message; ?>
                <div>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="****">
                </div>
                <div>
                    <button type="submit">Sign In</button>
                </div>
                <div class="text-center mt-4">
                    <p>Don't have an account? <a href="./pages/register.php">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</body>
</html>
