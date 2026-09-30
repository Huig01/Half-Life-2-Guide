<?php get_header(); ?>

<main class="content-wrapper">
    <section class="error-page">
        <h1>404 - Pagina niet gevonden</h1>
        <p>De pagina die je zoekt bestaat niet of is verplaatst.</p>

        <a href="<?php echo home_url(); ?>" class="button">
            Terug naar Home
        </a>
    </section>
</main>

<?php get_footer(); ?>