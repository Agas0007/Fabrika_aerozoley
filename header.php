<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>
		<?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/public/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/public/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/public/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri();?>/public/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
		
	<?php wp_head();?>
</head>

<body <? body_class(); ?>>
	<header>
		<div class="header_container">
			<a href="<?php echo get_site_url();?>" class="header_logo">
				<img class="logotip_decktop" src="<?php echo get_template_directory_uri();?>/public/images/logotip.svg" alt="">
				<img class="logotip_mobail" src="<?php echo get_template_directory_uri();?>/public/images/logo_mobail.svg" alt="">
			</a>
			<nav class="header_nav">
			  <div class="site-nav__curtain js-nav-curtain"></div>
			  <?php wp_nav_menu( array(
                  'container' => false,
                  'menu_class'=>'menu',
                  'theme_location'=>'header_menu',
                  'walker' => new submenu_wrap()
                  ) )
              ;?>
            </nav>
			<div class="header_btn">
				<a target="_blank" href="<?php the_field('skachat_prezentacziyu', 'options'); ?>" class="download_presentation">Скачать презентацию</a>
				<a target="_blank" href="<?php the_field('katalog', 'options'); ?>" class="download_catalog">Скачать каталог</a>
				<span class="modal_open">
					<a href="#connect_with_us" class="header_connect" data-effect="mfp-zoom-in">Связаться с нами</a>
				</span>
			</div>
			<ul class="humb">
			  <li></li>
			  <li></li>
			  <li></li>
			</ul>
		</div>

	</header>