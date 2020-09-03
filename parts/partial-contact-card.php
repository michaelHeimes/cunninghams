<section class="cotnact-card">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-8 large-offset-2">
			
				<div class="grid-x grid-padding-x">
					
					<div class="cell small-12">
						<div><?php the_field('cc_copy');?></div>
					</div>
					
					<div class="cell small-12">
						
						<div><?php the_field('cc_name');?></div>
						<div><a href="mailto:<?php the_field('cc_email_address');?>"><?php the_field('cc_email_address');?></a></div>
						
					</div>

					<div class="cell small-12 medium-4">
						
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</section>