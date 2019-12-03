$(document).ready(function () {
    $('li.nav-item.active2').on('click',function () {
        $(this).find('ul').slideToggle();
    });
});