<?php
session_start();
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/products.php';

// basic cart in session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'add'){
    $id = (int)($_POST['id'] ?? 0);
    if ($id && isset($products[$id])){
        $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    }
    header('Location: ' . site_url('website/cart.php'));
    exit;
}
if (isset($_GET['remove'])){
    $rid = (int)$_GET['remove'];
    unset($_SESSION['cart'][$rid]);
    header('Location: ' . site_url('website/cart.php'));
    exit;
}

$cart = $_SESSION['cart'] ?? [];
?>
<section class="container">
    <h1>Your Cart</h1>
    <?php if (!$cart): ?>
        <p>Your cart is empty. <a href="<?php echo site_url('website/shop.php'); ?>">Continue shopping</a></p>
    <?php else: ?>
        <table>
            <thead><tr><th>Product</th><th>Qty</th><th>Price</th><th></th></tr></thead>
            <tbody>
            <?php $total = 0; foreach ($cart as $pid => $qty): $p = $products[$pid]; $subtotal = $p['price'] * $qty; $total += $subtotal; ?>
                <tr>
                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                    <td><?php echo $qty; ?></td>
                    <td>₹<?php echo number_format($subtotal,0); ?></td>
                    <td><a href="<?php echo site_url('website/cart.php?remove=' . $pid); ?>">Remove</a></td>
                </tr>
            <?php endforeach; ?></tbody>
        </table>
        <p>Total: ₹<?php echo number_format($total,0); ?></p>
        <a href="<?php echo site_url('website/checkout.php'); ?>">Proceed to checkout</a>
    <?php endif; ?>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>