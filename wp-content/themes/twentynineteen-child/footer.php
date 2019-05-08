<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		
			<div class="container">
 <div class="row fooeter-add">
                      <div class="col-lg-3 links-1">
                         <p><i class="fa fa-link" aria-hidden="true"></i> Quick Links</p>
                         <ul>
                             <?php if ( has_nav_menu( 'footer' ) ) : ?>
			<li class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
			    
			    	wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</li><!-- .footer-navigation -->
			<?php endif; ?>
                            <!--<li><a href="">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">Contact Us</a></li>    --> 
                         </ul>
                      </div>
                   <div class="col-lg-3 links-1 location-1">
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location</p>
                     <ul>
                         <li><a href="javascript:void(0)"><?php the_field('footer_address'); ?></a></li>
                      <!-- <li><a href="">Varagur PunnyaBhomi Trust,</a></li>
                       <li><a href="">kk nagar, visvanathapuram,</a></li>
                       <li><a href="">Tamilnadu,</a></li>
                       <li><a href="">India,</a></li>
                       <li><a href="">chennai-600028.</a></li>  -->   
                     </ul>
                   </div>
                   <div class="col-lg-3 links-1 contact-1">
                      <p><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
                    <ul>
              <li><a href="mailto:<?php the_field('footer_email'); ?>"><?php the_field('footer_email'); ?></a></li>
                    </ul>
                   <p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone</p>
                   <ul>
                    <li><a href="tel:<?php the_field('footer_mobile_number'); ?>"><?php the_field('footer_mobile_number'); ?></a></li>
                    <li><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></li>
                    </ul>
                      </div>
                      <div class="col-lg-3 links-1 news-1">
                        <p>News Letter</p>
						<?php echo do_shortcode("[newsletter]"); ?>

                      </div>
                  </div>
                  <div class="row copyrit-style">
                     <div class="col-lg-6">
                        <p>copyright@varagur2019</p>
                     </div>
                     <div class="col-lg-6">
                        <p class="design">Developed by <a href="https://mirrorminds.in" target="_blank">MirrorMinds Technology Solutions</a></p>
                     </div>
                  </div>
                  </div>
			
		<!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
