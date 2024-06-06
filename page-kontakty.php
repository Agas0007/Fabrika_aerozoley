<?php get_header();?>
<main>
	<div class="contcts_page_head single_page_head page_head" style="background: #1C1F35 no-repeat center;background-size: cover;">
		<div class="grid_container">
			<div class="breadcrumb">
				<div class="breadcrumb_wrapper">
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<div class="contcts_page">
				<div class="contcts_info">
					<h1 class="contcts_title">
						<?php the_title();?>
					</h1>
					<h2 class="contcts_subtitle">
						<?php the_field('nazvanie_kompanii', 'option');?>
					</h2>
					<div class="contcts_item">
						<span class="contcts_item__name">
							ТЕЛЕФОН:
						</span>
						<a href="tel:<?php the_field('nomer_telefona', 'option');?> " class="contcts_item__link">
							<?php the_field('nomer_telefona', 'option');?>
						</a>
					</div>
					<div class="contcts_item">
						<span class="contcts_item__name">
							Email:
						</span>
						<a href="mailto:<?php the_field('email', 'option');?> " class="contcts_item__link">
							<?php the_field('email', 'option');?>
						</a>
					</div>
					<div class="contcts_item">
						<span class="contcts_item__name">
							АДРЕС:
						</span>
						<p class="contcts_item__link">
							<?php the_field('adres', 'option');?>
						</p>
					</div>
				</div>
				<div id="map" class="contcts_map">

				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer();?>


<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=2ac496dc-c18f-45a6-838e-6b1aed320249" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/public/js/custom_image.js" type="text/javascript"></script>
