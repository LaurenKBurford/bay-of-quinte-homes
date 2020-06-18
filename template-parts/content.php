<h1 class="singlePostTitle"><?php the_title(); ?></h1>

<div id="singleDate">
  <?php bayofquinte_post_meta(); ?>
</div>

<div id="singleHeroImage">
  <?php the_post_thumbnail( 'large' );  ?>
</div>

<div id="singleContent">
  <?php the_content(); ?>
</div>