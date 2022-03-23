<?php
global $fauzanredux;
get_header('');
?>
<div class="container">
    <?php
    if (have_posts()) :
    if (is_search() || is_archive() || is_tax() || is_tag()) :?>
        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header>
    <?php endif; ?>
    <div class="row">
        <?php
        if (is_home()):
            get_template_part('template-parts/content', 'adv-top');
            get_template_part('template-parts/content', 'top-primary');
            ?>
            <div class="col-md-8">
                <?php
                get_template_part('template-parts/content', 'top-secondary');
                get_template_part('template-parts/content', 'adv-middle');
                get_template_part('template-parts/content', 'middle');
                ?>
            </div>
            <div class="col-md-4">
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
