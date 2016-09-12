<header class="banner pos-f-t">
    <nav class="navbar navbar-dark bg-primary bg-faded">

        <div class="container">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse"
                    data-target="#mainMenuCallpaseTrigger" aria-controls="mainMenuCallpaseTrigger" aria-expanded="false"
                    aria-label="Toggle navigation">
                &#9776; Menü
            </button>
            <div class="collapse navbar-toggleable-xs" id="mainMenuCallpaseTrigger">
                <a class="navbar-brand hidden-sm-down" href="<?= esc_url(home_url('/')); ?>"><i
                        class="fa fa-paper-plane-o"
                        aria-hidden="true"></i><i
                        class="fa fa-beer" aria-hidden="true"></i>
                    <?php bloginfo('name'); ?></a>
                <ul class="nav navbar-nav pull-sm-right">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('items_wrap' => '%3$s', 'walker' => new App\Bootstrap_Nav_Walker(), 'container' => false, 'menu_class' => '', 'theme_location' => 'primary_navigation'));
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>