$(document).ready(function () {







    $(document).on('click','.slt_color_product li', function(){

        $('.slt_color_product li').removeClass('active');

        $(this).addClass('active');

    });



    $("select#pa_color option").map(function(index,val) {

        if(index >= 1){

            var val_color = $(this).val();



            $('ul.slt_color_product li').each(function(i, items_list){

                var colorName = $(this).attr('data-name');



                if(val_color == colorName){

                    $(this).addClass('ac');

                }else{



                }



            });

        }

    }).get();



    $('#register_product .close5').on('click', function () {

       $('#register_product').fadeToggle();

        $('#register_product').removeClass('ac');

    });



    $('.add_to_cart_single').on('click', function () {

        $('#register_product').toggleClass('ac');

    });



    $('.slt_color_product li.ac').on('click', function () {

        var nameColor = $(this).attr('data-name');



        $(document).find('.woocommerce div.product form.cart .variations select').val(nameColor).trigger('change');;

    });



    $('.single-product .view_product').on('click', function () {

        $('#register_product').fadeIn();



        return false;

    });



    $('.page-template-t_lienhe .send-comment').on('click', function(){

        var name = $('#name').val();

        var email = $('#email').val();

        var phone = $('#phone').val();

        var content = $('#comment').val();



        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;



        var script_url = "https://script.google.com/a/nevagroup.vn/macros/s/AKfycbz4gO-AvKO6oNgkqbZkAL_Jf7rq-qmgDv3c4XhJbwWw8-vKZrs/exec";



        if(name == ""){

            alert('Trường tên bị trống !');

        }else if( !emailReg.test( email ) ) {

            alert('Dữ liệu không phải là email !');

        }else if(email == ""){

            alert('Trường email bị trống !');

        }else if(phone == ""){

            alert('Trường phone bị trống !');

        }else{

            $('#name').val('');

            $('#email').val('');

            $('#phone').val('');

            $('#comment').val('');



            var url = script_url+"?callback=ctrlq&name="+name+"&email="+email+"&phone="+phone+"&content="+content+"&action=insert";

            $.ajax({

                crossDomain: true,

                url: url ,

                method: "GET",

                dataType: "jsonp",

            });



            $('.order_succes').fadeIn();



            $('.order_succes .tc-absolute p').text('Gửi liên hệ thành công !');

            $('.order_succes .tc-absolute h5').html('Cảm ơn quý khách </br> đã gửi liên hệ');

        }

    });





    $('.page-template-t_daily .custom-dh').on('click', function () {

        var ten = $('#ten').val();

        var dt = $('#dt').val();

        var email = $('#email').val();



        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;



        var script_url = "https://script.google.com/a/nevagroup.vn/macros/s/AKfycbyDI4Zi-h-CYRJX--OxOXk7LYqfElmKGdak-s0x_4mbH1HPuJc/exec";



        if(ten == ""){

            alert('Trường tên bị trống !');

        }else if( !emailReg.test( email ) ) {

            alert('Dữ liệu không phải là email !');

        }else if(email == ""){

            alert('Trường email bị trống !');

        }else if(dt == ""){

            alert('Trường phone bị trống !');

        }else{

            $('#ten').val('');

            $('#dt').val('');

            $('#email').val('');

            var url = script_url+"?callback=ctrlq&ten="+ten+"&email="+email+"&sdt="+dt+"&action=insert";

            $.ajax({

                crossDomain: true,

                url: url ,

                method: "GET",

                dataType: "jsonp",

            });



            $('.order_succes').fadeIn();



            $('.order_succes .tc-absolute p').text('Gửi đăng ký đại lý thành công !');

            $('.order_succes .tc-absolute h5').html('Cảm ơn quý khách </br> đã gửi đăng ký');

        }

    });







    function getDateTime() {

        var now     = new Date();

        var year    = now.getFullYear();

        var month   = now.getMonth()+1;

        var day     = now.getDate();

        var hour    = now.getHours();

        var minute  = now.getMinutes();

        var second  = now.getSeconds();

        if(month.toString().length == 1) {

            month = '0'+month;

        }

        if(day.toString().length == 1) {

            day = '0'+day;

        }

        if(hour.toString().length == 1) {

            hour = '0'+hour;

        }

        if(minute.toString().length == 1) {

            minute = '0'+minute;

        }

        if(second.toString().length == 1) {

            second = '0'+second;

        }

        var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;

        return dateTime;

    }



    $('.close').on('click', function () {

        $('.order_succes').hide();

    });



    // example usage: realtime clock



    $('#register_product button.custom-dh2.f-white.font-weight-bolder').on('click', function () {



        var script_url = "https://script.google.com/macros/s/AKfycby4Fg8oJ7xTHDMsX9sjimBw23bu6IkWpYveI5gyNZEA2hZmEU2p/exec";

        var ho_va_ten_res = $('#ho_va_ten_res').val();

        var dt = $('input.dc-mua.so_dien_thoai_get').val();

        var dia_chi_res = $('#dia_chi_res').val();

        var so_luong_res = $('#so_luong_res').val();

        var mau_sac_res = $('#mau_sac_res').val();

        var link_res = $('#link_res').val();

        var ma_giam_gia= $('#ma_giam_gia').val();



        if(ho_va_ten_res == ""){

            alert('Họ và tên trống !');

        }else if(dt == ""){

            alert('Số điện thoại trống !');

        }else{

            var url = script_url+"?callback=ctrlq&ho_va_ten="+ho_va_ten_res+"&so_dien_thoai="+dt+"&dia_chi="+dia_chi_res+"&so_luong="+so_luong_res+"&mau_sac="+mau_sac_res+"&thoi_gian="+getDateTime()+"&link="+link_res+"&ma_giam_gia="+ma_giam_gia+"&action=insert";

            $.ajax({

                crossDomain: true,

                url: url ,

                method: "GET",

                dataType: "jsonp",

            });



            $('.order_succes').fadeIn();



            $('#register_product.ac').removeClass('ac');



            $('#ho_va_ten_res').val('');

            $('input.dc-mua.so_dien_thoai_get').val('');

            $('#dia_chi_res').val('');

            $('#so_luong_res').val('');

            $('#mau_sac_res').val('');

            $('#ma_giam_gia').val();



        }







        return false;

    });









});



//document.getElementById("comment").setAttribute("placeholder", "viết bình luận của bạn tại đây");
$('#owl-trademark').owlCarousel({

    loop:true,

    margin:10,

    nav:false,

    dots:true,

    autoplay:true,

    autoplayTimeout:3000,

    autoplayHoverPause:true,

    // lazyload:false,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:1

        },

        628:{

            items:3

        },

        1000:{

            items:3

        }

    }
    });

$('.o-5').owlCarousel({

    loop:true,

    margin:10,

    nav:false,

    dots:true,

    autoplay:false,

    autoplayTimeout:3000,

    autoplayHoverPause:true,

    lazyload:false,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:1

        },

        628:{

            items:3

        },

        1000:{

            items:3

        }

    }



});

$('.o-6').owlCarousel({

    loop:true,

    margin:10,

    nav:false,

    dots:true,

    autoplay:true,

    autoplayTimeout:3000,

    autoplayHoverPause:true,

    lazyload:true,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:1

        },

        628:{

            items:3

        },

        1000:{

            items:3

        }

    }



});





$('#o-1').owlCarousel({

   	loop:true,

    margin:10,

    nav:true,

    dots:false,

    lazyload:true,
     autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:1

        },

        600:{

            items:1

        },

        1000:{

            items:1

        }

    }



});

$('.o-2').owlCarousel({

    loop:true,

    margin:0,

    nav:false,

    dots:false,

    lazyload:true,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:2

        },

        600:{

            items:2

        },

        1000:{

            items:3

        }

    }



})

$('.o-3').owlCarousel({

    loop:true,

    margin:0,

    nav:false,

    dots:true,

    lazyload:true,

    responsive:{

        0:{

            items:1

        },

        200:{

            items:1

        },

        600:{

            items:1

        },

        1000:{

            items:1

        }

    }



})

$(".owl-carousel").owlCarousel({

    // you can use jQuery selector

    navText: [$('.am-next'),$('.am-prev')]



});

$('#carouselExampleIndicators').carousel({

  interval: 5000

});

var owl = $('.owl-carousel');

owl.owlCarousel();

// Go to the next item

$('.nxtbtn').click(function() {

    owl.trigger('next.owl.carousel');

})

$('.nxtbtn2').click(function() {

    owl.trigger('next.owl.carousel');

})

// Go to the previous item

$('.prebtn').click(function() {

    // With optional speed parameter

    // Parameters has to be in square bracket '[]'

    owl.trigger('prev.owl.carousel', [300]);

})

$('.prebtn2').click(function() {

    // With optional speed parameter

    // Parameters has to be in square bracket '[]'

    owl.trigger('prev.owl.carousel', [300]);

})

$(function () {

  $('[data-toggle="popover"]').popover()

})

function showCart() {

    var y = document.getElementById('body');

    var x = document.getElementById("popup-onclick");

    if (x.style.display === "none") {

    x.style.display = "block";

  } else {

    x.style.display = "none";

  }

}

function hideCart(){

    var x = document.getElementById("popup-onclick");

    x.style.display = 'none';

}

//updown ở popup

function up(){

  var value = parseInt(document.getElementById('s-luong').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong').value = value;

}

function down(){

  var value = parseInt(document.getElementById('s-luong').value);

  value--;

  document.getElementById('s-luong').value = value;

}

function up3(){

  var value = parseInt(document.getElementById('s-luong3').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong3').value = value;

}

function down3(){

  var value = parseInt(document.getElementById('s-luong4').value);

  value--;

  document.getElementById('s-luong4').value = value;

}

function up4(){

  var value = parseInt(document.getElementById('s-luong4').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong4').value = value;

}

function down4(){

  var value = parseInt(document.getElementById('s-luong4').value);

  value--;

  document.getElementById('s-luong4').value = value;

}

function up5(){

  var value = parseInt(document.getElementById('s-luong5').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong5').value = value;

}

function down5(){

  var value = parseInt(document.getElementById('s-luong5').value);

  value--;

  document.getElementById('s-luong5').value = value;

}

//up down ở giao diện

function up2(){

  var value = parseInt(document.getElementById('s-luong2').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong2').value = value;

}

function down2(){

  var value = parseInt(document.getElementById('s-luong2').value);

  value--;

  document.getElementById('s-luong2').value = value;

}

// up down ở phần quản lý đơn hàng...

function up21(){

  var value = parseInt(document.getElementById('s-luong21').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong21').value = value;

}

function down21(){

  var value = parseInt(document.getElementById('s-luong21').value);

  value--;

  document.getElementById('s-luong21').value = value;

}

function up22(){

  var value = parseInt(document.getElementById('s-luong22').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong22').value = value;

}

function down22(){

  var value = parseInt(document.getElementById('s-luong22').value);

  value--;

  document.getElementById('s-luong22').value = value;

}

function up23(){

  var value = parseInt(document.getElementById('s-luong23').value);

  value = isNaN(value) ? 0 : value;

  value++;

  document.getElementById('s-luong23').value = value;

}

function down23(){

  var value = parseInt(document.getElementById('s-luong23').value);

  value--;

  document.getElementById('s-luong23').value = value;

}



window.onscroll = function() {myFunction(), myFunction2()};

function myFunction() {

  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {

    document.getElementById("fixed-on-scroll").className = "fixed-top";

  } else {

    document.getElementById("fixed-on-scroll").className = "";

  }

}



function myFunction2() {

  if (document.body.scrollTop > 82 || document.documentElement.scrollTop > 82) {

    document.getElementById("mnav-bar-2").className = "fixed-top";

  } else {

    document.getElementById("mnav-bar-2").className = "";

  }

}





/*function scrollFunction() {

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

    document.getElementById("toTopBtn").style.display = "block";

  } else {

    document.getElementById("toTopBtn").style.display = "none";

  }

}*/



function show1(){

  document.getElementsByClassName('a-show')[0].style.display ='none';

}

function show2(){

  document.getElementsByClassName('a-show')[0].style.display = 'block';

}

// chức năng cuộn lên đầu web

function topFunction() {

  document.body.scrollTop = 0;

  document.documentElement.scrollTop = 0;

}

/*var slider = document.getElementById("myRange");

      var output = document.getElementById("min-price");

      output.innerHTML = slider.value;



      slider.oninput = function() {

        output.innerHTML = this.value;

      }*/

$(document).ready(function () {

    $("#sidebar").mCustomScrollbar({

        theme: "minimal"

    });



    $('#dismiss, .overlay2').on('click', function () {

        $('#sidebar').removeClass('active2');

        $('.overlay2').removeClass('active2');

    });

    $('#sidebarCollapse').on('click', function () {

    $('#sidebar').addClass('active2');

    $('.overlay2').addClass('active2');

    $('.collapse.in').toggleClass('in');

    $('a[aria-expanded=true]').attr('aria-expanded', 'false');

    });

});



$('input#myRange').on('change', function(){

    var min_price = $('#min-price').text();

    min_price = min_price.replace(".", "");

    min_price = min_price.replace(".", "");

    var url_current = $('.url_filter_price').attr('data-url');

    $('.change_link_filter_price').removeAttr( "href");

    setTimeout(function () {

        $('.change_link_filter_price').attr('href',url_current+'?min_price='+min_price+'&max_price=5000000');

    },100);

});


$(".prev").click(function(){
    $("#carouselExampleIndicators").carousel("prev");
  });
  $(".next").click(function(){
    $("#carouselExampleIndicators").carousel("next");
  });


