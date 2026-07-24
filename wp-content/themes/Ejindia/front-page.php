<?php

/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<style>
    [class*=swiper-button] {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        filter: brightness(1);
        background-color: #FFFFFF54;
    }

    [class*=swiper-button]::after {
        font-size: 1.5rem;
    }

    .heroSwiper .swiper-slide>.relative>.relative {
        pointer-events: none;
    }

    .heroSwiper .swiper-slide>.relative>.relative a,
    .heroSwiper .swiper-slide>.relative>.relative button {
        pointer-events: auto;
    }
</style>

<main class="site-main custom-home-wrapper overflow-hidden">

    <!-- Hero Slider Section -->
    <section class="relative h-screen w-full flex items-end lg:items-center overflow-hidden">
        <div class="swiper heroSwiper h-full w-full">
            <div class="swiper-wrapper">

                <!-- Slide 1: Gold Image -->
                <div class="swiper-slide h-full">
                    <div class="relative h-screen w-full">
                        <!-- Background Image -->
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Gold_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover z-0"
                            alt="Exquisite Gold Collections"
                            loading="lazy">
                        <!-- Overlay - Behind content -->
                        <div class="absolute inset-0 bg-black/30 z-10 pointer-events-none"></div>

                        <!-- Content - Now clickable -->
                        <div class="relative z-20 h-full flex items-end lg:items-center">
                            <div class="container mx-auto px-6 md:px-12 pb-12 lg:pb-0">
                                <h1 class="text-white text-2xl sm:text-4xl md:text-6xl font-bold max-w-3xl leading-tight">
                                    Exquisite Gold Collections
                                </h1>
                                <a href="http://ea.brightbridge.co/gold/"
                                    class="inline-block mt-6 sm:mt-8 bg-[#caa94d] hover:bg-[#b8973d] text-[#544007] font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-md">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Web Intro Video -->
                <div class="swiper-slide h-full">
                    <div class="relative h-screen w-full bg-black">
                        <!-- Video with poster for faster loading -->
                        <video class="hero-slide-video absolute inset-0 w-full h-full object-cover z-0"
                            autoplay muted loop playsinline preload="none"
                            poster="http://ea.brightbridge.co/wp-content/uploads/2026/06/web-intro-poster.jpg">
                            <source src="http://ea.brightbridge.co/wp-content/uploads/2026/06/web_intro.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/20 z-10 pointer-events-none"></div>

                        <!-- Content (if any) -->
                        <div class="relative z-20 h-full flex items-end lg:items-center">
                            <div class="container mx-auto px-6 md:px-12 pb-12 lg:pb-0">
                                <!-- Add any text/buttons here if needed -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Silver Image -->
                <div class="swiper-slide h-full">
                    <div class="relative h-screen w-full">
                        <!-- Background Image -->
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Silver_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover z-0"
                            alt="Sparkling Silver Collections"
                            loading="lazy">
                        <!-- Overlay - Behind content -->
                        <div class="absolute inset-0 bg-black/30 z-10 pointer-events-none"></div>

                        <!-- Content - Now clickable -->
                        <div class="relative z-20 h-full flex items-end lg:items-center">
                            <div class="container mx-auto px-6 md:px-12 pb-12 lg:pb-0">
                                <h1 class="text-white text-2xl sm:text-4xl md:text-6xl font-bold max-w-3xl leading-tight">
                                    Sparkling Silver Collections
                                </h1>
                                <a href="http://ea.brightbridge.co/silver/"
                                    class="inline-block mt-6 sm:mt-8 bg-[#caa94d] hover:bg-[#b8973d] text-[#544007] font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-md">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4: Party Video -->
                <div class="swiper-slide h-full">
                    <div class="relative h-screen w-full bg-black">
                        <!-- Video with poster for faster loading -->
                        <video class="hero-slide-video absolute inset-0 w-full h-full object-cover z-0"
                            autoplay muted loop playsinline preload="none"
                            poster="http://ea.brightbridge.co/wp-content/uploads/2026/06/party-poster.jpg">
                            <source src="http://ea.brightbridge.co/wp-content/uploads/2026/06/web_Partys.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/20 z-10 pointer-events-none"></div>

                        <!-- Content - Now clickable -->
                        <div class="relative z-20 h-full flex items-end lg:items-center">
                            <div class="container mx-auto px-6 md:px-12 pb-12 lg:pb-0">
                                <a href="http://ea.brightbridge.co/diamond/"
                                    class="inline-block mt-6 sm:mt-8 bg-[#caa94d] hover:bg-[#b8973d] text-[#544007] font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-md">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5: Platinum Image -->
                <div class="swiper-slide h-full">
                    <div class="relative h-screen w-full">
                        <!-- Background Image -->
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Platinum_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover z-0"
                            alt="Platinum Jewellery Collections"
                            loading="lazy">
                        <!-- Overlay - Behind content -->
                        <div class="absolute inset-0 bg-black/30 z-10 pointer-events-none"></div>

                        <!-- Content - Now clickable -->
                        <div class="relative z-20 h-full flex items-end lg:items-center">
                            <div class="container mx-auto px-6 md:px-12 pb-12 lg:pb-0">
                                <h1 class="text-white text-2xl sm:text-4xl md:text-6xl font-bold max-w-3xl leading-tight">
                                    Platinum Jewellery Collections
                                </h1>
                                <a href="http://ea.brightbridge.co/platinum/"
                                    class="inline-block mt-6 sm:mt-8 bg-[#caa94d] hover:bg-[#b8973d] text-[#544007] font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-md">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Swiper Controls -->
            <div class="swiper-button-prev !flex !text-white opacity-70 hover:opacity-100 transition-opacity"></div>
            <div class="swiper-button-next !flex !text-white opacity-70 hover:opacity-100 transition-opacity"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Manufacturing & Retail Presence Section -->
    <section class="bg-white py-12 md:py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

                <a href="http://ea.brightbridge.co/manufacturing-presence/" target="_blank" class="bg-[#f3f3f3] rounded-lg shadow-sm p-8 md:p-12 text-center transition-transform duration-300 hover:-translate-y-1">
                    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/free-factory-icon-1067-thumb.png"
                        alt="Manufacturing Icon"
                        class="mx-auto mb-6 w-20 rounded-md md:w-24 h-20 md:h-24 p-4 bg-white">
                    <h3 class="text-2xl md:text-3xl font-light text-gray-500">
                        MANUFACTURING
                    </h3>
                    <h4 class="font-bold text-3xl md:text-4xl text-gray-700 mt-1">
                        PRESENCE
                    </h4>
                </a>

                <a href="https://jewelone.in/stores" target="_blank" class="bg-[#f3f3f3] rounded-lg shadow-sm p-8 md:p-12 text-center transition-transform duration-300 hover:-translate-y-1">
                    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/building.png"
                        alt="Retail Icon"
                        class="mx-auto mb-6 w-20 rounded-md md:w-24 h-20 md:h-24 p-4 bg-white">
                    <h3 class="text-2xl md:text-3xl font-light text-gray-500">
                        RETAIL
                    </h3>
                    <h4 class="font-bold text-3xl md:text-4xl text-gray-700 mt-1">
                        PRESENCE
                    </h4>
                </a>

            </div>
        </div>
    </section>

    <!-- Standards & Certifications Section -->
    <section class="bg-[#fffcf9] py-12 sm:py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-[#777777] text-lg sm:text-xl text-center font-medium tracking-wide mb-8">
                ONLY THE HIGHEST STANDARDS
            </h2>
            <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 standads_wrr">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/1-2_xjoi2v.jpg" alt="Certification Logo" class="max-h-12 sm:max-h-16 object-contain">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/14001_bjpeqt.jpg" alt="ISO 14001" class="max-h-12 sm:max-h-16 object-contain">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/45001_a5moik.jpg" alt="ISO 45001" class="max-h-12 sm:max-h-16 object-contain">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/9001_odcdtr.jpg" alt="ISO 9001" class="max-h-12 sm:max-h-16 object-contain">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/RJC_LOGO.jpg" alt="RJC Logo" class="max-h-12 sm:max-h-16 object-contain">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Ilac-MRA-MONO.png" alt="ILAC MRA" class="max-h-12 sm:max-h-16 object-contain">
            </div>
        </div>
    </section>

</main>

<!-- Required JS initialization for Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.heroSwiper', {
                loop: true,
                speed: 800,
                // autoplay: {
                //     delay: 5000,
                //     disableOnInteraction: false,
                // },
                // autoplay: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }
    });
</script>

<?php get_footer(); ?>