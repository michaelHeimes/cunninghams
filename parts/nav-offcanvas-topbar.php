<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar grid-x grid-padding-x" id="top-bar-menu">
	
	<div class="cell shrink">
		<ul class="menu">
			<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			<li>
				<a class="logo-link" href="<?php echo home_url(); ?>">
					
					<?php
						
					if(is_page_template('page-templates/page-home.php') || is_page_template('page-templates/page-contact.php') ):
						 
						$image = get_field('light_logo', 'option');
						if( !empty( $image ) ): ?>
						    <img class="header-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>

					<?php else:
						
						$image = get_field('dark_logo', 'option');
						if( !empty( $image ) ): ?>
						    <img class="header-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					
					<?php endif;?>
					
				</a>
			</li>
		</ul>
	</div>
	
	<div class="top-bar-right show-for-large">
		<div class="inner grid-x grid-padding-x align-middle">
			
			<?php joints_top_nav(); ?>
			
			<?php 
			$link = get_field('order_link', 'option');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <div class="cell shrink">
				    <a class="button order-now" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			    </div>
			<?php endif; ?>
			
		</div>
	</div>
	
	<div class="cell shrink hide-for-large">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			
			<li>
				<a class="mobile-toggle" data-toggle="off-canvas">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</li>
			
		</ul>
	</div>

</div>