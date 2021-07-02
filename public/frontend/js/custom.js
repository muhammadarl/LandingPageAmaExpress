$(document).ready(function() {    
    // Preloader
    $(".preloader").fadeOut('slow');

    // Navbar Scroll Handler
    $(document).scroll(function() {
        const $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});