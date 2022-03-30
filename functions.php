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
}

add_action('wp_enqueue_scripts', 'theme_styles_css');

//CUSTOM POST TYPE BERITA
function post_type_berita()
{
    $label = array(
        'name' => 'Berita',
        'singular_name' => 'Berita',
        'add_new' => 'Tambahkan Berita',
        'all_items' => 'Semua Berita',
        'add_new_item' => 'Tambahkan Berita',
        'edit_item' => 'Edit Berita',
        'new_item' => 'Berita Baru',
        'view_item' => 'Lihat Berita',
        'search_item' => 'Pencarian Berita',
        'not_found' => 'Tidak Ada Berita',
        'not_found_trash' => 'Tidak Ada Berita Dalam Trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $label,
        'public' => true,
        'has_archive' => "berita",
        'publicly_queryable' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'slug' => 'berita',
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
        'menu_icon' => 'dashicons-insert',
        'exclude_from_search' => false
    );
    register_post_type('berita', $args);
    register_taxonomy('category-berita', array('berita'), $args);
}
add_action('init', 'post_type_berita');

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
        'before_page_number' => '<span class="btn border border-dark mr-2 mb-2">',
        'after_page_number' => '</span>',
    ];
    printf('<nav class="fauzan_pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

//Search for Title Only

//LAYOUT
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
            get_template_part('template-parts/content', 'home');
        }
    }
    add_action('fauzan_layout', 'fauzan_layout', 10, 1);
}
?>