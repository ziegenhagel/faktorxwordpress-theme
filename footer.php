<footer>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'footer-menu',
        'container_class' => 'footer-menu-class'
    ) );
    ?>
    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
