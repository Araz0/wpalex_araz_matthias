<!DOCTYPE html>
<html lang="de">

<?php include 'head.php';?>

<body>
  <?php wp_body_open();?>
  <?php get_header(); ?>
  
  <main>
      <section id="hero" class="">
        <h2 class="hero__heading">
          <span>Glänzende Ideen</span> <br />
          <span>für leuchtende Augen</span>
        </h2>
        <button class="hero__button">Angebot einholen</button>
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