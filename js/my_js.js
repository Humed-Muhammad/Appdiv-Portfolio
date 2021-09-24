/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function initialize()
{
    var mapProp = {
        center: myCenter,
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        title: "demo"
                //mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE,
    });


    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({
        content: "Main Office. Infront of Commercial Bank of Ethiopia , Winget Branch!"
    });


    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
        map.setZoom(15);
        map.setCenter(marker.getPosition());
    });

}

try {

    if (typeof (google) !== 'undefined') {
        google.maps.event.addDomListener(window, 'load', initialize);

        if ($('#googleMap').length > 0)
        {
            var myCenter = new google.maps.LatLng(9.057651, 38.711628);
            google.maps.event.addDomListener(window, 'load', initialize);
        }
    }



} catch (e) {
    console.log(e)
}






var appMaster =
        {
            map: function ()
            {

            },
            animateScript: function () {
                $('.scrollpoint.sp-effect1').waypoint(function () {
                    element = $(this.element);
                    element.toggleClass('active');
                    element.toggleClass('animated fadeInLeft');
                }, {offset: '100%'});
                $('.scrollpoint.sp-effect2').waypoint(function () {
                    element = $(this.element);
                    element.toggleClass('active');
                    element.toggleClass('animated fadeInRight');
                }, {offset: '100%'});
                $('.scrollpoint.sp-effect3').waypoint(function () {
                    element = $(this.element);
                    element.toggleClass('active');
                    element.toggleClass('animated fadeInDown');
                }, {offset: '100%'});
                $('.scrollpoint.sp-effect4').waypoint(function () {
                    element = $(this.element);
                    element.toggleClass('active');
                    element.toggleClass('animated fadeIn');
                }, {offset: '100%'});
                $('.scrollpoint.sp-effect5').waypoint(function () {
                    element = $(this.element);
                    element.toggleClass('active');
                    element.toggleClass('animated fadeInUp');
                }, {offset: '100%'});
            },
            reviewsCarousel: function () {
                // Reviews Carousel
                $('.review-filtering').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 5000
                });
            },
            portofolio: function ()
            {
                if ($('.isotope-container').length > 0) {
                    $(window).load(function () {
                        $('.isotope-container').fadeIn();
                        var $container = $('.isotope-container').isotope({
                            itemSelector: '.isotope-item',
                            layoutMode: 'masonry',
                            transitionDuration: '0.6s',
                            filter: "*"
                        });
                        // filter items on button click
                        $('.filters').on('click', 'ul.nav li a', function () {
                            var filterValue = $(this).attr('data-filter');
                            $(".filters").find("li.active").removeClass("active");
                            $(this).parent().addClass("active");
                            $container.isotope({filter: filterValue});
                            return false;
                        });
                    });
                }
            },
            slide: function ()
            {
                $('.carousel').carousel({
                    interval: 4000
                });

                $('.bxslider').bxSlider({
                    maxSlides: 4,
                    slideWidth: 220,
                    slideMargin: 10,
                    ticker: true,
                    speed: 10000
                });

                $('.boxslider2').bxSlider({
                    ticker: false,
                    nextSelector: '#slider-next',
                    prevSelector: '#slider-prev',
                    nextText: '<span class="glyphicon glyphicon-chevron-right"></span>',
                    prevText: '<span class="glyphicon glyphicon-chevron-left"></span>',
                    maxSlides: 3,
                    speed: 1000,
                    slideWidth: 360,
                });
            }
        };


$(function () {

    appMaster.animateScript();

    appMaster.reviewsCarousel();

    appMaster.portofolio();

    appMaster.slide();

    appMaster.map();



});










