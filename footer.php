<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="pre-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 medium-8 medium-offset-2 text-center">
									<span><?php the_field('pre-footer_copy', 'option');?></span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="inner-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">		
								
								<div class="cell small-12 medium-6 large-2">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								
								<div class="cell small-12 medium-6 large-4">
									
									<div class="address">
										<?php the_field('address', 'option');?>
										
										<div class="grid-x grid-padding-x">
											<div class="cell shrink">
												<a href="<?php the_field('facebook_url', 'option');?>" target="_blank"><img src="/wp-content/themes/cunninghams/assets/images/facebook.svg"/></a>
											</div>
											<div class="cell shrink">
												<a href="<?php the_field('instagram_url', 'option');?>" target="_blank"><img src="/wp-content/themes/cunninghams/assets/images/instagram.svg"/></a>
											</div>
											<div class="cell shrink">
												<a href="mailto:<?php the_field('email_address', 'option');?>"><img src="/wp-content/themes/cunninghams/assets/images/email.svg"/></a>
											</div>											
										</div>
										
									</div>
									
								</div>

								<div class="cell small-12 medium-6 large-4">

									<div class="grid-x grid-padding-x">
										
										<div class="cell small-12">
											<a href="tel:<?php the_field('phone_number', 'option');?>" target="_blank">T. <?php the_field('phone_number', 'option');?></a>
	
											<a href="mailto:<?php the_field('email_address', 'option');?>" target="_blank">E. <?php the_field('email_address', 'option');?></a>
										</div>
										
										<div class="cell small-12">
											<?php the_field('hours', 'option');?>
										</div>											
									
									</div>
												
								</div>
						
								<div class="cell small-12 medium-6 large-2">
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
			    				</div>
							
								
							</div>
						</div>
					</div> <!-- end #inner-footer -->
					
					<div class="post-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">		

								<div class="small-12 medium-shrink cell">
									<p class="source-org copyright">&copy; Copyright <?php echo date('Y'); ?> Cunningham's Cafe + Bakery.</p>
								</div>

								<div class="small-12 medium-shrink cell">
									<p class="source-org copyright">Made by <a href="https://proprdesign.com/" target="_blank">Propr Design</a></p>
								</div>
								
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->