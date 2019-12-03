<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package emcos.vn
 */

get_header();
?>
<style type="text/css">
	p strong{
	text-transform: uppercase;
    color: red;
    font-weight: 900;
	}
	.content-text ul{
		background-color: aliceblue;
    	padding: 1rem 3rem;
	}
	#xemthem{
		margin-bottom: 0;
		font-weight: 900;
		color: red;
    background-color: aliceblue;
    padding: 1rem 1rem 0rem 1rem;
	}
	.comment-notes, .comment-form-comment, label[for="author"], label[for="email"]{
		margin-bottom: 0;
	}
	#comments{
		padding: 3rem;
	}
	.required {
    width: 1px;
    padding-top: 0rem;
    padding-right: .5rem;
	}
	.reply-title{
		display: none;
	}
	.catelogy2 {
    padding-bottom: 20rem;
    margin: 40px;
}
textarea#comment {
	width: 60%;
    padding: 1rem;
    border-radius: 12px;
    border: 3px solid #396935;
}
label{
	color: #2f503d;
	font-weight: 700;
}
label[for="comment"]{
	display: none;
}
.comment-form-comment{
	margin-bottom: 1rem;
}
.content-text h2{
    background-image: url(https://vedepphunu.vn/wp-content/uploads/2019/11/blockquote.png);
    background-repeat: no-repeat;
    padding-left: 70px;
    padding-top: 23px;
    font-size: 20px;
    color: #2F506F ;
    font-style: italic;

	/*background-color: aliceblue;
    font-size: 18px;
    padding: .5rem;
    border: 1px dashed green;*/
}
.content-text h2 strong {
    font-weight: inherit;
}
.content-title{
	text-transform: unset;
}
.content-text h3 {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: -0.2px;
}
ol li{
	list-style-type: none;
}
.avatar{
	margin-right: 1rem;
}
time{
	font-size: 12px;
}
.comment-content p{
	margin-left: 0rem;
}
#reply-title{
	display: none;
}
.comment-body {
	width: 68%;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-bottom: 1rem;
}
.comment-meta{
    border-bottom: 1px solid #ddd;
    padding: 1rem 0 .5rem;
}
.comment-content{
	padding: 1rem 0rem .5rem;
}
.comment-notes{
	font-style: italic;
    padding-bottom: 1rem;
    font-size: 15px;
}
#author, #phone, #email{
    width: 60%;
    padding: .3rem 1rem;
    border-radius: 8px;
    border: 2px solid #396935;
}
.comment-form-phone label{
	margin: 0;
}
.form-submit{
	width: 60%;
}
input[type="submit"]{
	    margin: 0px auto;
    display: block;
}
.reply a{
		    color: black;
    border: 1px solid #9db093;
    padding: .2rem .5rem;
    background-color: #9db093;
    border-radius: 3px;
    box-shadow: 1px 1px 1px grey;
	}
		.says{
		display: none;
	}
	.catelogy2 p{
		 overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
	}
@media(max-width: 580px){
	#comments{
		padding: 0;
	}
	.comment-meta{
		margin-bottom: 1rem;
	}
	.comment-content p {
    margin-left: 0;
	}
	.catelogy2{
		margin: 40px 0;
	}
	.read-more{
		display: none;
	}
	.catelogy2 p{
		line-height: 1.4;
	}
	.bvlq-title{
		font-size: 14px;
	}
	.avatar{
		margin-right: 5%;
	}
	.reply a{
		    color: black;
    border: 1px solid #9db093;
    padding: .2rem .5rem;
    background-color: #9db093;
    border-radius: 3px;
    box-shadow: 1px 1px 1px grey;
	}

	.comment-body{
		width: 100%;
	}
	#author, #phone, #email, textarea#comment{
		width: 100%;
	}
	.form-submit{
		width: 100%;
	}
	.catelogy2 .col-6:last-child{
		margin-top: 170px;
	}
}
.no-margin .form-group .btn-success { display: block;
    margin: 10px auto;
    height: 40px;
    background: #2f503d;
    width: 110px; }
    .more{
        display: block;
    text-align: center;
    }
</style>


		<?php
		while ( have_posts() ) : the_post();
		?>

    <div class="container">
        <div class="row main-place">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="single-be" style="width:100%;"><p id="breadcrumbs">','</p></div>');} ?>
            <!-- main -->
            <div class="col-xl-8 col-12 mno-padding">
                <div class="row">
                    


                    
                    <div class="col-xl-12">
                        <h1 class="content-title"><?php the_title(); ?></h1>
                        <p class="font-12 text-muted no-margin-bt"><img alt="" title="" style="width: .7rem; vertical-align:text-top;" src="<?php echo get_template_directory_uri(); ?>/assets/images/tintuc/g-o-clock.png"> <?php echo get_the_date('g:i'); ?>, <?php echo get_the_date('d/m/Y'); ?></p>
                        <div class="content-divider"></div>
                        <div class="content-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- aside -->
            <?php get_sidebar(); ?>
        </div>
        <!-- nhận xét -->
        <p id="" title="" class="text-uppercase text-center mt-3 h-transform cus-head-b font-weight-bold">Bình luận</p>
        <div class="dropdown-divider justify-content-end style-line no-margin" style="height: 150px;">
            <div class="form-group ">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid" onkeyup="getval(this)"></textarea>
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comment_blog" onkeyup="getval(this)">Gửi</button>
          </div>
        </div>
        <!--<i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>-->
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        <div class="row">
            <div class="col-xl-12">
                <div id="bvccd">
                    <h3 class="text-uppercase font-weight-bolder text-center text-title">bài viết cùng chủ đề</h3>
                    <div class="red-hr mx-auto"></div>
                    <div class="catelogy2">
                        <div class="row justify-content-between">
                            <?php
                                $query_args = array(

                                    'category__in'   => $cat_ids,
                                    'post_type'      => $current_post_type,
                                    'post_not_in'    => array($post_id),
                                    'posts_per_page'  => '4'


                                );

                                $related_cats_post = new WP_Query( $query_args );

                                if($related_cats_post->have_posts()): while($related_cats_post->have_posts()): $related_cats_post->the_post();
                            ?>
                            <div class="col-xl-3 col-6 mcustom-padding-r">
                                <a href="<?php the_permalink(); ?>" title="<?= the_title()?>">
                                    <span class="relative_img">
                                        <!-- <span class="img" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></span> -->
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?=the_title()?>">
                                    </span>
                                    <div class="ab-sanpham up-date">
                                        <p class="day2"><?php echo get_the_date('d'); ?></p>
                                        <p class="month2">Tháng <?php echo get_the_date('m'); ?></p>
                                    </div>
                                    <p class="bvlq-title"><?php the_title(); ?></p>
                                    <p class="bvlq-text"><?php the_excerpt(); ?></p>
                                    <div class="more">
                                        <a href="<?php the_permalink(); ?>" class="read-more">Chi tiết</a>
                                    </div>
                                    
                                </a>
                            </div>
                            <?php
                                endwhile;
                                // Restore original Post Data
                                wp_reset_postdata();
                                endif;
                             ?>
                        </div>
                    </div>
                </div>
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
        endwhile; // End of the loop.
get_footer();
