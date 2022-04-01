<?php
global $fauzanredux;
get_header();
?>
<div class="container">
    <?php
    if (have_posts()) :
    if (is_search() || is_archive() || is_tax() || is_tag()) :?>
    <?php endif; ?>
    <div class="row">
        <?php
        if (is_home()): ?>
            <div class="col-lg-12">
                <?php
                get_template_part('template-parts/content', 'adv-top');
                get_template_part('template-parts/content', 'top-primary');
//                get_template_part('template-parts/content', 'carousel');
                get_template_part('template-parts/content', 'carousel2');
                ?>
            </div>
            <div class="col-lg-8">
                <?php
                get_template_part('template-parts/content', 'top-secondary');
                get_template_part('template-parts/content', 'adv-middle');
                get_template_part('template-parts/content', 'middle');
                ?>
            </div>
            <div class="col-lg-4">
                <?php
                get_template_part('template-parts/content', 'adv-right');
                get_template_part('template-parts/content', 'right');
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
