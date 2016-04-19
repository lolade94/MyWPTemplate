<div  id="post-<?php  the_ID(); ?>" <?php post_class(); ?> >

<?php  if(has_post_thumbnail() ): ?>
   <div class="pic-block">
    <a href="<?php the_permalink(); ?>" title=" <?php the_title() ; ?>">
      <?php the_post_thumbnail('home-pic'); ?>
	  </a>
	</div><!--pic block thumb-->
<?php endif; ?>

  <div id="info">
  

	<div class="pro-info">
	   <?php the_title( 
	   sprintf('<h3 class="pro-title"><a href="%s" rel="bookmark">', esc_url(get_permalink() ) ), '</a> </h3>' );
	    ?>
	   </div> <!-- header-->
	   
	   <div class="pro-summary">
	      <?php if( (get_theme_mod('lola_full_content') == 1) && is_home() ) : ?>
	                <?php the_content(); ?>
		 <?php else : ?>
		        <?php the_excerpt(); ?>
		<?php endif; ?>
		 
		  
			  <a  class="viewmore more" href="<?php the_permalink(); ?>"> View More </a> 
			
		 
	   </div><!--project summary-->
	

	
	</div>
</div><!--post-->