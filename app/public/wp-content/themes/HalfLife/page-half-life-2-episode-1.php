<?php get_header(); ?>

<main class="achievement-page">

    <h1>Half-Life 2: Main Game Achievements</h1>

    <table class="achievement-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Achievement</th>
                <th>Description</th>
                <th>Chapter</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/HL2_makeabasket.webp" alt="Two Points">
                </td>
                <td>Two Points</td>
                <td>Use Dog's ball to make a basket in the scrapyard.</td>
                <td>Black Mesa East</td>
            </tr>

            <tr>
                <td>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Hl2_Ep1_Gnome.webp" alt="What Cat?">
                </td>
                <td>What Cat?</td>
                <td>Break the mini teleporter in Kleiner's lab.</td>
                <td>A Red Letter Day</td>
            </tr>

            <tr>
                <td>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Hl2_ep1_gnometospace.webp" alt="Achievement 3">
                </td>
                <td>Achievement naam</td>
                <td>Beschrijving van de achievement.</td>
                <td>Chapter</td>
            </tr>

        </tbody>
    </table>

</main>

<?php get_footer(); ?>