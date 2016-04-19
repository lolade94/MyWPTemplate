
<html>
<head>

	    <meta charset="<?php bloginfo( 'charset' ); ?>">

	    <meta name="viewport" content="width=device-width">

	    <title><?php wp_title( '|', true, 'right' ); ?></title>

	    <link rel="profile" href="http://gmpg.org/xfn/11">

	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	    <!--&#91;if lt IE 9&#93;>

	    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	    <!&#91;endif&#93;-->
       <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php wp_head();?>

	</head>
	
		<body <?php body_class('port-body'); ?> > 

		<!--home contents-->
		 <div id="page" class="hm-feed site">
		 
		 <!--header-->
			<header id="head-info" class="site-header">
			
			<div class="container">
			
				<div class="intro">
					<div id="img-block">
				      <!--gif image-->
				    </div><!--image block-->
					<h4 id="site-description" class="bio"> <?php bloginfo('description'); ?> </h4>
					   <a class="view" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> View Projects</a><!--view button-->
				</div> <!--intro-->
				
		      </div> <!--container-->
			  
			</header><!--header-->
			
	     <div id="content"  class="main-content container">
		 