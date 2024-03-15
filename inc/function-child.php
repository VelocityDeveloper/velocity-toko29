<?php
/**
 * Fuction yang digunakan di theme ini.
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

add_action('after_setup_theme', 'velocitychild_theme_setup', 9);

function velocitychild_theme_setup()
{

	if (class_exists('Kirki')) :

		Kirki::add_panel('panel_toko29', [
			'priority'    => 10,
			'title'       => esc_html__('Toko 29', 'justg'),
			'description' => esc_html__('', 'justg'),
		]);

        // section title_tagline
        Kirki::add_section('title_tagline', [
            'panel'    => 'panel_toko29',
            'title'    => __('Site Identity', 'justg'),
            'priority' => 10,
        ]);

		///Section Color
		Kirki::add_section('section_colorweb', [
			'panel'    => 'panel_toko29',
			'title'    => __('Warna', 'justg'),
			'priority' => 10,
		]);
		new \Kirki\Field\Background(
			[
				'settings'    => 'background_website',
				'label'       => esc_html__('Background', 'justg'),
				'description' => esc_html__('', 'justg'),
				'section'     => 'section_colorweb',
				'default'     => [
					'background-color'      => '#fea7f6',
					'background-image'      => '',
					'background-repeat'     => 'repeat',
					'background-position'   => 'center center',
					'background-size'       => 'cover',
					'background-attachment' => 'scroll',
				],
				'transport'   => 'auto',
				'output'      => [
					[
						'element'   => ':root[data-bs-theme=light] body',
					],
				],
			]
		);

		///Section Typography
		Kirki::add_section('section_typographyweb', [
			'panel'    => 'panel_toko29',
			'title'    => __('Typography', 'justg'),
			'priority' => 10,
		]);
		new \Kirki\Field\Typography(
			[
				'settings'    => 'typography_setting',
				'label'       => esc_html__('Typography', 'velocity'),
				'description' => esc_html__('Just the font-family and font-weight.', 'velocity'),
				'section'     => 'section_typographyweb',
				'priority'    => 10,
				'transport'   => 'auto',
				'default'     => [
					'font-family'     => 'Poppins',
					'variant'         => 'regular',
					'font-style'      => 'normal',
					'font-size'       => '0.85rem',
					'line-height'     => '1.5',
					'letter-spacing'  => '0',
					'text-transform'  => 'none',
					'text-decoration' => 'none',
					'text-align'      => 'left',
				],
				'output'      => [
					[
						'element' => 'body,.is-root-container',
					],
				],
			]
		);

		///Section Home
		Kirki::add_section('section_homeweb', [
			'panel'    => 'panel_toko29',
			'title'    => __('Home', 'justg'),
			'priority' => 10,
		]);
        new \Kirki\Field\Repeater(
            [
                'settings' => 'slider_home',
                'label'    => esc_html__('Slider Home', 'justg'),
                'section'  => 'section_homeweb',
                'priority' => 10,
                'row_label'    => [
                    'type'  => 'field',
                    'value' => esc_html__('Slider', 'justg'),
                ],
                'button_label' => esc_html__('Tambah', 'justg'),
                'fields'   => [
                    'imgslider'   => [
                        'type'        => 'image',
                        'label'       => esc_html__('Gambar', 'justg'),
                        'description' => esc_html__('', 'justg'),
                        'default'     => '',
                    ],
                ],
            ]
        );


		// remove panel in customizer 
		Kirki::remove_panel('global_panel');
		Kirki::remove_panel('panel_header');
		Kirki::remove_panel('panel_footer');
		Kirki::remove_control('display_header_text');

	endif;

	//remove action from Parent Theme
	remove_action('justg_header', 'justg_header_menu');
	remove_action('justg_do_footer', 'justg_the_footer_open');
	remove_action('justg_do_footer', 'justg_the_footer_content');
	remove_action('justg_do_footer', 'justg_the_footer_close');
    remove_theme_support('widgets-block-editor');
}

if (!function_exists('justg_header_open')) {
	function justg_header_open()
	{
		echo '<header id="wrapper-header">';
		echo '<div id="wrapper-navbar" class="container px-2 px-md-0" itemscope itemtype="http://schema.org/WebSite">';
	}
}
if (!function_exists('justg_header_close')) {
	function justg_header_close()
	{
		echo '</div>';
		echo '</header>';
	}
}

///add action builder part
add_action('justg_header', 'justg_header_toko29');
function justg_header_toko29()
{
	require_once(get_stylesheet_directory() . '/inc/part-header.php');
}
add_action('justg_do_footer', 'justg_footer_toko29');
function justg_footer_toko29()
{
	require_once(get_stylesheet_directory() . '/inc/part-footer.php');
}

add_action('justg_before_header', 'justg_before_wrapper_content');
function justg_before_wrapper_content()
{
    echo '<div class="px-2">';
    echo '<div class="card rounded-0 border-0 p-0 container mx-auto shadow my-2" style="background: #ebebeb;">';
}
add_action('justg_after_footer', 'justg_after_wrapper_content');
function justg_after_wrapper_content()
{
    echo '</div>';
    echo '</div>';
}

if (!function_exists('justg_right_sidebar_check')) {
    /**
     * Right sidebar check
     * 
     */
    function justg_right_sidebar_check()
    {
        $sidebar_pos            = velocitytheme_option('justg_sidebar_position', 'right');
        $pages_sidebar_pos      = velocitytheme_option('justg_pages_sidebar_position');
        $singular_sidebar_pos   = velocitytheme_option('justg_blogs_sidebar_position');
        $archives_sidebar_pos   = velocitytheme_option('justg_archives_sidebar_position');
        $shop_sidebar_pos       = velocitytheme_option('justg_shop_sidebar_position', 'default');

        if ($sidebar_pos === 'disable') {
            return;
        }

        if (is_page() && !in_array($pages_sidebar_pos, array('', 'default'))) {
            $sidebar_pos = $pages_sidebar_pos;
        }

        if (is_singular() && !in_array($singular_sidebar_pos, array('', 'default'))) {
            $sidebar_pos = $singular_sidebar_pos;
        }

        if (is_archive() && !in_array($archives_sidebar_pos, array('', 'default'))) {
            $sidebar_pos = $archives_sidebar_pos;
        }

        if (is_singular('fl-builder-template')) {
            return;
        }

        if ('right' === $sidebar_pos) {
            if (!is_active_sidebar('main-sidebar') && !has_action('justg_before_main_sidebar') && !has_action('justg_after_main_sidebar')) {
                return;
            }

        ?>
            <div class="widget-area right-sidebar col-sm-4 order-3" id="right-sidebar" role="complementary">
                <?php do_action('justg_before_main_sidebar'); ?>
                <?php dynamic_sidebar('main-sidebar'); ?>
                <?php do_action('justg_after_main_sidebar'); ?>
            </div>
            <?php
        }
    }
}

function vd_limit_text($text, $limit)
{
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos   = array_keys($words);
		$text  = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

remove_action('velocitytoko_product_loop', 'velocitytoko_content_product',20);
add_action('velocitytoko_product_loop','velocitytoko29_content_product',30);
function velocitytoko29_content_product($post){
    ?>
    <article <?php post_class('col-md-4 col-6 mb-2'); ?> id="post-<?php the_ID(); ?>">
        <div class="card h-100 card-product shadow-sm border-0 rounded-0 overflow-hidden">
            <?php echo do_shortcode("[thumbnail width='200' height='200' crop='false' upscale='true']"); ?>
            <div class="card-body text-center position-relative pb-5">
				<div class="fw-bold mb-2 color-theme">
					<?php echo do_shortcode("[harga]"); ?>
				</div>
				<a class="d-block mb-2" style="min-height:3rem;" href="<?php echo get_the_permalink(); ?>">
					<?php echo get_the_title(); ?>
				</a>
				<div class="position-absolute end-0 start-0 bottom-0 p-3 text-center">
					<a class="btn btn-sm btn-primary border-theme bg-theme shadow-sm" href="<?php echo get_the_permalink(); ?>">
						Detail
					</a>
					<?php echo do_shortcode("[beli class='btn btn-sm btn-primary border-theme bg-theme shadow-sm']"); ?>
				</div>
            </div>
        </div>
    </article><!-- #post-## -->
    <?php
}
