/**
 * Template Name: OsteriaX
 * Version: 1
 * Template Scripts
 * Author: MarkUps
 * Author URI: http://www.markups.io/

 Custom JS


 1. TOP SLIDER (SLICK SLIDER)
 2. PORTFOLIO POPUP VIEW ( IMAGE LIGHTBOX )
 3. DATEPICKER
 4. SHEF SLIDER ( SLICK SLIDER )
 5. TESTIMONIAL SLIDER ( SLICK SLIDER )
 6. GOOGLE MAP
 7. MENU SMOOTH SCROLLING
 8. HOVER DROPDOWN MENU
 9. SCROLL TOP BUTTON
 10. BUTTON SMOOTH SCROLL ( VIEW RESERVATION FORM )


 **/

jQuery(function ($) {
    /* ----------------------------------------------------------- */
    /*  MENU SMOOTH SCROLLING
    /* ----------------------------------------------------------- */

    //MENU SCROLLING WITH ACTIVE ITEM SELECTED
    // Cache selectors
    var lastId,
        topMenu = $(".mu-main-nav"),
        topMenuHeight = topMenu.outerHeight() + 13,
        // All list items
        menuItems = topMenu.find('a[href^=\\#]'),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 32;
        jQuery('html, body').stop().animate({
            scrollTop: offsetTop
        }, 1500);
        jQuery('.navbar-collapse').removeClass('in');
        e.preventDefault();
    });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    $('#link-to-contact').click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 32;
        jQuery('html, body').stop().animate({
            scrollTop: offsetTop
        }, 1500);
        jQuery('.navbar-collapse').removeClass('in');
        e.preventDefault();
    });

    // Bind to scroll
    jQuery(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href=\\#" + id + "]").parent().addClass("active");
        }
    })

    /* ----------------------------------------------------------- */
    /*  8. HOVER DROPDOWN MENU
    /* ----------------------------------------------------------- */

    // for hover dropdown menu
    jQuery('ul.nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });


    /* ----------------------------------------------------------- */
    /*  9. SCROLL TOP BUTTON
    /* ----------------------------------------------------------- */

    //Check to see if the window is top if not then display button

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.scrollToTop').fadeIn();
        } else {
            jQuery('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top

    jQuery('.scrollToTop').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    /* ----------------------------------------------------------- */
    /*  10. BUTTON SMOOTH SCROLL ( VIEW MY WORK )
    /* ----------------------------------------------------------- */

    $('.mu-reservation-btn').on('click', function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing', function () {
            window.location.hash = target;
        });
    });

    // sticky
    $("#mu-why-us-menu").stick_in_parent().on("sticky_kit:unstick", function (e) {
        var top_bar = document.getElementById("mu-why-us-menu");
        $(top_bar).parent().css('position', 'unset');
        $(top_bar).parent().css('z-index', -1);
    });
});

