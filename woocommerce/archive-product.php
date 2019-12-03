<?php

/**

 * The Template for displaying product archives, including the main shop page which is a post type archive

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see https://docs.woocommerce.com/document/template-structure/

 * @package WooCommerce/Templates

 * @version 3.4.0

 */

defined('ABSPATH') || exit;

get_header('shop');

?>



    <!-- content -->

    <div class="container">

        <div class="row mx-0">

            <?php if (function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<p class="simple_love" id="breadcrumbs">', '</p>');}?>

        </div>

    </div>



    <!-- bảng chọn lọc -->

    <div id="choose-panel">

        <div class="container">

            <div class="row">

                <div class="col-xl-8">

                    <div class="row">

                        <div class="col-3">

                            <p class="first-column">Thương hiệu</p>

<!--                            <p class="first-column">Sản phẩm</p>-->

                            <p class="first-column">Màu sắc</p>

                        </div>

                        <div class="col-9">

                            <div class="row align-items-baseline justify-content-between checkbox-panel">

                                <div class="form-group">

                                    <a href="https://emcos.vn/cellnco">

                                        <input type="checkbox" name="cellnco">

                                        <label for="product1-1">CELLNCO</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/liphip">

                                        <input type="checkbox" name="liphip">

                                        <label for="product1-1">LIPHIP</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/coringco">

                                        <input type="checkbox" name="coringco">

                                        <label for="product1-1">CORINGCO</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/bl-secret">

                                        <input type="checkbox" name="secret">

                                        <label for="product1-1">BL SECRET</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/lohajin">

                                        <input type="checkbox" name="cellnco">

                                        <label for="product1-1">LOHAJIN</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/merbliss">

                                        <input type="checkbox" name="merbliss">

                                        <label for="product1-1">MERBLISS</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/koelcia">

                                        <input type="checkbox" name="koelcia">

                                        <label for="product1-1">KOELCIA</label>

                                    </a>

                                </div>

                                <div class="form-group">

                                    <a href="https://emcos.vn/bellca">

                                        <input type="checkbox" name="bellca">

                                        <label for="product1-1">BELLCA</label>

                                    </a>

                                </div>

                            </div>

                            <!--<div class="row align-items-baseline justify-content-between checkbox-panel">

                                <div class="form-group">

                                    <input type="checkbox" id="product2-1">

                                    <label for="product2-1">Son thỏi</label>

                                </div>

                                <div class="form-group">

                                    <input type="checkbox" id="product2-2">

                                    <label for="product2-2">Son kem/son tint</label>

                                </div>

                                <div class="form-group">

                                    <input type="checkbox" id="product2-3">

                                    <label for="product2-3">Son lì có dưỡng</label>

                                </div>

                            </div>-->





                            <div class="row align-items-baseline justify-content-between checkbox-panel">

                            <?php

$color = get_terms([

	'taxonomy' => 'pa_color',

	'hide_empty' => false,

]);

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

?>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-12">

                    <div class="row justify-content-end">

                        <div class="col-xl-1">

                            <p class="font-weight-bold">Giá:</p>

                        </div>

                        <div class="col-xl-10">

                            <div class="slidecontainer">

                                <input type="range" min="0" max="5000000" step="10000" value="0" class="slider" id="myRange">

                                <div class="row mx-0 justify-content-between">

                                    <p class="font-weight-bold"><span id="min-price"></span>đ</p>

                                    <p class="font-weight-bold">5.000.000đ</p>

                                </div>

                                <?php

$escaped_url = get_permalink();
$cate = get_queried_object();
$cateID = $cate->term_id;
$link = get_term_link($cateID, 'product_cat');
?>

                                <div class="row justify-content-center url_filter_price" data-url="<?=$link?>">

                                    <a class="change_link_filter_price" href="<?=$link?>" class="filter-btn">LỌC</a>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row justify-content-between">

                        <div class="col-xl-11 offset-xl-1">

                            <div class="group-sortby">

                                <div class="row">

                                    <div class="col-7">

                                        <p class="order-by">Sắp xếp theo:</p>

                                    </div>

                                    <div class="col-5">

                                        <p class="order-by">Hiển thị:</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>

        <!-- Danh mục sản phẩm -->

        <div id="dmsp">

            <div class="container">

                <h1 class="text-uppercase font-weight-bolder text-title text-center" title="<?php the_archive_title();?>"><?php the_archive_title();?></h1>

                <div class="red-hr mx-auto"></div>

                <div class="row mx-0">

                    <div class="text-dl"><?php

the_archive_description('<div class="taxonomy-description">', '</div>');

?>

                </div>

                <div class="row content_product_edit">

                    <?php

do_action('woocommerce_before_shop_loop');

woocommerce_product_loop_start();

if (wc_get_loop_prop('total')) {

	while (have_posts()) {

		the_post();

		/**

		 * Hook: woocommerce_shop_loop.

		 *

		 * @hooked WC_Structured_Data::generate_product_data() - 10

		 */

		do_action('woocommerce_shop_loop');

		wc_get_template_part('content', 'product');

	}

}

woocommerce_product_loop_end();

/**

 * Hook: woocommerce_after_shop_loop.

 *

 * @hooked woocommerce_pagination - 10

 */

do_action('woocommerce_after_shop_loop');

?>



                </div>

            </div>



            <div class="des_dm_edit">

                <?php

$term = get_queried_object();

// vars

echo $content = get_field('mieu_ta_dm', $term);

?>

            </div>



        </div>

        </div>



    <?php //get_sidebar(); ?>

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

                    <h5 class="flex-text" title="Cảm ơn quý khách">Cảm ơn quý khách <br/>đã đặt hàng</h5>

                </div>

                <img class="w-100 relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/tc.jpg" alt="icon" title="icon">

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

                            <img alt="" title="" class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/ttk.png" alt="icon" title="icon">

                        </div>

                        <div class="col-xl-6 bg-white">

                            <div class="row justify-content-center">

                                <div class="col-xl-10 col-12">

                                    <p id="" title="Tạo tài khoản" class="text-center text-ttk">Tạo tài khoản</p>

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

                        <img alt="" title="" class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/dn.jpg" alt="icon" title="icon">

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

get_footer('shop');
