<?php
    add_action('hook_footer','func_footer',1);

    function func_footer(){
        ?>
        <!-- Footer -->
        <footer>
            <div class="fixed-bottom" id="fixed-bottom">
                <div class="row justify-content-around">
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <a class="text-center" href="#"><img class="w-25 text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/home-f-bottom.png">
                        </div>
                        <div class="row justify-content-center">
                            <p class="no-margin-bt font-12 l-height1">Trang chủ</p></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <a class="text-center" href="#"><img class="w-25 text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/gh-f-bottom.png">
                        </div>
                        <div class="row justify-content-center">
                            <p class="no-margin-bt font-12 l-height1">Theo dõi ĐH</p></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <a class="text-center" href="#"><img class="w-25 text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/gio-f-bottom.png">
                        </div>
                        <div class="row justify-content-center">
                            <p class="no-margin-bt font-12 l-height1">Giỏ hàng</p></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <a class="text-center" href="#"><img class="w-25 text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/user-f-bottom.png">
                        </div>
                        <div class="row justify-content-center">
                            <p class="no-margin-bt font-12 l-height1">Tài khoản</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="f1">
                <div class="container py-3">
                    <div class="row py-xl-3 mt-xl-3">
                        <div class="col-xl-8 no-gutters">
                            <div class="row py-4 py-xl-0">
                                <div class="col-xl-4 col-6">
                                    <div class="row">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/flogo.jpg">
                                    </div>
                                    <div class="box-fa">
                                        <div class="row justify-content-around">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row justify-content-center m-top">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/boct.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-6">
                                    <p class="font-weight-bold text-uppercase">hỗ trợ khách hàng</p>
                                    <div class="dropdown-divider w-25"></div>
                                    <p class="text-uppercase font-14"><a class="f-white" href="https://emcos.vn/chinh-sach-bao-mat-thong-tin/" rel="nofollow">chính sách bảo mật</a></p>
                                    <p class="text-uppercase font-14"><a class="f-white" href="https://emcos.vn/chinh-sach-van-chuyen/" rel="nofollow">chính sách vận chuyển</a></p>
                                    <p class="text-uppercase font-14"><a class="f-white" href="https://emcos.vn/chinh-sach-quy-dinh-chung/" rel="nofollow">chính sách đổi trả hàng</a></p>
                                </div>
                                <div class="col-xl-4 col-6 py-xl-0 py-lg-0 py-md-0 py-3">
                                    <p class="font-weight-bold text-uppercase">thanh toán</p>
                                    <div class="dropdown-divider w-25"></div>
                                    <p class="text-uppercase font-14"><a class="f-white" >chuyển khoản</a></p>
                                    <p class="text-uppercase font-14"><a class="f-white" >tiền mặt</a></p>
                                    <p class="text-uppercase font-14"><a class="f-white" >đăng ký nhận khuyến mãi</a></p>
                                    <form class="form-inline">
                                        <input class="form-control smaller-input w-100" type="search" placeholder="Nhập số điện thoại" aria-label="Search">
                                        <button class="btn my-2 my-sm-0 smaller-btn border-0" type="submit">Đăng ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-5 offset-xl-1 col-6">
                                    <p class="f-white text-uppercase font-12">quét mã<br/> để tải ứng dụng<br/> ios<br/>(mã qr)</p>
                                    <img class="img-qr my-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-ios.png">
                                </div>
                                <div class="col-xl-4 offset-xl-2 col-6 no-padding">
                                    <p class="f-white text-uppercase font-12">quét mã<br/> để tải ứng dụng<br/> android<br/>(mã qr)</p>
                                    <img class="img-qr my-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-android.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="f2">
                <div class="custom-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-14 text-center m-top no-margin-bt">Công ty TNHH Mỹ phẩm quốc tế Emcos | Người đại điện: Nguyễn Thị Phương | Số ĐKKD 0108224774 do sở KHĐT Tp.Hà Nội cấp ngày 10/04/2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-14 text-center no-margin-bt">Địa chỉ: Tòa nhà VTC online, số 18 Tam Trinh , phường Minh Khai, Quận Hai Bà Trưng, Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-14 text-center">Email: emcos@nevagroup.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="f1m">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <img alt="emcos, đế chế mỹ phẩm hản quốc, mỹ phẩm emcos, mỹ phẩm hàn quốc, mỹ phẩm hàn quốc chính hãng, mỹ phẩm hàn quốc cao cấp, mỹ phẩm hàn quốc cao cấp nhất, mỹ phẩm, mỹ phẩm hàn quốc tốt nhất, mỹ phẩm hàn quốc giá rẻ, mỹ phẩm hàn quốc hà nội, mỹ phẩm hàn quốc tphcm, mỹ phẩm hàn quốc xách tay, mỹ phẩm hàn quốc bình dân, mỹ phẩm hàn quốc nào đang hot" title="Emcos" class="imgaslogobrand-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/images_hf_nemcos/flogo.jpg">
                    </div>
                    <div class="row justify-content-center">
                        <div class="box-fa">
                            <div class="row justify-content-around">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="f-white text-uppercase font-14 m-top">đăng ký nhận thông tin khuyến mãi</p>
                    </div>
                    <div class="row justify-content-center">
                        <form class="form-inline f-form">
                            <input class="form-control smaller-input w-100" type="search" placeholder="Nhập số điện thoại" aria-label="Search">
                            <button class="btn my-2 my-sm-0 smaller-btn border-0" type="submit">Đăng ký</button>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-6 offset-1">
                            <p class="font-weight-bold text-uppercase f-white">hỗ trợ khách hàng</p>
                            <div class="dropdown-divider w-25"></div>
                            <p class="text-uppercase font-10"><a class="f-white" href="https://emcos.vn/chinh-sach-bao-mat-thong-tin/" rel="nofollow">chính sách bảo mật</a></p>
                            <p class="text-uppercase font-10"><a class="f-white" href="https://emcos.vn/chinh-sach-van-chuyen/" rel="nofollow">chính sách vận chuyển</a></p>
                            <p class="text-uppercase font-10"><a class="f-white" href="https://emcos.vn/chinh-sach-quy-dinh-chung/" rel="nofollow">chính sách đổi trả hàng</a></p>
                        </div>
                        <div class="col-5">
                            <p class="font-weight-bold text-uppercase f-white">thanh toán</p>
                            <div class="dropdown-divider w-25"></div>
                            <p class="text-uppercase font-10"><a class="f-white" href="#" rel="nofollow">chuyển khoản</a></p>
                            <p class="text-uppercase font-10"><a class="f-white" href="#" rel="nofollow">tiền mặt</a></p>
                            <!-- <p class="text-uppercase font-10"><a class="f-white" href="#">đăng ký nhận khuyến mãi</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="f2m">
                <div class="custom-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-8 text-center m-top no-margin-bt">Công ty TNHH Mỹ phẩm quốc tế Emcos | Người đại điện: Nguyễn Thị Phương | Số ĐKKD 0108224774 do sở KHĐT Tp.Hà Nội cấp ngày 10/04/2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-8 text-center no-margin-bt">Địa chỉ: Tòa nhà VTC online, số 18 Tam Trinh , phường Minh Khai, Quận Hai Bà Trưng, Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <p class="f-white font-8 text-center">Email: emcos@nevagroup.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="overlay2"></div>
        <?php
    }