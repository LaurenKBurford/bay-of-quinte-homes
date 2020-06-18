<?php
/**
 * The template for displaying the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayofquintehomes
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<?php include "css/about-css.php";
?>

<div id="aboutHero">
<?php
$image = get_field('about_hero_image');
$size = 'large';
    echo wp_get_attachment_image( $image, $size );
?>
</div>

<div id="aboutIntro">
  <p><?php the_field('about_intro'); ?></p>
</div>

<div id="aboutContainer">
  <p class="aboutEachParagraph"><?php the_field('about_paragraph_one'); ?></p>

  <div class="aboutEachImage">
	  <?php
	  $image = get_field('about_first_image');
	  $size = 'large';
	      echo wp_get_attachment_image( $image, $size );
	  ?>
	</div>
</div>

  <div class="aboutBlackBar">
    <p class="whiteText">Joe Smith</p>
    <p><span class="whiteText">T </span><?php the_field('hugh_phone'); ?></p>
    <p><?php the_field('hugh_email'); ?></p>
  </div>

<div id="aboutContainer">
  <p class="aboutEachParagraph"><?php the_field('about_paragraph_two'); ?></p>

  <div class="aboutEachImage">
  <?php
  $image = get_field('about_second_image');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
	</div>
</div>

  <div class="aboutBlackBar">
    <p class="whiteText">Jim Doe</p>
    <p><span class="whiteText">T </span><?php the_field('jake_phone'); ?></p>
    <p><?php the_field('jake_email'); ?></p>
  </div>

<div id="aboutSecondHero">
  <?php
  $image = get_field('about_second_hero');
  $size = 'large';
      echo wp_get_attachment_image( $image, $size );
  ?>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();