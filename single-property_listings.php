<?php
require_once "css/single-property_listings-css.php";
get_header();
?>

<div id="container">
  <h1 id="title"><?php the_title(); ?></h1>

  <?php the_field('photo_gallery'); ?>

  <div id="description"><?php the_field('description'); ?></div>

  <div id="details">

      <h2 id="details-header">Details:</h2>

      <p class="detail-section"><span class="detail-title">Address: </span><span class="detail"><?php the_field('address'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Price: </span><span class="detail"><?php the_field('price'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Bedrooms: </span><span class="detail"><?php the_field('bedrooms'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Bathrooms: </span><span class="detail"><?php the_field('bathrooms'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Garages: </span><span class="detail"><?php the_field('garages'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Square Footage: </span><span class="detail"><?php the_field('square_footage'); ?></span></span></p>

      <p class="detail-section"><span class="detail-title">Region: </span><span class="detail"><?php the_field('region'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Year Built: </span><span class="detail"><?php the_field('year_built'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Lot Size: </span><span class="detail"><?php the_field('lot_size'); ?> Acres</span></p>

      <p class="detail-section"><span class="detail-title">MLS#: </span><span class="detail"><?php the_field('mls#'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Postal Code: </span><span class="detail"><?php the_field('postal_code'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Taxes: </span><span class="detail"><?php the_field('taxes'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Dwelling Type: </span><span class="detail"><?php the_field('dwelling_type'); ?></span></p>

      <p class="detail-section"><span class="detail-title">Basement: </span><span class="detail"><?php the_field('basement'); ?></span></p>

  </div> <!-- Details -->
</div>
<p><?php get_footer(); ?></p>
