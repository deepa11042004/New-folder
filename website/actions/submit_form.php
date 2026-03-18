<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . site_url('website/contact.php'));
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$phone = trim($_POST['phone'] ?? '');

if (!$name || !$email) {
    $_SESSION['flash'] = 'Please fill name and email.';
    header('Location: ' . site_url('website/contact.php'));
    exit;
}

try{
    $stmt = $pdo->prepare('INSERT INTO contacts (name,email,phone,message,created_at) VALUES (?,?,?,?,NOW())');
    $stmt->execute([$name,$email,$phone,$message]);
    $_SESSION['flash'] = 'Message sent. Thank you!';
} catch (Exception $e){
    $_SESSION['flash'] = 'Failed to save your message.';
}

header('Location: ' . site_url('website/contact.php'));
exit;
?>