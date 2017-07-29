<?php global $teacrate_theme_options; ?>

<div class="clear"></div>

<!-- Modal -->
<div class="modal fade" id="enquire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enquire Now</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="232" title="Contact form 1"]'); ?>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="clear"></div>

<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="footer-social-links">
					<h4>Follow PHS</h4>
					<ul>
<?php if($teacrate_theme_options['footer_social_twitter'] != null || $teacrate_theme_options['footer_social_twitter'] != ''): ?>
						<li class="twitter"><a href="<?php echo $teacrate_theme_options["footer_social_twitter"]; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<?php endif; ?>

<?php if($teacrate_theme_options['footer_social_linkedin'] != null || $teacrate_theme_options['footer_social_linkedin'] != ''): ?>
						<li class="linkedin"><a href="<?php echo $teacrate_theme_options["footer_social_linkedin"]; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<?php endif; ?>

<?php if($teacrate_theme_options['footer_social_google'] != null || $teacrate_theme_options['footer_social_google'] != ''): ?>	
			<li class="google"><a href="<?php echo $teacrate_theme_options["footer_social_google"]; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
<?php endif; ?>

<?php if($teacrate_theme_options['footer_social_youtube'] != null || $teacrate_theme_options['footer_social_youtube'] != ''): ?>
						<li class="youtube"><a href="<?php echo $teacrate_theme_options["footer_social_youtube"]; ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
<?php endif; ?>

					</ul>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="footer-navigation">
					<div class="container footer-navigation-inner">
						<div class="row">							
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">								
									<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">
									<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">
									<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="container">
					<div class="row footer-copyrights">
						<p>
							<?php echo $teacrate_theme_options["footer_text"]; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php echo $teacrate_theme_options["footer_chat_code"]; ?>

	<!-- END FOOTER -->
	<?php wp_footer(); ?>

	
	<?php echo $teacrate_theme_options["google_analytics_code"]; ?>
	
	
        
    </body>

</html>