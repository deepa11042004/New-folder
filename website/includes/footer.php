<?php
require_once __DIR__ . '/../config/config.php';
?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo $config['logo']; ?>" alt="Logo">
        </div>
        <div class="footer-contact">
            <p><?php echo $config['address']; ?></p>
            <p>Phone: <a href="tel:<?php echo $config['phone']; ?>"><?php echo $config['phone']; ?></a></p>
            <p>Email: <a href="mailto:<?php echo $config['email']; ?>"><?php echo $config['email']; ?></a></p>
        </div>
        <div class="footer-copy">&copy; <?php echo date('Y'); ?> <?php echo $config['site_name']; ?></div>
    </div>
</footer>

<!-- Theme JS (reuse) -->
<script src="<?php echo $config['base_url']; ?>/wp-includes/js/jquery/jquery.min.js"></script>
<script src="<?php echo $config['base_url']; ?>/wp-includes/js/wp-util.min.js"></script>
</body>
</html>