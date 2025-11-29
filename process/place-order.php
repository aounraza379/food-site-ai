<?php
session_start();
require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['cart'])) {
        die("Cart is empty.");
    }

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];

    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }

    // Insert into orders
    $stmt = $conn->prepare("INSERT INTO orders (user_name, user_email, total_price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $user_name, $user_email, $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    $stmt->close();

    // Insert into order_items
    // Insert into order_items
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, food_id, food_name, quantity, price) VALUES (?, ?, ?, ?, ?)");
    foreach ($_SESSION['cart'] as $food_id => $item) {
        $stmt->bind_param("iisid", $order_id, $food_id, $item['name'], $item['quantity'], $item['price']);
        $stmt->execute();
    }
    $stmt->close();


    unset($_SESSION['cart']);
    echo "Order placed successfully! Order ID: $order_id";
} else {
    header("Location: /pages/cart.php");
    exit();
}
