<?php 
/**
 * Template Name: Home Page
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
			    
			    
			    <section class="hero max">
				    
				    <?php if( have_rows('hero_slider') ):?>
				    <div class="hero-slider">
				    	<?php while ( have_rows('hero_slider') ) : the_row();?>	
				    	
				    	<?php if( have_rows('single_slide') ):?>
				    		<?php while ( have_rows('single_slide') ) : the_row();?>	
				    	
							<div class="single-slide">
								
								<div class="img-wrap">
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
																
							</div>
				    	
				    		<?php endwhile;?>
				    	<?php endif;?>
				    
				    	<?php endwhile;?>
				    </div>
				    <?php endif;?>
				    
			    </section>	
			    	

				<?php if($copy = get_field('announcement_copy')):?>
				<section class="announcement-copy cream-bg big-copy">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<div class="cell small-12 text-center">
								<?php echo $copy;?>
							</div>
						</div>
					</div>
				</section>	
				<?php endif;?>		    

			    
			    <section class="intro-copy">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 medium-10 medium-offset-1 large-8 large-offset-2 text-center">
						    	<img src="/wp-content/themes/cunninghams/assets/images/sketched-break.svg"/>
						    	<h3 class="no-bp"><?php the_field('intro_copy');?><h3>
							</div>
						</div>
				    </div>
			    </section>				
			    	
			    
			    <section class="home-menu">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">		
							
							<div class="left cell small-12 medium-6 xxlarge-7"> 
								
								<?php if( have_rows('menu_image_slider') ):?>
								<div class="menu-slider click-right-slider">
									<?php while ( have_rows('menu_image_slider') ) : the_row();?>	
									<?php 
									$image = get_sub_field('single_slide');
									if( !empty( $image ) ): ?>
									<div>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
									<?php endwhile;?>
								</div>
								<?php endif;?>
								
							</div>
							
							<div class="right cell small-12 medium-6 large-5 large-offset-1 xxlarge-4 xxlarge-offset-1">
								
								<h2><?php the_field('menu_heading');?></h2>
								
								<p class="big-copy"><?php the_field('menu_copy');?></p>
								
								<div class="menu-cat-wrap">
									<?php the_field('menu_categories');?>
								</div>
								
								<?php 
								$link = get_field('menu_link');
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
			    </section>
			    	
			    	
			    <section id="community" class="community cream-bg">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<h2 class="cell small-12 text-center"><?php the_field('itc_heading');?></h2>
							<p class="big-copy cell small-12 text-center"><?php the_field('itc_intro_copy');?></p>
							
						</div>
				    </div>
				    
				    <div class="grid-container">
						<div class="columns-wrap grid-x grid-padding-x">	
							
							<?php if( have_rows('itc_facts_and_figures') ):?>
								<?php while ( have_rows('itc_facts_and_figures') ) : the_row();?>	
								
								<?php if( have_rows('single_column') ):?>
									<?php while ( have_rows('single_column') ) : the_row();?>	
								
									<div class="single-column cell small-12 medium-4 text-center">
										<div class="inner">
											<h2 class="number">
												<?php the_sub_field('number');?>
											</h2>
											<div class="copy">
												<?php the_sub_field('copy');?>
											</div>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
							
						</div>
				    </div>
							
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							<?php 
							$link = get_field('itc_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							<div class="cell small-12 text-center">
							    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
							<?php endif; ?>							

						</div>
				    </div>
			    </section>	
			    
			    
			    <section class="ig-feed">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<div class="copy-wrap cell small-12 medium-4">
								
								<h2><?php the_field('ig_heading');?></h2>
								<p class="big-copy"><?php the_field('ig_copy');?></p>		
								
								<a href="<?php the_field('instagram_url', 'option');?>" target="_blank">
									<img src="/wp-content/themes/cunninghams/assets/images/instagram.svg"/>
								</a>
								
							</div>
							
							<div class="cell small-12 medium-auto">
								
								<?php echo do_shortcode('[instagram-feed]');?>
								
							</div>
				    
						</div>
				    </div>
			    </section>
			    
			    
			    <section id="neighborhood" class="neighborhood">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	

							<div class="img-wrap cell small-12 medium-4 tablet-6">
								<?php 
								$image = get_field('map_image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							
							<div class="text-wrap cell small-12 medium-8 tablet-6 text-center">
								
								<div class="grid-container">
								<div class="cream-bg grid-x grid-padding-x align-middle align-center">
									
									<div class="inner">
										<h2><?php the_field('directions_heading');?></h2>
										<p class="big-copy"><?php the_field('directions_copy');?></p>
										
										<?php 
										$link = get_field('directions_link');
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
							
						</div>
				    </div>
			    </section>
			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>