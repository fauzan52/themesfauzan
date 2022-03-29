<?php
$category_id = get_cat_ID(single_cat_title('', false));
$AllPost = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 999,
    'cat' => $category_id,
));
?>
<div class="title-page">
    <h1><?php single_cat_title(__('', 'textdomain')); ?></h1>
</div>
<?php if ($AllPost->have_posts()) : ?>
    <?php while ($AllPost->have_posts()) : $AllPost->the_post(); ?>
        <div class="app-card-allpost">
            <div class="app-card-allpost__images">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
            </div>
            <div class="app-card-allpost__box">
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, ' ...'); ?></a>
                </h3>
                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>