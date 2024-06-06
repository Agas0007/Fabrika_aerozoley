<? register_nav_menus(array(
  'header_menu' => 'Главное меню',
  'footer_menu' => 'Меню в подвале',
  ));


function add_menu_title( $item_output, $item, $depth, $args ) {
    global $menuTitle;
    $menuTitle = $item->title;
  
    global $menuTitleUrl;
    $menuTitleUrl = $item->url;
  
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_title', 10, 4);

class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl( &$output, $item, $depth = 0, $args = array() ) {
        global $menuTitle;
        global $menuTitleUrl;
      
      
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu'><div class='sub-menu_left'><span class='sub-menu_title'>". $menuTitle ."</span><a href='". $menuTitleUrl ."' class='sub-menu_link'>Перейти в раздел</a></div><ul class='list-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}




add_theme_support('post-thumbnails');

add_image_size( 'gallery-size', 220, 140);

function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
       global $post;
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function add_scripts() {
  
  if(is_admin()) return false;
	
  wp_enqueue_script('jquery_3_5', get_template_directory_uri().'/public/js/jquery/jquery-3.5.0.min.js','','',true);
  wp_enqueue_script('jquery_ui', get_template_directory_uri().'/public/js/jquery-ui.min.js','','',true);
  wp_enqueue_script('fancybox', get_template_directory_uri().'/public/js/jquery.fancybox.min.js','','',true);
  wp_enqueue_script('magnific', get_template_directory_uri().'/public/js/jquery.magnific-popup.min.js','','',true);
  wp_enqueue_script('inputmask', get_template_directory_uri().'/public/js/jquery.inputmask.bundle.min.js','','',true);

  wp_enqueue_script('swiper_js', get_template_directory_uri().'/public/js/swiper-bundle.min.js','','',true);
  wp_enqueue_script('user', get_template_directory_uri().'/public/js/user.js?v=1.2.0','','',true);

}

function add_styles() {
  
    if(is_admin()) return false;
	
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri().'/public/css/swiper-bundle.min.css' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri().'/public/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'magnific', get_template_directory_uri().'/public/css/magnific-popup.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/public/css/main.css?v=1.2.9' );  
    }

 add_action('wp_footer', 'add_scripts');
 add_action('wp_print_styles', 'add_styles');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', get_template_directory_uri() .'/public/css/wp-admin.css' );
}, 99 );

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Главная страница'),
            'menu_title'  => __('Главная страница'),
            'redirect'    => false,
        ));
			
			 $parent = acf_add_options_page(array(
            'page_title'  => __('Контакты'),
            'menu_title'  => __('Контакты'),
            'redirect'    => false,
        ));

//        $child = acf_add_options_page(array(
//            'page_title'  => __('Подробнее о нас'),
//            'menu_title'  => __('Подробнее о нас'),
//            'parent_slug' => $parent['menu_slug'],
//        ));

    }
}


/*----------------  Категории  -------------*/

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
    register_post_type(
        'career',
         array(
            'labels' => array( 'name' => __( 'Карьера' ),
            'singular_name' => __( 'Карьера' ) ),
			  		'publicly_queryable'  => false, // отменяет ссылки у записей
                        
            'name'                => _x( 'Карьера', 'Post Type General Name', 'works' ),
            'singular_name'       => _x( 'Карьера', 'Post Type Singular Name', 'works' ),
            'menu_name'           => __( 'Карьера', 'career' ),
            'parent_item_colon'   => __( 'Карьера', 'career' ),
            'all_items'           => __( 'Карьера', 'career' ), 
            
            'has_archive' => true,
            'taxonomies'  => array( 'category_career' ),
            'supports'      => array( 'title', 'thumbnail','editor'),
            'public' => true, ) 
			);
	
			register_post_type(
        'services',
         array(
            'labels' => array( 'name' => __( 'Услуги' ),
            'singular_name' => __( 'Услуги' ) ),
                        
            'name'                => _x( 'Услуги', 'Post Type General Name', 'services' ),
            'singular_name'       => _x( 'Услуги', 'Post Type Singular Name', 'services' ),
            'menu_name'           => __( 'Услуги', 'services' ),
            'parent_item_colon'   => __( 'Услуги', 'services' ),
            'all_items'           => __( 'Услуги', 'services' ), 
            
            'has_archive' => true,
            'taxonomies'  => array( 'category_services' ),
            'supports'      => array( 'title', 'thumbnail','editor'),
            'public' => true, ) 
			);
	
			register_post_type(
        'products',
         array(
            'labels' => array( 'name' => __( 'Товары' ),
            'singular_name' => __( 'Товары' ) ),
                        
            'name'                => _x( 'Товары', 'Post Type General Name', 'products' ),
            'singular_name'       => _x( 'Товары', 'Post Type Singular Name', 'products' ),
            'menu_name'           => __( 'Товары', 'products' ),
            'parent_item_colon'   => __( 'Товары', 'products' ),
            'all_items'           => __( 'Товары', 'products' ), 
            
            'has_archive' => true,
            'taxonomies'  => array( 'category_products' ),
            'supports'      => array( 'title', 'thumbnail','editor'),
            'public' => true, ) 
			);
	
}


function add_custom_taxonomies() {
      register_taxonomy('category_career', 'career', array(
            'hierarchical' => true,
            'labels' => array(
              'name' => _x( 'Категории карьеры', 'категории карьеры' ),
              'singular_name' => _x( 'Категории карьеры', 'категории карьеры' ),
            ),
            'rewrite' => array(
              'with_front' => false, 
              'hierarchical' => true 
            ),
          ));
			register_taxonomy('category_services', 'services', array(
            'hierarchical' => true,
            'labels' => array(
              'name' => _x( 'Категории услуги', 'категории услуги' ),
              'singular_name' => _x( 'Категории услуги', 'категории услуги' ),
            ),
            'rewrite' => array(
              'with_front' => false, 
              'hierarchical' => true 
            ),
          ));
	
	    register_taxonomy('category_products', 'products', array(
            'hierarchical' => true,
            'labels' => array(
              'name' => _x( 'Категории Товаров', 'категории Товаров' ),
              'singular_name' => _x( 'Категории Товаров', 'категории Товаров' ),
            ),
            'rewrite' => array(
              'with_front' => false, 
              'hierarchical' => true 
            ),
          ));
        }

add_action( 'init', 'add_custom_taxonomies', 0 );


/*
 * "Хлебные крошки" для WordPress
 */
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</ul ><!-- .breadcrumbs -->'; // закрывающий тег обертки
	
	$before         = '<li class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</li>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</li>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
}

/*-------------*/


?>
