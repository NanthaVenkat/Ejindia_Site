<?php
/*
Template Name: retail presence
*/
get_header();
?>

<!-- <div class="flex items-center justify-center bg-gray-400 w-full h-[400px]">
    <video class="w-full h-full" preload="" playsinline="" autoplay="" muted="" loop="">
        <source src="https://www.ejindia.com/wp-content/uploads/2022/11/gold-new.mp4" type="video/mp4">
    </video>
</div> -->

<?php
$presences = array(
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Coimbatore-min_xyt06x-781x1024-1.jpg',
        'phone' => '82200 17613',
        'address' => '# 287-287, Cross Cut Road, Gandhipuram, Coimbatore.',
        'location' => 'Coimbatore'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Erode-min_e346au-775x1024-1.jpg',
        'phone' => '82208 97444',
        'address' => '# 85, R.K.V Road, Erode – 638003.',
        'location' => 'Erode'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Pollachi-min_grboqd-scaled-1.jpg',
        'phone' => '87540 11250',
        'address' => '# 34, Kadai Veethi, Opp. Narasus Coffee, Pollachi – 642001.',
        'location' => 'Pollachi'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Madurai-min_g7epyh-scaled-1.jpg',
        'phone' => '87548 07070',
        'address' => '# 123 A Nethaji Road, Modern Restaurant Opp, Madurai – 625001.',
        'location' => 'Madurai'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Vellore-min_gqznly-scaled-1.jpg',
        'phone' => '82200 17614',
        'address' => '# 18/1 Anna Salai, Opp. Voorhees College, Vellore – 632001.',
        'location' => 'Vellore'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/001-1_o60hn1.jpg',
        'phone' => '82200 17620',
        'address' => '# 88, Kamaraj Salai, Near Hotel Jayaram, Pudhucherry – 605001.',
        'location' => 'Pondicherry'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Ramanathapuram-min_fbqlp5-scaled-1.jpg',
        'phone' => '98106 87564',
        'address' => '# 65, Swamy Vivekanda Salai, Ramanathapuram – 623501.',
        'location' => 'Ramanathapuram'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Selam-min_te3mgn-scaled-1.jpg',
        'phone' => '99525 55362',
        'address' => 'Old No. 51/4, New No. 72, Omalur Main Road, Swarnapuri, Near New Bus Stand, Salem – 636004.',
        'location' => 'Salem'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Udumalpet-min_tduwny-scaled-1.jpg',
        'phone' => '87540 12250',
        'address' => '# 24, Dhali Road,Shalimar Lodge Building, Udumelpet-641126.',
        'location' => 'Udumalpet'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/Hosur-min_tnbjw7-scaled-1.jpg',
        'phone' => '82208 62444',
        'address' => 'NO. 8, OPP HOSUR BUS STAND, NEAR FLOWER MARKET, HOSUR – 635109.',
        'location' => 'Hosur'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/2023-02-03.jpg',
        'phone' => '97918 13222',
        'address' => 'Near Thirumangalam Metro station, 233-235, 2nd Ave, L Block, Anna Nagar West, Chennai, Tamil Nadu 600040',
        'location' => 'Anna Nagar'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/jewelone-dubai-llc.png',
        'phone' => '',
        'address' => 'Office No: 205, 2nd Floor Building- Marayam Al Dhagaya – PO box 340561 Gold souk, Deira – Dubai. UAE',
        'location' => 'Jewellery India LLC (Dubai)'
    ),
);
?>

<section class="py-12 bg-[#fffdfc]">
    <div class="w-full xl:max-w-[1040px] mx-auto px-4 mb-5">

        <h4 class="text-3xl md:text-4xl uppercase text-[#264d6a] font-medium text-center mb-8">AUXILIARY</h4>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($presences as $index => $presence): ?>
                <div class="shadow-xl">
                    <div class="px-6 py-4 text-[#555] space-y-4">
                        <p class="text-2xl">JewelOne</p>
                        <p class="text-[#777]"><?php echo $presence['location'] ?></p>
                    </div>
                    <?php if (!$presence['image'] == "") : ?>
                        <img src="<?php echo $presence['image'] ?>" alt="Casting" class="mx-auto w-full h-[320px] object-center object-cover">
                    <?php else : ?>
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/JO_Logo.svg" alt="Casting" class="mx-auto w-full h-[320px] object-center object-fit mt-auto p-6">
                    <?php endif; ?>

                    <div class="px-6 py-4 space-y-4">
                        <p class="text-[#777]"><?php echo $presence['address'] ?></p>
                        <a href="tel:<?php echo str_replace(" ", "", $presence['phone']) ?>" class="text-[#264d6a]"><?php echo $presence['phone'] ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>