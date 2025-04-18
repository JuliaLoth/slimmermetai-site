<?php
/**
 * Header bestand voor SlimmerMetAI.com
 * 
 * Dit bestand bevat de standaard HTML header en navigatie voor alle pagina's.
 */

// Initialiseer de website
require_once dirname(dirname(__DIR__)) . '/includes/init.php';

// Stel standaardwaarden in voor metatags
$page_title = $page_title ?? 'SlimmerMetAI - Praktische AI-tools voor Nederlandse professionals';
$page_description = $page_description ?? 'SlimmerMetAI biedt praktische AI-tools en e-learnings voor Nederlandse professionals. Automatiseer je taken en werk slimmer, niet harder.';
$active_page = $active_page ?? '';

// Helper functie om te controleren of een pagina actief is
function is_active($page) {
    global $active_page;
    return $active_page === $page ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="nl" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo asset_url('images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo asset_url('images/favicon.ico'); ?>" type="image/x-icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo asset_url('css/style.css'); ?>">
    
    <!-- CSRF Token - Voor gebruik in JavaScript -->
    <meta name="csrf-token" content="<?php echo $csrf->getToken(); ?>">
    
    <!-- Laad componenten en core scripts -->
    <script src="<?php echo asset_url('components/ComponentsLoader.js'); ?>"></script>
    <script src="<?php echo asset_url('js/cart.js'); ?>"></script> <!-- Laad winkelwagen script VOOR main.js -->
    <script src="<?php echo asset_url('js/main.js'); ?>"></script> <!-- Hoofdscript, na cart.js -->
    
    <style>
        /* Tijdelijke fix voor preloader */
        .preloader {
            display: none !important;
        }
    </style>
    <noscript>
        <style>
            .preloader { display: none !important; }
        </style>
    </noscript>
    
    <?php if (isset($extra_head)): ?>
        <?php echo $extra_head; ?>
    <?php endif; ?>
</head>
<body>
    <div class="preloader">
        <div class="loader"></div>
    </div>
    
    <a href="#main-content" class="skip-link">Direct naar inhoud</a>
    
    <!-- Navigatie -->
    <slimmer-navbar active-page="<?php echo htmlspecialchars($active_page); ?>"></slimmer-navbar>
    
    <main id="main-content" role="main">
