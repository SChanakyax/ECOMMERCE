$(document).ready(function(){
    //banner owl carousel

    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });


    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


    //isotop filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items on button clicks
    $(".button-group").on("click","button", function(){
        var filterValues = $(this).attr("data-filter");

        $grid.isotope({filter:filterValues});
    });


    //new phone carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });




});