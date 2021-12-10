<!DOCTYPE html>
<html lang="de">

<?php include 'head.php';?>

<body>
  <?php wp_body_open();?>
  <?php get_header(); ?>
  
  <main>
  <section id="hero" class="">
        <?php
        $thumbnail_Link = get_template_directory_uri()."/images/illuminated-keyboard.jpg";
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          $thumbnail_Link= get_the_post_thumbnail_url();
        }
        echo '<img class="hero__thumbnail" src="'. $thumbnail_Link.'" alt="Page Thumbnail image">';
        ?>
      </section>

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
  </main>
  <?php include 'footer.php';?>
</body>

</html>