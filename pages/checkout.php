<?php 
session_start();
if (empty($_SESSION['cart'])) {
    header("Location: /pages/menu.php");
    exit();
}
?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>

<div class="max-w-3xl mx-auto mt-32 mb-20 px-6">
    <h2 class="text-3xl font-bold text-center mb-8 text-amber-500">Checkout</h2>

    <form action="/process/place-order.php" method="POST"
          class="space-y-6 bg-white p-8 rounded-xl shadow-md">

        <!-- FULL NAME -->
        <div>
            <label class="block font-semibold mb-1">Full Name</label>
            <input type="text" name="user_name" required
                   class="w-full p-3 border rounded-lg focus:ring focus:ring-amber-300">
        </div>

        <!-- EMAIL -->
        <div>
            <label class="block font-semibold mb-1">Email</label>
            <input type="email" name="user_email" required
                   class="w-full p-3 border rounded-lg focus:ring focus:ring-amber-300">
        </div>

        <!-- PHONE -->
        <div>
            <label class="block font-semibold mb-1">Phone Number</label>
            <input type="text" name="user_phone" required
                   class="w-full p-3 border rounded-lg focus:ring focus:ring-amber-300">
        </div>

        <!-- ADDRESS -->
        <div>
            <label class="block font-semibold mb-1">Delivery Address</label>
            <textarea name="user_address" required
                class="w-full p-3 border rounded-lg focus:ring focus:ring-amber-300 h-24"></textarea>
        </div>

        <!-- NOTES -->
        <div>
            <label class="block font-semibold mb-1">Additional Notes (Optional)</label>
            <textarea name="order_notes"
                class="w-full p-3 border rounded-lg focus:ring focus:ring-amber-300 h-20"></textarea>
        </div>

        <!-- SUBMIT -->
        <button type="submit"
            class="w-full bg-amber-500 hover:bg-amber-600 text-white py-3 rounded-lg font-bold">
            Place Order
        </button>
    </form>
</div>

<?php include "../includes/footer.php"; ?>