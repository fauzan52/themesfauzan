<?php
//load script
function load_file()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_file');

function get_excerpt_length()
{
    return 5;
}

//ALL SHOW MENU
function init_setup()
{
    register_nav_menus(array(
        'main_menu' => 'Menu Utama',
        'footer_menu' => 'Menu Footer'
    ));
// Add featured image
    add_theme_support('post-thumbnails');
    add_image_size('small_thumbnail', '804', '453', 'true');
    add_image_size('big_thumbnail', '1800', '400');
// Add Post Format Wordpress
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'init_setup');

//Load CSS
function theme_styles_css()
{
// Load all of the styles that need to appear on all pages
    wp_enqueue_style('primary', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/magnific-popup.css');
}

add_action('wp_enqueue_scripts', 'theme_styles_css');

//CUSTOM POST TYPE
// BERITA TERBARU
function post_type_terbaru()
{
    $args = array(
        'labels' => array(
            'name' => 'Berita Terbaru',
            'singular_name' => 'Berita Terbaru',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('berita-terbaru', $args);
}
add_action('init', 'post_type_terbaru');

function taxonomy_terbaru()
{
    $args = array(
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('berita-terbaru'), $args);
}
add_action('init', 'taxonomy_terbaru');

// BERITA OLAHRAGA
function post_type_olahraga()
{
    $args = array(
        'labels' => array(
            'name' => 'Berita Olahraga',
            'singular_name' => 'Berita Olahraga',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('berita-olahraga', $args);
}
add_action('init', 'post_type_olahraga');

function taxonomy_olahraga()
{
    $args = array(
        'labels' => array(
            'name' => 'Category Olahraga',
            'singular_name' => 'Category Olahraga',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('berita-olahraga'), $args);
}
add_action('init', 'taxonomy_olahraga');

// BERITA MAKANAN
function post_type_makanan()
{
    $args = array(
        'labels' => array(
            'name' => 'Berita Makanan',
            'singular_name' => 'Berita Makanan',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('berita-makanan', $args);
}
add_action('init', 'post_type_makanan');

function taxonomy_makanan()
{
    $args = array(
        'labels' => array(
            'name' => 'Category Makanan',
            'singular_name' => 'Category Makanan',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('berita-makanan'), $args);
}
add_action('init', 'taxonomy_makanan');

// BERITA CORONAVIRUS
function post_type_coronavirus()
{
    $args = array(
        'labels' => array(
            'name' => 'Berita Coronavirus',
            'singular_name' => 'Berita Coronavirus',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('berita-coronavirus', $args);
}
add_action('init', 'post_type_coronavirus');

function taxonomy_coronavirus()
{
    $args = array(
        'labels' => array(
            'name' => 'Category Coronavirus',
            'singular_name' => 'Category Coronavirus',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('berita-coronavirus'), $args);
}
add_action('init', 'taxonomy_coronavirus');

//POST TYPE LAIN
add_action('init', 'custom_post_type');
function custom_post_type()
{
    $label = array(
        'name' => 'Series',
        'singular_name' => 'Series',
        'add_new' => 'Add Series',
        'all_items' => 'All Series',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Post',
        'not_found' => 'No Items Found',
        'not_found_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $label,
        'public' => true,
        'has_archive' => "series",
        'publicly_queryable' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'slug' => 'series',
            'feeds' => false
        ),
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'custom_fields'
        ),
        'taxonomies' => array(
            'category',
            'post_tag',
            'tags'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('series', $args);
}git br

// Redux Framework
require_once(get_template_directory() . "/library/redux-core/framework.php");
require_once(get_template_directory() . "/library/sample/config.php");

//REDUX OPTIONS
if (!function_exists('fauzanoptions')) {
    function fauzanoptions($opt_name = null)
    {
        global $fauzanclone;
        if (!empty($opt_name)) {
            return !empty($fauzanclone[$opt_name]) ? $fauzanclone[$opt_name] : null;
        } else {
            return !empty($fauzanclone[$opt_name]) ? $fauzanclone[$opt_name] : null;
        }
    }

    require_once get_template_directory() . '/includes/helpers/comment.php';
}

//PAGINATION
function fauzan_pagination()
{
    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => [],
        ]
    ];
    $args = [
        'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
        'after_page_number' => '</span>',
    ];
    printf('<nav class="fauzan_pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

if (!function_exists('fauzan_layout')) {
    function fauzan_layout($type)
    {
        if (!empty($type)) {
            if ($type === "search"):
                get_template_part('template-parts/views/content', $type);
            elseif ($type === "portofolio"):
                get_template_part('template-parts/views/archive/archive', $type);
            else:
                get_template_part('template-parts/views/layout', $type);
            endif;
        } else {
            get_template_part('template-parts/views/layout', 'default');
        }
    }

    add_action('fauzan_layout', 'fauzan_layout', 10, 1);
}
?>