<footer>
    <nav class="footer-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-menu list-none space-y-2',
            'container' => false,
        ));
        ?>
    </nav>

    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
