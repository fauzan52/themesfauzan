<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php get_template_part('template-parts/content', 'adv-top'); ?>
        <div class="col-md-8">
            <h1><?php _e('Search Results Found For', 'locale'); ?> : <b><?php the_search_query(); ?></b></h1>
                <?php if (have_posts()) { ?>
                <?php while (have_posts()) {
                the_post(); ?>
                <div class="app-card-search">
                    <div class="app-card-search__images">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </a>
                    </div>
                    <div class="app-card-search__box">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, ' ...'); ?></a>
                        </h3>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        <div class="col-md-4">
            <?php
            get_template_part('template-parts/content', 'adv-right');
            get_template_part('template-parts/content', 'right');
            ?>
        </div>
    </div>
</div>
    <div class="clear text-center">
        <br>
        <?php
        echo fauzan_pagination();
        ?>
        <br>
    </div>
<?php } else {

} ?>
<div class="clear">
    <?php get_footer(); ?>
</div>
