
	<div id="post-<?php the_ID(); ?> " <?php post_class(); ?>  >
	
	
	<header class="post-header">
		<?php the_title('<h1 class="post-title">', '</h1>'); ?>
	
	     </header>
		<?php if (has_post_thumbnail()) : ?>
			<div class="single-thumb">
              <?php the_post_thumbnail('single_thumb'); ?>

			  
			</div>
	    <?php endif; ?>
		
		
		<div class="post-content clearfix">
		<?php the_content(); ?>
		</div><!--post content-->
	
	
	</div>
	<?php get_footer(); ?>