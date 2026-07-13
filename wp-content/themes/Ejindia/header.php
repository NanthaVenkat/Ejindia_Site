<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased font-sans !pt-16'); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header"
        class="fixed w-full top-0 z-50 transition-all duration-300 bg-[#0606069e] backdrop-filter backdrop-blur-sm bg-opacity-10 py-4 px-4">
        <nav class="flex justify-between">
            <ul class="flex gap-4 text-white items-center">
                <li><a href="http://localhost/Ejindia_Site/discover/">Discover</a></li>
                <li><a href="http://localhost/Ejindia_Site/why-emerald/">Why Emerald</a></li>
                <li><a href="http://localhost/Ejindia_Site/vendors/">Vendors</a></li>
            </ul>
            <a href="http://localhost/Ejindia_Site/"><img
                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/emerald.png" alt="Emerald"
                    class="w-[180px]"></a>

            <ul class="flex gap-4 text-white items-center">
                <li><a href="">Gold</a></li>
                <li><a href="">Silver</a></li>
                <li><a href="">Diamond</a></li>
                <li><a href="">Platinum</a></li>
            </ul>
        </nav>
    </header>

    <script>
        document.addEventListener('scroll', function () {
            const scrolledY = (window.scrollY + ('50px'));

            document.getElementById('site-header').classList.add('scrolled')
        });
    </script>