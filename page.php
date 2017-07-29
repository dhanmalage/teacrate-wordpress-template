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
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
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

