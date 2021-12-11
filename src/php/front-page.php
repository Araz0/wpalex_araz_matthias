<!DOCTYPE html>
<html lang="de">

<?php include 'head.php';?>

<body>
  <?php wp_body_open();?>
  <?php get_header(); ?>
  
  <main>
    	<section id="hero">
        <?php
        $thumbnail_Link = get_template_directory_uri()."/images/illuminated-keyboard.jpg";
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          $thumbnail_Link= get_the_post_thumbnail_url();
        }
        echo '<img class="hero__thumbnail" src="'. $thumbnail_Link.'" alt="Page Thumbnail image">';
        ?>
          <h2 class="hero__heading">
            <span><?php echo get_field('hero_text'); ?></span>
          </h2>
          <button class="hero__button">Angebot einholen</button>
      </section>

      <section id="services" class="max-container-width">
        <h3 class="services__heading">Leistungen</h3>
        <div class="services__container">
          <?php
            $services_query = new WP_Query('order=DESC&category_name=services');
            if ($services_query->have_posts()):
              while ($services_query->have_posts()): $services_query->the_post();?>

              <a class="services__container__block" href="<?php the_permalink();?>">
                <h4 class="services__container__block__heading"><?php the_title();?></h4>
                <?php
                  if (has_post_thumbnail()) {
                  /* grab the url for the full size featured image */
                  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <img class="services__container__block__image" src="<?php echo $featured_img_url ?>"alt="<?php the_title();?>" />
                <?php
              }
              ?>
              </a>
              <?php endwhile;?>
            <?php else: ?>
          <p>Erster Post demnächst...</p>
          <?php endif;?>

          <?php wp_reset_postdata();?>

        </div>
      </section>

      <section id="news" class="max-container-width">
        <h3 class="news__heading">News</h3>
        <div class="news__container">
          <?php
            $news_query = new WP_Query( 'order=DESC&category_name=news&posts_per_page=3' );
            if ( $news_query->have_posts() ) :
              while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                <article class='news__container__item'>
                  <h4>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a> - 
                    <?php the_excerpt(); ?>
                  </h4>
                  
                </article>
                <?php endwhile;
                else : ?>
              <p>Erster Post demnächst...</p>
              <?php endif;
          wp_reset_postdata();?>
        </div>
      </section>

      <?php include 'references.php';?>
    
      
    
  </main>
  <?php include 'footer.php';?>
</body>

</html>