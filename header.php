<?php
/*
Theme Name: PHSTeacrate
Theme URI:
Author: Dhananjaya maha Malage
Author URI: 
Description: 
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: PHSTeacrate

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

?>

<!DOCTYPE html>
<html lang="en">

    <head>
		<!-- Force IE to use the latest version of its rendering engine --> 
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo home_url(); ?>/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo home_url(); ?>/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo home_url(); ?>/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo home_url(); ?>/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo home_url(); ?>/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo home_url(); ?>/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo home_url(); ?>/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo home_url(); ?>/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo home_url(); ?>/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo home_url(); ?>/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo home_url(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo home_url(); ?>/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo home_url(); ?>/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo home_url(); ?>/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<link rel='stylesheet' id='ie8-css'  href='http://www.voqs.eu/teacrate/wp-content/themes/teacrate/css/ie8.css' type='text/css' media='all' />
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon Icon -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

		<?php wp_head(); ?>

    </head>
    
<body <?php body_class(); ?>>

<div class="se-pre-con" id="preLoaderWrapper"></div>

<?php global $teacrate_theme_options; ?>


<?php echo $teacrate_theme_options['google_tag_manager']; ?>

<div id="search-form" class="search-form-wrap hide">

	<!--
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'radiate' ); ?></span>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'radiate' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
		</label>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'radiate' ); ?>">
	</form>
	-->


			<?php echo get_search_form(false); ?>

	
	<span class="search-close-btn"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>

<div class="container-navbar">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<nav id="green-navbar" class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="main-logo" ></a>	
						</div>
						<div id="navbar" class="navbar-collapse collapse">	
												
							<?php
								wp_nav_menu( array(
												'menu'              => 'primary',
												'theme_location'    => 'primary',
												'depth'             => 2,
												'container'         => 'div',
												/*'container_class'   => 'collapse navbar-collapse',
												'container_id'      => 'bs-example-navbar-collapse-1',*/
												'menu_class'        => 'nav navbar-nav',
												'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
												'walker'            => new wp_bootstrap_navwalker())
								);
							?>
						</div><!--/.nav-collapse -->
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>


<div class="clear"></div>


<div class="hide" id="cookies-text">
	<p><strong><?php echo $teacrate_theme_options['cookies_title']; ?></strong>
	<?php echo $teacrate_theme_options['cookies_text']; ?>
	<a href="<?php echo get_permalink( get_page_by_path( 'cookie-policy' ) ); ?>" rel="nofollow" title="Privacy &amp; Cookies Policy" class="btn btn-primary btn-sm">privacy and cookies policy</a>
	<a class="close-cookie-banner btn btn-success btn-sm" href="javascript:void(0);" onclick="removeMe();"><span>I agree</span></a>
	</p>
</div>
