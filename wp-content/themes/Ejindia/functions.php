<?php
function ejindia_theme_enqueue_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_style('ejindia-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));

    wp_enqueue_style(
        'ejindia-custom-css',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    wp_enqueue_script(
        'tailwind-browser',
        'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
        [],
        null,
        false
    );

    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        [],
        '12.2.0'
    );

    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        [],
        '12.2.0',
        true
    );

    wp_enqueue_script(
        'ejindia-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery', 'swiper'],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ejindia_theme_enqueue_scripts');


function register_careers_cpt()
{
    register_post_type('careers', [
        'labels' => [
            'name' => 'Careers',
            'singular_name' => 'Career'
        ],
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => ['title'],
        'has_archive' => false,
        'rewrite' => ['slug' => 'careers']
    ]);
}
add_action('init', 'register_careers_cpt');

function register_career_taxonomy()
{
    register_taxonomy(
        'job_category',
        'careers',
        [
            'label' => 'Job Categories',
            'hierarchical' => true,
            'show_admin_column' => true,
            'rewrite' => [
                'slug' => 'job-category'
            ]
        ]
    );
}
add_action('init', 'register_career_taxonomy');

// Allow SVG upload (restricted to users with upload capability)
function allow_svg_upload($mimes)
{
    if (current_user_can('upload_files')) {
        $mimes['svg'] = 'image/svg+xml';
    }
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Fix MIME type check
function fix_svg_mime_type($data, $file, $filename, $mimes)
{
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'svg') {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svg';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);