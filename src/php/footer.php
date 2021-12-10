<footer>
    <?php
      //   this is another way to display a menu with full control over the items.
      $menu_name = 'footer-menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
      ?>
      <nav class="footer__navigation">
      <h4 class="footer__heading">&copy; <?php echo get_bloginfo('name'); ?> 2020</h4>
        <ul class="footer__navigation__list">
          <?php
          foreach ($menuitems as $key => $item):
            $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
            $page = get_page( $id );
            $link = get_page_link( $id ); 

            if ($key != 0) {
              echo "<span>|</span>";
            }
            ?>
            <li class="footer__navigation__list__item">
              <a href="<?php echo $link; ?>" class="title"><?php echo $page->post_title; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
    </nav>
    <p class="footer__text">
      Demo-Wordpress-Seite im Rahmen der LV‚ Content Mangagement Systeme an
      der FH Salzburg von Araz Alhamdani und Matthias Oberholzer
    </p>
    <p class="footer__text">Alle Inhalte frei erfunden</p>
    <h5 class="footer__subheading">Bildnachweis<br />Fotos</h5>
    <ul class="footer__list">
      <li>
        <p>
          Herofoto Tastatur: Aman Anderson,
          http://de.freeimages.com/photo/illuminated-keyboard-124228
        </p>
      </li>
      <li>
        <p>
          Foto Dina Meyer by Dreifachaxel [CC BY-SA 4.0
          (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia
          Commons
        </p>
      </li>
      <li>
        <p>
          Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas
          Meyer-Hermann) [GFDL (http://www.gnu.org/ copyleft/fdl.html), CC
          BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0) or CC
          BY-SA 3.0 de
          (https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)], via
          Wikimedia Commons
          https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg
        </p>
      </li>
      <li>
        <p>
          Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand
          2015.jpg|SKUelzen Vorstand 2015]]
          https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg
        </p>
      </li>
    </ul>
    <h5 class="footer__subheading">Icons</h5>
    <p class="footer__text">
      Icons Freepik (http://www.freepik.com) / www.flaticon.com
    </p>
  </footer>
  <?php wp_footer();?>