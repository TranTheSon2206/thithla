let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
} 
window.onscroll = () =>{
    navbar.classList.remove('active');
} 



//-------------Vertical scroll nav bar start-------------------
$(document).ready(function () {

    $(window).on('scroll', function () {

        var link = $('.navbar1 a.dot');
        var top = $(window).scrollTop();

        $('.sec').each(function () {
            var id = $(this).attr('id');
            var height = $(this).height();
            var offset = $(this).offset().top -150;
            if (top >= offset && top < offset + height) {
                link.removeClass('active');
                $('.navbar1').find('[data-scroll="' + id + '"]').addClass('active');
            }
        });

    });

});
//-------------Vertical scroll nav bar ends-------------------