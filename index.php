
	  <?php get_header()?>
		
   <div id="primary" class="content-area">

		   <div id="grid-area" class="grid-content content">
			
			<?php if( have_posts() ) :?>
				<?php while( have_posts() ) : the_post() ; ?>
				   <?php get_template_part('content', get_post_format() ); ?>
				<?php endwhile;?>
		    <?php endif;?>
			
		     </div><!--content-->


         </div><!--primary-->
		 <?php get_sidebar(); ?>
		 
	<?php get_footer(); ?>	
