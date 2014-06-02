  <?php

if ( is_front_page() ) {    
    layerslider(4);
    } ?>
<div class="row">
	<div class="col-sm-12 headline">
		<?php echo do_shortcode('[wpv-view name="homeartist-page-headline"]'); ?>
	</div>
</div>
<div class="row">
<?php echo do_shortcode('[wpv-view name="home-page-artists"]'); ?>
<?php echo do_shortcode('[wpv-view name="home-page-artists-random"]'); ?>
</div>