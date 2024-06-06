<?php get_header();?>

<main>
	<div class="single_page_head page_head" style="background: url(<?php the_field('banner_straniczy', get_queried_object()); ?>) no-repeat center;background-size: cover;">
		<div class="grid_container">
			<div class="breadcrumb">
				<div class="breadcrumb_wrapper">
					<ul>
						<li>
							<a href="<?php echo get_site_url();?>" class="breadcrumbs__link">
								<span itemprop="name">Главная</span>
							</a>
						</li>
						<li class="breadcrumbs__current">
							Карьера
						</li>
					</ul>
				</div>
			</div>
			<h1 class="page_head_title">
				<?php the_field('zagolovok_na_bannere_straniczy', get_queried_object()); ?>
			</h1>
			<div class="single_page_head___text">
				<?php the_field('opisanie_na_bannere_straniczy', get_queried_object()); ?>
			</div>
			<div class="manegar_card">
				<span class="manegar_card__name">
					<?php the_field('fio_menedzhera', get_queried_object()); ?>
				</span>
				<span class="manegar_card__work">
					<?php the_field('dolzhnost_menedzhera', get_queried_object()); ?>
				</span>

				<a href="mailto:<?php the_field('pochta_menedzhera', get_queried_object()); ?>" class="manegar_card_email">
					<?php the_field('pochta_menedzhera', get_queried_object()); ?>
				</a>
				<a href="tel:<?php the_field('telefon_menedzhera', get_queried_object()); ?>" class="manegar_card_phone">
					<?php the_field('telefon_menedzhera', get_queried_object()); ?>
				</a>
			</div>
		</div>
	</div>

	<div class="our_team">
		<div class="grid_container">
			<h2 class="our_team__title index_title">
				<?php the_field('zagolovok_na_stranicze', get_queried_object()); ?>
			</h2>
			<div class="our_team_text">
				<?php the_field('opisanie_na_stranicze', get_queried_object()); ?>
			</div>
			<div class="scroll_box">
				<div class="our_team_trigger">
					<div class="team_trigger_item one active">
						<span class="team_trigger_num">
							01
						</span>
						<span class="team_trigger_title">
							Выбери подходящую вакансию на сайте
						</span>
						<span class="triangle"></span>

					</div>
					<div class="team_trigger_item">
						<span class="team_trigger_num">
							02
						</span>
						<span class="team_trigger_title">
							<?php the_field('shag_2', get_queried_object()); ?>
						</span>
						<span class="triangle"></span>
					</div>
					<div class="team_trigger_item">
						<span class="team_trigger_num">
							03
						</span>
						<span class="team_trigger_title">
							Получи приглашение на собеседование
						</span>
						<span class="triangle"></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="vacancies_block services_specification">
		<div class="grid_container">
			<h2 class="our_team__title index_title">
				Вакансии
			</h2>
			<div id="accordion" class="specification_accordion">
				<?php if (have_posts()) : while (have_posts()) : the_post() ;?>

				<h2 class="accordion_header">
					<?php the_title(); ?>
				</h2>
				<div class="accordion_content">
					<div class="accordion_content__text">
						<?php the_content(); ?>

						<br>
						<br>
						<?php if(get_field('ssylka_na_hh')):?>
						<div class="vacancies_btn">
							<div class="vacancies_btn_logo">
								<img src="<?php echo get_template_directory_uri();?>/public/images/hh.jpg" alt="">
							</div>
							<a target="_blank" href="<?php the_field('ssylka_na_hh'); ?>" class="services_tab__more">Откликнуться</a>
						</div>
						<?php endif;?>
						<br>
						<?php if(get_field('ssylka_na_avito')):?>
						<div class="vacancies_btn">
							<div class="vacancies_btn_logo">
								<img src="<?php echo get_template_directory_uri();?>/public/images/avito.jpg" alt="">
							</div>
							<a target="_blank" href="<?php the_field('ssylka_na_avito'); ?>" class="services_tab__more">Откликнуться</a>
						</div>
						<?php endif;?>

					</div>
					<div class="accordion_content__img">
					</div>
				</div>

				<?php endwhile; ?>
				<?php endif; ?>

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
			<div class="pagintation_block" style="margin: 35px auto 0;">
				<?php echo the_posts_pagination( $args ); ?>
			</div>
		</div>
	</div>

	<div class="vacancies_form_box">
		<div class="grid_container form_box__wrapper">
			<form action="javascript:void(0)" id="alxModalForm1" class="vacancies_form">
				<span class="vacancies_form__title">
					Заинтересовала вакансия?
				</span>
				<span class="vacancies_form__text">
					Оставьте свои контактные данные, чтобы начать успешное сотрудничество
				</span>

				<div class="vacancies_form__item">
					<label for="" class="box_input">
						<input type="text" placeholder=" " name="name" required="">
						<span class="label_title">
							Ваше имя <span class="red_star">*</span>
						</span>
					</label>
					<label for="" class="box_input">
						<input type="email" placeholder=" " name="mail" required="">
						<span class="label_title">
							Email <span class="red_star">*</span>
						</span>
					</label>
				</div>

				<div class="vacancies_form__item">
					<label for="" class="box_input">
						<input type="tel" placeholder=" " name="phone" required="" id="phone3">
						<span class="label_title">
							Телефон <span class="red_star">*</span>
						</span>
					</label>
					<label for="" class="box_input">
						<input type="text" placeholder=" " name="link_rezume" required="">
						<span class="label_title">
							Ссылка на резюме <span class="red_star">*</span>
						</span>
					</label>
				</div>

				<label for="" class="box_input">
					<textarea name="textarea" placeholder=" "></textarea>
					<span class="label_title">
						Сообщение <span class="red_star">*</span>
					</span>
				</label>

				<span class="vacancies_form_symbol">
					Не более 1500 символов
				</span>

				<div class="vacancies_form_private_polycy">
					<p>Отправляя форму, вы даете согласие на обработку своих <a href="">персональных данных</a> </p>
				</div>

				<button type="submit" class="site_btn form_btn">Отправить</button>

			</form>
			<div class="form_box__img">
				<img src="<?php echo get_template_directory_uri();?>/public/images/form_box__img.png" alt="Фабрика аэорозолей" loading="lazy">
			</div>
		</div>
	</div>

</main>

<?php get_footer();?>
