$(document).ready(function() {
    $('.highlight-destinations').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidestoScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidestoScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidestoScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.span-email').click(function() {
        var val = $(this).text();
        document.execCommand("copy")
    });
    let ww = $(window).width();
    if(ww >= 1220) {
        $('.search-toggle').click(function() {
            $('.search-nav').toggleClass('d-none')
            $('.form-search-nav').focus()
            $('.search-toggle svg').toggleClass('text-danger')
        });
    }
    if(ww < 1220) {
        $('.search-toggle svg').addClass('text-danger')
        $('.search-toggle').click(function() {
            $('.search-small-nav').slideToggle(500)
            $('.form-search-nav-small').focus()
            $('.search-toggle svg').toggleClass('text-danger')
        });
    }
    $(window).resize(function() {
        location.reload()
    })
});
