<?php
// Enqueue styles & scripts
function custom_goo_theme_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'custom-goo-theme-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Custom JS
    wp_enqueue_script(
        'custom-goo-theme-script',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_goo_theme_assets');

// Enable menus
register_nav_menus(array(
    'primary' => __('Primary Menu', 'custom-goo-theme'),
    'footer'  => __('Footer Menu', 'custom-goo-theme'),
));

// Enable featured images
add_theme_support('post-thumbnails');

// === CPT: Services ===
function create_services_cpt() {
    $labels = array(
        'name' => __('Services'),
        'singular_name' => __('Service'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title','editor','thumbnail'),
        'show_in_rest' => true,
    );
    register_post_type('service', $args);
}
add_action('init', 'create_services_cpt');

// === CPT: Portfolio ===
function create_portfolio_cpt() {
    $labels = array(
        'name' => __('Portfolio'),
        'singular_name' => __('Project'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title','editor','thumbnail'),
        'show_in_rest' => true,
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');

// === ACF Fields untuk Portfolio ===
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_portfolio_fields',
    'title' => 'Portfolio Fields',
    'fields' => array(
        array(
            'key' => 'field_portfolio_meta',
            'label' => 'Portfolio Meta',
            'name' => 'portfolio_meta',
            'type' => 'text',
            'instructions' => 'Contoh: Branding, UI/UX Design & Web Development',
        ),
        array(
            'key' => 'field_portfolio_subtitle',
            'label' => 'Portfolio Subtitle',
            'name' => 'portfolio_subtitle',
            'type' => 'text',
            'instructions' => 'Subjudul kecil, contoh: Maju Properties',
        ),
        array(
            'key' => 'field_portfolio_button_text',
            'label' => 'Button Text',
            'name' => 'portfolio_button_text',
            'type' => 'text',
            'default_value' => '[ READ CASE ]',
            'instructions' => 'Label tombol (default: [ READ CASE ])',
        ),
        array(
            'key' => 'field_portfolio_mockup',
            'label' => 'Mockup Image',
            'name' => 'portfolio_mockup',
            'type' => 'image',
            'instructions' => 'Upload gambar mockup (opsional)',
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'portfolio',
            ),
        ),
    ),
));

endif;

// === WHY ITEMS CPT ===
add_action('init', function () {
    $labels = [
        'name'               => 'Why Items',
        'singular_name'      => 'Why Item',
        'menu_name'          => 'Why Items',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Why Item',
        'edit_item'          => 'Edit Why Item',
        'new_item'           => 'New Why Item',
        'view_item'          => 'View Why Item',
        'search_items'       => 'Search Why Items',
        'not_found'          => 'No items found',
        'not_found_in_trash' => 'No items found in Trash',
    ];
  
    register_post_type('why_item', [
        'labels'        => $labels,
        'public'        => true,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-awards',
        'supports'      => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'], // editor/excerpt utk deskripsi, page-attributes utk urutan
        'has_archive'   => false,
        'rewrite'       => ['slug' => 'why'],
    ]);
});

// === STORIES ITEMS CPT ===
add_action('init', function () {
    $labels = [
        'name'               => 'Stories',
        'singular_name'      => 'Story',
        'menu_name'          => 'Stories',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Story',
        'edit_item'          => 'Edit Story',
        'new_item'           => 'New Story',
        'view_item'          => 'View Story',
        'search_items'       => 'Search Stories',
        'not_found'          => 'No stories found',
        'not_found_in_trash' => 'No stories found in Trash',
    ];
  
    register_post_type('story', [
        'labels'        => $labels,
        'public'        => true,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-format-aside',
        'supports'      => ['title','editor','excerpt','thumbnail','page-attributes'],
        'has_archive'   => true,
        'rewrite'       => ['slug' => 'stories'],
        'taxonomies'    => ['category'],
    ]);
});

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_image_size('story-card', 1200, 900, true);
});

// === Footer supports, menus, and customizer ===
add_action('after_setup_theme', function () {
    add_theme_support('custom-logo', [
        'height'      => 64,
        'width'       => 64,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    register_nav_menus([
        'primary'      => __('Primary Menu', 'customgoo'),
        'footer-legal' => __('Footer Legal Menu', 'customgoo'),
    ]);
  });
  
  add_action('customize_register', function ($wp_customize) {
    // Section
    $wp_customize->add_section('footer_section', [
        'title'    => __('Footer', 'customgoo'),
        'priority' => 160,
    ]);
  
    // Tagline kiri logo
    $wp_customize->add_setting('footer_tagline', [
        'default'           => 'AI powered creative and digital agency',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('footer_tagline', [
        'label'   => __('Footer Tagline', 'customgoo'),
        'type'    => 'text',
        'section' => 'footer_section',
    ]);
  
    // CTA text
    $wp_customize->add_setting('footer_cta_text', [
        'default'           => 'GET IN TOUCH',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_cta_text', [
        'label'   => __('CTA Text', 'customgoo'),
        'type'    => 'text',
        'section' => 'footer_section',
    ]);
  
    // CTA URL
    $wp_customize->add_setting('footer_cta_url', [
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_cta_url', [
        'label'   => __('CTA URL', 'customgoo'),
        'type'    => 'url',
        'section' => 'footer_section',
    ]);
  
    // Copyright
    $wp_customize->add_setting('footer_copyright', [
        'default'           => '©' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('footer_copyright', [
        'label'   => __('Copyright Text', 'customgoo'),
        'type'    => 'text',
        'section' => 'footer_section',
    ]);
});

// custom scripts
function enqueue_custom_scripts() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), false, true);
    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array('swiper-js'), false, true);
    // Fonts
    wp_enqueue_style(
        'customgoo-fonts',
        get_template_directory_uri() . '/assets/css/fonts.css',
        [],
        null
    );
    wp_enqueue_style('customgoo-hero', get_template_directory_uri().'/assets/css/hero.css', [], null);
    wp_enqueue_script('customgoo-nav', get_template_directory_uri().'/assets/js/nav.js', [], null, true);
    wp_enqueue_script('customgoo-nav', get_template_directory_uri().'/assets/js/video-play.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_action('wp_head', function () {
    $base = get_template_directory_uri() . '/assets/fonts/graphik/';
    echo '<link rel="preload" href="'.$base.'Graphik-Black-Trial.otf" as="font" type="font/otf" crossorigin>';
    echo '<link rel="preload" href="'.$base.'Graphik-Regular-Trial.otf" as="font" type="font/otf" crossorigin>';
    echo '<link rel="preload" href="'.$base.'Graphik-Semibold-Trial.otf" as="font" type="font/otf" crossorigin>';
});
