<?php
$page_title = 'Product';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/products.php';

$id = (int)($_GET['id'] ?? 0);
$product = $products[$id] ?? null;
if (!$product) {
    echo '<div class="container"><h2>Product not found</h2></div>';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}
?>
<section class="container product-detail">
    <div class="product-media">
        <img src="<?php echo $config['base_url'] . $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>
    <div class="product-info">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <p class="price">₹<?php echo number_format($product['price'],0); ?></p>
        <p><?php echo htmlspecialchars($product['excerpt']); ?></p>
        <form method="post" action="<?php echo site_url('website/cart.php'); ?>">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <button type="submit">Add to cart</button>
        </form>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>