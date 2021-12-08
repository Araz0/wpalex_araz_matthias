<header id="header">
    <h1 class="header__logo">Alex Mayer</h1>

    <div class="header__hamburger" role="button">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
    <nav class="header__navigation">
      <ul class="header__navigation__list">
        <li class="header__navigation__list__item"><a href="#">Start</a></li>
        <li class="header__navigation__list__item">
          <a href="#">Leistungen</a>
        </li>
        <li class="header__navigation__list__item"><a href="#">Blog</a></li>
        <li class="header__navigation__list__item">
          <a href="#">&Uuml;ber mich</a>
        </li>
        <li class="header__navigation__list__item">
          <a href="#">Kontakt</a>
        </li>
      </ul>
    </nav>
  </header>
