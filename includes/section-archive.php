<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php get_template_part('template-parts/content', 'adv-top'); ?>
        <div class="col-md-8">
            <?php
            get_template_part('template-parts/content', 'adv-middle');
            get_template_part('template-parts/content', 'archive');
            ?>
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