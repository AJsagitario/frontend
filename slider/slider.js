 /*  carousel */
    const responsive = {
        0: {
            items: 1
        },
        320: {
            items: 1
        },
        560: {
            items: 2
        },      
        960: {
            items: 3
        },
        1200: {
            items: 5
        }
    };
    
$(function () {
    $('.owl-carousel').owlCarousel({        
        autoplay: true,        
        loop: true,        
        nav: true,
        responsive: responsive        
    });
});

