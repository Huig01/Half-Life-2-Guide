<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="site-header">
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="http://half-life-2-guide.local/half-life-2-main-game/">
                        Half-Life 2: Main Game
                    </a>
                </li>
                <li>
                    <a href="http://half-life-2-guide.local/half-life-2-episode-1/">
                        Half-Life 2: Episode One
                    </a>
                </li>
                <li>
                    <a href="http://half-life-2-guide.local/half-life-2-episode-2/">
                        Half-Life 2: Episode Two
                    </a>
                </li>
            </ul>
        </nav>
    </header>