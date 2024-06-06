<?php get_header();?>
	<main>
	  <div class="single_page_head page_head" style="background: url(<?php echo get_the_post_thumbnail_url();?>) no-repeat center;background-size: cover;">
	    <div class="grid_container">
	      <div class="breadcrumb">
	        <div class="breadcrumb_wrapper">
	          <ul>
	            <li> <a href="<?php echo get_site_url();?>" class="breadcrumbs__link"> <span itemprop="name">Главная</span> </a> </li>
	            <li>
	             <a href="<?php echo get_site_url();?>/category_services/uslugi/" class="breadcrumbs__link"> 
								<span itemprop="name">Услуги и продукт</span> 
							</a>
	             </li>
	            <li class="breadcrumbs__current">
	            	<?php the_title();?>          	
         		  </li>
	          </ul>
	        </div>
	      </div>
	      <h1 class="page_head_title">
	        <?php the_title();?> 
	      </h1>
	      <div class="single_page_head___text">
	      	<?php the_content();?> 
	      </div>
	    </div>
	  </div>
	  
	  <div class="single_services">
	  	<div class="grid_container single_services_wrapper">
	  		<div class="single_services__text">
	  			<?php the_field('opisanie_bloka_s_fajlami'); ?>
	  		</div>
	  		<div class="single_services__pdf_box">
	  		
	  		<?php
					$file = get_field('vidy_upakovok_fajl');
					if( $file ): ?>

					<?php 
							$url = $file['url'];
							$title = $file['title'];
							$filesize = $file['filesize'];
							$path_parts = pathinfo($url);
					;?>
	  			<a target="_blank" href="<?php echo esc_attr($url); ?>" class="services__pdf_left" title="<?php echo esc_attr($title); ?>">
	  				<h3 class="services__pdf_left__title">
	  					<?php echo esc_html($title); ?>
	  				</h3>
	  				<span class="services__pdf_left__size">
	  					<?php echo size_format($filesize); ?> , <span style="text-transform: uppercase;"> <?php echo $path_parts['extension'];?> </span>
	  				</span>
	  				<div class="services__pdf_left__img">
	  					<img src="<?php echo get_template_directory_uri();?>/public/images/pdf_box.png" alt="">
	  				</div>
	  				<span class="services__pdf_left_more download_catalog">
	  					Скачать файл
	  				</span>
	  			</a>
	  			<?php endif; ?>
	  			
	  			<div class="services__pdf_right">
	  			
					<?php
						$file2 = get_field('prezentacziya_dlya_partnerov');
						if( $file2 ): ?>

					<?php 
								$url = $file2['url'];
								$title = $file2['title'];
								$filesize = $file2['filesize'];
								$path_parts = pathinfo($url);
						;?>
												
	  				<a target="_blank" href="<?php echo esc_attr($url); ?>" class="services__pdf_item">
	  					<h3 class="services__pdf_item__title">
	  						<?php echo esc_attr($title); ?>
	  					</h3>
	  					<span class="services__pdf_item__size">
								<?php echo size_format($filesize); ?> , <span style="text-transform: uppercase;"> <?php echo $path_parts['extension'];?> </span>
	  					</span>
	  					<span class="services__pdf_left_more download_catalog">
	  						Скачать файл
	  					</span>
	  				</a>
	  				<?php endif; ?>
	  					  				
	  				<?php
							$file3 = get_field('polnyj_katalog_fajl');
							if( $file3 ): ?>

						<?php 
								$url = $file3['url'];
								$title = $file3['title'];
								$filesize = $file3['filesize'];
								$path_parts = pathinfo($url);
						;?>
  					 <a target="_blank" href="<?php echo esc_attr($url); ?>" class="services__pdf_item">
	  					<h3 class="services__pdf_item__title">
	  						<?php echo esc_attr($title); ?>
	  					</h3>
	  					<span class="services__pdf_item__size">
								<?php echo size_format($filesize); ?> , <span style="text-transform: uppercase;"> <?php echo $path_parts['extension'];?> </span>
	  					</span>
	  					<span class="services__pdf_left_more download_catalog">
	  						Скачать файл
	  					</span>
	  				</a>
	  				<?php endif; ?>
	
	  			</div>
	  		</div>
	  	</div>
	  </div>
	  
	  <div class="services_specification">
	    <div class="grid_container">
	    	<div id="accordion" class="specification_accordion">
	    		
	    	<?php if( have_rows('harakteristika') ): ?> 
        	<?php while( have_rows('harakteristika') ): the_row(); 
            $image = get_sub_field('izobrazhenie'); 
            $title = get_sub_field('zagolovok');
            $content_box = get_sub_field('prostoj_tekst_vmesto_bloka_s_numeracziej');
            $link = get_sub_field('ssylka_na_perehod');
            ?>
	    		
	    		<h2 class="accordion_header">
	    			<?php echo $title;?>
	    		</h2>
	    		<div class="accordion_content">
	    			<div class="accordion_content__text">
   		  	  
    		  	  <?php if( have_rows('blok_s_numeracziej') ): ?> 
    		  	  <div class="list_content" style="margin-bottom: 25px;">
								<?php while( have_rows('blok_s_numeracziej') ): the_row(); 
										$title = get_sub_field('zagolovok_bloka');
										$content = get_sub_field('opisanie_bloka');
									?>
	    					<div class="list_content__item">
	    						<h3 class="list_content__title">
	    							<?php echo $title;?>
	    						</h3>
	    						<div class="list_content__text">
	    							<?php echo $content;?>
	    						</div>
	    					</div>
								<?php endwhile; ?> 
								</div>
							<?php endif; ?>
    		  		
   		  		    		  		   		  		    		  		   		  		   		  		    		  		   		  		    		  		   		  		
	    		  	<?php echo $content_box ;?>
	    		  	
	    		  </div>
	    			<div class="accordion_content__img">
	    			
	    			<?php if($image) :?>
	    				<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ?>">
	    			<?php endif ;?>
	    				
	    			<?php if($link) :?>
	    				<a href="<?php echo $link;?>" class="services_tab__more">Подробнее</a>
	    			<?php endif ;?>		
	    			</div>
	    		</div>
	    		
	    		<?php endwhile; ?> 
      	<?php endif; ?>
	    	    		    		
	    	</div>
	    </div>
	  </div>
	</main>
	
<?php get_footer();?>