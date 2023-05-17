<?php
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container mx-auto">


            <?php
            if (have_posts()) :

                if (is_home() && !is_front_page()) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php
                endif;

                the_post();
                if (!is_home() && !is_front_page()) :
                    breadcrumb();
                    echo "<h1 class=' post-title    '>" . get_the_title() . "</h1>";
                endif;
                get_template_part('template-parts/content', get_post_type());
                the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
