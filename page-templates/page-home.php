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
				<section class="announcement-copy cream-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
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
							<div class="cell small-12 text-center">
						    	<img src="/wp-content/themes/cunninghams/assets/images/sketched-break.svg"/>
						    	<p><?php the_field('intro_copy');?></p>
							</div>
						</div>
				    </div>
			    </section>				
			    	
			    
			    <section class="home-menu">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">		
							
							<div class="cell small-12 medium-7"> 
								
								<?php if( have_rows('menu_image_slider') ):?>
								<div class="menu-slider click-right-slider">
									<?php while ( have_rows('menu_image_slider') ) : the_row();?>	
									<?php 
									$image = get_sub_field('single_slide');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<?php endwhile;?>
								</div>
								<?php endif;?>
								
							</div>
							
							<div class="cell small-12 medium-5">
								
								<h2><?php the_field('menu_heading');?></h2>
								
								<p><?php the_field('menu_copy');?></p>
								
								<?php the_field('menu_categories');?>
								
								<?php 
								$link = get_field('menu_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								
							</div>
				    
						</div>
				    </div>
			    </section>
			    	
			    	
			    <section class="community">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<h2 class="cell small-12 text-center"><?php the_field('itc_heading');?></h2>
							<p class="cell small-12 text-center"><?php the_field('itc_intro_copy');?></p>
							
							<?php if( have_rows('itc_facts_and_figures') ):?>
								<?php while ( have_rows('itc_facts_and_figures') ) : the_row();?>	
								
								<?php if( have_rows('single_column') ):?>
									<?php while ( have_rows('single_column') ) : the_row();?>	
								
									<div class="single-column cell small-12 medium-4 text-center">
										<span class="number">
											<?php the_sub_field('number');?>
										</span>
										<span class="copy">
											<?php the_sub_field('copy');?>
										</span>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
							
							<?php 
							$link = get_field('itc_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							<div class="cell small-12 text-center">
							    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
							<?php endif; ?>							

						</div>
				    </div>
			    </section>	
			    
			    
			    <section class="ig-feed">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<div class="cell small-12 medium-4">
								<h2><?php the_field('ig_heading');?></h2>
								<p><?php the_field('ig_copy');?></p>		
								
							</div>
							
							<div class="cell small-12 medium-4">
								
								<?php echo do_shortcode('[instagram-feed]');?>
								
							</div>
				    
						</div>
				    </div>
			    </section>
			    
			    
			    <section class="neighborhood">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	

							<div class="img-wrap cell small-12 medium-6">
								<?php 
								$image = get_field('map_image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							
							<div class="text-wrap cell small-12 medium-6 text-center">
								
								<h2><?php the_field('directions_heading');?></h2>
								<p><?php the_field('directions_copy');?></p>
								
								<?php 
								$link = get_field('directions_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>								
								
							</div>
							
						</div>
				    </div>
			    </section>
			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>