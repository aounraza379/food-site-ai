<?php 
require_once "auth.php"; 
require_once "../config/db.php";

// Count orders
$countQuery = $conn->query("SELECT COUNT(*) AS total_orders FROM orders");
$count = $countQuery->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Welcome, <?= $_SESSION['admin_username']; ?></h2>

<p>Total Orders: <?= $count['total_orders'] ?></p>

<a href="orders.php">View Orders</a> |
<a href="logout.php">Logout</a>

</body>
</html>
