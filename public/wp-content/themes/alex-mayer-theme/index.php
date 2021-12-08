<!DOCTYPE html>
<html lang="de">

<?php include 'head.php';?>

<body>
  <?php wp_body_open();?>
  <?php body_class(); ?>
  <?php //get_header(); ?>
  <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
} else {
    echo "Kein Inhalt";
}
?>
<?php include 'header.php';?>
  
  <main>
    <section id="maincontents" class="maxwidth-container">

      <?php 
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_title();
          the_content();
        }
      }else{
          echo "<p>nothing to show here... ~_~</p>";
      }
      ?>
    </section>
    <?php 
    if (is_front_page()) {
      ?>
      <section id="hero" class="">
        <h2 class="hero__heading">
          <span>Glänzende Ideen</span> <br />
          <span>für leuchtende Augen</span>
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
                <img class="services__container__block__image" src="<?php echo $featured_img_url ?>"
                  alt="<?php the_title();?>" />
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
            $news_query = new WP_Query( 'order=DESC&cat=2&posts_per_page=3' );
            if ( $news_query->have_posts() ) :
              while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                <article class='news__container__item'>
                  <h4>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a> - 
                    <?php the_content(); ?>
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


      <?php
    }
    ?>
    

  </main>
  <?php include 'footer.php';?>
</body>

</html>