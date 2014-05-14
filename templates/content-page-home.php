  <?php

if ( is_front_page() ) {    
    layerslider(1);
    } ?>
<div class="row">
	<div class="col-sm-12 headline">
		<?php echo do_shortcode('[wpv-view name="homeartist-page-headline"]'); ?>
	</div>
</div>
<div class="row">
<?php echo do_shortcode('[wpv-view name="home-page-artists"]'); ?>
</div>