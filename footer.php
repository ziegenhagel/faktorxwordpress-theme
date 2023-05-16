<footer>
    <nav class="footer-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container_class' => 'footer-menu-class list-none'
        ));
        ?>
    </nav>

    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
