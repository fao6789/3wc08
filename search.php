<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package emcos.vn
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <div class="container">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Tìm kiếm từ khóa: %s', 'emcos-vn' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
                </div>
			</header><!-- .page-header -->

            <div class="woocommerce">
                <div class="container">
                    <ul class="products">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

                do_action( 'woocommerce_shop_loop' );

                wc_get_template_part( 'content', 'product' );

			endwhile;

            ?>

                    </ul>
                </div>
            </div>
            <?php

		else :

            ?>
            <div class="container">
                <p>Dữ liệu trống !</p>
                <h3>Tìm kiếm : </h3>
                <form method="get" class="search_frm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input class="form-control small-input" style="width: 100%;" name="s" id="search" type="search" placeholder="Nhập sản phẩm cần tìm" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <?php

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
