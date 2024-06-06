  <?php get_header();?>


  <main>
  
  <?php if( have_rows('banner', 'option') ): ?> 
  	<div class="banner">
  		<div class="banner_wrapper_slider">
  			<div class="banner_slider swiper">
  				<div class="swiper-wrapper">
  		  
          <?php while( have_rows('banner', 'option') ): the_row(); 
            $image = get_sub_field('foto'); 
            $title = get_sub_field('zagolovok_na_bannere');
            ?>
  					<div class="banner_slide swiper-slide" style="background: url(<?php echo $image['url'];?>) no-repeat center">
  						<div class="grid_container">
  							<h2 class="banner_slide__title" data-swiper-parallax="-800" data-swiper-parallax-duration="1100" data-swiper-parallax-scale="1.55">
  								<?php echo $title;?>
  							</h2>
  						</div>
  					</div>
  					<?php endwhile; ?> 
      		 </div>
  			</div>
  			<div class="grid_container">
  				<div class="swiper-button-next"></div>
  				<div class="swiper-pagination"></div>
  				<div class="swiper-button-prev"></div>
  			</div>
  		</div>
  	</div>
  <?php endif; ?>	
  	
  	<div class="specialization">
  		<div class="grid_container">
  			<h2 class="specialization_title index_title">
  				Cпециализация
  			</h2>
  			<div class="specialization_info">
  				<p>
  				  <?php the_field('tekst_bloka', 'options'); ?>
  				</p>
  			</div>

  			<div id="tabs" class="specialization_tabs">
  				<div class="scroll_box">
  					<ul>
  						<li><a href="#tabs-1" class="specialization_link">Аэрозольная упаковка </a></li>
  						<li><a href="#tabs-2" class="specialization_link">Комплексное контрактное производство</a></li>
  						<li><a href="#tabs-3" class="specialization_link">Услуги в деталях</a></li>
  						
  						<?/* */?>
  						<li><a href="#tabs-4" class="specialization_link">Наши бренды</a></li>
  						
  					</ul>
  				</div>
  				
  				<div id="tabs-1" class="specialization_tab">
  					<div class="services_tabs">
  						<?php $product = get_posts( array(
                  'numberposts' => 3,   
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
						<?php $posts = get_posts( array(
                  'numberposts' => 5,   
                  'post_type'   => 'services',
                ) );?>
						
						<?php foreach( $posts as $post ):?>
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
  				<?/**/?> 
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
  				
  			</div>
  		</div>
  	</div>
  	
  	<div class="production_map">
 	    <span class="title_fixed">
  				НАШЕ ПРОИЗВОДСТВО ВО ВЛАДИМИРСКОЙ ОБЛАСТИ 
  			</span>
  	  <div class="scroll_boxing">
  		<div class="map_scroll_box">
  			<span class="map_scroll_text">
  				Проскрольте карту к меткам.
  			</span>
  			<div class="grid_container absolute_container">
  				<h2 class="production_map__title index_title">НАШЕ ПРОИЗВОДСТВО ВО ВЛАДИМИРСКОЙ ОБЛАСТИ </h2>
  			</div>
  			<img src="<?php echo get_template_directory_uri();?>/public/images/production_map.jpg" alt="">
  			<div id="tabs_map" class="tabs_map">

  				<ul class="tabs_map__btn">
  				<?php if( have_rows('tochki_na_karte', 'option') ): ?> 
  				  <?php $tabs = 1 ;?>
						<?php while( have_rows('tochki_na_karte', 'option') ): the_row();?>
							<li class="tabs_map__item">
								<a href="#tabs_map-<?php echo $tabs ;?>"></a>
							</li>
						<?php $tabs++; endwhile; ?> 
					<?php endif; ?>
  				</ul>
  				
  				<?php if( have_rows('tochki_na_karte', 'option') ): ?> 
  				  <?php $tab = 1 ;?>
						<?php while( have_rows('tochki_na_karte', 'option') ): the_row(); 
								$title = get_sub_field('zagolovok_tochki');
								$content = get_sub_field('opisanie_tochki');
								$link = get_sub_field('ssylka_na_podrobnoe_opisanie');
								?>
								<div id="tabs_map-<?php echo $tab ;?>" class="tab_map__item">
									<span class="tabs_close"></span>
									<h3 class="tab_map__title">
										<?php echo $title;?>
									</h3>
									<div class="tab_map__text">
										<?php echo $content;?>
									</div>
									<a href="<?php echo $link;?>" class="tab_map__btn site_btn__more">Подробнее</a>
								</div>
						<?php $tab++; endwhile; ?> 
					<?php endif; ?>
  			</div>
  		</div>
  		</div>
  	</div>
  	
  	<div class="advantages">
  		<div class="grid_container">
  			<h2 class="advantages_title index_title">
  				Преимущества
  			</h2>
  			<div class="advantages_text">
  				<?php the_field('preimushhestva_opisanie', 'options'); ?>
  			</div>
  			<div class="advantages_wrapper_slider">
  				<div class="advantages_slider swiper">
  					<div class="swiper-wrapper">
  					 <?php if( have_rows('preimushhestvo', 'option') ): ?> 
								<?php while( have_rows('preimushhestvo', 'option') ): the_row(); 
									$image = get_sub_field('foto'); 
									$title = get_sub_field('zagolovok_kartochki');
									$content = get_sub_field('korotkij_tekst');
										?>
										<a href="#!" class="advantages_slide swiper-slide" style="background: url(<?php echo $image['url'];?>) no-repeat center #fff;background-size: cover;">
											<h3 class="advantages_slide__title">
												<?php echo $title;?>
											</h3>
											<p class="advantages_slide__text">
												<?php echo $content;?>											
											</p>
										</a>
								<?php endwhile; ?> 
							<?php endif; ?>
  					
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	
  	<div class="our_mission">
  		<div class="grid_container our_mission_wrap">
  			<div class="our_mission__info">
  				<h2 class="our_mission__title index_title">
  					<?php the_field('zagolovok_nasha_missiya', 'options'); ?>
  				</h2>
  				<div class="our_mission__text">
  					<?php the_field('tekst_nasha_missiya', 'options'); ?>
  				</div>
  			</div>
  			<div class="our_mission_wrapper_slider">
  				<div class="our_mission_slider swiper">
  					<div class="swiper-wrapper">
  					  <?php if( have_rows('slajder_izobrazhenij', 'option') ): ?> 
								<?php while( have_rows('slajder_izobrazhenij', 'option') ): the_row(); 
										$image = get_sub_field('foto'); 
										$video = get_sub_field('ssylka_na_video_esli_est');
										?>
										<?php if($video) :?>
										<a href="<?php echo $video ;?>" class="our_mission_slide swiper-slide slide_video" data-fancybox="mission">
											<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ?>">
										</a>
										<?php else :?>
										<a href="<?php echo $image['url'];?>" class="our_mission_slide swiper-slide" data-fancybox="mission">
											<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ?>">
										</a>
										<?php endif ;?>	
								<?php endwhile; ?> 
							<?php endif; ?>
  					 </div>
  				</div>
  				<div class="swiper-button-next"></div>
  				<div class="swiper-pagination"></div>
  				<div class="swiper-button-prev"></div>

  			</div>
  		</div>
  	</div>
  	
  	<div class="our_brands">
  		<div class="grid_container">
  			<h2 class="our_brands__title index_title">
  				<?php the_field('zagolovok_nashi_brendy', 'options'); ?>
  			</h2>
  			<div class="our_brands_wrapper">
  				<div class="our_brands__info">
  				  <?php the_field('opisanie_nashi_brendy', 'options'); ?>
  				</div>
  				<div class="our_brands__wrapper_slider">
  				
  				<?php if( have_rows('slajder_brendov', 'option') ): ?> 
  					<div class="our_brands_slider swiper">
  						<div class="swiper-wrapper">
  						
								<?php while( have_rows('slajder_brendov', 'option') ): the_row(); 
										$image = get_sub_field('logotip'); 
										$link = get_sub_field('ssylka_na_brend');
									?>
									<a target="_blank" href="<?php echo $link;?>" class="our_brands_slide swiper-slide">
										<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ?>">
									</a>
								<?php endwhile; ?> 
							
  						</div>
  					</div>
  					<div class="swiper-button-next"></div>
  					<div class="swiper-pagination"></div>
  					<div class="swiper-button-prev"></div>
						<?php endif; ?>
						
  				</div>
  			</div>
  		</div>
  	</div>
  </main>



  <?php get_footer();?>
