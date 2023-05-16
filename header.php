<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="bg-gray-800 text-white px-6 py-4">
    <div class="flex items-center justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-semibold flex items-center gap-3">
            <img src="/path/to/logo.png" alt="Logo" class="h-8 w-auto sm:h-10">
            <?php bloginfo('name'); ?>
        </a>

        <div class="sm:hidden">
            <button id="menu-button" class="h-8 w-8 fill-current">
                <svg viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 6a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm1 5a1 1 0 100 2h12a1 1 0 100-2H4z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <nav id="main-nav" class="hidden sm:block">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'header-menu-class list-none sm:flex sm:justify-center sm:space-x-4',
                'container' => false
            ));
            ?>
        </nav>
    </div>

    <nav id="mobile-nav" class="hidden sm:hidden mt-4">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class' => 'header-menu-class list-none space-y-2',
            'container' => false,
        ));
        ?>
    </nav>
</header>

<script>
    document.getElementById('menu-button').addEventListener('click', function () {
        document.getElementById('mobile-nav').classList.toggle('hidden');
    });
</script>
