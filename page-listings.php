<?php
/**
 * The template for displaying the listings page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayofquintehomes
 */
require_once "css/listings-css.php";
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


<div id="property-listings">
		<?php

		global $post;

		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
    	'post_type' => 'property_listings',
			'paged' => $paged
    );

    $properties_loop = new WP_Query( $args );

		$temp_query = $wp_query;
		$wp_query = null;
		$wp_query = $properties_loop;

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

	    <div class="excerpt"><?php the_field('excerpt'); ?></div>

		</div>

    <!-- contents of Your Post -->

	<?php endwhile; ?>

	</div> <!-- property-listings --> <?php

		endif;

		wp_reset_postdata(); ?>

		<div id="prev"><?php previous_posts_link('Previous'); ?></div>
		<div id="next"><?php next_posts_link('Next', $properties_loop->max_num_pages);?></div><?php

		$wp_query = NULL;
		$wp_query = $temp_query;

		?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
