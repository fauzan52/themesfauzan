
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($a = 0; $a < 4; $a++) { ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
<!--        <div class="carousel-item active">-->
<!--            <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/04/11/08/26/nature-5029360_960_720.jpg"-->
<!--                 alt="First slide">-->
<!--            <div class="carousel-caption d-none d-md-block">-->
<!--                <h3>AAAA</h3>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/04/11/08/26/nature-5029360_960_720.jpg"-->
<!--                 alt="First slide">-->
<!--            <div class="carousel-caption d-none d-md-block">-->
<!--                <h3>BBBBB</h3>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/04/11/08/26/nature-5029360_960_720.jpg"-->
<!--                 alt="First slide">-->
<!--            <div class="carousel-caption d-none d-md-block">-->
<!--                <h3>CCCCC</h3>-->
<!--            </div>-->
<!--        </div>-->

        <?php
        $SliderPost = new WP_Query(array(
            'post_type' => 'berita',
            'posts_per_page' => 4,
        ));
        ?>
        <?php if ($SliderPost->have_posts()) : ?>
        <?php while ($SliderPost->have_posts()) :
        $SliderPost->the_post(); ?>
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= get_the_post_thumbnail_url(); ?>"
                 alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></h3>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
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