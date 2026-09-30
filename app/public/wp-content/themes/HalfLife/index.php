<?php get_header(); ?>

<main class="content-wrapper">

    <section class="posts-list">

        <h1>Half-Life Achievement Guide</h1>

        <p>Vind hier alle achievements van Half-Life 2, Episode One en Episode Two.</p>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article class="achievement-card">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="achievement-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="achievement-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <a class="read-more" href="<?php the_permalink(); ?>">
                        Bekijk achievement →
                    </a>

                </article>

            <?php endwhile; ?>

        <?php else : ?>

            <p>Geen achievements gevonden.</p>

        <?php endif; ?>

    </section>

    <aside class="content-image">

        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/DG.png'); ?>"
            alt="Half-Life Achievement Guide">

    </aside>

</main>

<?php get_footer(); ?>