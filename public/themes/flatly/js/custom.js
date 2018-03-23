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

    function setZindex() {
        var top_bar = document.getElementById("mu-why-us-menu");
        $(top_bar).parent().parent().css('position', 'unset');
        $(top_bar).parent().parent().css('z-index', -1);
    }

    // sticky
    $("#mu-why-us-menu").stick_in_parent().on("sticky_kit:unstick", function (e) {
        setZindex();
    }).on('sticky_kit:bottom', function (e) {

    }).on('sticky_kit:unbottom', function (e) {
        setZindex();
    });

    //SVG build flow

    function buildNodeCircle(draw, basex, basey, url) {
        draw.circle(70).fill('#b9f4bc').move(basex, basey);
        var image = draw.image(url);
        image.size(34, 34).move(basex + 18, basey + 18);
        return image;
    }
    // FLOW1
    var flow1 = SVG('flow1');
    buildNodeCircle(flow1, 30, 20, 'http://localhost/themes/flatly/img/flow-svg/data-storage-2143-7-f-70174-d-0-bff-4043-9698-391-ad-8080-c-0-a.png');
    buildNodeCircle(flow1, 320, 20, 'http://localhost/themes/flatly/img/flow-svg/code-2039-2-d-42-baf-3-b-295-45-ca-ba-5-d-3-e-8900131-aed.png');
    buildNodeCircle(flow1, 420, 250, 'http://localhost/themes/flatly/img/flow-svg/loading-2047-a-922-b-363-7-ef-8-4304-b-094-8-c-2-b-866-db-2-c-8.png');
    buildNodeCircle(flow1, 30, 250, 'http://localhost/themes/flatly/img/flow-svg/pay-2643-1-e-03-b-0-d-5-88-ed-4-aad-9-d-6-c-e-7-dc-14-a-9-c-1-aa.png');
    flow1.viewbox({x: 0, y: 0, width: 653, height: 420});

    // FLOW2
    var flow2 = SVG('flow2');
    flow2.rect(390, 230).fill('#fafafc').move(65, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);
    flow2.line(65, 55, 65, 305).stroke({
        color: '#fafafc',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });
    buildNodeCircle(flow2, 30, 20, 'http://localhost/themes/flatly/img/flow-svg/data-storage-2143-7-f-70174-d-0-bff-4043-9698-391-ad-8080-c-0-a.png');
    buildNodeCircle(flow2, 320, 20, 'http://localhost/themes/flatly/img/flow-svg/code-2039-2-d-42-baf-3-b-295-45-ca-ba-5-d-3-e-8900131-aed.png');
    buildNodeCircle(flow2, 420, 250, 'http://localhost/themes/flatly/img/flow-svg/loading-2047-a-922-b-363-7-ef-8-4304-b-094-8-c-2-b-866-db-2-c-8.png');
    buildNodeCircle(flow2, 30, 250, 'http://localhost/themes/flatly/img/flow-svg/pay-2643-1-e-03-b-0-d-5-88-ed-4-aad-9-d-6-c-e-7-dc-14-a-9-c-1-aa.png');
    var font = {
        family: 'Source Sans Pro'
        , size: 16
        , anchor: 'middle'
    };
    flow2.text("LeadsGen\nnetwork").fill('#6b7c93').move(70, 100).font(font);
    flow2.text("Client websites").fill('#6b7c93').move(350, 100).font(font);
    flow2.text("(Tracking code installed\non converted page)").fill('#6b7c93').move(350, 120).font(font).font({style: 'italic'});
    flow2.text("You pay per your\nconversions").fill('#6b7c93').move(70, 330).font(font);
    flow2.text("Conversion captured and\nsent to LeadsGen platform,\nshow on the reports").fill('#6b7c93').move(450, 330).font(font);
    flow2.text("DATA ENCRYPTED").fill('#cfcfcf').move(80, -500).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold'
    }).transform({rotation: 90, relative: true});
    flow2.viewbox({x: 0, y: 0, width: 554, height: 403});

    // FLOW3
    var flow3 = SVG('flow3');
    flow3.rect(390, 260).fill('#fafafc').move(80, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);
    flow3.line(80, 55, 80, 305).stroke({
        color: '#fafafc',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });
    buildNodeCircle(flow3, 45, 20, 'http://localhost/themes/flatly/img/flow-svg/camera-phone-5384-208581-b-2-44-ec-48-a-8-97-c-2-5-f-62-a-9786-a-4-e.png');
    buildNodeCircle(flow3, 335, 20, 'http://localhost/themes/flatly/img/flow-svg/puzzle-2059-e-4-d-0308-d-da-78-4-cfe-8-b-67-38-c-5-c-6-c-60-c-4-c.png');
    buildNodeCircle(flow3, 435, 280, 'http://localhost/themes/flatly/img/flow-svg/settings-window-2030-574-af-6-ab-6-c-0-b-4-c-71-ba-16-b-5-f-97197321-a.png');
    buildNodeCircle(flow3, 240, 280, 'http://localhost/themes/flatly/img/flow-svg/settings-window-2030-574-af-6-ab-6-c-0-b-4-c-71-ba-16-b-5-f-97197321-a.png');
    buildNodeCircle(flow3, 45, 280, 'http://localhost/themes/flatly/img/flow-svg/sales-up-2687-a-0-bff-94-f-fd-22-4-ac-3-a-918-f-2-aabc-79-dd-97.png');
    var font = {
        family: 'Source Sans Pro'
        , size: 16
        , anchor: 'middle'
    };
    flow3.text("End User").fill('#6b7c93').move(80, 100).font(font);
    flow3.text("Application").fill('#6b7c93').move(370, 100).font(font);
    flow3.text("Tracking tool").fill('#6b7c93').move(470, 360).font(font);
    flow3.text("LeadsGen Platform").fill('#6b7c93').move(270, 360).font(font);
    flow3.text("Verify data and pay for\nconversion").fill('#6b7c93').move(85, 360).font(font);
    flow3.text("SEND BACK\nONVERSION\nDATA TO").fill('#cfcfcf').move(375, 240).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold',
        anchor: 'middle'
    });
    flow3.text("SEND CONVERSION DATA").fill('#cfcfcf').move(80, -510).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold'
    }).transform({rotation: 90, relative: true});
    flow3.viewbox({x: 0, y: 0, width: 554, height: 463})
});

