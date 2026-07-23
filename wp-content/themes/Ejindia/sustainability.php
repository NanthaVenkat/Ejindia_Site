<?php
/*
Template Name: sustainability
*/
get_header();
?>

<style>
    /* Custom styles for the slider and cards to match the original feel */
    .swiper-slide {
        height: auto;
    }

    .sustainability-card {
        background: #f8f6f2;
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        padding: 1.5rem;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid #e5e0d5;
    }

    .sustainability-card:hover {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .quote-icon {
        font-size: 2.5rem;
        color: #b8914b;
        margin-bottom: 0.5rem;
    }

    .section-title {
        color: #3c2e1f;
        font-weight: 700;
        letter-spacing: 0.05em;
    }

    .section-subtitle {
        color: #b8914b;
        font-weight: 500;
        letter-spacing: 0.1em;
        font-size: 0.875rem;
        text-transform: uppercase;
    }

    .gold-line {
        width: 60px;
        height: 3px;
        background: #b8914b;
        margin: 1rem auto;
    }
</style>

<main>

    <!-- ===== HERO SECTION ===== -->
    <section class="relative bg-[#2c241a] text-white py-20 md:py-32">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="container mx-auto px-4 md:px-8 relative z-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 tracking-wide">Sustainability</h1>
            <div class="w-24 h-1 bg-[#b8914b] mx-auto mb-6"></div>
            <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200">Our commitment to a better future — for our people, our community, and our planet.</p>
        </div>
    </section>

    <!-- ===== SLIDER SECTION ===== -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="section-subtitle">Our Initiatives</span>
                <h2 class="section-title text-3xl md:text-4xl mt-2">People & Planet First</h2>
                <div class="gold-line"></div>
            </div>

            <!-- Swiper Slider -->
            <div class="swiper sustainabilitySwiper overflow-hidden pb-12">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🍽️</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">CANTEEN</h3>
                            <p class="text-gray-600 italic text-sm">“Good foods leads to good living.”</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🧑‍🤝‍🧑</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">HUMAN FIRST</h3>
                            <p class="text-gray-600 italic text-sm">“Employee health covered”</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🏥</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">DISPENSARY</h3>
                            <p class="text-gray-600 italic text-sm">“Employee health coverd”</p>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🔬</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">LABORATORY</h3>
                            <p class="text-gray-600 italic text-sm">“Your 360° health scan”</p>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">👶</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">CRECHE</h3>
                            <p class="text-gray-600 italic text-sm">“We care for your little ones”</p>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🏠</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">HOSTEL</h3>
                            <p class="text-gray-600 italic text-sm">“Safe living assured”</p>
                        </div>
                    </div>
                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">⚽</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">SPORTS</h3>
                            <p class="text-gray-600 italic text-sm">“All work no play does NOT apply to Emerald”</p>
                        </div>
                    </div>
                    <!-- Slide 8 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">💰</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">LOAN</h3>
                            <p class="text-gray-600 italic text-sm">“We are one family”</p>
                        </div>
                    </div>
                    <!-- Slide 9 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">📚</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">EDUCATIONAL SUPPORT</h3>
                            <p class="text-gray-600 italic text-sm">“We believe that education makes the difference”</p>
                        </div>
                    </div>
                    <!-- Slide 10 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🏆</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">EMERALD CENTER OF EXCELLENCE</h3>
                            <p class="text-gray-600 italic text-sm">“Emerald center of Excellence for you Excellent people”</p>
                        </div>
                    </div>
                    <!-- Slide 11 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🩹</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">FIRST AID TRAINING PROGRAM</h3>
                            <p class="text-gray-600 italic text-sm">Emergency response ready</p>
                        </div>
                    </div>
                    <!-- Slide 12 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🎉</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">EMERALD CELEBRATES</h3>
                            <p class="text-gray-600 italic text-sm">“Lets celebrate festivals together”</p>
                        </div>
                    </div>
                    <!-- Slide 13 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">⭐</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">ANNUAL DAY</h3>
                            <p class="text-gray-600 italic text-sm">“We recognize our shining stars”</p>
                        </div>
                    </div>
                    <!-- Slide 14 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🧘</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">WAY OF LIFE</h3>
                            <p class="text-gray-600 italic text-sm">“Not just work, we teach values.”</p>
                        </div>
                    </div>
                    <!-- Slide 15 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🏋️</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">SPORTS CLUB</h3>
                            <p class="text-gray-600 italic text-sm">“Your everyday fitness sealed”</p>
                        </div>
                    </div>
                    <!-- Slide 16 -->
                    <div class="swiper-slide">
                        <div class="sustainability-card">
                            <div class="quote-icon">🚑</div>
                            <h3 class="text-xl font-bold text-[#3c2e1f] mb-1">AMBULANCE</h3>
                            <p class="text-gray-600 italic text-sm">“At your rescue under one second”</p>
                        </div>
                    </div>
                </div>

                <!-- Swiper Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next text-[#b8914b] after:text-3xl"></div>
                <div class="swiper-button-prev text-[#b8914b] after:text-3xl"></div>
            </div>
        </div>
    </section>

    <!-- ===== CORPORATE RESPONSIBILITY GRID ===== -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="section-subtitle">Responsible Corporate</span>
                <h2 class="section-title text-3xl md:text-4xl mt-2">Our Commitments</h2>
                <div class="gold-line"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Clean disposal of E-waste</h4>
                    <p class="text-sm text-gray-600 mt-1">Authorised partnership for waste disposal</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Safe Working environment</h4>
                    <p class="text-sm text-gray-600 mt-1">Healthy workers = Our commitment</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Energy saving is energy produced</h4>
                    <p class="text-sm text-gray-600 mt-1">Sustainable energy practices</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Swachh Emerald</h4>
                    <p class="text-sm text-gray-600 mt-1">“Our happy place” where everyone work in harmony.</p>
                </div>
                <!-- Card 5 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">5S & Safety</h4>
                    <p class="text-sm text-gray-600 mt-1">Sort, Set in order, Shine, Safety, Standardize, Sustain</p>
                </div>
                <!-- Card 6 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Green Environment</h4>
                    <p class="text-sm text-gray-600 mt-1">3 R’s, Reduce, Re-Use and Recycle is the mantra we preach.</p>
                </div>
                <!-- Card 7 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Emergency Response</h4>
                    <p class="text-sm text-gray-600 mt-1">A safety at the time of crisis</p>
                </div>
                <!-- Card 8 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Hazardous Products</h4>
                    <p class="text-sm text-gray-600 mt-1">Designated areas for hazardous products</p>
                </div>
                <!-- Card 9 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Rules for life</h4>
                    <p class="text-sm text-gray-600 mt-1">0 discharge policy</p>
                </div>
                <!-- Card 10 -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h4 class="font-bold text-[#3c2e1f]">Sewage treatment plant</h4>
                    <p class="text-sm text-gray-600 mt-1">Water conservation & recycling</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== REPORTS & CARES ===== -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-16">
                <div>
                    <span class="text-5xl block mb-2">📊</span>
                    <h3 class="text-xl font-bold text-[#3c2e1f]">GHG REPORT</h3>
                    <p class="text-gray-600 text-sm">Greenhouse Gas Emissions Report</p>
                </div>
                <div>
                    <span class="text-5xl block mb-2">📄</span>
                    <h3 class="text-xl font-bold text-[#3c2e1f]">CSR Project Report</h3>
                    <p class="text-gray-600 text-sm">Corporate Social Responsibility</p>
                </div>
                <div>
                    <span class="text-5xl block mb-2">❤️</span>
                    <h3 class="text-xl font-bold text-[#3c2e1f]">EMERALD CARES</h3>
                    <p class="text-gray-600 text-sm">Community & Welfare Initiatives</p>
                </div>
            </div>
            <div class="gold-line mx-auto mt-10"></div>
            <p class="text-sm text-gray-500 max-w-2xl mx-auto mt-6">Our commitment to transparency and continuous improvement drives us to report and care for our impact.</p>
        </div>
    </section>

</main>

 <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.sustainabilitySwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 25,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1280: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                }
            });
        });
    </script>

<?php get_footer(); ?>