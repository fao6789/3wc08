<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emcos.vn
 */

get_header();
?>
    <div class="container">
        <div class="row mx-0">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="blog-breadcrumbs">','</p>');} ?>
    </div>
        <div class="row main-place">
            <div class="col-xl-8 col-12">
                <div id="list-post" class="mt-3">
                    <?php
                        if(have_posts()) : while (have_posts()) : the_post();
                            $count++;
                            if($count == 1){
                                ?>
                                 <div class="row">
                <div class="col-xl-7 col-12">
                    <a href="<?php the_permalink(); ?>" title="<?= the_title()?>">
                        <span class="relative_img">
                            <!-- <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span> -->
                             <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                        </span>
                        <div class="ab-sanpham up-date">
                            <p class="day"><?php echo get_the_date('d'); ?></p>
                            <p class="month">Tháng <?php echo get_the_date('m'); ?></p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="main-section-text">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="main-section-title"><?php the_title(); ?></h3>
                            <div class="section-hr"></div>
                            <p class="main-section-text"><?php the_excerpt(); ?></p>
                        </a>

                    </div>
                </div>
            </div>
                                <?php

}


                            if ($count >1) {
                               
                           
                    ?>
                    <div class="row mt-4 pt-1 mb-4">
                        <div class="col-xl-5 text-center">
                             <a href="<?php the_permalink(); ?>" title="<?= the_title()?>">
                            <span class="relative_img">
                                 
                                      <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                        </span>
                            </a>
                              <!--   <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span> -->
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
                     }
                        endwhile;
                        endif;
                    ?>

                </div>
                <!-- phân trang -->
                <div class="row py-5 mx-0 d-flex justify-content-end">
                    <div class="pagi-nation mx-auto mx-md-0 row justify-content-between font-12">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
                            'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
                        ) );
                        ?>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>


<?php

get_footer();
