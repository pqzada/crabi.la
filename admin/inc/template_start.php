<?php
/**
 * template_start.php
 *
 * Author: pixelcave
 *
 * The first block of code used in every page of the template
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="<?php echo $template['robots'] ?>">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=$site['base_url']?>/admin/img/favicon.ico">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?=$site['base_url']?>/admin/img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?=$site['base_url']?>/admin/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?=$site['base_url']?>/admin/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?=$site['base_url']?>/admin/css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?=$site['base_url']?>/admin/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?=$site['base_url']?>/admin/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    <body>
