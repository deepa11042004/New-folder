<?php
$page_title = 'Shop';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/products.php';
?>
<section class="container">
    <h1>Shop</h1>
    <div class="product-grid">
        <?php foreach($products as $p): ?>
            <div class="product">
                <a href="<?php echo site_url('website/product.php?id=' . $p['id']); ?>">
                    <img src="<?php echo $config['base_url'] . $p['image']; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                    <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                    <p class="price">₹<?php echo number_format($p['price'],0); ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>