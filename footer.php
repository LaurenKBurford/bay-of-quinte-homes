<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bayofquintehomes
 */

wp_footer();
include "css/footer-css.php";
?>
</body>

<footer>
<nav id="footerMenu">
    <?php wp_nav_menu(
    	array(
    		'menu' => 'footer-menu',
    		'theme-location' => 'footer-menu',
    		'fallback_cb' => false
    		)
    	  );
    ?>
</nav>

<section id="footerPattern"><?php dynamic_sidebar('sidebar-2'); ?></section>

</footer>

</html>