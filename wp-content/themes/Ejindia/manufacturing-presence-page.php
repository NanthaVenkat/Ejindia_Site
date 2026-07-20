<?php
/*
Template Name: manufacturing presence
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
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/unit1_l8zqe7.jpg',
        'phone' => '9629033311',
        'address' => '300-301/1A,1B-Mettupalayam Rd, Rakkipalayam privu NSN Palayam post, Coimbatore – 641031, India',
        'location' => 'UNIT – 1'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/unit2_yuaeuw-scaled-1.jpg',
        'phone' => '0422 422 2420',
        'address' => '817,Sullivan Street Coimbatore – 641 001, Tamilnadu',
        'location' => 'UNIT – 2'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/unit4_oyg5m8.jpg',
        'phone' => '96290 33311',
        'address' => 'NO. 460,461/1, 462/1C, 462/2A Kathirnaikan Palayam Road, Thoppampatti Post, Coimbatore – 641017.',
        'location' => 'UNIT – 4'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/corp-min_jdz62f-scaled-1.jpg',
        'phone' => '90039 20167',
        'address' => '230 Thiruvenkatasamy road east, RS Puram, Coimbatore – 6410002.',
        'location' => 'CORPORATE'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/delhi001-min_tuiqa8.jpg',
        'phone' => '98106 87564',
        'address' => '9a / 37, Ground Floor, W E A, Karolbagh, New Delhi – 110005.',
        'location' => 'DELHI'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/001-1_o60hn1.jpg',
        'phone' => '97913 48666',
        'address' => 'Usha Bhavan(1st floor) P.O Garalagacha, Dankuni Dist Hooghly,West Bengal – 712708',
        'location' => 'KOLKATA'
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/mumbai001_zzuwxk.jpg',
        'phone' => '98106 87564',
        'address' => '215 / 216, 2nd Floor, Jewel World, Old Cotton Exchange Building, 175 Kalbadevi Road, Mumbai-400002.',
        'location' => 'MUMBAI'
    ),
    array(
        'image' => '',
        'phone' => '(+971) 06-5348264',
        'address' => 'Unit No 01, Ground Floor, Navaketan Industrial Estate, Opp Onida House, Mahakali Road, Shanti Nagar, Andheri East Mumbai 400093, Maharashtra',
        'location' => 'BDE & DESIGN UNIT'
    ),
    array(
        'image' => '',
        'phone' => '',
        'address' => 'MIDC Central Rd, opp. SEEPZ Gate No.1, Santacruz Electronic Export Processing zone, Andheri East, Mumbai, Maharashtra 400053.',
        'location' => 'MUMBAI MANUFACTURING'
    ),
    array(
        'image' => '',
        'phone' => '',
        'address' => 'No.08, Palamathur uthiramerur Main Road, Pukkathurai, Natarajapuram, Madurantakam Taluk, Chengalpattu – 603308.',
        'location' => 'CHENNAI MANUFACTURING (UNIT-6)'
    ),
    array(
        'image' => '',
        'phone' => '',
        'address' => 'Unit No: 2O-09-24 ,Floor No.9, Jewellery & Gemplex DMCC Buliding, No-2, Plot No: 550-554 , P.O.Box: 340561, Sheikh Zayed Road, Dubai ,UAE.',
        'location' => 'DMCC DUBAI'
    ),
);
?>

<section class="py-12 bg-[#fffdfc]">
    <div class="w-full xl:max-w-[1040px] mx-auto px-4 mb-5">

        <h4 class="text-3xl md:text-4xl uppercase text-[#264d6a] font-medium text-center mb-8">PRESENCE</h4>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($presences as $index => $presence): ?>
                <div class="shadow-xl">
                    <div class="px-6 py-4 text-[#555] space-y-4">
                        <p class="text-2xl">Emerald</p>
                        <p class="text-[#777]"><?php echo $presence['location'] ?></p>
                    </div>
                    <?php if (!$presence['image'] == "") : ?>
                        <img src="<?php echo $presence['image'] ?>" alt="Casting" class="mx-auto w-full h-[320px] object-center object-cover">
                    <?php else : ?>
                        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/Emerald.png" alt="Casting" class="mx-auto w-full h-[320px] object-center object-cover mt-auto p-6">
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