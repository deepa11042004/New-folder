<?php
$page_title = 'Home';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/products.php';
?>
<section class="hero">
    <div class="container">
        <h1>Welcome to <?php echo $config['site_name']; ?></h1>
        <p>Your destination for organic and healthy products.</p>
    </div>
</section>

<section class="featured-products container">
    <h2>Featured Products</h2>
    <div class="product-grid">
        <?php foreach ($products as $p): ?>
            <div class="product">
                <a href="<?php echo site_url('website/product.php?id=' . $p['id']); ?>">
                    <img src="<?php echo $config['base_url'] . $p['image']; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                    <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                    <p><?php echo $p['excerpt']; ?></p>
                    <p class="price">₹<?php echo number_format($p['price'],0); ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>