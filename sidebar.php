<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emcos.vn
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!--<aside id="secondary" class="widget-area">
	<?php /*dynamic_sidebar( 'sidebar-1' ); */?>
</aside> #secondary -->


<div class="col-xl-4 m-hidden">
    <div class="row">
        <div class="col-xl-10 offset-xl-2">
            <p class="aside-title">Tìm kiếm</p>
            <form class="form-inline" method="post" action="<?php echo home_url('/'); ?>tim-kiem">
                <input class="form-control smaller-input w-100" name="post_val" type="text" placeholder="Tìm kiếm" aria-label="Search">
                <button type="submit" class="btn my-2 my-sm-0 sidebar-btn border-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <!--<p class="aside-title">Nổi bật 24h</p>
            <a href="#">
                <div class="aside-picture">
                    <img class="w-100" src="<?php /*echo get_template_directory_uri(); */?>/assets/images/images_hf_nemcos/16.gif">
                    <p class="aside-picture-text">son kem hàn quốc nào đẹp và được ưa chuộng nhất hiện nay</p>
                </div>
            </a>-->

            <?php  dynamic_sidebar('sidebar-2')?>
            <p class="aside-title">Tin tức nổi bật</p>
            <?php
            $args  = array(
                'post_type'      => 'post',
                'posts_per_page' => 8,
                'post__not_in'   => array( get_the_ID() ),
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish',
            );
            $the_query = new WP_Query( $args );
            $count = 0;
            if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
              
                    ?>
                    <a href="<?php the_permalink(); ?>" title="<?= the_title()?>">
                        <div class="row single-title">
                            <div class="col-6 no-padding-r">
                                <span class="relative_img">
                                    <!-- <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span> -->
                                    <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                                </span>
                            </div>
                            <div class="col-6">
                                
                                <p class="text-title-aside"><?php the_title(); ?></p>
                            </div>
                        </div>
                    </a>
        
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>
</div>

<?php //dynamic_sidebar( 'sidebar-1' ); ?>