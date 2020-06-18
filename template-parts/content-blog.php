<div id="blogIndexBody" class="flex-item">

  <div>

      <h2 id="blogIndexTitle">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>

      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'blog-thumbnail' );  ?></a>

      <div>
          <?php bayofquinte_post_meta(); ?>
      </div>

      <!-- <p><?php the_tags(); ?></p> -->

      <div>
          <?php the_excerpt(); ?>
      </div>

       <!-- <?php bayofquinte_readmore_link(); ?> -->

       <!-- <?php the_category(); ?> -->

  </div>

</div>