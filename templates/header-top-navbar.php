<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/">
      <img src="/wp-content/themes/blasterrecords/assets/img/blaster-logo.png" /></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      
	  <div class="player col-sm-12 col-md-4 col-lg-3" id="player">
	      <?php if (is_singular( 'artist' ) ) {
	        $postid = get_the_ID();
	        echo do_shortcode('[wpv-view name="output-track-meta" wpvprchildof='.$postid.' ]');
	      } else{
	      echo do_shortcode('[wpv-view name="output-track-meta"]'); 
	      }
	      ?>
        <div class="pop-out">
         <i class="glyphicon glyphicon-new-window"></i>
         </div>
		  <br />
    	  <audio preload></audio>
      </div>
	  
     </div>
    </nav>
</header>
