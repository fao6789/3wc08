<?php
    /*
     * Template Name: Blog*/

    get_header();
?>
<div class="container">
    <div class="row mx-0">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="blog-breadcrumbs">','</p>');} ?>
    </div>
    <div class="row main-place">
        <div class="col-xl-8 mno-padding">
             <h1 ><?php
                 $pizza  = get_the_content();
              $pieces = explode('###',$pizza);
                     
echo $pieces[0]; 

?> </h1>
            <?php
                $query_blog_new = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'order' => 'DESC',
                ));

                if($query_blog_new->have_posts()) : while ($query_blog_new->have_posts()) : $query_blog_new->the_post();
            ?>
            <div class="row">
                <div class="col-xl-7 col-12">
                    <a href="<?php the_permalink(); ?>" title="<?=  the_title();?>">
                        <span class="relative_img">
                            <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
<!--                             <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span> -->
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
                            <h2 class="main-section-title"><?php the_title(); ?></h2>
                            <div class="section-hr"></div>
                            <p class="main-section-text"><?php the_excerpt(); ?></p>
                        </a>

                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif;
            ?>

            <div class="row x4-section">
                <?php
                $query_blog_new = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'order' => 'DESC',
                ));


                $count = 0;

                if($query_blog_new->have_posts()) : while ($query_blog_new->have_posts()) : $query_blog_new->the_post();
                    $count++;
                    if($count > 1){
                        ?>
                        <div class="col-xl-3 col-6 mcustom-padding-r">
                            <a href="<?php the_permalink(); ?>" title="<?= the_title();?>">
                                <span class="relative_img">
                                   <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                                </span>
                                <div class="ab-sanpham up-date">
                                    <p class="day2"><?php echo get_the_date('d'); ?></p>
                                    <p class="month2">Tháng <?php echo get_the_date('m'); ?></p>
                                </div>
                                <p class="second-section-title"><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
                            </a>
                        </div>
                        <?php
                    }
                endwhile;
                endif;
                ?>
            </div>

            <!-- // -->
            <div id="list-post" class="mt-3 blog-archive" > 
                <?php
                $query_blog_new = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 20,
                    'order' => 'DESC',
                ));

                if($query_blog_new->have_posts()) : while ($query_blog_new->have_posts()) : $query_blog_new->the_post();
            ?>
 <div class="row mt-4 pt-1 mb-4">
                        <div class="col-xl-5 text-center">
                             <a href="<?php the_permalink(); ?>" title="<?= the_title()?>">
                            <span class="relative_img">
                               <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                            </span>
                        </a>
                        </div>
                        <div class="col-xl-7 ml-4 ml-xl-0 m-lg-0">
                            <a class="f-black" href="<?php the_permalink(); ?>"><p class="font-weight-bold font-18 mr-5  py-xl-0 py-3 l-height1 no-margin-bt"><?php the_title(); ?></p></a>
                            <h3 class="text-muted font-14 text-justify mr-xl-5 mr-4"><?php the_title(); ?></h3>
                            <p class="font-12 text-muted no-margin-bt"><img style="width: .8rem; vertical-align: text-top;" src="<?php echo get_template_directory_uri(); ?>/assets/images/tintuc/o-clock.png"> <?php echo get_the_date('g:i'); ?>, <?php echo get_the_date('d/m/Y'); ?></p>
                        </div>
                    </div>
                    <div class="dropdown-divider mx-4 adv"></div>
             <?php
                    
                endwhile;
                endif;
                ?>  
            </div>
            <!-- ! -->

            <div id="review-tuvan">
                <?php
                    $terms = get_terms([
                        'taxonomy' => 'category',
                        'hide_empty' => false,
                    ]);
                    $cate_count = 4;
                    foreach ($terms as $term){
                        $cate_count++;
                ?>
                <h2 class="text-uppercase font-weight-bolder text-center text-title"><a href="<?php echo get_home_url(); ?>/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></h2>
                <div class="red-hr mx-auto"></div>
                <div class="catelogy">

                    <div class="wrapper">
                        <div class="owl-carousel o-<?php echo $cate_count; ?> owl-theme">
                            <?php
                            $args = array(
                                'post_type' => 'post', // If permalink like example.com/tag/example-tag, etc.
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category', // Taxonomy, in my case I need default post categories
                                        'field'    => 'slug',
                                        'terms'    => $term->slug, // Your category slug (I have a category 'interior')
                                    ),
                                )
                            );

                            $query_blog_new_cate = new WP_Query($args);

                            if($query_blog_new_cate->have_posts()) : while ($query_blog_new_cate->have_posts()) : $query_blog_new_cate->the_post();
                            ?>
                            <div class="item">
                                <div>
                                    <a href="<?php the_permalink(); ?>" title="<?=  the_title();?>">
                                        <span class="relative_img">
                                           <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>">
                                        </span>
                                        <div class="ab-sanpham up-date-carousel">
                                            <p class="day2"><?php echo get_the_date('d'); ?></p>
                                            <p class="month2">Tháng <?php echo get_the_date('m'); ?></p>
                                        </div>
                                        <p class="second-section-title"><?php the_title(); ?></p>
                                    </a>
                                </div>
                            </div>
                            <?php
                                endwhile;
                                endif;
                            ?>


                        </div>
                        <div class="slider-control custom-nav-btn">
                            <div class="owl-nav">
                                <div class="nxtbtn text-center"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="prebtn text-center"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>


            </div>
           
        </div>
        <!-- aside -->
        <?php get_sidebar(); ?>
    </div>
     <!-- // -->
     <div class="text-bottom-blog">
           <?php
        while ( have_posts() ) :
            the_post();
         $pizza  = get_the_content();
              $pieces = explode('###',$pizza);
                     
echo $pieces[1]; 
        endwhile; // End of the loop.
        ?>
     </div>
  
         <!-- !== -->
</div>
<button onclick="topFunction()" id="toTopBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>
<!-- popup -->
<!-- cám ơn -->
<button id="myBtn">popup cám ơn</button>
<!-- The Modal -->
<div id="myModal" class="modal m-center-modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="tc-absolute">
            <p>Đặt hàng thành công</p>
            <p>Mã đơn hàng: #2312312</p>
            <h5 class="flex-text">Cảm ơn quý khách <br/>đã đặt hàng</h5>
        </div>
        <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/tc.jpg">
    </div>
</div>
<!-- đăng ký -->
<button id="myBtn2">đăng ký</button>
<!-- The Modal -->
<div id="myModal2" class="modal">
    <div class="modal-content bigger">
        <span class="close2">&times;</span>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 m-hidden" style="padding-right: 0;">
                    <img alt="" title="" class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/ttk.png">
                </div>
                <div class="col-xl-6 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <h2 id="" title="" class="text-center text-ttk">Tạo tài khoản</h2>
                            <button class="button-log face f-white mx-0 mb-2"><i style="margin-right: 1rem;" class="fab fa-facebook-f"></i>Tạo mới bằng Facebook</button>
                            <button class="button-log gle f-white mx-0"><i style="margin-right: 1rem; margin-left: -15px;" class="fab fa-google"></i>Tạo mới bằng Google</button>
                            <!-- phân chia -->
                            <div class="row pt-1">
                                <div class="col-5">
                                    <div class="dropdown-divider"></div>
                                </div>
                                <div class="col-2 text-center text-muted">Hoặc</div>
                                <div class="col-5">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                            <form>
                                <p class="text-muted labeled font-12 no-margin-bt">Địa chỉ email</p>
                                <input class="dc-mua" type="text" id="" name="" placeholder="example@gmail.com" required>
                                <p class="text-muted labeled font-12 no-margin-bt">số điện thoại</p>
                                <input class="dc-mua" type="text" id="" name="" placeholder="Số điện thoại" required>
                                <p class="text-muted labeled font-12 no-margin-bt">Mật khẩu</p>
                                <input class="dc-mua" type="password" id="" name="" placeholder="Mật khẩu" required>
                                <p class="text-muted labeled font-12 no-margin-bt">Nhập lại mật khẩu</p>
                                <input class="dc-mua" type="password" id="" name="" placeholder="Nhập lại mật khẩu" required>
                                <button class="custom-dh2 f-white font-weight-bolder">tạo tài khoản mới</button>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-center font-10 m-top">Bằng việc tiếp tục, <a title="" class="close-green" href="#"> bạn đồng ý với điều khoản sử dụng </a> của NAVA</p>
                                    <p class="text-dalatv text-center">Bạn đã là thành viên? <a title="" class="font-weight-bolder close-green" href="#">Đăng nhập</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- đăng nhâp -->
<button id="myBtn3">đăng nhập</button>
<!-- The Modal -->
<div id="myModal3" class="modal">
    <div class="modal-content bigger">
        <span class="close3">&times;</span>
        <div class="row">
            <div class="col-xl-7 bg-white">
                <img alt="" title="" class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/dn.jpg">
            </div>
            <div class="col-xl-5 bg-white">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form>
                            <input class="dc-mua2" type="text" id="" name="" placeholder="Số điện thoại hoặc email" required>
                            <input class="dc-mua2" type="password" id="" name="" placeholder="Mật khẩu của bạn" required>
                            <a href="#" class="close-green font-10">Quên mật khẩu</a>
                            <button class="custom-dh2 f-white font-weight-bolder font-20">đăng nhập</button>
                        </form>
                        <div class="row justify-content-center">
                            <a href="#" class="close-green text-center font-10">Hoặc đăng nhập bằng</a>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <button class="button-log2 face f-white"><i style="margin-right: 1rem;" class="fab fa-facebook-f"></i>Facebook</button>
                            </div>
                            <div class="col-6">
                                <button class="button-log2 gle f-white"><i style="margin-right: 1rem; margin-left: -15px;" class="fab fa-google"></i>Google</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="py-4 font-14 text-center no-margin-bt">Bạn chưa có tài khoản - <a title="" class="font-weight-bolder close-green" href="#">Đăng ký ngay</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>

