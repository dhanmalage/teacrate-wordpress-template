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

<!--
<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">			
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						
						global $page;
			?>
			<div class="main-content">
				<div class="main-content-title">
                    <h3><?php the_title(); ?></h3>
                </div>
				<div class="main-content-text">
                    <?php the_content(); ?>
                </div>
			</div>
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
    <div class="row-fluid planting-services">
	<?php

		// check if the repeater field has rows of data
		if( have_rows('seo_content') ):

			// loop through the rows of data
			while ( have_rows('seo_content') ) : the_row();
	?>	
		<div class="col-xs-12 col-sm-12 disigner-range-experience-wrap-left">
			<div class="how-they-content">
				<h2><?php the_sub_field('title'); ?></h2>
				<p><?php the_sub_field('content'); ?></p>
			</div>			
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

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">
				<div class="main-content">
					<div class="main-content-title">
						<h3><?php echo get_field( "how_food_crates_work_title" ); ?></h3>
					</div>
					<div class="main-content-text">
						<p><?php echo get_field( "how_food_crate_works_main_content" ); ?></p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
	<?php

		// check if the repeater field has rows of data
		if( have_rows('how_food_crate_works') ):

			// loop through the rows of data
			while ( have_rows('how_food_crate_works') ) : the_row();
	?>	
		<div class="col-xs-12 col-sm-12 disigner-range-experience-wrap-left">
			<div class="how-they-content">
				<h2><?php the_sub_field('title2'); ?></h2>
				<p><?php the_sub_field('content2'); ?></p>
			</div>
		</div>				
	<?php
			endwhile;

		else :

			// no rows found

		endif;

	?>
    </div>
</div>
-->

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left htw-padding-right">
		
			<div class="contact-banner-wrapper how-they-main">			
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						
						global $page;
			?>
			<div class="main-content">
				<div class="main-content-title">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="htw-main-content-text">
					<?php the_content(); ?>
				</div>
			</div>
			<?php
					} // end while
				} // end if
			?>                
			</div>
			<div class="why-us-section why-us-height how-they-list">
			<?php

				// check if the repeater field has rows of data
				if( have_rows('seo_content') ):

					// loop through the rows of data
					while ( have_rows('seo_content') ) : the_row();
			?>	
				<div class="media">
					<div class="media-left">
						<img alt="royal warrant logo" class="media-object why-us-bullet" src="<?php echo get_template_directory_uri(); ?>/images/why-us-bullet.png">
					</div>
					<div class="media-body">
						<div class="why-us-bullet-content">
							<span><?php the_sub_field('title'); ?></span>
							<p><?php the_sub_field('content'); ?></p>
						</div>
					</div>
				</div>
			<?php
					endwhile;

				else :

					// no rows found

				endif;

			?>
			</div>
							
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-right htw-padding-left">
		
			<div class="contact-banner-wrapper how-they-main">
				<div class="main-content">
					<div class="main-content-title">
						<h3><?php echo get_field( "how_food_crates_work_title" ); ?></h3>
					</div>
					<div class="htw-main-content-text">
						<p><?php echo get_field( "how_food_crate_works_main_content" ); ?></p>
					</div>
				</div>
            </div>
			
			
			<div class="why-us-section why-us-height how-they-list">
			<?php

				// check if the repeater field has rows of data
				if( have_rows('how_food_crate_works') ):

					// loop through the rows of data
					while ( have_rows('how_food_crate_works') ) : the_row();
			?>	
				<div class="media">
					<div class="media-left">
						<img alt="royal warrant logo" class="media-object why-us-bullet" src="<?php echo get_template_directory_uri(); ?>/images/why-us-bullet.png">
					</div>
					<div class="media-body">
						<div class="why-us-bullet-content">
							<span><?php the_sub_field('title2'); ?></span>
							<p><?php the_sub_field('content2'); ?></p>
						</div>
					</div>
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

<div class="container">
    <div class="row-fluid">
        <?php

			// check if the repeater field has rows of data
			if( have_rows('how_they_work_bottom_links') ):

				// loop through the rows of data
				while ( have_rows('how_they_work_bottom_links') ) : the_row();
		?>	
			<div class="col-xs-12 col-sm-4 col-md-4 no-padding-left no-padding-right">
				<a href="<?php the_sub_field('why_link'); ?>">
					<div class="services-wrap-inner second" style="background-image: url(<?php the_sub_field('why_image'); ?>);">
						<h3><?php the_sub_field('why_title'); ?></h3>
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