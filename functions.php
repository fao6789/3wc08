<?php
/**
 * emcos.vn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package emcos.vn
 */

if (!function_exists('emcos_vn_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function emcos_vn_setup() {
		/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on emcos.vn, use a find and replace
			 * to change 'emcos-vn' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('emcos-vn', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			 * Let WordPress manage the document title.
			 * By adding theme support, we declare that this theme does not use a
			 * hard-coded <title> tag in the document head, and expect WordPress to
			 * provide it for us.
		*/
		add_theme_support('title-tag');

		/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'emcos-vn'),
		));

		/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('emcos_vn_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'emcos_vn_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function emcos_vn_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('emcos_vn_content_width', 640);
}
add_action('after_setup_theme', 'emcos_vn_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function emcos_vn_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'emcos-vn'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Đừng làm gì bên này ạ', 'emcos-vn'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'emcos_vn_widgets_init');

function emcos_vn_widgets_init_1() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar Img', 'emcos-vn'),
		'id' => 'sidebar-2',
		'description' => esc_html__('Tiêu đề để trống nhé <3 !!! ///  thẻ p là tiêu đề rồi ạ', 'emcos-vn'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	));
}
add_action('widgets_init', 'emcos_vn_widgets_init_1');

/**
 * Enqueue scripts.
 */
function emcos_vn_scripts() {
	wp_enqueue_style('emcos-vn-style', get_stylesheet_uri());
	wp_enqueue_script('emcos-vn-jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.0.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-megamenu', get_template_directory_uri() . '/assets/js/megamenu.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-malihu', get_template_directory_uri() . '/assets/js/malihu-scrollbar.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-popup', get_template_directory_uri() . '/assets/js/popup.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-elevatezoom', get_template_directory_uri() . '/assets/js/elevatezoom.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-zoom308', get_template_directory_uri() . '/assets/js/elevate-zoom308.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-fancybox3', get_template_directory_uri() . '/assets/js/fancybox3-1-25.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-jquer', get_template_directory_uri() . '/assets/js/jquer.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-jquer-min', get_template_directory_uri() . '/assets/js/jquer.min.js', array(), '20151215', true);
	wp_enqueue_script('emcos-vn-jquer_giohang', get_template_directory_uri() . '/assets/js/jquer_giohang.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'emcos_vn_scripts');

function core_script() {
	wp_enqueue_script('loadpage_script', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), false);

	wp_localize_script('loadpage_script', 'emcosAjax',
		array('ajaxurl' => admin_url('admin-ajax.php'), 'noposts' => 'No Older Posts Found')
	);
}

add_action('admin_enqueue_scripts', 'core_script');

/**
 * Enqueue  styles.
 */
add_action('wp_enqueue_scripts', 'emcos_vn_styles');
function emcos_vn_styles() {
	wp_register_style('second-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '20130608');
	wp_enqueue_style('second-awesome');

	wp_register_style('second-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20130608');
	wp_enqueue_style('second-bootstrap');

	wp_register_style('second-trangchu', get_template_directory_uri() . '/assets/css/trangchu.css', array(), '20130608');
	wp_enqueue_style('second-trangchu');

	wp_register_style('second-sidebar', get_template_directory_uri() . '/assets/css/sidebar.css', array(), '20130608');
	wp_enqueue_style('second-sidebar');

	wp_register_style('second-header-footer', get_template_directory_uri() . '/assets/css/header-footer.css', array(), '20130608');
	wp_enqueue_style('second-header-footer');

	wp_register_style('second-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '20130608');
	wp_enqueue_style('second-carousel');

	wp_register_style('second-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '20130608');
	wp_enqueue_style('second-theme-default');

	wp_register_style('second-theme-malihu', get_template_directory_uri() . '/assets/css/malihu-scrollbar.css', array(), '20130608');
	wp_enqueue_style('second-theme-malihu');

	wp_register_style('second-theme-baiviet', get_template_directory_uri() . '/assets/css/baiviet.css', array(), '20130608');
	wp_enqueue_style('second-theme-baiviet');

	wp_register_style('second-theme-chitietsp', get_template_directory_uri() . '/assets/css/chitietsp.css', array(), '20130608');
	wp_enqueue_style('second-theme-chitietsp');

	wp_register_style('second-theme-daily', get_template_directory_uri() . '/assets/css/daily.css', array(), '20130608');
	wp_enqueue_style('second-theme-daily');

	wp_register_style('second-danhmucsp', get_template_directory_uri() . '/assets/css/danhmucsp.css', array(), '20130608');
	wp_enqueue_style('second-danhmucsp');

	wp_register_style('second-giohang', get_template_directory_uri() . '/assets/css/giohang.css', array(), '20130608');
	wp_enqueue_style('second-giohang');

	wp_register_style('second-lienhe', get_template_directory_uri() . '/assets/css/lienhe.css', array(), '20130608');
	wp_enqueue_style('second-lienhe');

	wp_register_style('second-quanly', get_template_directory_uri() . '/assets/css/quanly.css', array(), '20130608');
	wp_enqueue_style('second-quanly');

	wp_register_style('second-thanhtoan', get_template_directory_uri() . '/assets/css/thanhtoan.css', array(), '20130608');
	wp_enqueue_style('second-thanhtoan');

	wp_register_style('second-thuonghieu', get_template_directory_uri() . '/assets/css/thuonghieu.css', array(), '20130608');
	wp_enqueue_style('second-thuonghieu');

	wp_register_style('second-tintuc', get_template_directory_uri() . '/assets/css/tintuc.css', array(), '20130608');
	wp_enqueue_style('second-tintuc');

	wp_register_style('second-style', get_template_directory_uri() . '/assets/css/style.css', array(), '20130608');
	wp_enqueue_style('second-style');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Hook template.
 */

require get_template_directory() . '/template-parts/hook/hook_header.php';
require get_template_directory() . '/template-parts/hook/hook_footer.php';

/**
 * Custom post type.
 */
require get_template_directory() . '/inc/custom-post-type/mega-menu.php';

/**
 * Customizer.
 */
require get_template_directory() . '/inc/customizer/kirki.php';

/**
 * Import data.
 */
require get_template_directory() . '/inc/import-data/import-data.php';

/**
 * Ajax.
 */
require get_template_directory() . '/inc/ajax/import.php';

function add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function pagainate_link_function() {
	global $wp_query;
	echo paginate_links(array(
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type' => 'list', //default it will return anchor
	));
}

function mytheme_add_woocommerce_support() {
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

add_filter('get_the_archive_title', 'my_theme_archive_title');
/**
 * Remove archive labels.
 *
 * @param  string $title Current archive title to be displayed.
 * @return string        Modified archive title to be displayed.
 */
function my_theme_archive_title($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}

	return $title;
}

add_filter('comment_form_default_fields', 'custom_fields');
function custom_fields($fields) {

	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : ’);

	$fields['author'] = '<p class="comment-form-author">' .
	'<label for="author">Họ tên <span style="color:red;">*</span></label>' .
	($req ? '' : ’) .
	'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
		'" size="30" tabindex="1"' . $aria_req . '/></p>';

	$fields['email'] =
	'<p class="comment-form-email"><label for="email">' . __('Email', 'domainreference') . '</label> ' .
	($req ? '' : '') .
	'<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
		'" size="30"/></p>';

	$fields['phone'] = '<p class="comment-form-phone">' .
		'<label for="phone">Số điện thoại <span style="color:red;">*</span></label>' .
		'<input id="phone" name="phone" type="text" size="30"  tabindex="4" ' . $aria_req . ' /></p>';

	return $fields;
}

add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields) {
	//unset($fields['email']);

	unset($fields['url']);

	unset($fields['cookies']);

	return $fields;
}

add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end() {
	wp_enqueue_style('dashicons');
}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail_edit', 10);

function woocommerce_template_loop_product_thumbnail_edit() {
	?>
    <span class="relative_img">
        <span class="img" style="background:url(<?php the_post_thumbnail_url();?>) no-repeat;" alt="<?php the_title();?>" title="<?php the_title();?>"></span>
        <!-- <img class="img" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>"> -->
    </span>
    <?php
}

add_filter('woocommerce_sale_flash', 'add_percentage_to_sale_bubble');
function add_percentage_to_sale_bubble($html) {
	global $product;
	$percentage = round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100);
	$output = ' <span class="onsale">' . $percentage . '%</span><span class="new">NEW</span>';
	return $output;
}

add_filter('woocommerce_loop_add_to_cart_link', 'woocommerce_loop_add_to_cart_link_edit', 10);

function woocommerce_loop_add_to_cart_link_edit() {
	echo '<a class="view_product" href="' . get_permalink() . '"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Xem thêm</a>';
}

add_action('after_setup_theme', 'yourtheme_setup');

function yourtheme_setup() {
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}

add_action('woocommerce_single_product_summary', function () {
	echo '<div class="meta_rating_edit">';
}, 9);

// add_action('woocommerce_single_product_summary', function () {
// 	global $product;
// 	if ($product->get_rating_count() > 0) {
// 		echo "<span class='count_rating_single'>" . $product->get_rating_count() . " đánh giá</span>";
// 	}
// }, 11);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 12);

add_action('woocommerce_single_product_summary', function () {
	echo '</div>';
}, 11);

add_filter('woocommerce_get_price_html', 'dw_change_default_price_html', 100, 2);
function dw_change_default_price_html($price, $product) {
	if (!$product->get_sale_price() and !$product->get_regular_price()) {
		echo '<strong>Liên hệ</strong>';
	}
	if ($product->get_sale_price()) {
		?>
        <span class="price sales"><?php echo number_format($product->get_sale_price(), 0, '.', '.'); ?>đ</span>
        <?php
}
	if ($product->get_regular_price()) {
		if ($product->get_sale_price()) {
			?>
            <p class="price regular_sales"><?php echo number_format($product->get_regular_price(), 0, ',', ','); ?>đ</p>
            <?php
} else {
			?>
            <p class="price"><?php echo number_format($product->get_regular_price(), 0, '.', '.'); ?>đ</p>
            <?php
}

	}

}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// Adds a custom rule type.
add_filter('acf/location/rule_types', function ($choices) {
	$choices[__("Other", 'acf')]['wc_prod_attr'] = 'WC Product Attribute';
	return $choices;
});

// Adds custom rule values.
add_filter('acf/location/rule_values/wc_prod_attr', function ($choices) {
	foreach (wc_get_attribute_taxonomies() as $attr) {
		$pa_name = wc_attribute_taxonomy_name($attr->attribute_name);
		$choices[$pa_name] = $attr->attribute_label;
	}
	return $choices;
});

// Matching the custom rule.
add_filter('acf/location/rule_match/wc_prod_attr', function ($match, $rule, $options) {
	if (isset($options['taxonomy'])) {
		if ('==' === $rule['operator']) {
			$match = $rule['value'] === $options['taxonomy'];
		} elseif ('!=' === $rule['operator']) {
			$match = $rule['value'] !== $options['taxonomy'];
		}
	}
	return $match;
}, 10, 3);

add_action('woocommerce_single_product_summary', function () {
	//$color = get_terms('pa_color');
	$color = get_the_terms(get_the_ID(), 'pa_color');

	if ($color) {
		?>
        <ul class="slt_color_product">
            <?php
foreach ($color as $item):
			$term_id = $item->term_id;
			$hex = get_field('color', 'term_' . $term_id);
			?>
									            <li style="background: <?php echo $hex; ?>;" data-name="<?php echo strtolower($item->name); ?>"><i class="fa fa-check" aria-hidden="true"></i></li>
									            <?php
endforeach;
		?>
        </ul>
        <?php
}

}, 21);

add_filter('use_block_editor_for_post', '__return_false');

function gp_remove_cpt_slug($post_link, $post) {
	if ('product' === $post->post_type && 'publish' === $post->post_status) {
		$post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
	}
	return $post_link;
}
add_filter('post_type_link', 'gp_remove_cpt_slug', 10, 2);

function gp_add_cpt_post_names_to_main_query($query) {
	// Bail if this is not the main query.
	if (!$query->is_main_query()) {
		return;
	}
	// Bail if this query doesn't match our very specific rewrite rule.
	if (!isset($query->query['page']) || 2 !== count($query->query)) {
		return;
	}
	// Bail if we're not querying based on the post name.
	if (empty($query->query['name'])) {
		return;
	}
	// Add CPT to the list of post types WP will include when it queries based on the post name.
	$query->set('post_type', array('post', 'product'));
}
add_action('pre_get_posts', 'gp_add_cpt_post_names_to_main_query');

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_action('woocommerce_before_main_content', function () {
	if (function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<p class="simple_love" id="breadcrumbs">', '</p>');}
}, 20);

//search
function searchfilter($query) {
	if ($query->is_search && !is_admin()) {
		if (isset($_GET['post_type'])) {
			$type = $_GET['post_type'];
			if ($type == 'post') {
				$query->set('post_type', array('post_type'));
			}
		}
	}
	return $query;
}
add_filter('pre_get_posts', 'searchfilter');

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

add_action('woocommerce_single_product_summary', function () {
	?>
    <button class="add_to_cart_single" type="button">Mua ngay</button>
    <?php
}, 30);

add_action('woocommerce_single_product_summary', function () {
	?>
    <?php
$terms = get_the_terms(get_the_ID(), 'product_tag');
	if ($terms):
	?>
    <div class="single_product_tags">
        <strong>Tags: </strong>
        <ul>
        <?php
foreach ($terms as $term) {
		?>
                <li><a href="<?php echo get_home_url() ?>/tu-khoa-san-pham/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                <?php
}
	?>
        </ul>
    </div>
    <?php endif;?>
    <?php
}, 21);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

add_action('woocommerce_shop_loop_item_title', function () {
	if (is_single() and is_singular('product')) {
		echo "<h4 title='" . get_the_title() . "'>" . get_the_title() . "</h4>";
	} else {
		echo "<h3 title='" . get_the_title() . "'>" . get_the_title() . "</h3>";
	}

}, 10);

//enable revisions
add_filter('woocommerce_register_post_type_product', 'wc_modify_product_post_type');

function wc_modify_product_post_type($args) {
	$args['supports'][] = 'revisions';

	return $args;
}
add_action('wp_head', 'hide_sidebar');
function hide_sidebar() {
	if (is_cart() || is_checkout()) {
		?><style type="text/css">
.m-hidden {
display: none;
}
</style><?php
}
}
add_filter('add_to_cart_text', 'woo_custom_single_add_to_cart_text'); // < 2.1
add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text'); // 2.1 +

function woo_custom_single_add_to_cart_text() {

	return __('Thêm vào giỏ hàng', 'woocommerce');

}
add_action('admin_head', 'Hide_WooCommerce_Breadcrumb');

function Hide_WooCommerce_Breadcrumb() {
	echo '<style>
    .woocommerce-layout__header-breadcrumbs, .woocommerce-layout__header {
      display: none;
    }
  </style>';
}

add_filter( 'term_link', 'devvn_post_tag_permalink', 10, 3 );
function devvn_post_tag_permalink( $url, $term, $taxonomy ){
    switch ($taxonomy):
        case 'post_tag':
            $taxonomy_slug = 'tag';
            if(strpos($url, $taxonomy_slug) === FALSE) break;
            $url = str_replace('/' . $taxonomy_slug, '', $url);
            break;
    endswitch;
    return $url;
}
// Add our custom product cat rewrite rules
function devvn_post_tag_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'post_tag',
        'post_type' => 'post',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term){
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl,'',get_term_link($term->term_id,'post_tag'));
            add_rewrite_rule($baseterm.'?$','index.php?tag='.$term_slug,'top');
            add_rewrite_rule($baseterm.'page/([0-9]{1,})/?$', 'index.php?tag='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($baseterm.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?tag='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_post_tag_rewrite_rules');
/*Sửa lỗi khi tạo mới tag bị 404*/
add_action( 'created_post_tag', 'devvn_new_post_tag_edit_success', 10, 2 );
function devvn_new_post_tag_edit_success( $term_id, $taxonomy ) {
    devvn_post_tag_rewrite_rules(true);
}

if ( is_home() ) {
      
       echo "<h1>Bạn không đang ở trang chủ</h1>";
}

