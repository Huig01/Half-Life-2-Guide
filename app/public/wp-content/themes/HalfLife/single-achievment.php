<?php get_header(); ?>

<main class="single-achievement">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>

            <div class="achievement-description">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>