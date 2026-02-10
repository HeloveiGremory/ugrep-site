</main> <!-- Закрываем main -->

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
        <!-- <nav class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'container'      => 'ul'
            ));
            ?>
        </nav> -->
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>