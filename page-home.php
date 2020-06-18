<?php
/**
 * The template for displaying the home page
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
		include "css/home-page-styles.php";
?>

    <div id="homeHeroImage">
    	<?php
    	$image = get_field('hero_image');
    	$size = 'large';
    	if( $image ) {
    	    echo wp_get_attachment_image( $image, $size );
    	} ?>
    </div>

    <div class="blackBar"></div>
    <div class="barText">
    	<h2 class="barHeadingOne"><?php the_field('heading_one'); ?><h2>
    	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Buying' ) ) ); ?>"><h3 class="barHeadingTwo"><?php the_field('heading_two'); ?></h3></a>
    </div>

    <div id="intro">
    	<p><?php the_field('intro_paragraph'); ?></p>
    </div>

		<h2 id="properties-header"><?php the_field('properties_title'); ?></h2>

		<div id="property-listings">
			<?php

	    $args = array(
	    	'post_type' => 'property_listings',
				'posts_per_page' => '6',
	    );
	    $properties_loop = new WP_Query( $args );

	    if ( $properties_loop->have_posts() ) : while ( $properties_loop->have_posts() ) : $properties_loop->the_post(); ?>


				<div class="property-listing">

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<a href="<?php the_permalink(); ?>" class="title"><?php the_title();?></a>

					<div class="price"><?php the_field('price'); ?></div>

					<div class="details">

						<div class="detail">
							<?php
							$beds = get_field('bedrooms');
							if ($beds != null) { ?>

							<label class="label">Beds: </label><?php the_field('bedrooms');

							} ?>
						</div>

						<div class="detail">
							<?php $baths = get_field('bedrooms');
							if ($baths != null) { ?>

							<label class="label">Baths: </label><?php the_field('bathrooms');

							} ?>
						</div>

						<div class="detail">
							<?php $acres = get_field('lot_size');
							if ($acres != null) { ?>

							<label class="label">Acres: </label><?php the_field('lot_size');

							} ?>
						</div>

					</div> <!-- Details -->

					<div class="prop-excerpt"><?php the_field('excerpt'); ?></div>

				</div> <!-- Property Listing -->

				 <?php
	    endwhile; endif;

			wp_reset_postdata(); ?>

			<h3 id="properties-footer"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Listings' ) ) ); ?>" target="_blank"><?php the_field('all_listings_title'); ?> →</a></h3>

	</div>

    <div id="sellingImage">
    	<?php
    	$image = get_field('selling_image');
    	$size = 'large';
    	if( $image ) {
    	    echo wp_get_attachment_image( $image, $size );
    	} ?>
    </div>

    <div class="blackBar"></div>
    <div class="barText">
    	<h2 class="barHeadingOne"><?php the_field('heading_three'); ?><h2>
    	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Selling' ) ) ); ?>"><h3 class="barHeadingTwo"><?php the_field('heading_four'); ?></h3></a>
    </div>

    <div id="aboutIntro">
    	<img id="century21" src="<?php echo wp_get_attachment_url( 2242 ); ?>">
    	<p><?php the_field('about_paragraph'); ?></p>
    	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>"><h4 id="learnMoreAbout"><?php the_field('about_link_text'); ?></h4></a>
    </div>

    <div id="whiteBar"></div>
    <div id="countyText">
    	<p><?php the_field('county_about_text'); ?></p>
    	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'The County' ) ) ); ?>"><h4 id="countyAbout"><?php the_field('county_about_link'); ?></h4></a>
    </div>

    <div id="countyImage">
    	<?php
    	$image = get_field('the_county_image');
    	$size = 'large';
    	if( $image ) {
    	    echo wp_get_attachment_image( $image, $size );
    	} ?>
    </div>

    <div id="relative">
        <div id="contactInfo">

        	<div id="century21Small">
            	<?php
            	$image = get_field('c21_logo');
            	$size = 'medium';
            	if( $image ) {
            	    echo wp_get_attachment_image( $image, $size );
            	} ?>
          </div>


            	<div class="contactInfo">
            		<p class="blackText">Joe Smith</p>
            		<p><span class="blackText">T </span><?php the_field('hugh_phone'); ?></p>
            		<a href="" target="_blank"><p><?php the_field('hugh_email'); ?></p></a>
            	</div>
            	<div class="contactInfo">
            		<p class="blackText">Jim Doe</p>
            		<p><span class="blackText">T </span><?php the_field('jake_phone'); ?></p>
            		<a href="" target="_blank"><p><?php the_field('jake_email'); ?></p></a>
            	</div>

        </div>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();