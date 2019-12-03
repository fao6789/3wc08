<?php

    /*

     * Template Name: Liên hệ*/



    get_header();

?>



<!-- content -->

<div class="container">

    <div class="row mx-0">

        <p class="breadcumm">Trang chủ > <span class="current">Liên hệ</span></p>

    </div>

</div>

<!-- Danh mục sản phẩm -->

<div id="dmsp">

    <div class="container">

        <h1 class="text-uppercase font-weight-bolder text-title text-center">thông tin liên hệ</h1>

        <div class="red-hr mx-auto"></div>

        <div class="row">

            <div class="col-xl-5">

                <h5 class="text-uppercase font-weight-bolder small-text-title">công ty tnhh mỹ phẩm emcos</h5>

                <div class="red-hr"></div>

                <div>

                    <p class="first-text">Quý khách có 2 cách thức để mua hàng:</p>

                    <p class="first-text">- Đến mua trực tiếp tại hệ thống chi nhánh của mỹ phẩm

                        Emcos:</p>

                </div>

                <p class="second-text">- Showroom 1 : Tòa nhà VTC Online - số 18 Tam Trinh - Phường Minh Khai - Quận Hai Bà Trưng - Hà Nội</p>

                <p class="first-text">- Mua hàng trực tuyến tại:</p>

                <p class="second-text">- Website: Emcos.vn</p>

                <p class="second-text">- Hotline: 18006875</p>

                <p class="second-text">- Fanpage: .</p>



            </div>

            <div class="col-xl-6 offset-xl-1">

                <form>

                    <h5 class="text-uppercase font-weight-bolder small-text-title">liên hệ</h5>

                    <div class="red-hr"></div>

                    <div class="row mx-0 justify-content-between">

                        <div class="input-in-row">

                            <label class="label-comment" for="name">Tên<span class="required">*</span></label>

                            <input class="input-comment" type="text" name="name" id="name">

                        </div>

                        <div class="input-in-row">

                            <label class="label-comment" for="email">Email<span class="required">*</span></label>

                            <input class="input-comment" type="text" name="email" id="email">

                        </div>

                        <div class="input-in-row">

                            <label class="label-comment" for="phone">Phone<span class="required">*</span></label>

                            <input class="input-comment" type="text" name="phone" id="phone">

                        </div>

                    </div>

                    <div class="row mx-0">

                        <div class="tara-in-row">

                            <label class="label-comment" for="comment">Nội dung</label>

                            <textarea class="tara-comment" id="comment"></textarea>

                        </div>

                    </div>

                    <div class="row mx-0">

                        <button type="button" class="send-comment">GỬI</button>

                    </div>

                </form>

            </div>

        </div>

        <div class="row">

            <div class="col-xl-12">

                <h5 class="text-uppercase font-weight-bolder small-text-title">bản đồ</h5>

                <div class="red-hr"></div>

            </div>

        </div>

        <div class="row justify-content-center my-4 m-hidden">

            <div class="col-xl-12">

                <div class="mapouter"><div class="gmap_canvas"><iframe width="1110" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=18%20tam%20trinh&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">best wordpress themes</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:1110px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1110px;}</style></div>

            </div>

        </div>

        <div class="row justify-content-center my-4 pc-hidden">

            <div class="col-xl-12">

                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=18%20tam%20trinh&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">best wordpress themes</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>

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

        <img class="w-100 relative" src="images/images_hf_nemcos/tc.jpg">

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

                    <img alt="" title="" class="w-100" src="images/images_hf_nemcos/ttk.png">

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

                <img alt="" title="" class="w-100" src="images/images_hf_nemcos/dn.jpg">

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

