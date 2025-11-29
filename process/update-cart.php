<?php
session_start();

if (isset($_POST['food_id'], $_POST['action'])) {
    $food_id = $_POST['food_id'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$food_id])) {
        if ($action === 'update' && isset($_POST['quantity'])) {
            $quantity = intval($_POST['quantity']);
            if ($quantity > 0) {
                $_SESSION['cart'][$food_id]['quantity'] = $quantity;
            } else {
                unset($_SESSION['cart'][$food_id]);
            }
        } elseif ($action === 'remove') {
            unset($_SESSION['cart'][$food_id]);
        }
    }
}

header("Location: ../pages/cart.php");
exit();
