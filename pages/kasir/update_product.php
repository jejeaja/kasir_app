<?php
require_once('../db/db_connection.php');
require_once('../db/db_register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>punya jihan | login</title>
    <link rel="stylesheet" href="../assets/style/register.css">
</head>
<body>
    <div class="container">
        <img style="width: 100px; margin-bottom: 2rem; " src="../assets/images/pdi.jpg" alt="PDI Logo">
        <form method="POST">
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <div>
                    <label for="username">Username</label>
                    <input id= "username" name="username" type="text" placeholder= "username" required>
                </div>
                <div> <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="password"
required>
    </div>
         <div>
        <label for="nama">Nama</label>
        <input id= "nama" name= "nama" type="text" placeholder= "..." required>
        </div>
<div>
    <button type= "submit">Register<Register</button>
</div>
<p>Have an account ? <a href="../index.php">Login!</a></p> </form>
</div>
</body>
</html>