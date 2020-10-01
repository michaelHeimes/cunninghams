<?php 
/**
 * Template Name: Contact Page
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
			    
				<section class="intro-wrap">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="cell small-12 medium-10 medium-offset-1 large-6 large-offset-3 text-center">
								<h3><?php the_field('intro_copy');?></h3>
							</div>
														
						</div>
					</div>
				</section>
				

				<section class="form-wrap">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="fade-in cell small-12">
								<?php gravity_form( 1, false, false, false, '', true );?>
							</div>
					
						</div>
					</div>
				</section>			    		    	


				<section class="contact-wrap">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="fade-in-up cell small-12 medium-10 medium-offset-1 large-6 large-offset-3 text-center">
								
								<h2><?php the_field('contact_heading');?></h2>
								
								<div><a href="mailto:<?php the_field('email_address', 'option');?>" target="_blank">E. <?php the_field('email_address', 'option');?></a>
</div>

								<div><a href="tel:<?php the_field('phone_number', 'option');?>" target="_blank">T. <?php the_field('phone_number', 'option');?></a></div>

							</div>
					
						</div>
					</div>
				</section>	
				
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>