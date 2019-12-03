<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emcos.vn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ProfessionalService",
        "@id":"https://emcos.vn/",
        "url": "https://emcos.vn/",
        "logo": "https://emcos.vn/wp-content/uploads/2019/08/cropped-logo_opla0.png",
        "image":"https://emcos.vn/wp-content/uploads/2019/08/cropped-logo_opla0.png",
        "priceRange":"200000đ-5000000đ",
        "hasMap": "https://emcos.vn/sitemap.xml",
        "email": "mailto: admin@nevagroup.vn",
        "founder": "Nguyễn Văn Thanh",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Hai Bà Trưng",
            "addressRegion": "Hà Nội",
            "postalCode":"10000",
            "streetAddress": "18 Tam Trinh - Hai Bà Trưng - Hà Nội"
        },
        "description": "Mỹ phẩm Emcos tự hào là nhà phân phối mỹ phẩm Hàn Quốc chính hãng của nhiều thương hiệu lớn. Mỹ phẩm Emcos cam kết cung cấp sản phẩm mỹ phẩm Hàn Quốc cao cấp nhất, mỹ phẩm chính hãng, cập nhật liên tục những dòng mỹ phẩm trend của giới trẻ. Mua mỹ phẩm Hàn Quốc cao cấp, chính hãng.",
        "name": "Tên ngắn gọn của công ty",
        "telephone": "Số điện thoại: vd 0169-530-4547",
        "openingHours": [ "Mo-Fri 07:00-19:00", "Sun 08:00-12:00" ],
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "Kinh độ địa lý",
            "longitude": "Vĩ độ địa lý"
        },
        "potentialAction": {
            "@type": "ReserveAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "https://emcos.vn/lien-he/",
                "inLanguage": "vn",
                "actionPlatform": [
                    "http://schema.org/DesktopWebPlatform",
                    "http://schema.org/IOSPlatform",
                    "http://schema.org/AndroidPlatform"
                ]
            },
            "result": {
                "@type": "Reservation",
                "name": "emcos.vn"
            }},
        "sameAs" : [ "https://www.facebook.com/emcos",
            "https://www.youtube.com/emcos",
            "https://twitter.com/emcos",
            "https://www.linkedin.com/emcos",
            "https://www.pinterest.com/emcos",
            "https://plus.google.com/emcos",
            "http://tumblr.com/emcos"]
    }
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124568054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124568054-1');
</script>
	<?php wp_head(); ?>
</head>
<style type="text/css">
    
@media (max-width: 1200px){
     #fixed-bottom{
        display: none !important;
    }
    .woocommerce div.product div.images img {
    display: block;
    width: 100%;
    height: auto;
    box-shadow: none;
}

.woocommerce div.product div.images .flex-control-thumbs {

    overflow: hidden;
    zoom: .9;
    margin: 0;
    padding: 0;
}
}
</style>
<body <?php body_class(); ?>>
    <?php
        do_action('hook_header');
    ?>

    <?php
    /*the_custom_logo();
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
    ) );*/
    ?>

