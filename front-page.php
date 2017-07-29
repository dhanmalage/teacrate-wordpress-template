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
            <?php //echo do_shortcode($teacrate_theme_options['revslider_shortcode']); ?>           
            <?php echo do_shortcode('[rev_slider alias="home-backup"]'); ?>           
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
			$i = 0;
			$len = count($teacrate_theme_options['home_page_page_links']);
			foreach($teacrate_theme_options['home_page_page_links'] as $link):
			if($i != $len - 1):
		?>
			<div class="col-xs-12 col-sm-3 col-md-3 no-padding-left no-padding-right">
				<a href="<?php echo $link['url']; ?>">
					<div class="services-wrap-inner first" style="background-image: url(<?php echo $link['image']; ?>);">
						<h3><?php echo $link['title']; ?></h3>
					</div>
				</a>
			</div>
		<?php else: ?>
			<div class="col-xs-12 col-sm-6 col-md-6 no-padding-left no-padding-right">
				<a href="<?php echo $link['url']; ?>">
					<div class="services-wrap-inner last" style="background-image: url(<?php echo $link['image']; ?>);">
						<h3><?php echo $link['title']; ?></h3>
					</div>
				</a>
			</div>
		<?php 
			endif;
			$i++;
			endforeach;
		?>	
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-12 planting-services-wrap-left">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <div class="content-read-more home-content">
                        <h2><?php the_title(); ?></h2>
                        <div class="content"><?php the_content(); ?></div>
                    </div>
                    <?php
                } // end while
            } // end if
            ?>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
            <div class="why-us-section why-us-height">
                <h2>Why Us ?</h2>
				<?php foreach($teacrate_theme_options['home_page_whyus_content'] as $whyus): ?>
                <div class="media">
                    <div class="media-left">
                        <img alt="royal warrant logo" class="media-object why-us-bullet" src="<?php echo get_template_directory_uri(); ?>/images/why-us-bullet.png">
                    </div>
                    <div class="media-body">
                        <div class="why-us-bullet-content">
                            <span><?php echo $whyus['title']; ?></span>
                            <p><?php echo $whyus['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
            <div class="latest-news why-us-height">
                <h4>Featured</h4>
                
                
				<?php
					global $post;
					$args = array( 'posts_per_page' => 3 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : 
					  setup_postdata( $post ); ?>
					  
					<div class="latest-news-widget">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<span><?php the_time('l, F jS, Y'); ?></span>
						<?php
							$content = get_the_content();
							$content = preg_replace("/<img[^>]+\>/i", " ", $content);
							$content = preg_replace('#<a.*?>(.*?)</a>#i', '\1', $content);								
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
						?>
						<p><?php custom_echo($content, 160); ?></p>
					</div>
					<?php endforeach;
					wp_reset_postdata();
				?>
                
            </div> 
			
			
			
			
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
            <div class="our-clients why-us-height">
                <h4>Accreditations</h4>
                <div class="row clients-row">
				<?php foreach($teacrate_theme_options['home_page_accreditations_logos'] as $client): ?>
                    <div class="col-xs-12">
                        <a href="#">
                            <img data-original="<?php echo $client['image']; ?>" class="img-responsive client-small-logo" src="<?php echo $client['image']; ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="clear"></div>


<?php get_footer();?>