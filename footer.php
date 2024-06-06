<footer>
	<div class="footer_container">
		<a href="" class="footer_logotip">
			<img src="<?php echo get_template_directory_uri();?>/public/images/footer_logo.svg" alt="">
		</a>
		<div class="footer_wrapper">
			<div class="footer_top">
				<nav class="footer_nav">
				 <?php wp_nav_menu( array(
            'container' => false,
            'menu_class'=>'menu',
            'theme_location'=>'footer_menu',
            ) )
       ;?>
				</nav>
				<div class="footer_item">
					<a href="tel:<?php the_field('nomer_telefona', 'options'); ?>">
						<?php the_field('nomer_telefona', 'options'); ?>
					</a>
					<span class="modal_open">
						<a href="#connect_with_us" class="link_modal" data-effect="mfp-zoom-in">Заказать звонок</a>
					</span>
				</div>
				<div class="footer_item">
					<a href="mailto:<?php the_field('email', 'options'); ?>" class="">
						<?php the_field('email', 'options'); ?>
					</a>
					<span class="modal_open">
						Электронная почта
					</span>
				</div>
			</div>
			<div class="footer_bottom">
				<span class="footer_link">
					&copy; 2022 ООО «Фабрика Аэрозолей»
				</span>
				<a href="<?php echo get_page_link(3) ?>" class="footer_link">Все права защищены</a>
				<a href="<?php echo get_page_link(71) ?>" class="footer_link">Документы</a>
				<a target="_blank" href="https://is-art.ru/" class="is-art"></a>
			</div>
		</div>
	</div>
</footer>

<div class="overlay"></div>
<div class="alModal alModalThank js_modal-3">
	<span class="alModalClose js_alModalClose"></span>
	<div class="alModalContent">
		<div class="thank_ico">✓</div>
		<div class="thank_words">Ваша заявка принята</div>
	</div>
</div>


<div id="modal_vacancies" class="modal_vacancies white-popup mfp-with-anim mfp-hide">
	<div class="modal_vacancies_wrappper">
		<form action="javascript:void(0)" id="alxModalForm2" class="vacancies_form">
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
					<input type="tel" placeholder=" " name="phone" required="" id="phone2">
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
		
		<div class="modal_vacancies_contacts">
			<span class="vacancies_contacts__name">
				Или свяжитесь с нами
			</span>
			<div class="vacancies_contacts__item email_icon">
				<span class="vacancies_contacts__name">
					Email
				</span>
				<a href="mailto:info@aerosolfactory.ru " class="vacancies_contacts__link">
					info@aerosolfactory.ru 
				</a>
			</div>
			<div class="vacancies_contacts__item phone_icon">
				<span class="vacancies_contacts__name">
					Телефон
				</span>
				<a href="tel:+7 (492) 372-01-36" class="vacancies_contacts__link">
					+7 (492) 372-01-36
				</a>
			</div>
		</div>

	</div>
</div>

<div id="connect_with_us" class="modal_vacancies white-popup mfp-with-anim mfp-hide">
	<div class="modal_vacancies_wrappper">
		<form action="javascript:void(0)" id="alxModalForm3" class="vacancies_form">
			<span class="vacancies_form__title" style="text-align: center;margin: 0 0 25px;">
				Отправить заявку
			</span>

				<label for="" class="box_input" style="margin: 0 0 20px;">
					<input type="text" placeholder=" " name="name" required="">
					<span class="label_title">
						Ваше имя <span class="red_star">*</span>
					</span>
				</label>
				<label for="" class="box_input" style="margin: 0 0 20px;">
					<input type="email" placeholder=" " name="mail" >
					<span class="label_title">
						Email 
					</span>
				</label>

				<label for="" class="box_input" style="margin: 0 0 20px;">
					<input type="tel" placeholder=" " name="phone" required="" id="phone">
					<span class="label_title">
						Телефон <span class="red_star">*</span>
					</span>
				</label>

			<div class="vacancies_form_private_polycy">
				<p>Отправляя форму, вы даете согласие на обработку своих <a href="">персональных данных</a> </p>
			</div>

			<button type="submit" class="site_btn form_btn">Отправить</button>

		</form>
		
		<div class="modal_vacancies_contacts">
			<span class="vacancies_contacts__name">
				Или свяжитесь с нами
			</span>
			<div class="vacancies_contacts__item email_icon">
				<span class="vacancies_contacts__name">
					Email
				</span>
				<a href="mailto:info@aerosolfactory.ru " class="vacancies_contacts__link">
					info@aerosolfactory.ru 
				</a>
			</div>
			<div class="vacancies_contacts__item phone_icon">
				<span class="vacancies_contacts__name">
					Телефон
				</span>
				<a href="tel:+7 (492) 372-01-36" class="vacancies_contacts__link">
					+7 (492) 372-01-36
				</a>
			</div>
		</div>

	</div>
</div>

<div class="button_box_footer">
	<div class="button_box_wrapper">
		<?/*
		<a target="_blank" href="https://t.me/<?php the_field('telegramm', 'option') ;?> " class="telegram social_btn">
			Связаться <br> с менеджером
		</a>
		*/?>
		<span class="modal_open">
			<a target="_blank" href="#connect_with_us" class="telegram social_btn" data-effect="mfp-zoom-in">
				Связаться <br> с менеджером
			</a>
		</span>
	</div>
</div>

<?php wp_footer();?>

<script type="text/javascript">
	function showModal(modalName) {
		$('.overlay').fadeIn(500,
			function() {
				var ModalLeft = ($(window).width() - $(modalName).outerWidth()) / 2;
				var ModalTop = (window.innerHeight - $(modalName).outerHeight()) / 2;
				$(modalName).removeAttr('css');
				if (ModalTop <= 50) {
					ModalTop = 20;

				}
				setTimeout(function() {
					$(modalName)
						.css('display', 'block')
						.animate({
							opacity: 1,
							left: ModalLeft + 'px',
							top: ModalTop + 'px'
						}, 300);
				}, 50)
			});
	}

	jQuery(document).ready(function($) {
		var ModalTop;

		$(window).resize(function(event) {
			if ($('.alModal').is(':visible')) showModal('.alModal:visible');
		});

		$(document).on('click', '.js_alModal', function() {
			event.preventDefault();
			var modalClass = '.' + $(this).attr('data-modal');
			showModal(modalClass);
		});

		$('.js_alModalClose, .overlay').click(function() {
			$('.alModal').animate({
					opacity: 0
				}, 200,
				function() {
					$(this).css({
						'display': 'none',
						'top': '100%',
						'left': '50%'
					});
					$('.overlay').fadeOut(400);
				}
			);
		});

		$('#alxModalForm1').submit(function() {
			if (document.forms.alxModalForm1.checkValidity()) {
				var thisModal = $(this).parents('.alModal');
				form = $('#alxModalForm1').serialize();
				$.ajax({
					type: "POST",
					url: "<? echo get_site_url(); ?>/obr.php",
					data: form,
					success: function(msg) {
						thisModal.animate({
								opacity: 0
							}, 200,
							function() {
								$(this).css({
									'display': 'none',
									'top': '100%',
									'left': '50%'
								});
							}
						);
						thisModal.find('.alModalInput').val('');
						thisModal.find('textarea').val('');
						showModal('.alModalThank');
						$("#alxModalForm1")[0].reset();
						$.magnificPopup.close();
					}
				});
			}
		});

		$('#alxModalForm2').submit(function() {
			if (document.forms.alxModalForm2.checkValidity()) {
				var thisModal = $(this).parents('.alModal');
				form = $('#alxModalForm2').serialize();
				$.ajax({
					type: "POST",
					url: "<? echo get_site_url(); ?>/obr.php",
					data: form,
					success: function(msg) {
						thisModal.animate({
								opacity: 0
							}, 200,
							function() {
								$(this).css({
									'display': 'none',
									'top': '100%',
									'left': '50%'
								});
							}
						);
						thisModal.find('.alModalInput').val('');
						thisModal.find('textarea').val('');
						showModal('.alModalThank');
						$("#alxModalForm2")[0].reset();
						$.magnificPopup.close();
					}
				});
			}
		});
		
		$('#alxModalForm3').submit(function() {
			if (document.forms.alxModalForm3.checkValidity()) {
				var thisModal = $(this).parents('.alModal');
				form = $('#alxModalForm3').serialize();
				$.ajax({
					type: "POST",
					url: "<? echo get_site_url(); ?>/obr.php",
					data: form,
					success: function(msg) {
						thisModal.animate({
								opacity: 0
							}, 200,
							function() {
								$(this).css({
									'display': 'none',
									'top': '100%',
									'left': '50%'
								});
							}
						);
						thisModal.find('.alModalInput').val('');
						thisModal.find('textarea').val('');
						showModal('.alModalThank');
						$("#alxModalForm3")[0].reset();
						$.magnificPopup.close();
					}
				});
			}
		});

	});

</script>


</body>

</html>
