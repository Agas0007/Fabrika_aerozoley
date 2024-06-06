<?php get_header();?>

	<main>
	  <div class="single_blog_head page_head" style="background: url(<?php echo get_the_post_thumbnail_url();?>) no-repeat center;background-size: cover;">
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
		<div class="single_blog">
			<div class="grid_container single_blog_wrapper">
			  <span class="single_blog__date">
			  	<?php echo get_the_date(); ?>
			  </span>
				<div class="single_blog__content">
				  
				  <?php the_content();?>
					
					<?php if(get_field('blok_s_video_ssylka_na_rolik')) :?>
					<div class="video_box">
						<a href="<?php the_field('blok_s_video_ssylka_na_rolik'); ?>" class="video_link" data-fancybox="video">
							<img src="<?php the_field('blok_s_video_foto'); ?>" alt="Видео Марсо">
						</a>
						<p>
							<?php the_field('tekst_pod_video'); ?>
						</p>
					</div>
					<?php endif ;?>
				</div>
				<div class="single_blog__slider">
					<div class="our_mission_wrapper_slider">
					  <?php 
									$images = get_field('galereya_fotografij');
									if( $images ): ?>
						<div class="our_mission_slider swiper">
							<div class="swiper-wrapper">
							  
								<?php foreach( $images as $image ): ?>
									<a href="<?php echo $image['url']; ?>" class="our_mission_slide swiper-slide" data-fancybox="mission">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy">
									</a>
								<?php endforeach;?>
								
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-prev"></div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	  
	</main>
	
<?php get_footer();?>



