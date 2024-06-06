<?php get_header();?>

<main>
	<div class="single_blog_head page_head" style="background: url(
			<?php if(get_the_post_thumbnail_url()):?> 
			
			<?php echo get_the_post_thumbnail_url();?>
			
			<?php else :?>
			
			<?php echo get_site_url();?>/wp-content/themes/fabrika_aerozoley/public/images/production_map.jpg
			
			<?php endif ;?>
			) no-repeat center;background-size: cover;">
		<div class="grid_container">
			<div class="breadcrumb">
				<div class="breadcrumb_wrapper">
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<h1 class="page_head_title">
				<?php the_title();?>
			</h1>
		</div>
	</div>
	<div class="page_content" style="padding: 35px 0;">
		<div class="grid_container">
			<div class="single_blog__content">
				<?php the_content();?>
			</div>
		</div>
	</div>

</main>

<?php get_footer();?>
