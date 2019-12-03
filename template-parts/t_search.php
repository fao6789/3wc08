<?php
    /*
     * Template Name: Search*/

    get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
            $keyword = $_POST['keyword'];
            $keyword_post = $_POST['post_val'];

            if(isset($keyword)){
                $key = $keyword;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => 'product',
                    'order' => 'DESC',
                    's' => $key,
                    'post_status' => 'publish',
                    'posts_per_page' => 12
                );

            }elseif(isset($keyword_post)){
                $key = $keyword_post;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    's' => $keyword_post,
                    'post_status' => 'publish',
                    'posts_per_page' => 12
                );


            }

            $query_search = new WP_Query($args);
        ?>

        <?php if ( $query_search->have_posts() ) : ?>

            <header class="page-header">
                <div class="container">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Tìm kiếm từ khóa: %s', 'emcos-vn' ), '<span>' .$key . '</span>' );
                        ?>
                    </h1>
                </div>
            </header><!-- .page-header -->

            <div class="woocommerce">
                <div class="container">
                    <?php
                        if(isset($keyword)) :
                    ?>
                    <ul class="products">
                        <?php
                        /* Start the Loop */
                        while ( $query_search->have_posts() ) :
                            $query_search->the_post();

                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );

                        endwhile;
                        wp_reset_postdata();

                        /*global $query_search;
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $query_search->max_num_pages
                        ) );*/
                        ?>

                    </ul>
                    <?php
                        endif;
                    ?>
                    <?php
                        if(isset($keyword_post)) :
                    ?>
                    <div id="list-post" class="mt-3">
                        <?php
                         while ($query_search->have_posts()) : $query_search->the_post();
                            ?>
                            <div class="row mt-4 pt-1 mb-4">
                                <div class="col-xl-5 text-center">
                            <span class="relative_img">
                                <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span>
                            </span>
                                </div>
                                <div class="col-xl-7 ml-4 ml-xl-0 m-lg-0">
                                    <a class="f-black" href="<?php the_permalink(); ?>"><p class="font-weight-bold font-18 mr-5  py-xl-0 py-3 l-height1 no-margin-bt"><?php the_title(); ?></p></a>
                                    <p class="text-muted font-14 text-justify mr-xl-5 mr-4"><?php the_title(); ?></p>
                                    <p class="font-12 text-muted no-margin-bt"><img style="width: .8rem; vertical-align: text-top;" src="<?php echo get_template_directory_uri(); ?>/assets/images/tintuc/o-clock.png"> <?php echo get_the_date('g:i'); ?>, <?php echo get_the_date('d/m/Y'); ?></p>
                                </div>
                            </div>
                            <div class="dropdown-divider mx-4 adv"></div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <?php
                        endif;

                        /*global $query_search;
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $query_search->max_num_pages
                        ) );*/
                    ?>
                </div>
            </div>
        <?php

        else :

            ?>
            <div class="container">
                <p>Dữ liệu trống !</p>
                <h3>Tìm kiếm : </h3>
                <form method="post" class="search_frm" action="<?php echo esc_url( home_url( '/' ) ); ?>tim-kiem">
                    <input class="form-control small-input" style="width: 100%;" name="keyword" id="search" type="text" placeholder="Nhập sản phẩm cần tìm" aria-label="Search">
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
?>
