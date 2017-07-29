<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 4:55 PM
 */

?>

<?php get_header();?>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding-left no-padding-right">

            <div id="inner-page-top-slider" class="accreditations slider-pro">
                <div class="sp-slides">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                            ?>
                            <div class="sp-slide">
                                <img class="sp-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-retina="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
                            </div>
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="sp-thumbnails">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                            ?>
                            <div class="sp-thumbnail">
                                <div class="sp-thumbnail-image-container">
                                    <img class="sp-thumbnail-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding-right">
            <div class="accreditations about-page-logos-wrapper">
                <h4>ACCREDITATIONS</h4>
					
						<div class="row">
						<?php foreach($teacrate_theme_options['home_page_accreditations_logos'] as $client): ?>
							<div class="col-xs-6">
								<a href="#">
									<img data-original="<?php echo $client['image']; ?>" class="img-responsive accreditations-small-logo" src="<?php echo $client['image']; ?>">
								</a>
							</div>
						<?php endforeach; ?>
						</div>
					
				<div class="dropdown">
					<button class="download-brochure dropdown-toggle" type="button" data-toggle="dropdown">Download Brochures
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<?php
                    if( have_rows('about_us_page_download_brochures') ):
                        while ( have_rows('about_us_page_download_brochures') ) : the_row();
                            ?>
						  <li><a href="<?php the_sub_field('brochure_file'); ?>" target="_blank"><?php the_sub_field('brochure_title'); ?></a></li>
					  <?php
                        endwhile;
                    else :
                    endif;
                    ?>
					</ul>
				</div>
            </div>
        </div>

    </div>
</div>


<div class="clear"></div>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

            <div class="well page-content-full about-main-content">
                <?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
				?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php
						} // end while
					} // end if
				?>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">
                <div class="contact-banner">
                    <h3>Call us for a <span>FREE</span> quote on <a href="tel:<?php echo $teacrate_theme_options['contact_number']; ?>"><?php echo $teacrate_theme_options['contact_number']; ?></a> or <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>


<?php get_footer();?>


