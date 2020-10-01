<?php 
/**
 * Template Name: Wholesale Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    
				<section class="s1">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="big-copy cell small-12">
								<?php the_field('full_width_copy');?>
							</div>
														
						</div>
					</div>
				</section>
				

				<section class="s2">

					<?php get_template_part('parts/partial', 'contact-card');?>
						
				</section>
				
				
				<section class="full-width-img text-center">
					
					<?php 
					$image = get_field('fwi_image');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>					
					
				</section>


				<section class="partner-logos cream-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<h2 class="cell small-12 text-center"><?php the_field('wp_heading');?></h2>
							
							
							<?php if( have_rows('partner_logos') ):?>
								<?php while ( have_rows('partner_logos') ) : the_row();?>	
								
								<div class="single-logo cell small-6">
									
									<?php if( have_rows('single_partner') ):?>
										<?php while ( have_rows('single_partner') ) : the_row();?>	
									

									
		<!-- 									<span class="show-for-sr"><?php the_title();?></span> -->
											
											<?php if($link = get_sub_field('link')):?>
											
												<a class="inner" href="<?php echo $link;?>" target="_blank">
													
													<?php 
													$image = get_sub_field('logo');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
													
												</a>
											
											<?php else:?>
												
												<div class="inner">
													<?php 
													$image = get_sub_field('logo');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												
											<?php endif;?>
											
										<?php endwhile;?>
									<?php endif;?>
									
								</div>
							
								<?php endwhile;?>
							<?php endif;?>
					    
						</div>
						
					</div>
					
				</section>

			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>