<?php
$category_id = get_cat_ID(single_cat_title('', false));
$AllPost = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 999,
    'cat' => $category_id,
));
?>
<h1><b><?php echo 'Category : ' . get_the_category($id)[0]->name . ' '; ?></b></h1>
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