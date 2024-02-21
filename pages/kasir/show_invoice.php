<?php
session_start();
require_once('../db/db_connection.php');
require_once('../db/db_process_checkout.php');

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

$realName = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEJE | Welcome Cashier</title>
    <link rel="stylesheet" href="../assets/style/dashboard.css">
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($realName);?>! Welcome to the dashboard</h1>
    <form action="../db/db_logout.php" method="post">
    <button type="submit" class="btn-logout">Log Out</button>
    </form>
    <div class="dashboard-content">
    <h2>Dashboard</h2>
    <p>Welcome to the JEJE Cashier dashboard. you can manage product and perform other tasks here.</p>
    </div>
    <div class="additional-content">
    <h2>Manage Product</h2>
    <p>Would you like ro manage product</p>
    <p><a href="./kasir/manage_product.php" class="text-blue-500 hover:underline">Click here</a></p>
    </div>
</body>
</html>