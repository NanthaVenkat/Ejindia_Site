<?php
/*
Template Name: Gold
*/
get_header();
?>

<!-- <div class="flex items-center justify-center bg-gray-400 w-full h-[400px]">
    <video class="w-full h-full" preload="" playsinline="" autoplay="" muted="" loop="">
        <source src="https://www.ejindia.com/wp-content/uploads/2022/11/gold-new.mp4" type="video/mp4">
    </video>
</div> -->

<?php
$goldJewels = array(
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-13.jpg',
        'name' => 'Casting',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-8.jpg',
        'name' => 'Indiania',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-4.jpg',
        'name' => 'Electro Forming',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-10.jpg',
        'name' => 'Electro Fusion',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-12.jpg',
        'name' => 'Nagas',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-16.jpg',
        'name' => 'Stamping & Imprez',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-6.jpg',
        'name' => 'DVIJA',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-9.jpg',
        'name' => 'Machine Chain',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-5.jpg',
        'name' => 'Mangal Sutra',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-17.jpg',
        'name' => 'Unikraft',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-15.jpg',
        'name' => 'MMD',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-14.jpg',
        'name' => 'ILA',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-11.jpg',
        'name' => 'Handmade',
    ),
    array(
        'image' => 'http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-5.jpg',
        'name' => 'Emerald NXT',
    ),
);
?>

<div class="w-full overflow-hidden" style="max-height: 450px;">
    <video width="100%" autoplay muted loop playsinline style="display: block; object-fit: cover; object-position: center; height: 450px;">
        <source src="http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-new.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<section class="py-12 bg-[#fffdfc]">
    <div class="w-full xl:max-w-[1040px] mx-auto px-4 mb-5">

        <img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/gold-7.jpg" alt="" class="mx-auto">

        <div class="space-y-5 px-6 py-12 sm:p-12 text-center mb-8">
            <h3 class="text-[#555] text-2xl sm:text-3xl">DESIGN YOUR DREAMS</h3>
            <p class="text-[#777] text-xl">Emerald believes in crafting your product to your hearts content.We take up highest
                levels of customisation to manufacture your dream product, just the way
                you like it. Dive into our world of co-creation.</p>

            <!-- <a href="" class="rounded-full shadow-xl -shadow-y-[6px] px-8 py-3 text-xl transition hover:bg-gray-400 hover:text-white mt-4 inline-block border border-gray-400">Know How</a> -->

            <button command="show-modal" commandfor="dialog" class="rounded-full shadow-xl -shadow-y-[6px] px-8 py-3 text-xl transition hover:bg-gray-400 hover:text-white mt-4 inline-block border border-gray-400">Know How</button>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($goldJewels as $index => $goldJewel): ?>
                <div class="shadow-xl">
                    <img src="<?php echo $goldJewel['image'] ?>" alt="Casting" class="mx-auto">
                    <p class="bg-[#1c2331] py-2 px-4 text-center uppercase text-white"><?php echo $goldJewel['name'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'template-parts/jewelery-modals.php'; ?>

<?php get_footer(); ?>