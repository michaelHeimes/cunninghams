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
							
							<div class="cell small-12">
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
										
						<?php			
						$args = array(  
					        'post_type' => 'partner',
					        'post_status' => 'publish',
					        'posts_per_page' => -1,
					        'orderby' => 'title',
					        'order' => 'ASC'
					    );
					
					    $loop = new WP_Query( $args ); 
					    
					    if ( $loop->have_posts() ) : 
					        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
						    
							<div class="single-logo cell small-6">
								
								<span class="show-for-sr"><?php the_title();?></span>
								
								<?php if($link = get_field('link')):?>
								
									<a class="inner" href="<?php echo $link;?>" target="_blank">
										
										<?php 
										$image = get_field('logo');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
										
									</a>
								
								<?php else:?>
									
									<div class="inner">
										<?php 
										$image = get_field('logo');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									
								<?php endif;?>
								
							</div>
						    	
						    <?php
						    endwhile;
						    
						else:
						
							echo 'no logos';
					
						endif;
					    wp_reset_postdata(); 
					    ?>
					    
						</div>
						
					</div>
					
				</section>

			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>