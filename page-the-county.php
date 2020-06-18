<?php
/**
 * The template for displaying the county page
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
		include "css/the-county-css.php";
?>

<div id="countyIntro">
  <p><?php the_field('the_county_intro'); ?></p>
</div>

<div class="countyImage">
  <?php
  $image = get_field('image_one');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>

<div class="description">
  <p><?php the_field('description_one'); ?></p>
</div>

<div class="countyImage">
  <?php
  $image = get_field('image_two');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>

<div class="description">
  <p><?php the_field('description_two'); ?></p>
</div>

<div class="countyImage">
  <?php
  $image = get_field('image_three');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
