<?php
/**
 * The template for displaying the buying page
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
		include "css/buying-css.php";
?>

<div id="buyingIntro">
  <p><?php the_field('buying_intro'); ?></p>
</div>

<div id="buyingImage">
  <?php
  $image = get_field('buying_image');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>

<div class="buyingHeading">
  <p><?php the_field('heading_one'); ?></p>
</div>

<div class="buyingText">
  <p><?php the_field('text_one'); ?></p>
</div>

<div class="buyingHeading">
  <p><?php the_field('heading_two'); ?></p>
</div>

<div class="buyingText">
  <p><?php the_field('text_two'); ?></p>
</div>

<div id="buyingContact" >
  <a id="contactLink" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>"><?php the_field('buying_contact'); ?></a>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
