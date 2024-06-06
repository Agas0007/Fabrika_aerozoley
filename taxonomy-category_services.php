<?php get_header();?>
<?php
  $term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy") );
  $tmpTerm = $term;
 ?>

	<main>
	  <div class="page_head" style="background: url(<?php the_field('foto-banner', get_queried_object()); ?>) no-repeat center;background-size: cover;">
	    <div class="grid_container">
	      <div class="breadcrumb">
	        <div class="breadcrumb_wrapper">
	          <ul>
	          	<li>
	          		<a href="<?php echo get_site_url();?>" class="breadcrumbs__link">
	          			<span itemprop="name"> Главная</span>
	          		</a>
	          	</li>
	          	<li class="breadcrumbs__current">Услуги и продукт</li>
	          </ul>
	        </div>
	      </div>
	      <h1 class="page_head_title">
	        Услуги и продукты
	      </h1>
	      
	    </div>
	  </div>
	  <div class="specialization">
			<div class="grid_container">
				<h2 class="specialization_title index_title">
					<?php the_field('zagolovok_opisaniya_uslug', get_queried_object()); ?>
				</h2>
				<div class="specialization_info">
					<?php the_field('tekstovyj_blok_uslug', get_queried_object()); ?>
				</div>

				<div id="tabs" class="specialization_tabs">
  				<div class="scroll_box">
  					<ul>
  						<li><a href="#tabs-1" class="specialization_link">Аэрозольная упаковка </a></li>
  						<li><a href="#tabs-2" class="specialization_link">Комплексное контрактное производство</a></li>
  						<li><a href="#tabs-3" class="specialization_link">Услуги в деталях</a></li>
  						
  						<?/* 
  						<li><a href="#tabs-4" class="specialization_link">Наши бренды</a></li>
  						*/?>
  					</ul>
  				</div>
  				
  				<div id="tabs-1" class="specialization_tab">
  					<div class="services_tabs">
  						<?php $product = get_posts( array(
                  'numberposts' => 12,   
                  'post_type'   => 'products',
                ) );?>
						
						<?php foreach( $product as $post ):?>
  						<a href="<?php the_permalink();?>" class="services_tab">
  							<h3 class="services_tab__title">
  								<?php the_title();?>
  							</h3>
  							<div class="services_tab__text">
  								<p>
  									<?php echo get_the_excerpt() ;?>
  								</p>
  							</div>
  							<div class="services_tab__img">
  								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
  							</div>
  							<span class="services_tab__more">
  								Подробнее
  							</span>
  						</a>
  					<? endforeach ?>
						<?php wp_reset_postdata(); ?>
  					</div>
  				</div>
  				
  				<div id="tabs-2" class="specialization_tab">
  					<div class="complete_solution">
  						<div class="complete_solution__left">
  							<h3 class="complete_solution__title">
  							  <?php the_field('kompleksnoe_reshenie', 'options'); ?>
  							</h3>
  							<div class="complete_solution__text">
  								<?php the_field('kompleksnoe_reshenie_tekst', 'options'); ?>
  							</div>
  							<span class="complete_solution__subtitle">
  								Почему это решение выгодно?
  							</span>
  							<div class="complete_solution__wrapper">
  							  <?php if( have_rows('pochemu_eto_reshenie_vygodno', 'option') ): ?> 
										<?php while( have_rows('pochemu_eto_reshenie_vygodno', 'option') ): the_row(); 
												$image = get_sub_field('pochemu_eto_reshenie_vygodno', 'option'); 
												$title = get_sub_field('punkt');
												?>
													<span class="complete_solution__item">
														<?php echo $title;?>
													</span>
										<?php endwhile; ?> 
									<?php endif; ?>
  							</div>
  							<div class="complete_box_btn">
  								<a href="<?php the_field('ssylka_na_knopke_podrobnee', 'options'); ?>" class="services_tab__more">
  									Подробнее
  								</a>
  								<a href="<?php the_field('katalog_zhestyanyh_aerozolnyh_ballonov_fajl', 'options'); ?>" class="complete_solution__pdf">
  									Каталог жестяных <br> аэрозольных баллонов
  								</a>
  							</div>
  						</div>
  						<div class="complete_solution__img">
  							<img src="<?php the_field('foto_bloka', 'options'); ?>" alt="Фабрика аэрозолей">
  						</div>
  					</div>
  				</div>
  				
  				<div id="tabs-3" class="specialization_tab">
  					<div class="services_tabs">
  					  <?php
                    $term = get_query_var('term');
                    $loop = new WP_Query(array(
                        'post_type' => 'services',
                        'tax_query' => array(
                            array(
                                'terms' => $term,
                                'taxonomy' => 'category_services',
                                'field' => 'slug',
                            )
                        )
                    )); 
          ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  						<a href="<?php the_permalink();?>" class="services_tab">
  							<h3 class="services_tab__title">
  								<?php the_title();?>
  							</h3>
  							<div class="services_tab__text">
  								<p>
  									<?php echo get_the_excerpt() ;?>
  								</p>
  							</div>
  							<div class="services_tab__img">
  								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
  							</div>
  							<span class="services_tab__more">
  								Подробнее
  							</span>
  						</a>
  					<?php endwhile; ?>
						<?php endif; ?>		
  					</div>
  				</div>
  				<?/*
  				<div id="tabs-4" class="specialization_tab">
  					<div class="brand_wrapper_slider brand_tabs services_tabs">
  						<div class="brand_slider swiper">
  							<div class="swiper-wrapper">
  							  <?php if( have_rows('nashi_brendy','option') ): ?> 
										<?php while( have_rows('nashi_brendy','option') ): the_row(); 
												$image = get_sub_field('logotip_brenda'); 
												$title = get_sub_field('nazvanie_brenda');
												$content = get_sub_field('opisanie_brenda');
												$link = get_sub_field('ssylka_na_brend');
												?>
										<a target="_blank" href="<?php echo $link;?>" class="brand_slide services_tab swiper-slide">
											<h3 class="services_tab__title">
												<?php echo $title;?>
											</h3>
											<div class="services_tab__text">
												<?php echo $content;?>
											</div>
											<div class="services_tab__img">
												<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ?>">
											</div>
											<span class="services_tab__more">
												Подробнее
											</span>
										</a>
  									<?php endwhile; ?> 
									<?php endif; ?>
  							</div>
  						</div>
  						<div class="swiper-button-next"></div>
  						<div class="swiper-button-prev"></div>
  					</div>
  				</div>
  				*/?>
  			</div>
			</div>
		</div>
	</main>

<?php get_footer();?>


