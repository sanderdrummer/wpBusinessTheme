<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><i class="fa fa-beer" aria-hidden="true"></i>
         <?php bloginfo('name'); ?></a>
    <nav class="nav nav-inline">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('items_wrap'=> '%3$s', 'walker' => new App\Bootstrap_Nav_Walker(), 'container'=>false, 'menu_class' => '', 'theme_location' => 'primary_navigation'));
      endif;
      ?>
    </nav>
  </div>
</header>