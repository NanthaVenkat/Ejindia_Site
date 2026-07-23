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

    <header id="site-header" class="fixed w-full top-0 z-50 transition-all duration-300 bg-[#0606069e] backdrop-filter backdrop-blur-sm bg-opacity-10 py-4 px-4 md:px-8">
        <nav class="flex justify-between items-center max-w-7xl mx-auto">

            <!-- Desktop Left Links -->
            <ul class="hidden lg:flex gap-6 text-white items-center font-medium">
                <li><a href="http://ea.brightbridge.co/discover/" class="hover:text-amber-400 transition-colors">Discover</a></li>
                <li><a href="http://ea.brightbridge.co/why-emerald/" class="hover:text-amber-400 transition-colors">Why Emerald</a></li>
                <li><a href="http://ea.brightbridge.co/vendors/" class="hover:text-amber-400 transition-colors">Vendors</a></li>
            </ul>

            <!-- Center Logo -->
            <a href="http://ea.brightbridge.co/" class="z-50">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/emerald.png" alt="Emerald" class="w-[140px] md:w-[180px]">
            </a>

            <!-- Desktop Right Links -->
            <ul class="hidden lg:flex gap-6 text-white items-center font-medium">
                <li><a href="http://ea.brightbridge.co/gold/" class="hover:text-amber-400 transition-colors">Gold</a></li>
                <li><a href="http://ea.brightbridge.co/silver/" class="hover:text-amber-400 transition-colors">Silver</a></li>
                <li><a href="http://ea.brightbridge.co/diamond/" class="hover:text-amber-400 transition-colors">Diamond</a></li>
                <li><a href="http://ea.brightbridge.co/platinum/" class="hover:text-amber-400 transition-colors">Platinum</a></li>
            </ul>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" aria-label="Toggle navigation" class="lg:hidden text-white focus:outline-none z-50">
                <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

        </nav>

        <!-- Mobile Slide-Out Drawer -->
        <div id="mobile-menu" class="fixed inset-0 top-0 left-0 w-full h-screen bg-[#060606] bg-opacity-95 backdrop-blur-md z-40 transform -translate-y-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col justify-center items-center text-center">
            <ul class="flex flex-col gap-6 text-white text-xl font-medium pt-12">
                <li><a href="http://ea.brightbridge.co/discover/" class="mobile-link hover:text-amber-400">Discover</a></li>
                <li><a href="http://ea.brightbridge.co/why-emerald/" class="mobile-link hover:text-amber-400">Why Emerald</a></li>
                <li><a href="http://ea.brightbridge.co/vendors/" class="mobile-link hover:text-amber-400">Vendors</a></li>
                <hr class="border-gray-800 my-2 w-32 mx-auto">
                <li><a href="http://ea.brightbridge.co/gold/" class="mobile-link hover:text-amber-400">Gold</a></li>
                <li><a href="http://ea.brightbridge.co/silver/" class="mobile-link hover:text-amber-400">Silver</a></li>
                <li><a href="http://ea.brightbridge.co/diamond/" class="mobile-link hover:text-amber-400">Diamond</a></li>
                <li><a href="http://ea.brightbridge.co/platinum/" class="mobile-link hover:text-amber-400">Platinum</a></li>
            </ul>
        </div>
    </header>

    <!-- Minimal JS for Mobile Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileLinks = document.querySelectorAll('.mobile-link');

            function toggleMenu() {
                const isOpen = !mobileMenu.classList.contains('-translate-y-full');

                if (isOpen) {
                    mobileMenu.classList.add('-translate-y-full');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                } else {
                    mobileMenu.classList.remove('-translate-y-full');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                }
            }

            menuBtn.addEventListener('click', toggleMenu);

            // Close mobile menu when a link is clicked
            mobileLinks.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        });
    </script>

    <script>
        document.addEventListener('scroll', function() {
            const scrolledY = (window.scrollY + ('50px'));

            document.getElementById('site-header').classList.add('scrolled')
        });
    </script>