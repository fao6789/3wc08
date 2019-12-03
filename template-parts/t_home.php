<?php
    /*
     * Template Name: Trang chủ*/

    get_header();

    while (have_posts()) : the_post();
?>
<div class="woocommerce">
<!-- Top thương hiệu -->
<h1 title="EMCOS - MỸ PHẨM HÀN QUỐC CAO CẤP CHÍNH HÃNG TẠI VIỆT NAM" style="display:none;">EMCOS - MỸ PHẨM HÀN QUỐC CAO CẤP CHÍNH HÃNG TẠI VIỆT NAM</h1>
<div id="list-combo">
    <div class="container">
        <h3 class="text-uppercase font-weight-bolder text-title text-center" title="<?php echo get_field('title_sec1'); ?>"><?php echo get_field('title_sec1'); ?></h3>
        <div class="red-hr mx-auto"></div>
        <div class="pb-4"></div>


<div class="owl-carousel owl-theme owl-loaded" id="owl-trademark">
		<div class="owl-stage-outer">
			<div class="owl-stage">
				<?php
                        $list_section_1 = get_field('list_section_1');

                        foreach ($list_section_1 as $item) :
                    ?>
				<div class="owl-item p-1">
					<div class="f-img" >
						<a  href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
						 <div class="relative_img">
                                <!-- <div class="img" style="background: url() no-repeat;" alt="<?php echo $item['title']; ?>"></div> -->
                                <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['title']; ?>">
                                <h4 title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></h4>
                            </div>
                          </a>
					</div>
				</div>
				 <?php endforeach; ?>
			</div>
		</div>
	</div>
        <!-- // -->
              <!--   <div class="row py-xl-3 justify-content-center">
                    <?php
                        $list_section_1 = get_field('list_section_1');

                        foreach ($list_section_1 as $item) :
                    ?>
                    <div class="col-xl-4 col-12">
                        <a class="f-img" href="<?php echo $item['url']; ?>" alt="<?php echo $item['url']; ?>">
                            <div class="relative_img">
                                <div class="img" style="background: url(<?php echo $item['image']['url']; ?>) no-repeat;" alt="icon" title="icon"></div>
                                <h4 title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div> -->
    </div>
</div>
<!-- KM cho khách thân thiết -->
<div id="km-khtt" class="pb-5 m-hidden">
    <div class="container">
        <h3 class="text-uppercase font-weight-bolder text-center text-title" title="<?php echo get_field('title_sec2'); ?>"><?php echo get_field('title_sec2'); ?></h3>
        <div class="red-hr mx-auto"></div>
        <div class="pb-4"></div>
        <div class="row">
            <?php
                $list_section_2 = get_field('list_section_2');

                foreach ($list_section_2 as $item) :
            ?>
            <div class="col-xl-6">
                <a href="<?php echo $item['url']; ?>" title="<?= $item['title']?>" class="relative_img" rel="nofollow">
                   <!--  <div class="img" style="background: url(<?php echo $item['image']['url']; ?>) no-repeat;" title="<?= $item['title']?>" alt="<?= $item['alt']?>" ></div> -->
                    <img src="<?php echo $item['image']['url']; ?>" alt="<?= $item['alt']?>">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- sản phẩm độc quyền  -->
<div id="spdq" >
    <h3 class="text-uppercase font-weight-bolder text-center text-title" title="<?php echo get_field('title3_sec3'); ?>"><?php echo get_field('title3_sec3'); ?></h3>
    <div class="red-hr-mv mx-auto"></div>
    <div class="container">
        <div class="pb-4"></div>
        <ul class="products columns-4">
            <?php
                $ids3 = get_field('list_section_3', false, false);

                $product3 = new WP_Query(array(
                    'post_type'      	=> 'product',
                    'posts_per_page'	=> 4,
                    'post__in'			=> $ids3,
                    'post_status'		=> 'any',
                    'orderby'        	=> 'post__in',
                ));

                if($product3->have_posts()) : while ($product3->have_posts()) : $product3->the_post();
                    do_action( 'woocommerce_shop_loop' );
                    wc_get_template_part( 'content', 'product' );
                endwhile;
                endif;
                wp_reset_query();
            ?>
        </ul>
        <!-- hiện trên mobie -->
        <div class="pc-hidden">
            <a href="https://emcos.vn/son-bl-secret-matt-lipgloss/"><img class="w-100" src="https://emcos.vn/wp-content/uploads/2019/10/0f15d8c792f674a82de7.jpg" title="icon" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot"></a>
        </div>
        <!-- ảnh banner, ẩn trên mobile -->
        <div class="row m-hidden">
            <!-- 2 ảnh  -->
            <?php
                $image_sec41 = get_field('image_sec41');
                $image_sec41 = $image_sec41['url'];
                $link_sec41 = get_field('link_image_sec41');

                $image_sec42 = get_field('image_sec42');
                $image_sec42 = $image_sec42['url'];
                $link_sec42 = get_field('link_image_sec42');

                $image_sec43 = get_field('image_sec43');
                $image_sec43 = $image_sec43['url'];
                $link_sec43 = get_field('link_image_sec43');

                $image_sec44 = get_field('image_sec44');
                $image_sec44 = $image_sec44['url'];
                $link_sec44 = get_field('link_image_sec44');

                $image_sec45 = get_field('image_sec45');
                $image_sec45 = $image_sec45['url'];
                $link_sec45 = get_field('link_image_sec45');
            ?>
            <div class="col-4">
                <div class="row">
                    <a href="<?php echo $link_sec41; ?>" rel="nofollow"><img class="img-custom-banner" src="<?php echo $image_sec41; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Khuyến mãi dành cho khách hàng Emcos"></a>
                </div>
                <div class="row">
                    <a href="<?php echo $link_sec42; ?>" rel="nofollow"><img class="img-custom-banner banner-m-top" src="<?php echo $image_sec42; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Khuyến mãi dành cho khách hàng Emcos"></a>
                </div>
            </div>
            <!-- 1 ảnh -->
            <div class="col-4 no-padding">
                <a href="<?php echo $link_sec43; ?>" rel="nofollow"><img class="w-100" src="<?php echo $image_sec43; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Khuyến mãi dành cho khách hàng Emcos"></a>
            </div>
            <!-- 2 ảnh -->
            <div class="col-4">
                <div class="row justify-content-end">
                    <a href="<?php echo $link_sec44; ?>" rel="nofollow"><img class="img-custom-banner" src="<?php echo $image_sec44; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Khuyến mãi dành cho khách hàng Emcos"></a>
                </div>
                <div class="row justify-content-end">
                    <a href="<?php echo $link_sec45; ?>" rel="nofollow"><img class="img-custom-banner banner-m-top" src="<?php echo $image_sec45; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Khuyến mãi dành cho khách hàng Emcos"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hàng mới về -->
<div id="hmv">
    <h3 class="text-uppercase font-weight-bolder text-center text-title" title="<?php echo get_field('title_sec5'); ?>"><?php echo get_field('title_sec5'); ?></h3>
    <div class="red-hr-mv mx-auto"></div>
    <div class="container">
        <div class="pb-4"></div>
        <ul class="products columns-4">
            <?php
            $ids5 = get_field('list_section_5', false, false);

            $product5 = new WP_Query(array(
                'post_type'      	=> 'product',
                'posts_per_page'	=> 4,
                'post__in'			=> $ids5,
                'post_status'		=> 'any',
                'orderby'        	=> 'post__in',
            ));

            if($product5->have_posts()) : while ($product5->have_posts()) : $product5->the_post();
                do_action( 'woocommerce_shop_loop' );
                wc_get_template_part( 'content', 'product' );
            endwhile;
            endif;
            wp_reset_query();

            ?>
        </ul>
    </div>
</div>
<!-- top bán chạy -->
<div id="tbc">
    <div class="container">
        <h3 class="text-uppercase font-weight-bolder text-center text-title" title="<?php echo get_field('title_sec6'); ?>"><?php echo get_field('title_sec6'); ?></h3>
        <div class="red-hr mx-auto"></div>
        <div class="pb-4"></div>
        <ul class="products columns-4">
            <?php

            $ids6 = get_field('list_section_6', false, false);

            $product6 = new WP_Query(array(
                'post_type'      	=> 'product',
                'posts_per_page'	=> 8,
                'post__in'			=> $ids6,
                'post_status'		=> 'any',
                'orderby'        	=> 'post__in',
            ));

            if($product6->have_posts()) : while ($product6->have_posts()) : $product6->the_post();
                do_action( 'woocommerce_shop_loop' );
                wc_get_template_part( 'content', 'product' );
            endwhile;
            endif;
            wp_reset_query();

            ?>
        </ul>
    </div>
</div>
<!-- sp khuyến mãi -->
<div id="spkm">
    <div class="container">
        <h3 class="text-uppercase font-weight-bolder text-center text-title" title="<?php echo get_field('title_sec7'); ?>"><?php echo get_field('title_sec7'); ?></h3>
        <div class="red-hr mx-auto"></div>
        <div class="pb-4"></div>
        <ul class="products columns-4">
            <?php

            $ids7 = get_field('list_section_7', false, false);

            $product7 = new WP_Query(array(
                'post_type'      	=> 'product',
                'posts_per_page'	=> 4,
                'post__in'			=> $ids7,
                'post_status'		=> 'any',
                'orderby'        	=> 'post__in',
            ));

            if($product7->have_posts()) : while ($product7->have_posts()) : $product7->the_post();
                do_action( 'woocommerce_shop_loop' );
                wc_get_template_part( 'content', 'product' );
            endwhile;
            endif;
            wp_reset_query();

            ?>
        </ul>
    </div>
</div>
<!-- owl carousel phản hồi khách hàng -->
<div id="phkh">
    <div class="container">
        <h3 title="<?php echo get_field('title_sec8'); ?>" class="text-uppercase font-weight-bolder f-white text-center text-title"><?php echo get_field('title_sec8'); ?></h3>
        <div class="pb-4"></div>
        <div class="wrapper">
            <div class="owl-carousel o-1 owl-theme" id="o-1">
                <?php
                    $list_section_8 = get_field('list_section_8');

                    foreach ($list_section_8 as $item) :
                ?>
                <div class="item">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <p class="comment-text"><?php echo $item['content']; ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center comment-area">
                            <img class="u-img2" src="<?php echo $item['image']['url']; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Phản hồi khách hàng">
                            <div class="u-info">
                                <p class="font-weight-bold no-margin-bt font-14 login cuz-l-height"><?php echo $item['name']; ?></p>
                                <p class="font-weight-bold no-margin-bt font-14 login"><?php echo $item['career']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
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
</div>
<!-- Tips and tricks -->
<div id="tat">
    <div class="container">
        <h3 class="text-uppercase font-weight-bolder text-center text-title">beauty tips & tricks</h3>
        <div class="red-hr mx-auto"></div>
        <div class="pb-4"></div>
        <div class="row">
            <?php
                $query_blog = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                ));
                    $list_section_1 = get_field('list_section_1');
                if($query_blog->have_posts()) : while ($query_blog->have_posts()) : $query_blog->the_post();


            ?>
            <div class="col-xl-3 col-6 mcustom-padding-r">
                <a href="<?php the_permalink(); ?>">
                    <div class="boxx">
                        <div class="relative_img">
                            <div class="img" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat;" alt="><?php echo get_the_title(); ?>" title="><?php echo get_the_title(); ?>"></div>
                        </div>
                        <div class="ab-sanpham up-date">
                            <p class="day"><?php echo get_the_date('d'); ?></p>
                            <p class="month">Tháng <?php echo get_the_date('m'); ?></p>
                        </div>
                    </div>
                    <h4 class="the_title" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></h4>
                    <p class="tat-title"><?php the_excerpt(); ?></p>
                </a>
                <div class="row">
                    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="tat-xemthem">Chi tiết</a>
                </div>
            </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>
</div>
<!-- about web -->
<div id="web-des">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="title-web-des">Emcos - mỹ phẩm hàn quốc cao cấp chính hãng tại việt nam</h2>
            <p class="content-web-des"><strong>Mỹ phẩm Emcos</strong> tự hào là nhà phân phối <strong>mỹ phẩm Hàn Quốc chính hãng</strong> của nhiều thương hiệu lớn tại Việt Nam. Chúng tôi cam kết cung cấp cho khách hàng những dòng <strong><a title="mỹ phẩm Hàn Quốc cao cấp" href="https://emcos.vn/">mỹ phẩm Hàn Quốc cao cấp</a></strong>, xuất xứ rõ ràng và luôn cập nhật liên tục những dòng mỹ phẩm Trend của giới trẻ. Mỹ phẩm Hàn Quốc cao cấp, chính hãng được bán tại website chính thức emcos.vn chắc chắn sẽ làm hài lòng mọi khách hàng, ngay cả những người khó tính nhất.</p>
        </div>
    </div>
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
        <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/tc.jpg" title="icon" alt="icon">
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
                    <img alt="" title="" class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/ttk.png" title="icon" alt="icon">
                </div>
                <div class="col-xl-6 bg-white">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-12">
                            <p id="" title="" class="text-center text-ttk">Tạo tài khoản</p>
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
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/dn.jpg" title="icon" alt="icon">
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
</div>
<?php
    endwhile;
    wp_reset_query();
    get_footer();
?>
