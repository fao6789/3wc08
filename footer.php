<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emcos.vn
 */

?>
<style>
    .text-title-aside {
    font-size: 12px;
    font-weight: 500;
}
    .text-title-aside {

    text-transform: inherit;
    

}
	a:not([href]):not([tabindex]) {
		margin: auto;
	}
    #onesignal-bell-container{
        display: none;
    }
    p#breadcrumbs {
    margin: 0;
    padding: 12px;
    width: 100%;
}
    .row.main-place {
    margin: 0;
}
     .breadcrumb_last{
        color: #000;
    }
   .simple_love, .archive #breadcrumbs,.single-be,.page-template .mx-0{
        background: #f0f8ff;
    margin: 0 -15px 20px 0;
    padding-left: 20px;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 0 4px #77777755;
    }
    #mnav-bar-2 .mx-0 {
    background: inherit !important;
    margin: inherit !important;
    padding-left: inherit !important;
    border-radius: inherit !important;
    box-shadow: inherit !important;
}

    .box-image{
        width: 29% !important;
    }
    .icon{
        width: inherit !important;
    }
    .average-rating{display: none;}
    .text-bottom-blog{
        text-align: center;
    }
    .blog-archive .relative_img{
        height: 200px;
        padding-left: 20px;
    }
    .related {
        padding-top: 50px;
    }
    .commentlist .comment_container{
        display: flex;
    }
    .commentlist .comment_container img{
        margin: 20px;
    }
    .commentlist .comment_container .comment-text .star-rating{
        float: none;
    }
	.meta_rating_edit {
    margin-top: 15px;
    margin-bottom: -30px;
}
	 .summary .star-rating{
        float: inherit !important;
    }
    .woocommerce-product-rating{
        display: block;
        margin: auto;
    }
 
    .logo-m-box{
        flex-grow: 1;
        text-align: center;
    }
   nav .nb2-padding{
        display: flex;
    }
    .woocommerce-product-gallery {
        display: block;
    }
    .woocommerce-product-gallery ol{
        display: flex;
    }
    .woocommerce-embed-page .woocommerce-layout__header {
    display: none !important;
    height: 56px;
}
</style>
<?php
do_action('hook_footer');
?>

<?php wp_footer();?>
<script>
      function getval(val){
        document.getElementById('contentcomment').value = val.value;
      }
</script>
     <script type="text/javascript">
            $(document).ready(function(){
    $("#comments, .ttttttttttt, .flex-text").remove();

});
            // window.onload = delWoo();
            //  function delWoo{
            //       var del = document.getElementById("comments");
            //       del.parentNode.removeChildremove();
            //     };
        </script>
       
<a href="tel:18006875" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="left: 0px; bottom: 0px;">
  <div class="suntory-alo-ph-circle"></div>
  <div class="suntory-alo-ph-circle-fill"></div>
  <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
</a>
<div class="regft hidden-lg hidden-md">
    <a href="javascript:void(0)" name="Kem chống nắng dạng thỏi Self Care Sunstick SPF50+ PA++++" link="https://emcos.com.vn/products/kem-chong-nang-dang-thoi-self-care-sunstick-spf50-pa" price="390,000₫" class="contact-us add_to_cart_single"><i class="fa fa-shopping-cart"></i> Mua ngay</a>
</div>
<style>
	.single-product .title_edit_related{
		    position: relative;
		    font-size: 20px;
    font-weight: 700;
	}
	.single-product .title_edit_related:before{
		content: "";
    	bottom: 0;
    	position: absolute;
    	width: 100px;
    	height: 3px;
    	background-color: #2f503d;
	}
    @media (max-width: 1200px){
.form-group {
    display: block;
}
         .lpbtn a {
        width: 100%;
         }
        .hate{
            width: 100% !important;
        }
    }
    .content-text h3 {
    letter-spacing: -0.5px;
   }
    .lpbtn a{
        background-color: transparent;
        width: 219px;
        padding: 0;
        border-radius: 25px;}
    .lpbtn {
        display: flex;
        justify-content: center;
    }
    /* tạm ẩn */
/*     .suntory-alo-phone{
    	display: none !important;
    } */
    .comments-rating{
    	display: none;
    }
.relative_img h4{
    display: none;
}
#nav-bar-1{
    display: none;
}
@media(max-width: 1200px){
     #mnav-bar-1{
        display: none !important;
     }
}
/* hết tạm ẩn */
    #primary #main .entry-header h1{
        display: flex;
        justify-content: center;
        margin: 20px 0px;
    }
    .regft .add_to_cart_single{
        display: none;
    }
    @media(max-width: 1200px){
        .regft{
            display: none;
        }
        .regft .add_to_cart_single{
        display: block;
    }
    .regft .add_to_cart_single{
        height: 1px;
        padding: 0;
    }
    .single-product .regft {
    display: -webkit-flex !important;
    width: 100%;
    height: 47px;
    position: fixed;
    background: rgba(0,0,0,0.4);
    left: 0;
    bottom: 0;
    z-index: 10;
    }
    .single-product .regft a:nth-child(1) {
    margin-right: 10px;
    background-color: #438d02;
    }
    .single-product .regft a {
    flex: 1;
    margin: 5px 0 10px 10px;
    height: 40px;
    line-height: 40px;
    color: #fff;
    text-align: left;
    border-radius: 4px;
    font-size: 15px;
    font-weight: normal;
    text-transform: uppercase;
    background: #438d02;
    font-weight: 600;
    text-align: center;
    }
    .single-product a.contact-us {
    height: 38px;
    text-align: center;
    line-height: 38px;
    background: #fff;
    border: 1px solid #88D3DD;
    border-radius: 3px;
    display: inline-block;
    padding: 0px 15px;
    }
    .single-product a {
    text-decoration: none;
    outline: none;
    color: #232222;
    }
}

#comment_blog .form-control{
    border: 1px solid !important;
    margin: 10px 0;
}
#comment_blog .modal-footer .btn{
   padding: 5px;
}
#comment_blog .form-group input{
    padding: 10px;
    display: block;
    width: 100%;
}
</style>
<?php
$link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
?>
     <?php $abc = $_SERVER[REQUEST_URI];
$test = explode("?", $abc);
if (!empty($test[1])) {
	$cookie_name = 'a';
	$cookie_value = $test[1];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

} else {

}
?>

 <div class="modal" tabindex="-1" role="dialog" id="comment_blog" style="z-index: 9999">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nhập thông tin của bạn</h5>
        <div class="blog-info"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <!--   <span  class="close5">&times;</span> -->
        </button>
      </div>
       <form method="POST" class="form-cmt" role="form">
      <div class="modal-body">
            <div class="form-group">
                 <input class="form-control" type="text" name="entry.1136725218" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Số điện thoại" type="text" name="entry.2117038012">
                <input type="hidden" name="entry.1397215069" value="<?=$link . '?' . $_COOKIE['a'];?>">
                <input type="hidden" value="" id="contentcomment" name="entry.787329197">
            </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-success">Gửi thông tin</button>
      </div>
       </form>
    </div>
  </div>
</div>


    <div id="register_product">
        <div class="insider">
            <div class="modal-content bigger">
                <span class="close5">&times;</span>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 bg-white">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-12">
                                    <div class="row pt-1">
                                        <div class="logo-box">
                                            <img class="w-100" src="http://emcos.vn/wp-content/uploads/2019/08/cropped-logo_opla0.png" alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Emcos Đế chễ mỹ phẩm Hàn Quốc cao cấp">
                                        </div>
                                    </div>
                                    <form>
                                        <p class="text-muted labeled font-12 no-margin-bt">Họ và tên</p>
                                        <input class="dc-mua" type="text" id="ho_va_ten_res" name="" placeholder="Họ và tên của bạn" >
                                        <p class="text-muted labeled font-12 no-margin-bt">số điện thoại</p>
                                        <input class="dc-mua so_dien_thoai_get" type="number"  name="" placeholder="Số điện thoại" >
                                        <p class="text-muted labeled font-12 no-margin-bt">Địa chỉ</p>
                                        <input class="dc-mua" type="text" id="dia_chi_res" name="" placeholder="Địa chỉ nhận hàng" >
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <p class="text-muted labeled font-12 no-margin-bt">Số lượng</p>
                                                <input class="dc-mua" type="number" id="so_luong_res" name="" placeholder="Số lượng sản phẩm" >
                                            </div>
                                            <div class="col-xl-6">
                                                <p class="text-muted labeled font-12 no-margin-bt">Màu sắc</p>
                                                <input class="dc-mua" type="text" id="mau_sac_res" name="" placeholder="Màu sắc sản phẩm" >
                                                <input type="hidden" id="link_res" value="<?=$link . '?' . $_COOKIE['a']?>">
                                            </div>
                                        </div>
                                         <p class="text-muted labeled font-12 no-margin-bt">Mã giảm giá</p>
                                        <input class="dc-mua" type="text" id="ma_giam_gia" name="" placeholder="Mã giảm giá" >


                                        <button type="button" class="custom-dh2 f-white font-weight-bolder">Hoàn Thành</button>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="text-dalatv text-center"><sup>*</sup>Thanh toán khi nhận hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div id="myModal" class="modal m-center-modal order_succes">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
<!--         <div class="tc-absolute">
            <p>Đặt hàng thành công</p>
            <p>Mã đơn hàng: #2312312</p>
            <h5 class="flex-text">Cảm ơn quý khách <br/>đã đặt hàng</h5>
        </div> -->
        <img class="w-100 relative" src="https://emcos.vn/wp-content/uploads/2019/09/emcos-dat-hang-thanh-cong-1.jpg" alt="Đặt hàng thành công">
    </div>
</div>
<?php
if (is_archive()) {
	?>
        <script type="text/javascript">
            function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ".") {
                try {
                    decimalCount = Math.abs(decimalCount);
                    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                    const negativeSign = amount < 0 ? "-" : "";

                    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                    let j = (i.length > 3) ? i.length % 3 : 0;

                    return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
                } catch (e) {
                    console.log(e)
                }
            };

            var slider = document.getElementById("myRange");
            var output = document.getElementById("min-price");
            output.innerHTML = slider.value;

            slider.oninput = function() {
                var price = formatMoney(this.value);
                output.innerHTML = price;
            }
        </script>

        <?php
}
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
    jQuery.validator.addMethod("phoneUK", function(phone_number, element) {
        phone_number = phone_number.replace(/\(|\)|\s+|-/g, "");
        return this.optional(element) || phone_number.length > 9 && phone_number.length < 12 && phone_number.match(/^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/)
    }, "Vui lòng nhập số điện thoại");
    $(".form-cmt").validate({
        rules: {
            "entry.1136725218": {
                required: true,
            },
            "entry.2117038012": {
                required: true,
                phoneUK: true
            },

        },
        messages: {
            "entry.1136725218": {
                required: "* Vui lòng nhập họ tên",
            },
            "entry.2117038012": {
                required: "* Vui lòng nhập số điện thoại",
            },

        },
        submitHandler: function(form) {
            $.ajax({
                url:"https://docs.google.com/forms/u/1/d/e/1FAIpQLSeGJKew5jnSgVCttx5JYFWZRhHMof7_m3ZR79_v46ZCaiYFZQ/formResponse",
                data: $(".form-cmt").serialize(),
                type: "POST",
                dataType: "xml",
                // statusCode: {
                //     0: function() {
                //         $(".form-cmt")[0].reset();
                //         $(location).attr('href', 'http://vedepphunu.vn')
                //     },
                //     200: function() {
                //         $(".form-cmt")[0].reset();
                //         $(location).attr('href', 'http://vedepphunu.vn')
                //     }
                // }
                complete: function(){                       
                            $(".form-cmt").hide();
                            Swal.fire(
                                'Bạn đã bình luận thành công !',
                                'Cảm ơn bạn đã bình luận ',
                                'success'
                            )
                            $(".form-cmt")[0].reset();
                           
                        },
            });
            return false
        }
    });
   
});
</script>

<script type="text/javascript">
   $( "#search-mb" ).click(function() {
    $( "#sidebar" ).addClass( "active2" );
    $( ".overlay2" ).addClass( "active2" ); 
});
</script>
<script type="text/javascript">
    $('.blog-breadcrumbs .breadcrumb_last').wrap('<a href="https://emcos.vn/tin-tuc/">','</a>')
</script>

</body>
</html>
