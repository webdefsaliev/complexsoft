<script src="js/wow.min.js"></script>
<script>
    /*menu*/
    var link = $('.menu-link');
    var link_active = $('menu-link_active');
    var menu = $('.menu-mobile');
    var nav_link = $('.menu-mobile a')

    link.click(function(){
        link.toggleClass('menu-link_active');
        menu.toggleClass('menu-mobile_active');
    });
    nav_link.click(function(){
        link.removeClass('menu-link_active');
        menu.toggleClass('menu-mobile_active')
    });
    // menu-desktop
    var links = $('.menu-link__desktop');
    var link_actives = $('menu-link_actives');
    var menus = $('.menu-mobile__desktop');
    var nav_links = $('.menu-mobile__desktop a')

    links.click(function(){
        links.toggleClass('menu-link_actives');
        menus.toggleClass('menu-mobile__desktop_actives');
    });
    nav_links.click(function(){
        links.removeClass('menu-link_actives');
        menus.toggleClass('menu-mobile__desktop_actives')
    });

    var a = document.getElementById('menu-link__desktop');
    var c = document.getElementById('menu-link');
    a.onclick = function con(){
    c.style.cssText = "z-index: 10";
    };

    var a1 = document.getElementById('menu-link');
    var c1 = document.getElementById('menu-link__desktop');
    a1.onclick = function con(){
    a1.style.cssText = "z-index: 14";
    c1.style.cssText = "z-index: 12";
    };

    // ____________________________________________________
    /*menu-animte*/
    $(document).ready(function(){
        $("#menu-info, #menu-mobile, #footer-list").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1200);
        });
        /*кнопка получить демо-версию*/
        $("#slowly").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1200);
        });
    });
    //menu-animate
        $(document).ready(function(){
            $("#header-bg-menu, #menu-mobile").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1200);
            });
            /*кнопка получить демо-версию*/
            $("#slowly1").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1200);
            });
        });
    // slider
        $('.reviews-slider').slick({
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-arrow slider-arrow_product slider-arrow_left slider-arrow_product_left"></div>',
            nextArrow: '<div class="slider-arrow slider-arrow_product slider-arrow_right slider-arrow_product_right"></div>',
        });

        // wow
            new WOW().init();
</script>