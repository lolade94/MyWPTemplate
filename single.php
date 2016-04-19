<?php

get_header();

?>

<div id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while( have_posts() ): the_post(); ?>
    <?php get_template_part('content', 'single'); ?>
<?php endwhile; ?>














</div> <!--end of main-->

</div><!--primary-->

