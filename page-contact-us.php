<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 5:14 PM
 */

?>

<?php get_header(); ?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>
            
            

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

            <div class="contact-page-banner">
                <h3>Contact us</h3>
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

			<div class="contact-page-nav">
			
				<ul class="nav nav-tabs">
				<li><a data-toggle="pill" href="#home">Email us</a></li>
				<li><a data-toggle="pill" href="#menu1">Call us</a></li>
				<li class="active"><a data-toggle="pill" href="#menu2">Head office</a></li>
				<li><a data-toggle="pill" href="#menu3">Online chat</a></li>
			  </ul>
			  
			</div>
			
			<div class="tab-content">
			
				<div id="home" class="tab-pane fade">
				  <h3>Email us</h3>
				  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
					<div class="contact-page-form">
						<?php echo do_shortcode('[contact-form-7 id="795" title="Contact Us Email us form"]'); ?>		
					</div>
				  </div>
				</div>
				
				<div id="menu1" class="tab-pane fade">
				  <h3>Call us</h3>
				  <p>Our offices are open 9:00 to 17:00 Monday to Friday.</p>
				  <h3 class="contact-page-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $teacrate_theme_options["contact_number"]; ?></h3>
				</div>
				
				<div id="menu2" class="tab-pane fade in active">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
						<h3>Head office</h3>
						
						<address class="contact-page-address">
						  <strong>PHS TEACRATE,</strong><br>
						  151 Scrubs Ln,<br>
						  London<br>
						  NW10 6RH<br>
						</address>
						
						<h3 class="contact-page-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $teacrate_theme_options["contact_number"]; ?></h3>
						
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
						<div class="contact-page-form">
							<?php echo do_shortcode('[contact-form-7 id="232" title="Contact form 1"]'); ?>		
						</div>
					</div>					
				</div>
				
				<div id="menu3" class="tab-pane fade">					
					<h3>Online chat</h3>						
					<p>Our online chat service is available from 9:00am to 17:00 Monday to Friday.</p>	
					
					<a id='whoson_chat_link'></a>				
					
				</div>
												
			  </div>

        </div>
    </div>
</div>

<div class="clear"></div>


<?php
		} // end while
	} // end if
?>

<?php get_footer(); ?>

