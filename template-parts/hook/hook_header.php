<?php
add_action('hook_header', 'func_header', 1);

function func_header() {
	?>
    <!-- Navbar pc -->
    <div id="nav-bar-1">
        <div class="pc">
            
        </div>
    </div>
    <div id="account">
        <div class="container no-padding">
            <div class="row justify-content-end pt-2">
                <div class="row align-items-center mx-0">
                    <div class="dropdown dropdown4">
                        <button class="btn login-hover font-16" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="u-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/PC-1-New_75.gif" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
                            <p class="font-weight-bold no-margin-bt font-14 login name-padding b-right">Nguyễn Nguyễn Nhuễn</p>
                        </button>
                        <div class="dropdown-menu dropdown-menu5" aria-labelledby="dropdownMenuButton">
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Thông tin tài khoản</a>
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Quản lý đơn hàng</a>
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Địa chỉ của tôi</a>
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Mã quà tặng</a>
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Thông báo qua email</a>
                            <a title="" class="font-14 dropdown-item login-dropdown" href="#" title="">Thoát</a>
                        </div>
                    </div>
                    <a class="login" href="#"><p class="font-weight-bold no-margin-bt font-14">Thông báo</p></a>
                    <div class="language row align-items-center mx-0">
                        <a href="#"><img class="flag" src="<?php echo get_template_directory_uri(); ?>/assets/images/f-vn.png" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Emcos"></a>
                        <a href="#"><img class="flag" src="<?php echo get_template_directory_uri(); ?>/assets/images/f-us.png" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Emcos"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fixed-on-scroll">
        <div id="nav-bar-2">
            <div class="container no-padding">
                <div class="row py-2 ml-1 align-content-start">
                    <div class="col-xl-3 no-padding">
                        <div class="row justify-content-center">
                           
                            <?php the_custom_logo();?>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <form method="post" class="form-inline" action="<?php echo esc_url(home_url('/')); ?>tim-kiem">
                            <input class="form-control small-input" style="width: 100%;" name="keyword" id="search" type="text" placeholder="Nhập sản phẩm cần tìm" aria-label="Search">
                            <button class="btn my-2 my-sm-0 small-btn border-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 align-content-start" style="padding-left: 0px;">
                        <div class="row align-items-center justify-content-end">
                            <div class=" col-4 tgdh align-items-center">
                                <div class="dropdown dropdown4">
                                    <button class="btn font-16" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="img-li" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/giao-hang.jpg" alt="Emcos, mỹ phẩm Emcos" title="Theo dõi đơn hàng"><p class="font-14 l-height1 no-margin-bt">Theo dõi đơn hàng</p>
                                    </button>
                                    <!-- <div class="dropdown-menu dropdown-menu4" aria-labelledby="dropdownMenuButton">
                                        <div class="row">
                                            <div class="col-4">
                                                <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/cxn.png" alt="icon" title="icon">
                                                <p class="num-ttgh">1</p>
                                                <p class="text-muted halfrem-margin-bt font-weight-bold font-12 text-center">Chờ xác nhận</p>
                                            </div>
                                            <div class="col-4">
                                                <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/clh.png" alt="icon" title="icon">
                                                <p class="num-ttgh">1</p>
                                                <p class="text-muted halfrem-margin-bt font-weight-bold font-12 text-center">Chờ lấy hàng</p>
                                            </div>
                                            <div class="col-4">
                                                <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/dg.png" alt="icon" title="icon">
                                                <p class="num-ttgh">1</p>
                                                <p class="text-muted halfrem-margin-bt font-weight-bold font-12 text-center">Đang giao</p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class=" col-4 gh align-items-center">
                                <div class="row align-items-center">
                                    <button onclick="showCart()" class="hidden-btn"><p class="num-cart">0</p>
                                        <img class="img-li relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/gio-hang.jpg" alt="Emcos, mỹ phẩm Emcos" title="Giỏ hàng">
                                        <p class="font-14 gh-text l-height1 no-margin-bt">Giỏ hàng</p>
                                    </button>
                                    <!-- nội dung hiển thị ở popup -->
                                    <div id="popup-onclick" style="display: none;">
                                        <div class="row head-popup align-items-center">
                                            <div class="col-xl-4">
                                                <button class="hidden-btn2" onclick="hideCart()"><img alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="icon" class="cus-x" src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-x.png"></button>
                                            </div>
                                            <div class="col-xl-7 ml-xl-3">
                                                <p id="" title="Giỏ hàng" class="font-weight-bold no-margin-bt">Giỏ hàng</p>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider no-margin"></div>
                                        <div class="row">
                                            <div class="col-xl-12 px-3">
                                                <div class="bill">
                                                    
                                                    <!-- đường chia -->
                                                    
                                                    <!-- Hết 1 sp -->
                                                    
                                                    <!-- đường chia -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="dropdown-divider mx-4"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-between px-4 pt-1 align-items-baseline">
                                                       
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <a href="https://emcos.vn/gio-hang"><button class="custom-dh py-2 my-2 mb-5 mx-auto f-white font-weight-bolder font-18 text-uppercase">Xem giỏ hàng của bạn >></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 no-padding">
                                <p class="font-weight-bold no-margin-bt text-right hot-text"> Hotline: <?php echo get_theme_mod('hoteline_header'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nav-bar-3" class="bg-emcos">
            <div class="container no-padding">
                <div class="menu-container justify-items-between">
                    <div class="menu justify-items-between" style="position: relative;">
                        <ul class="nav justify-content-between font-18">
                            <?php
$query_mega = new WP_Query(array(
		'post_type' => 'mega',
		'posts_per_page' => 7,
		'order' => 'asc',
	));
	$count = 0;
	if ($query_mega->have_posts()): while ($query_mega->have_posts()): $query_mega->the_post();
			$count++;
			if ($count == 3 || $count == 4) {
				?>
				                                        <li class="nav-item"><a href="<?php echo get_field('url_mega_menu'); ?>"><?php the_title();?><?php echo get_field('icon_menu'); ?></a>
				                                            <ul class="ul-rela normal-sub2">
				                                                <div class="row">
				                                                    <div class="col-3">
				                                                        <img class="dropdown-img2 mx-auto d-block" src="<?php the_post_thumbnail_url();?>" title="<?php the_title();?>" alt="<?php the_title();?>">
				                                                    </div>
                                                                    <div class="col-9">
                                                                        <div class="row">
    				                                                    <?php
                                                                        	$sub_menu_mega_menu = get_field('sub_menu_mega_menu');
                                                                        			foreach ($sub_menu_mega_menu as $item) {
                                                                        				?>
				                                                        <div class="col-4">
				                                                            <li>
				                                                                <a class="f-black font-weight-bolder li-padding red-line"  href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
				                                                                <ul>
				                                                                    <?php
                                                                                		foreach ($item['sub_menu_small'] as $it) {
                                                                                						?>
				                                                                        <li class=" no-style"><a
				                                                                                    class="pl-4 element2" href="<?php echo $it['url']; ?>"><span
				                                                                                        class="dot"></span><?php echo $it['ten']; ?></a>
				                                                                        </li>
				                                                                        <?php
		}
					?>
				                                                                </ul>
				                                                            </li>
				                                                        </div>

				                                                        <?php
		}
				?>
            </div>
				                                                </div>
                                                                </div>
				                                            </ul>
				                                        </li>
				                                        <?php
		} else {
				?>
				                                        <li class="nav-item">
				                                            <a class="wee" href="<?php echo get_field('url_mega_menu'); ?>"><?php the_title();?><?php echo get_field('icon_menu'); ?></a>
				                                            <?php
		$sub_menu_mega_menu = get_field('sub_menu_mega_menu');

				if ($sub_menu_mega_menu) {
					?>
				                                                <ul class="ul-rela normal-sub">
				                                                    <?php
		foreach ($sub_menu_mega_menu as $item) {
						?>
				                                                        <li class=""><a class="font-weight-bolder pl-2 text-center" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
				                                                        <?php
		}
					?>
				                                                    <img class="dropdown-img" src="<?php the_post_thumbnail_url();?>" title="<?php the_title();?>" alt="<?php the_title();?>">
				                                                    <?php
		?>
				                                                </ul>
				                                                <?php
		}
				?>
				                                        </li>
				                                        <?php
		}
			?>
				                            <?php
	endwhile;
	endif;
	wp_reset_postdata();
	?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar-mobile -->
    <!-- <div id="mnav-bar-1">
        <div class="container-fluid f-white">
            <div class="row">
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/banner-mobile1.jpg">
            </div>
        </div>
    </div> -->
    <div id="mnav-bar-2">
        <div class="container-fluid px-0">
            <nav class="navbar navbar2 navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid nb2-padding justify-content-between align-items-center">
                    <div class="row align-items-center mx-0">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                        </button>
                    </div>
                    <div class="logo-m-box"><a href="/">
                        <img alt="" title="" class="img-as-logobrand" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/flogo.jpg"></a>
                    </div>
                      <button type="button" id="search-mb" class="btn btn-info">
                            <span><i class="fa fa-search" aria-hidden="true"></i></span>
                        </button>
                    <div class="row align-items-center mx-0" >
                        <a href="https://emcos.vn/gio-hang"> <button class="fake-btn btn-notify" onclick="showCart()" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </nav>
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <form method="post" class="form-inline" action="<?php echo get_home_url(); ?>/tim-kiem">
                        <input class="form-control small-input" style="width: 100%;" name="keyword" id="search" type="text" placeholder="Nhập sản phẩm cần tìm" aria-label="Search">
                        <button class="btn my-2 my-sm-0 small-btn border-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <ul class="list-unstyled components">
                    <?php
$query_mega = new WP_Query(array(
		'post_type' => 'mega',
		'posts_per_page' => 7,
		'order' => 'asc',
	));
	$count = 0;
	if ($query_mega->have_posts()): while ($query_mega->have_posts()): $query_mega->the_post();?>
				                        <li class="nav-item active2"><a href="<?php echo get_field('url_mega_menu'); ?>"><?php the_title();?></a>
				                        <?php echo get_field('icon_menu'); ?>
				                        <ul class="ul-rela normal-sub2 list-unstyled collapse show" id="homeSubmenu2">
				                            <?php
		$sub_menu_mega_menu = get_field('sub_menu_mega_menu');
			foreach ($sub_menu_mega_menu as $item) {
				?>
				                                <li class="active2">
				                                    <a class="f-black font-weight-bolder li-padding" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
				                                    <ul class="">
				                                        <?php
		foreach ($item['sub_menu_small'] as $it) {
					?>
				                                            <li class="font-weight-bold no-style"><a
				                                                        class="pl-4 element2" aria-expanded="true" href="<?php echo $it['url']; ?>"><span
				                                                            class="dot"></span><?php echo $it['ten']; ?></a>
				                                            </li>
				                                            <?php
		}
				?>
				                                    </ul>
				                                </li>
				                                <?php
		}
			?>
				                        </ul>
				                    </li>
				                    <?php
	endwhile;
	endif;
	wp_reset_postdata();
	?>
                </ul>
            </nav>
        </div>
    </div>
    <!-- content -->
    <!-- slider pc -->
   <?php if ( !is_home() &&  is_front_page() ) : ?>

    <div id="slider" style="display: block!important;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
            $settings = get_theme_mod('pestex_section_one_services');
	        $count = 0;?>
                 <?php foreach ($settings as $setting): $count++;?>

		                <?php $img_url = wp_get_attachment_url($setting['service_image']);?>
		                <?php
	       if ($count == 1) {
			?>
		                        <div class="carousel-item active">
		                            <a href="<?php echo $setting['service_link']; ?>" rel="nofollow">
		                                <img src="<?php echo $img_url; ?>" width="100%" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
		                            </a>
		                        </div>
		                        <?php
	       } else {
			?>
		                        <div class="carousel-item">
		                            <a href="<?php echo $setting['service_link']; ?>" rel="nofollow">
		                                <img src="<?php echo $img_url; ?>" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" width="100%">
		                            </a>
		                        </div>
	   	                        <?php
	       }
		  ?>

		                <?php endforeach;?>
            </div>
            <a class="carousel-control-prev " data-target="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " data-target="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
     <?php endif; ?>

    <!-- mobile slider -->
    <div id="slider-mobile" style="display: none;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                     <a href="https://emcos.vn/son-moi-han-quoc/" rel="nofollow">
                    <img alt="" title="" alt="" title="" src="https://emcos.vn/wp-content/uploads/2019/10/Artboard-8@4x-100-min.jpg" class="d-block w-100" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
                </div>
                </a>
                <div class="carousel-item">
                     <a href="https://emcos.vn/son-liphip-lip-matte/" rel="nofollow">
                    <img alt="" title="" alt="" title="" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/mobile slide1.jpg" class="d-block w-100" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
                </div>
                </a>
                <div class="carousel-item">
                    <a href="https://emcos.vn/dai-ly/" rel="nofollow">
                    <img alt="" title="" alt="" title="" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/mobile slide2.jpg" class="d-block w-100" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
                </div>
                </a>
                <div class="carousel-item">
                    <a href="https://emcos.vn/cherry-chu-bonny-lipstick-matte/" rel="nofollow">
                    <img alt="" title="" alt="" title="" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/mobile slide3.jpg" class="d-block w-100" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot">
                    </a>
                </div>
            </div>
            <a title="" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a title="" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php
}
?>
