<?php
$SliderPost = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 4,
));
?>
<?php if ($SliderPost->have_posts()) : ?>
    <?php while ($SliderPost->have_posts()) :
        $SliderPost->the_post(); ?>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for($i=0;$i<4;$i++) { ?>
                    <li data-target="#carouselExampleCaptions" class="active"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" class="d-block w-100" alt="gambar">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php for($i=0;$i<4;$i++) { ?>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <?php } ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
