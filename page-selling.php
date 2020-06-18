<?php
/**
 * The template for displaying the selling page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayofquintehomes
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		include "css/selling-css.php";
?>

<div id="sellingIntro">
  <p><?php the_field('selling_intro'); ?></p>
</div>

<div id="sellingImage">
  <?php
  $image = get_field('selling_image');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>

<div class="sellingHeading">
  <p><?php the_field('heading_one'); ?></p>
</div>

<div class="sellingText">
  <p><?php the_field('text_one'); ?></p>
</div>

<div class="sellingHeading">
  <p><?php the_field('heading_two'); ?></p>
</div>

<div class="sellingText">
  <p><?php the_field('text_two'); ?></p>
</div>

<div id="sellingContact" >
  <a id="sellingLink" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>"><?php the_field('selling_contact'); ?></a>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
