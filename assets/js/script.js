$(function () {
    $('[data-toggle="tooltip"]').tooltip();

});
$(document).ready(function () {
    $('.sidebar > i').click(function () {
        // $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
        $(this).toggleClass('fa-angle-double-right').toggleClass('fa-window-close-o');
        $('.fa-window-close-o').css('font-size', '2em');
        $('.fa-angle-double-right').css('font-size', '3em');
        $('.sidebar').toggleClass('pushmenu-open');
    });
});