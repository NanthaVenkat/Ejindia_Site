<?php
/*
Template Name: Certifications
*/

get_header();
?>

<style>
    .companies-tab-navigation .companies-tab-btn {
        color: #fff;
        background-color: #191919;
        /* border-radius: 15px; */
        padding: 8px 14px;
        margin: 0px !important;
    }

    @media screen and (min-width: 1020px) {
        .companies-tab-navigation .companies-tab-btn:not(:last-child) {
            border-bottom: 1px solid #636363;
        }
    }

    @media screen and (max-width: 1020px) {
        .companies-tab-navigation .companies-tab-btn {
            min-width: 240px;
        }
    }

    .companies-tab-navigation .companies-tab-btn.active {
        background-color: #F78D1E;
        color: #000;
    }

    /* Swiper Styles */
    .policy-swiper {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px 0;
        position: relative;
    }

    @media screen and (max-width: 567px) {
        .policy-swiper {
            max-width: 320px;
        }
    }

    .policy-swiper .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .policy-swiper .swiper-slide .border {
        width: 100%;
        background: white;
    }

    .policy-swiper .swiper-button-next,
    .policy-swiper .swiper-button-prev {
        color: #264d6a;
        background: #c3c4c782;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .policy-swiper .swiper-button-next:after,
    .policy-swiper .swiper-button-prev:after {
        display: none;
    }

    .policy-swiper .swiper-button-next {
        right: 10px;
    }

    .policy-swiper .swiper-button-prev {
        left: 10px;
    }

    .policy-swiper .swiper-pagination-bullet {
        background: #264d6a;
        opacity: 0.5;
    }

    .policy-swiper .swiper-pagination-bullet-active {
        opacity: 1;
        background: #264d6a;
    }

    @media (max-width: 1023px) {

        .policy-swiper .swiper-button-next,
        .policy-swiper .swiper-button-prev {
            display: none;
        }
    }
</style>

<?php
$documents = array(
    array(
        'name' => esc_html('ISO 9001'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-9001-Certificate-1.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-9001-Certificate-2.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-9001-Certificate-3.jpg',
        )
    ),
    array(
        'name' => esc_html('ISO 14001'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-14001-Certificate-1.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-14001-Certificate-2.jpg',
        )
    ),
    array(
        'name' => esc_html('ISO 45001'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-45001-Certificate-1.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISO-45001-Certificate-2.jpg',
        )
    ),
    array(
        'name' => esc_html('ISO/IEC 17025'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/ISOIEC-17025-Certificate-1.jpg'
        )
    ),
    array(
        'name' => esc_html('BIS LICENSE FOR REFINERY'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/BIS-License-2026_page-0001.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/BIS-License-2026_page-0002.jpg',
        )
    ),
    array(
        'name' => esc_html('RJC (Responsible Jewellery Council)'),
        'image' => array(
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/RJC-Certificate-1.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/RJC-Certificate-2.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/RJC-Certificate-3.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/RJC-Certificate-4.jpg',
            'http://ea.brightbridge.co/wp-content/uploads/2026/07/RJC-Certificate-5.jpg',
        )
    ),
);
?>

<section class="py-12 px-4 bg-black">
    <div class="w-full xl:max-w-[1040px] mx-auto">
        <div class="max-w-xl mx-auto mb-10 text-center">
            <h3 class="!text-[#F78D1E] !text-3xl md:!text-4xl font-medium mb-4">OUR GROUP COMPANIES</h3>
        </div>

        <div class="grid lg:grid-cols-[40%_60%]">
            <div
                class="companies-tab-navigation flex lg:flex-col border border-[#636363] overflow-auto rounded-lg lg:overflow-hidden w-full lg:max-w-[340px] lg:w-max h-max mx-auto mb-6 font-light">
                <?php
                foreach ($documents as $index => $document):
                    $tab_id = strtolower(str_replace(' ', '_', $document['name']));
                ?>

                    <button class="companies-tab-btn text-left <?php echo $index == 0 ? 'active' : ''; ?>"
                        data-target="<?php echo esc_attr($tab_id); ?>"><?php echo esc_html(strtoupper($document['name'])); ?></button>
                <?php endforeach; ?>
            </div>

            <div class="companies-tab-content-container mx-auto w-full">
                <?php foreach ($documents as $index => $document):
                    $tab_id = strtolower(str_replace(' ', '_', $document['name']));
                ?>

                    <div id="<?php echo esc_attr($tab_id); ?>" class="companies-tab-panel w-full"
                        style="display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">

                        <!-- Swiper Slider -->
                        <div class="swiper-container w-full policy-swiper overflow-hidden"
                            data-tab="<?php echo esc_attr($tab_id); ?>">
                            <div class="swiper-wrapper">
                                <?php foreach ($document['image'] as $image): ?>
                                    <div class="swiper-slide">
                                        <div class="border rounded-xl overflow-hidden border-gray-500">
                                            <img src="<?php echo esc_url($image); ?>"
                                                alt="<?php echo esc_attr($document['name']); ?>"
                                                class="w-full h-auto object-contain">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Navigation Arrows -->
                            <?php if (count($document['image']) > 1): ?>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            <?php endif; ?>

                            <!-- Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
</section>

<!-- Include Swiper CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.companies-tab-btn');
        const tabPanels = document.querySelectorAll('.companies-tab-panel');
        let swiperInstances = {};

        // Function to update URL slug
        function updateURLSlug(tabName) {
            const url = new URL(window.location);
            url.searchParams.set('tab', tabName.toLowerCase().replace(/\s+/g, '-'));
            window.history.pushState({}, '', url);
        }

        // Function to get tab name from URL
        function getTabFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            const tabParam = urlParams.get('tab');
            if (tabParam) {
                let matchedButton = null;
                tabButtons.forEach(button => {
                    const buttonSlug = button.getAttribute('data-slug') ||
                        button.innerText.trim().toLowerCase().replace(/\s+/g, '-');
                    if (buttonSlug === tabParam) {
                        matchedButton = button;
                    }
                });
                return matchedButton;
            }
            return null;
        }

        // Initialize Swiper for a specific tab
        function initSwiper(tabId) {
            const container = document.querySelector(`#${tabId} .policy-swiper`);
            if (!container) return null;

            // Destroy existing Swiper instance if it exists
            if (swiperInstances[tabId]) {
                swiperInstances[tabId].destroy(true, true);
                delete swiperInstances[tabId];
            }

            // Get slides count
            const slides = container.querySelectorAll('.swiper-slide');
            if (slides.length === 0) return null;

            const hasMultipleSlides = slides.length > 1;

            // Initialize new Swiper
            const swiper = new Swiper(container, {
                slidesPerView: 1,
                spaceBetween: 30,
                // loop: hasMultipleSlides,
                loop: false,
                // pagination: {
                //     el: container.querySelector('.swiper-pagination'),
                //     clickable: true,
                // },
                navigation: hasMultipleSlides ? {
                    nextEl: container.querySelector('.swiper-button-next'),
                    prevEl: container.querySelector('.swiper-button-prev'),
                } : false,
                autoplay: hasMultipleSlides ? {
                    delay: 3000,
                    disableOnInteraction: true,
                } : false,
                effect: 'slide',
                speed: 600,
                grabCursor: true,
            });

            return swiper;
        }

        // Initialize all visible Swipers
        function initializeAllSwipers() {
            tabPanels.forEach(panel => {
                if (panel.style.display !== 'none') {
                    const tabId = panel.id;
                    const swiper = initSwiper(tabId);
                    if (swiper) {
                        swiperInstances[tabId] = swiper;
                    }
                }
            });
        }

        // Function to activate a specific tab
        function activateTab(button) {
            if (!button) return;

            // 1. Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // 2. Hide all content panels
            tabPanels.forEach(panel => panel.style.display = 'none');

            // 3. Add active class to the clicked button
            button.classList.add('active');

            // 4. Show the targeted content panel
            const targetId = button.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.style.display = 'block';

                // Initialize Swiper for this tab after a small delay
                setTimeout(() => {
                    const swiper = initSwiper(targetId);
                    if (swiper) {
                        swiperInstances[targetId] = swiper;
                    }
                }, 100);
            }

            // 5. Update URL slug
            const tabName = button.innerText.trim();
            updateURLSlug(tabName);
        }

        // Add click event listeners to tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                activateTab(this);
            });
        });

        // Check URL on page load and activate corresponding tab
        const tabFromURL = getTabFromURL();
        if (tabFromURL) {
            activateTab(tabFromURL);
        } else {
            // If no tab in URL, activate the first tab by default
            if (tabButtons.length > 0) {
                activateTab(tabButtons[0]);
            }
        }

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                Object.values(swiperInstances).forEach(swiper => {
                    if (swiper && swiper.update) {
                        swiper.update();
                    }
                });
            }, 250);
        });
    });
</script>

<?php get_footer(); ?>