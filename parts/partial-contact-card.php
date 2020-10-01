<section class="contact-card">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="inner cell small-12 large-10 large-offset-1">
			
				<div class="grid-x grid-padding-x">
					
					<div class="fade-in-left copy-wrap cream-bg cell small-12">
						<h3><?php the_field('cc_copy');?></h3>
					</div>
					
					<div class="contact-wrap cell small-12 medium-8">
						
						<h4 class="fade-in-left"><?php the_field('cc_name');?></h4>
						<div class="fade-in-left"><a class="big-copy" href="mailto:<?php the_field('cc_email_address');?>"><?php the_field('cc_email_address');?></a></div>
						
					</div>

					<a class="big-copy contact-button cell small-12 medium-4" href="mailto:<?php the_field('cc_email_address');?>">
						<span>Contact</span>
					</a>
					
				</div>
				
			</div>
		</div>
	</div>
</section>