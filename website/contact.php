<?php
$page_title = 'Contact';
require_once __DIR__ . '/includes/header.php';

session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<section class="container contact-page">
    <h1>Contact Us</h1>
    <?php if ($flash): ?><p class="flash"><?php echo htmlspecialchars($flash); ?></p><?php endif; ?>
    <form method="post" action="<?php echo site_url('website/actions/submit_form.php'); ?>">
        <label>Name<input name="name" required></label>
        <label>Email<input name="email" type="email" required></label>
        <label>Phone<input name="phone"></label>
        <label>Message<textarea name="message"></textarea></label>
        <button type="submit">Send Message</button>
    </form>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>