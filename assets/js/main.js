

function showNavMobile(){
    $("#show-mobile-menu").on('click', function(){
        $('nav.site-mobile-menu > ul').toggle();
    });
}



function carousellElements(){
    $(".owl-item-3").owlCarousel({
        items : 3,
        autoplay:false,
    });

    $(".owl-item-5").owlCarousel({
        items : 5,
    });


    $(".owl-item-1").owlCarousel({
        navigation : true,
        navigationText: true,
        autoPlay:true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        pagination:false,
        autoHeight : true,
    });
}

function setHeightTeam(){
    var wHeight = $('#team-slider .owl-wrapper').height();

    $('#team').height(wHeight);

}

showNavMobile();
carousellElements();
setHeightTeam();





