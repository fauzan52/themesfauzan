<?php
/**
 * Template Name: Category Custom Page
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'berita-olahraga',
                'posts_per_page' => 999,
                'paged' => $paged,
            );
            $arr_posts = new WP_Query( $args );

            if ( $arr_posts->have_posts() ) :

                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail();
                        endif;
                        ?>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_pagenavi(
                    array(
                        'query' => $arr_posts,
                    )
                );
            endif;
            ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>