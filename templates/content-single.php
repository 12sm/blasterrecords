<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      
      <nav class="post-nav">  
	     <!--<ul class="pager">
	      	<li class="previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></li>
	      	<li class="next"><?php next_post_link( '%link', '%title &rarr;' ); ?></li>
	      </ul>-->
	  </nav>
      
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
