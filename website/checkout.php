<?php
session_start();
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/products.php';
$cart = $_SESSION['cart'] ?? [];
if (!$cart){
    echo '<div class="container"><h2>Your cart is empty</h2></div>';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}
// very simple checkout mock
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // In real app store order to DB
    $_SESSION['cart'] = [];
    echo '<div class="container"><h2>Thank you — your order is placed.</h2></div>';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}
?>
<section class="container">
    <h1>Checkout</h1>
    <form method="post">
        <label>Name <input name="name" required></label>
        <label>Email <input name="email" type="email" required></label>
        <label>Address <textarea name="address" required></textarea></label>
        <button type="submit">Place order</button>
    </form>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>