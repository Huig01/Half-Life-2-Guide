
<?php get_header(); ?>

<?php

$search = isset($_GET['achievement_search'])
    ? sanitize_text_field(wp_unslash($_GET['achievement_search']))
    : '';

$selected_game = isset($_GET['game'])
    ? sanitize_title(wp_unslash($_GET['game']))
    : '';

$selected_tag = isset($_GET['achievement_tag'])
    ? sanitize_title(wp_unslash($_GET['achievement_tag']))
    : '';

$categories = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));

$tags = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => false,
));

$args = array(
    'post_type' => 'achievement',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

if (!empty($search)) {
    $args['s'] = $search;
}

$tax_query = array();

if (!empty($selected_game)) {
    $tax_query[] = array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $selected_game,
    );
}

if (!empty($selected_tag)) {
    $tax_query[] = array(
        'taxonomy' => 'post_tag',
        'field' => 'slug',
        'terms' => $selected_tag,
    );
}

if (!empty($tax_query)) {
    $args['tax_query'] = $tax_query;
}

$achievements = new WP_Query($args);
?>

<main class="achievement-archive">

    <h1>Half-Life 2 Achievements</h1>

    <!-- Zoek- en filterformulier -->
    <form method="get" action="<?php echo esc_url(get_post_type_archive_link('achievement')); ?>"
          class="achievement-filters">

        <input
            type="text"
            name="achievement_search"
            placeholder="Zoek een achievement..."
            value="<?php echo esc_attr($search); ?>"
        >

        <select name="game">
            <option value="">Alle games</option>

            <?php if (!is_wp_error($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <option
                        value="<?php echo esc_attr($category->slug); ?>"
                        <?php selected($selected_game, $category->slug); ?>
                    >
                        <?php echo esc_html($category->name); ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>

        <select name="achievement_tag">
            <option value="">Alle tags</option>

            <?php if (!is_wp_error($tags)) : ?>
                <?php foreach ($tags as $tag) : ?>
                    <option
                        value="<?php echo esc_attr($tag->slug); ?>"
                        <?php selected($selected_tag, $tag->slug); ?>
                    >
                        <?php echo esc_html($tag->name); ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>

        <button type="submit">Zoeken / Filteren</button>

        <a href="<?php echo esc_url(get_post_type_archive_link('achievement')); ?>">
            Filters wissen
        </a>

    </form>

    <div class="achievement-grid">

        <?php if ($achievements->have_posts()) : ?>

            <?php while ($achievements->have_posts()) : $achievements->the_post(); ?>

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

            <p>Geen achievements gevonden.</p>

        <?php endif; ?>

    </div>

    <?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
