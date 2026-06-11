<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased font-sans bg-black !pt-16'); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header"
        class="fixed w-full top-0 z-50 transition-all duration-300 bg-[#99a1af1f] backdrop-filter backdrop-blur-sm bg-opacity-10 py-4">
        <nav class="flex justify-center">
            <a href="http://localhost/Ejindia_Site/"><img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/emerald.png" alt="Emerald"
                    class="w-[180px]"></a>
        </nav>
    </header>