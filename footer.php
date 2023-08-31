
<footer class="<?php echo is_page('about') ? 'other-footer' : '' ?>">
    <?php if(is_front_page()) : ?>
        <?php get_template_part('template-part/contact-part')?>
    <?php endif?>
        <div class="contact-space__addon">
            <p class="addon-text"><?php echo get_theme_mod('footer-text')?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>