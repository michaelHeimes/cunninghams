<?php 
/**
 * Template Name: About Page
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
							
							<div class="cell small-12">
								<?php the_field('s1_full_width_copy');?>
							</div>
							
							<?php if( have_rows('s1_half_copy_&_half_image') ):?>
								<?php while ( have_rows('s1_half_copy_&_half_image') ) : the_row();?>	

								<div class="cell small-12 medium-6">
									<?php the_sub_field('copy');?>
								</div>
								
								<div class="cell small-12 medium-6">
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								
								<?php endwhile;?>
							<?php endif;?>
							
						</div>
					</div>
				</section>
				

				<section class="s2">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="cell small-12 medium-6 medium-offset-3 text-center">
								<?php the_field('s2_centered_copy');?>
							</div>							
							
						</div>
					</div>
				</section>


				<section class="s3">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<?php if( have_rows('s3_half_copy_&_half_image') ):?>
								<?php while ( have_rows('s3_half_copy_&_half_image') ) : the_row();?>	

								<div class="cell small-12 medium-6">
									<?php the_sub_field('copy');?>
								</div>
								
								<div class="cell small-12 medium-6">
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									
								    <?php 
									$image = get_sub_field('s3_parking_icon');
									if( !empty( $image ) ): ?>
									    <img class="p-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									
								</div>
								
								<?php endwhile;?>
							<?php endif;?>	
							
							<div class="cell small-12">
								<?php 
								$image = get_sub_field('s3_parking_map_image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />								    
								</div>
								<?php endif; ?>
								
							</div>	
							
							
							<?php if( have_rows('s3_image_slider') ):?>
							<div class="click-right-slider">
								<?php while ( have_rows('s3_image_slider') ) : the_row();?>	
								
									<?php 
									$image = get_sub_field('single_slide');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
							
								<?php endwhile;?>
							</div>
							<?php endif;?>
																			
							<div class="google-map">
								<?php the_field('s3_google_map');?>
							</div>
							
							
						</div>
					</div>
				</section>
			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>