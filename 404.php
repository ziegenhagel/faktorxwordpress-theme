<?php
get_header(); ?>

    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Seite konnte nicht gefunden werden', 'fxwp-theme' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'Es sieht so aus, als ob wir nicht finden konnten, wonach Sie gesucht haben. Vielleicht hilft eine Suche.', 'fxwp-theme' ); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->

<?php
get_footer();
