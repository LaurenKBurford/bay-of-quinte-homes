<?php
/**
 * The template for displaying the contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayofquintehomes
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php include "css/contact-css.php";
?>

<div id="contactHero">
<?php
$image = get_field('contact_hero_image');
$size = 'large';
    echo wp_get_attachment_image( $image, $size );
?>
</div>

<div id="contactContact">
  <div class="contactPersonalInfo">
    <p class="blackText">Joe Smith</p>
    <p><span class="blackText">T </span><?php the_field('hugh_phone'); ?></p>
    <a href="" target="_blank"><p><?php the_field('hugh_email'); ?></p></a>
  </div>

  <div class="contactPersonalInfo">
    <p class="blackText">Jim Doe</p>
    <p><span class="blackText">T </span><?php the_field('jake_phone'); ?></p>
    <a href="" target="_blank"><p><?php the_field('jake_email'); ?></p></a>
  </div>
</div>

<p id="contactText"><?php the_field('contact_text'); ?></p>

<div id="contactForm">

<p id=""><?php the_field('contact_form'); ?></p>

</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();