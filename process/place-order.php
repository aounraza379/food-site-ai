<?php
session_start();
require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_SESSION['cart'])) {
        die("Cart is empty.");
    }

    // User info from checkout.php
    $user_name   = $_POST['user_name'];
    $user_email  = $_POST['user_email'];
    $user_phone  = $_POST['user_phone'];
    $user_address = $_POST['user_address'];
    $order_notes = $_POST['order_notes'] ?? '';

    // Calculate total
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }

    // Insert main order into DB
    $stmt = $conn->prepare("INSERT INTO orders (user_name, user_email, total_price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $user_name, $user_email, $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    $stmt->close();

    // Insert items
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, food_id, food_name, quantity, price) VALUES (?, ?, ?, ?, ?)");
    foreach ($_SESSION['cart'] as $food_id => $item) {
        $stmt->bind_param("iisid", $order_id, $food_id, $item['name'], $item['quantity'], $item['price']);
        $stmt->execute();
    }
    $stmt->close();

    // Store extra info for confirmation page ONLY (not in DB)
    $_SESSION['order_extra'] = [
        "phone" => $user_phone,
        "address" => $user_address,
        "notes" => $order_notes
    ];

    unset($_SESSION['cart']);

    header("Location: /pages/order-confirmation.php?order_id=" . $order_id);
    exit();
} 
else {
    header("Location: /pages/cart.php");
    exit();
}