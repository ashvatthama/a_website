<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doody
 */

?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->

<footer id="colophon" class="site-footer border-top">
    <div class="site-info">
        <div class="container py-3 text-center">
            <?php if (!get_option('footer_text_setting')):?>
                <a href="<?php echo esc_url(__('https://wordpress.org/', 'doody')); ?>">
                    <?php
                    /* translators: %s: CMS name, i.e. WordPress. */
                    printf(esc_html__('Proudly powered by %s', 'doody'), 'WordPress');
                    ?>
                </a>
                <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf(esc_html__('Theme: %1$s by %2$s.', 'doody'), 'Doody', 'chellemdg');
                ?>
            <?php else: ?>
                <?php echo get_option('footer_text_setting') ?>
            <?php endif?>


        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
