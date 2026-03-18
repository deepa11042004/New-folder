<?php
// Central config used across the site
$base_url = '/everace'; // adjust if you move the site
$config = [
    'site_name' => 'Everace - Organic & Health Store',
    'logo' => $base_url . '/images/19.png',
    'phone' => '+91 1111111111',
    'email' => 'info@everace.local',
    'address' => 'Everace HQ, 123 Market Street, City',
    'social' => [
        'facebook' => '#',
        'twitter' => '#',
        'instagram' => '#'
    ],
    'currency' => 'INR',
    'business_hours' => 'Mon-Sat 09:00-18:00',
    'base_url' => $base_url
];

// helper
function site_url($path = ''){
    global $config;
    return rtrim($config['base_url'], '/') . '/' . ltrim($path, '/');
}

?>