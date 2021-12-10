<header id="header">
    <a href="/"><h1 class="header__logo"><?php echo get_bloginfo('name'); ?></h1></a>

    <div class="header__hamburger" role="button">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
    <?php //  wp_nav_menu(array('theme_location' => 'main-menu')) // this is a simple way to display the menu without the full control over the items?>

    <?php
    //   this is another way to display a menu with full control over the items.
    $menu_name = 'main-menu';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
    ?>
    <nav class="header__navigation">
      <ul class="header__navigation__list">
        <?php
        foreach ( $menuitems as $item ):
          $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
          $page = get_page( $id );
          $link = get_page_link( $id ); ?>
      
          <li class="header__navigation__list__item">
            <a href="<?php echo $link; ?>" class="title"><?php echo $page->post_title; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
  </nav>
  </header>
