import AOS from 'aos';

AOS.init();

$('#mheader-mobile-menu').hide();
$('#mheader-menu-icon-open').show();
$('#mheader-menu-icon-close').hide();

$(document).ready(function(){
    // Hide contact form success message
    $('#successMessage').hide();

    // mobile header menu
    $('#mheader-menu-btn').on('click', function(){
        $('#mheader-menu-icon-open').toggle();
        $('#mheader-menu-icon-close').toggle();
        $('#mheader-menu-btn').toggleClass('mheader-menu-btn-active');
        $('#mheader-mobile-menu').toggle();
    });
});