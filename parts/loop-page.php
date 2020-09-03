<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header banner">
		
		<?php if(is_page_template('page-templates/page-home.php')):?>

			<h1 class="page-title show-for-sr"><?php the_title(); ?></h1>

		<?php else:?>
		
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
			
				<h1 class="page-title cell small-12 large-3"><?php the_title(); ?></h1>
				
				<div class="img-wrap cell small-12 large-9">
					<?php 
					$image = get_field('banner_image');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				
			</div>
		</div>
		
		<?php endif;?>
		
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->