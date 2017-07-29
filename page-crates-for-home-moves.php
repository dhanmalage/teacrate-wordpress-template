<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 10:58 AM
 */

?>


<?php get_header();?>


<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding-left no-padding-right">

            <div id="inner-page-top-slider" class="slider-pro">
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

                <div class="buttons">
                    <a href="javascript:;" class="enquire-now" data-toggle="modal" data-target="#enquire">Enquire now</a>
                    <a href="<?php echo get_field( 'brochure_file' ); ?>" class="download-brochure" target="_blank">Download brochure</a>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-8 disigner-range-experience-wrap-left">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
            ?>
            <div class="content-read-more">
                <h2><?php the_title(); ?></h2>
                <div class="content"><?php the_content(); ?></div>
            </div>
            <?php
                } // end while
            } // end if
            ?>
        </div>
        <div class="col-xs-12 col-sm-4">
		<!--
		    <div class="facts-wrapper"> 
				<dl>
					<?php
					/*
						if( have_rows('page_facts') ):
							while ( have_rows('page_facts') ) : the_row();
								?>
								<dt>Fact - </dt>
								<dd><?php the_sub_field('facts'); ?></dd>
								<?php
							endwhile;
						else :
						endif;
					*/
					?>
				</dl>
			</div>  
		-->
			<?php if( have_rows('page_facts') ): ?>
				<div class="facts-list facts-list-item" data-toggle="modal" data-target="#manageModal">
					<span>Did you know?</span>
					<ul>
						<?php							
							while ( have_rows('page_facts') ) : the_row();
								?>
								<li><?php the_sub_field('facts'); ?></li>
								<?php
							endwhile;
						?>
					</ul>
				</div>  
			<?php endif; ?>
			
			<div class="under-fact-button">
				<a href="<?php echo get_field( 'button_link' ); ?>" target="_blank"><?php echo get_field( 'button_title' ); ?></a>
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
    <div class="row-fluid">
	<?php
		$myposts = get_posts(array(
			'showposts' => -1,
			'post_type' => 'moves',
			'tax_query' => array(
				array(
				'taxonomy' => 'movetypes',
				'field' => 'slug',
				'terms' => array('crate-rental'))
			))
		);
		 
		foreach ($myposts as $mypost) :
		
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $mypost->ID ), 'single-post-thumbnail' );
		
		
	?>
		<div class="col-xs-12 col-sm-4 col-md-4 no-padding-left no-padding-right">
			<a href="<?php echo get_permalink( $mypost->ID ); ?>">
				<div class="services-wrap-inner first services-single" style="background-image: url(<?php echo $image[0]; ?>);">
					<h3><?php echo $mypost->post_title ?></h3>
				</div>
			</a>
        </div>
			 			  
	<?php endforeach; ?>
		
		
	
        
		
    </div>
</div>

<div class="clear"></div>

<?php get_footer();?>

