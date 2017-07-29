<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/13/2016
 * Time: 3:12 PM
 */
?>
<?php get_header();?>


<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div id="inner-page-bottom-slider" class="slider-pro">
                <div class="sp-slides">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('inner_page_top_slider') ):

                        // loop through the rows of data
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

                        // no rows found

                    endif;

                    ?>
                </div>
												
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

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-8 disigner-range-experience-wrap-left">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								
				<div class="content-read-more">
					<h2><?php the_title(); ?></h2>
					<div class="content"><?php the_content(); ?></div>
				</div>

			<?php endwhile; ?>
							
			<?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
		    <div class="inner-page-checklist-wrapper">
                <div class="inner-page-checklist">
                    <ul>
                        <?php
                            if( have_rows('bullet_points') ):
                                while ( have_rows('bullet_points') ) : the_row();
                                    ?>
                                    <li><?php the_sub_field('bullets'); ?></li>
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

<div class="container">
    <div class="row-fluid">
        <?php

			// check if the repeater field has rows of data
			if( have_rows('page_bottom_links') ):

				// loop through the rows of data
				while ( have_rows('page_bottom_links') ) : the_row();
		?>	
			<div class="col-xs-12 col-sm-4 col-md-4 no-padding-left no-padding-right">
				<a href="<?php the_sub_field('pb_link'); ?>">
					<div class="services-wrap-inner second" style="background-image: url(<?php the_sub_field('pb_image'); ?>);">
						<h3><?php the_sub_field('pb_title'); ?></h3>
					</div>
				</a>
			</div>			
		<?php
				endwhile;

			else :

				// no rows found

			endif;

		?>        	
						
    </div>
</div>

<div class="clear"></div>


<?php get_footer();?>