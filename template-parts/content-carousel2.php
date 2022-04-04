<?php
$SliderPostOne = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 1,
));
?>

<?php
$SliderPostTwo = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 1,
    'offset' => 1,
));
?>

<?php
$SliderPostThree = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 1,
    'offset' => 2,
));
?>

<?php
$SliderPostFour = new WP_Query(array(
    'post_type' => 'berita',
    'posts_per_page' => 1,
    'offset' => 1,
));
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php if ($SliderPostOne->have_posts()) : ?>
                <?php while ($SliderPostOne->have_posts()) :
                    $SliderPostOne->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <img class="d-block w-100" src="<?= get_the_post_thumbnail_url(); ?>"
                             alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                            </h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="carousel-item">
            <?php if ($SliderPostTwo->have_posts()) : ?>
                <?php while ($SliderPostTwo->have_posts()) :
                    $SliderPostTwo->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <img class="d-block w-100" src="<?= get_the_post_thumbnail_url(); ?>"
                             alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                        </h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="carousel-item">
            <?php if ($SliderPostThree->have_posts()) : ?>
                <?php while ($SliderPostThree->have_posts()) :
                    $SliderPostThree->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <img class="d-block w-100" src="<?= get_the_post_thumbnail_url(); ?>"
                             alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                        </h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="carousel-item">
            <?php if ($SliderPostFour->have_posts()) : ?>
                <?php while ($SliderPostFour->have_posts()) :
                    $SliderPostFour->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <img class="d-block w-100" src="<?= get_the_post_thumbnail_url(); ?>"
                             alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                        </h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>