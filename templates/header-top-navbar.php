<?php

if ( is_front_page() || is_page('artists')) {    
    
    layerslider(1);
    } ?>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>

      <?php if (is_singular( 'artist' ) ) {
        $postid = get_the_ID();
        echo "artist id" .$postid. ;
        echo do_shortcode('[wpv-view name="output-album-meta" wpvprchildof='.$postid.' ]');
      } else{
        echo "not artist";
      $postid = get_the_ID();
      echo do_shortcode('[wpv-view name="output-album-meta"]'); 
      }
      ?>
      </div>
    </nav>
  <?php

if ( is_front_page() ) {    
    
    layerslider(1);
    } ?>
</header>
