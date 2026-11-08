<?php get_header(); ?>

<main class="achievement-archive">

    <h1>Half-Life 2 Achievements</h1>

    <div class="achievement-grid">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class="achievement-card">

                    <a href="<?php the_permalink(); ?>">

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>

                        <h2><?php the_title(); ?></h2>

                    </a>

                    <div class="achievement-description">
                        <?php the_excerpt(); ?>
                    </div>

                </div>

            <?php endwhile; ?>

        <?php else : ?>

            <p>No achievements found.</p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>