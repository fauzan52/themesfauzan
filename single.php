<?php get_header(); ?>
<div class="allcontent">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/content', 'adv-top'); ?>
            <div class="col-md-8">
                <div class="flex">
                    <div class="singlepage">
                        <div class="singlepage__images">
                            <?php echo the_post_thumbnail(); ?>
                        </div>
                        <div class="singlepage__text">
                            <h1><b><?php echo get_the_title(); ?></b></h1>
                            <p><i>Created on <?php echo get_the_date(); ?>
                                    | <?php echo 'Category : ' . get_the_category($id)[0]->name . ' '; ?></i></p>
                            <p>Team : <b><?php the_field('team'); ?></b> | Player : <b><?php the_field('player'); ?></b></p>
                            <h3><?php echo the_content(); ?></h3>
                            <p><i>Keywords : <?php the_field('keywords'); ?></i></p>
                            <br>
                            <a href="/wordpress" class="btn btn-success">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                get_template_part('template-parts/content', 'adv-right');
                get_template_part('template-parts/content', 'right');
                ?>
            </div>
        </div>
    </div>
</div>
<div class="clear">
    <?php get_footer(); ?>
</div>