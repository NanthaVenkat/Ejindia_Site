<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main class="site-main custom-home-wrapper">

    <section class="relative h-screen overflow-hidden">
        <div class="swiper heroSwiper h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="relative h-screen">
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Gold_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover" alt="">
                        <!-- <div class="absolute inset-0 bg-black/50"></div> -->
                        <div class="relative z-10 h-full flex items-center">
                            <div class="container mx-auto px-6">
                                <h1 class="text-gray-600 text-xl md:text-3xl font-bold max-w-3xl">Exquisite Gold
                                    Collections</h1>
                                <a href="#"
                                    class="inline-block mt-8 bg-[#caa94d] hover:bg-[#caa94d80] text-[#544007] px-6 py-2 rounded-full">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !hidden md:!block">
                    <div class="relative h-screen">
                        <video class="hero-slide-video absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="http://ea.brightbridge.co/wp-content/uploads/2026/06/web_intro.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- <div class="absolute inset-0 bg-black/50"></div> -->
                        <!-- <div class="relative z-10 h-full flex items-center">
                            <div class="container mx-auto px-6">
                                <h1 class="text-gray-600 text-xl md:text-3xl font-bold max-w-3xl">Exquisite Gold
                                    Collections</h1>
                                <a href="#"
                                    class="inline-block mt-8 bg-[#caa94d] hover:bg-[#caa94d80] text-[#544007] px-6 py-2 rounded-full">
                                    Discover Now
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="relative h-screen">
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Silver_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover" alt="">
                        <!-- <div class="absolute inset-0 bg-black/50"></div> -->
                        <div class="relative z-10 h-full flex items-center">
                            <div class="container mx-auto px-6">
                                <h1 class="text-white text-xl md:text-3xl font-bold max-w-3xl">Sparkling Silver
                                    Collections</h1>
                                <a href="#"
                                    class="inline-block mt-8 bg-[#caa94d] hover:bg-[#caa94d80] text-[#544007] px-6 py-2 rounded-full">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !hidden md:!block">
                    <div class="relative h-screen">
                        <video class="hero-slide-video absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="http://ea.brightbridge.co/wp-content/uploads/2026/06/web_Partys.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- <div class="absolute inset-0 bg-black/50"></div> -->
                        <!-- <div class="relative z-10 h-full flex items-center">
                            <div class="container mx-auto px-6">
                                <h1 class="text-gray-600 text-xl md:text-3xl font-bold max-w-3xl">Exquisite Gold
                                    Collections</h1>
                                <a href="#"
                                    class="inline-block mt-8 bg-[#caa94d] hover:bg-[#caa94d80] text-[#544007] px-6 py-2 rounded-full">
                                    Discover Now
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="relative h-screen">
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Platinum_bnr.jpg"
                            class="absolute inset-0 w-full h-full object-cover" alt="">
                        <!-- <div class="absolute inset-0 bg-black/50"></div> -->
                        <div class="relative z-10 h-full flex items-center">
                            <div class="container mx-auto px-6">
                                <h1 class="text-gray-600 text-xl md:text-3xl font-bold max-w-3xl">Platinum Jewellry
                                    Collections
                                </h1>
                                <a href="#"
                                    class="inline-block mt-8 bg-[#caa94d] hover:bg-[#caa94d80] text-[#544007] px-6 py-2 rounded-full">
                                    Discover Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- <section class="bg-[#f6f4f3] py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-sm p-12 text-center">
                    <img src="<`?= get_template_directory_uri(); ?>/assets/icons/factory.svg" class="mx-auto mb-6 w-16">
                    <h3 class="text-4xl font-light">
                        MANUFACTURING
                    </h3>
                    <h4 class="font-bold text-5xl">
                        PRESENCE
                    </h4>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-12 text-center">
                    <img src="<`?= get_template_directory_uri(); ?>/assets/icons/store.svg" class="mx-auto mb-6 w-16">
                    <h3 class="text-4xl font-light">
                        RETAIL
                    </h3>
                    <h4 class="font-bold text-5xl">
                        PRESENCE
                    </h4>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-[#fffcf9] py-12 sm:py-16">
        <div class="container mx-auto">
            <h2 class="text-[#777777] text-xl text-center mb-6">ONLY THE HIGHEST STANDARDS</h2>
            <div class="flex gap-2 flex-wrap justify-center standads_wrr">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/1-2_xjoi2v.jpg">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/14001_bjpeqt.jpg">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/45001_a5moik.jpg">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/9001_odcdtr.jpg">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/RJC_LOGO.jpg">
                <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/Ilac-MRA-MONO.png">
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
