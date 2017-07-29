<?php
/**
 * Template Name: Promotions
 *
 * @package WordPress
 * @subpackage Teacrate
 * @since Teacrate 1.0
 */
 ?>

<!DOCTYPE html>
<html>

<head>

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

		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		
	<title>
		<?php
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
		?>
	</title>

	<?php wp_head(); ?>
	
	

</head>

<?php global $teacrate_theme_options; ?>

<body <?php body_class(); ?>>

<div class="hide" id="cookies-text">
	<p><strong><?php echo $teacrate_theme_options['cookies_title']; ?></strong>
	<?php echo $teacrate_theme_options['cookies_text']; ?>
	<a href="<?php echo get_permalink( get_page_by_path( 'cookie-policy' ) ); ?>" rel="nofollow" title="Privacy &amp; Cookies Policy" class="btn btn-primary btn-sm">privacy and cookies policy</a>
	<a class="close-cookie-banner btn btn-success btn-sm" href="javascript:void(0);" onclick="removeMe();"><span>I agree</span></a>
	</p>
</div>

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
?>

<div class="promotion-container-outer">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right">
				<a class="promotion-logo" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="img-responsive" ></a>
			</div>	
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left no-padding-right">
				<?php $header_title = get_field('header_title'); if($header_title != null || $header_title != ''): echo '<h2 class="promotion-header-text">'.get_field('header_title').'</h2>'; else: ?>
				<h2 class="promotion-header-text">Call us today on <?php echo $teacrate_theme_options['contact_number']; ?> and quote: <?php the_title(); ?></h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right promoimageheight">
			<div class="promotion-main-title">
				<h1><?php echo get_field('main_title'); ?></h1>
				<h2><?php echo get_field('small_title'); ?></h2>
			</div>
		</div>	
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left no-padding-right promoimage">
			<div class="promotion-main-image promoimageheight" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>)"></div>
		</div>
	</div>
</div>

<div class="clear"></div>

<div class="main-content-outer">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
				<div class="promotion-main-content-left">
					<?php the_content(); ?>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
				<div class="promotion-main-content-right promo-enquire-content">
				<?php if( get_field('contact_form_title') ): ?>
					<h2><?php echo get_field('contact_form_title'); ?></h2>
				<?php endif; ?>
					<p><?php echo get_field('contact_form_text'); ?></p>
					<?php echo do_shortcode(get_field('promotion_contact_form')); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="promotion-footer-outer">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="promotion-footer-text">
					<p><?php echo get_field('promotion_footer_text'); ?></p>
				</div>
			</div>	
		</div>
	</div>
</div>
	
<?php
		} // end while
	} // end if
?>

<?php wp_footer(); ?> 

</body>
</html>
