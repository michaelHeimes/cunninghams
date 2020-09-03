<?php 
/**
 * Template Name: Catering Page
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
			    
			    
				<section class="menu-items">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
		
							<ul class="accordion cell small-12" data-accordion data-multi-expand="true" data-allow-all-closed="true">
								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><?php the_field('menu_heading');?>
										<div><?php the_field('menu_footnote');?></div>
									</a>
								
									<div class="accordion-content" data-tab-content>
										
										<?php if( have_rows('items') ):?>
											<?php while ( have_rows('items') ) : the_row();?>	
											
											<?php if( have_rows('single_item') ):?>
												<?php while ( have_rows('single_item') ) : the_row();?>	
												
												<div class="top">
													<span class="name"><?php the_sub_field('name');?></span>
													<span class="price"><?php the_sub_field('price');?></span>
												</div>

												<div class="bottom">
													<?php the_sub_field('description');?>
												</div>
											
												<?php endwhile;?>
											<?php endif;?>
										
											<?php endwhile;?>
										<?php endif;?>
										
									</div>
									
								</li>
							</ul>
	
						</div>
					</div>
				</section>
				
				
				<section class="slider-1">
					
				<?php if( have_rows('s1_slider') ):?>
					<div class="click-right-slider">
						<?php while ( have_rows('s1_slider') ) : the_row();?>	
						
							<?php 
							$image = get_sub_field('single_slide');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
					
				</section>
				
				
				<section class="img-copy">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
					
						<?php if( have_rows('half_image_and_half_copy') ):?>
							<?php while ( have_rows('half_image_and_half_copy') ) : the_row();?>
	
							<div class="cell small-12 medium-6">
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>	
	
							<div class="cell small-12 medium-6">
								<?php the_sub_field('copy');?>
							</div>
													
							<?php endwhile;?>
						<?php endif;?>					
					
						</div>
					</div>
				</section>


				<section class="slider-2">
					
				<?php if( have_rows('s2_slider') ):?>
					<div class="click-right-slider">
						<?php while ( have_rows('s2_slider') ) : the_row();?>	
						
							<?php 
							$image = get_sub_field('single_slide');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
					
				</section>
				
				
				<?php get_template_part('parts/partial', 'contact-card');?>
								

				<div class="sticky-order-button-wrap cream-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 text-center">
					
								<?php 
								$link = get_field('order_link', 'option');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
					
							</div>
						</div>
					</div>
				</div>
			    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>