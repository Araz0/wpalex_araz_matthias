<section id="references" class="max-container-width">
  <h3 class="references__heading">Referenzen</h3>
  <div class="references__container">
    <?php
    $references_query = new WP_Query('order=ASC&category_name=references&posts_per_page=3');
    if ($references_query->have_posts()):
      while ($references_query->have_posts()) : $references_query->the_post(); 
        $qouteImage = get_field('img');
        $zitat = get_field('zitat');
        $role = get_field('role');
    ?>
    <article class="references__container__block">
      <img class="references__container__block__image" src="<?php echo $qouteImage['url']; ?>"
        alt="<?php echo $qouteImage['alt']; ?>" />
      <div class="references__container__block__bio">
        <cite class="references__container__block__name"><?php the_title() ?></cite>
        <p class="references__container__block__firm"><?php echo $role; ?></p>
      </div>
      <blockquote class="references__container__block__copy"><?php echo $zitat; ?></blockquote>
    </article>
      <?php endwhile;
     else: ?>
      <p>Erster Post demnächst...</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    
    <div id="quotemarker">
      <img src="<?php echo get_template_directory_uri() ?>/images/quotation_mark.svg" alt="quotes" />
    </div>
  </div>
</section>