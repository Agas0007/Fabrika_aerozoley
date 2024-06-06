<?php get_header();?>

<main>
	<div class="blog_head page_head" style="background: url(<?php echo get_template_directory_uri();?>/public/images/services/services_catalog.jpg) no-repeat center;background-size: cover;">
		<div class="grid_container">
			<div class="breadcrumb">
				<div class="breadcrumb_wrapper">
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<h1 class="page_head_title">
				<?php single_cat_title(); ?>
			</h1>
		</div>
	</div>
	<div class="blog">
		<div class="grid_container">
			<div class="search_box">
				<?php echo get_search_query(); ?>

				<form id="content" role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search_form">
					<input type="search" placeholder="Поиск новостей" name="s" id="search-input" autocomplete="off">
					<button type="submit"></button>
				</form>
			</div>
			<div class="blog_wrapper">
				<?php while(have_posts()): the_post();?>

				<a href="<?php the_permalink();?>" class="blog_item">
					<div class="blog_item__img">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" loading="lazy">
					</div>
					<h2 class="blog_item__title">
						<?php the_title();?>
					</h2>
					<p class="blog_item__excerpt">
						<?php echo get_the_excerpt();?>
					</p>
					<div class="blog_item__more_date">
						<span class="blog_item__more">
							Читать далее
						</span>
						<span class="blog_item__date">
							<?php echo get_the_date();?>
						</span>
					</div>
				</a>

				<?php endwhile;?>
			</div>


			<?php $args = array(
                      'show_all'     => False, 
                          'end_size'     => 2,     
                          'mid_size'     => 0,     
                          'prev_next'    => false,  
                          'prev_text'    => __(''),
                          'next_text'    => __(''),
                          'add_args'     => False,
                          'before_page_number' => '<span>',
                          'after_page_number'  => '</span>',
                          'add_fragment' => '',    
                          'screen_reader_text' => __( ' ' ),
                          'num_pages' => 10, 
                          'step_link' => 5
                );  
              ?>
			<div class="pagintation_block">
				<?php echo the_posts_pagination( $args ); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer();?>
