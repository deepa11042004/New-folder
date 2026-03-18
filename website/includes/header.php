<?php
require_once __DIR__ . '/../config/config.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . $config['site_name'] : $config['site_name']; ?></title>
    <meta name="description" content="Everace - Organic & health products">
    <!-- Theme CSS (reuse existing theme files) -->
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>/wp-content/themes/greenpath/style.css">
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>/css/rbt-modules.css">
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>/css/"> <!-- fallback, theme provides many files -->
</head>
<body>
<header class="site-header">
    <div class="container">
        <a class="logo" href="<?php echo site_url('website/index.php'); ?>">
            <img src="<?php echo $config['logo']; ?>" alt="<?php echo $config['site_name']; ?>">
        </a>
        <div class="contact">
            <a href="tel:<?php echo $config['phone']; ?>"><?php echo $config['phone']; ?></a>
        </div>
        <nav class="main-nav">
            <a href="<?php echo site_url('website/index.php'); ?>">Home</a>
            <a href="<?php echo site_url('website/shop.php'); ?>">Shop</a>
            <a href="<?php echo site_url('website/about.php'); ?>">About</a>
            <a href="<?php echo site_url('website/services.php'); ?>">Services</a>
            <a href="<?php echo site_url('website/blog.php'); ?>">Blog</a>
            <a href="<?php echo site_url('website/contact.php'); ?>">Contact</a>
        </nav>
    </div>
</header>
<main>