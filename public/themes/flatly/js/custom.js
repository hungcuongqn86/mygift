jQuery(function ($) {
    /* ----------------------------------------------------------- */
    /*  MENU SMOOTH SCROLLING
    /* ----------------------------------------------------------- */

    $("html").easeScroll({
        frameRate: 60,
        animationTime: 1000,
        stepSize: 120,
        pulseAlgorithm: !0,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: !0,
        arrowScroll: 50
    });

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
        var scroll = $(window).scrollTop();
        if (scroll > topMenuHeight) {
            $('#mu-header').addClass('stick-active');
        } else {
            $('#mu-header').removeClass('stick-active');
        }

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
    });

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

    //and more
    $('.and-more-btn').click(function () {
        $('.and-more').show();
        $(this).hide();
    });

    //SVG build flow
    var font = {
        family: 'Source Sans Pro'
        , size: 16
        , anchor: 'middle'
    };

    var fontPol = {
        family: 'Source Sans Pro'
        , size: 16
    };

    var fontIndex = {
        family: 'Poppins'
        , size: 40
    };

    function buildNodeCircle(draw, basex, basey, url) {
        draw.circle(70).fill('#b9f4bc').move(basex, basey);
        var image = draw.image(url);
        image.size(34, 34).move(basex + 18, basey + 18);
        return image;
    }

    function buildTriangle(draw, basex, basey) {
        var arrPoint = [[basex, basey], [basex + 16, basey + 11], [basex, basey + 22]];
        draw.polygon(arrPoint).fill('#6ed69a');
        var arrPoint = [[basex + 12, basey], [basex + 28, basey + 11], [basex + 12, basey + 22]];
        draw.polygon(arrPoint).fill('#13b675');
    }

    function buildMiniTriangle(draw, basex, basey, type) {
        if (type) {
            var arrPoint = [[basex + 4, basey + 4], [basex + 10, basey], [basex + 10, basey + 8]];
            draw.polygon(arrPoint).fill('#6ed69a');

            var arrPoint = [[basex, basey + 4], [basex + 6, basey], [basex + 6, basey + 8]];
            draw.polygon(arrPoint).fill('#13b675');
        } else {
            var arrPoint = [[basex, basey], [basex + 6, basey + 4], [basex, basey + 8]];
            draw.polygon(arrPoint).fill('#6ed69a');
            var arrPoint = [[basex + 4, basey], [basex + 10, basey + 4], [basex + 4, basey + 8]];
            draw.polygon(arrPoint).fill('#13b675');
        }
    }

    function buildNodePol(draw, basex, basey, width, height, textindex, content) {
        draw.rect(width, height).fill('#ffc715').move(basex, basey).radius(3);
        draw.rect(width - 3, height + 2).fill('#fff').move(basex + 4, basey - 1).radius(3);
        draw.text(textindex).fill('#eef1f7').move(basex + width - 60, basey + height - 60).font(fontIndex);
        draw.text(content).fill('#6b7c93').move(basex + 10, basey + 32).font(fontPol);
    }

    // FLOW
    var flow = SVG('flow');
    buildNodePol(flow, 0, 55, 240, 100, '01', 'We work with you to understand\nwhat you expect in your website');
    flow.line(242, 110, 270, 110).stroke({
        color: '#e0f3eb',
        width: 1,
        linecap: 'round',
        linejoin: 'round'
    });
    buildMiniTriangle(flow, 252, 106, 0);
    buildNodePol(flow, 270, 55, 240, 100, '02', 'We implement tracking software\non your website');
    flow.line(512, 110, 542, 110).stroke({
        color: '#e0f3eb',
        width: 1,
        linecap: 'round',
        linejoin: 'round'
    });
    buildMiniTriangle(flow, 522, 106, 0);
    buildNodePol(flow, 0, 182, 240, 100, '03', 'You will know how your business\ngoing and how to optomize it');
    flow.line(242, 230, 270, 230).stroke({
        color: '#e0f3eb',
        width: 1,
        linecap: 'round',
        linejoin: 'round'
    });
    buildMiniTriangle(flow, 252, 226, 1);
    buildNodePol(flow, 270, 182, 240, 100, '04', 'We compile an analysis report\nfor you');
    flow.line(512, 230, 542, 230).stroke({
        color: '#e0f3eb',
        width: 1,
        linecap: 'round',
        linejoin: 'round'
    });
    buildMiniTriangle(flow, 522, 226, 1);
    buildNodePol(flow, 540, 55, 105, 228, '05', '');
    flow.text('We get the\nfull -\nprecise\ndata. And\nanalyze it').fill('#6b7c93').move(550, 120).font(fontPol);
    flow.viewbox({x: 0, y: 0, width: 650, height: 350});

    // FLOW1
    var flow1 = SVG('flow1');

    flow1.rect(185, 180).fill('#fafafc').move(135, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(100, 70).fill('#fafafc').move(130, 55).stroke({
        color: '#fafafc',
        width: 6,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(70, 70).fill('#fafafc').move(65, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(185, 180).fill('#fafafc').move(320, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(100, 70).fill('#fafafc').move(420, 55).stroke({
        color: '#fafafc',
        width: 6,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(70, 70).fill('#fafafc').move(505, 55).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(530, 130).fill('#fafafc').move(60, 70);

    flow1.line(135, 200, 135, 70).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });

    flow1.line(320, 200, 320, 70).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });

    flow1.line(505, 200, 505, 70).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });

    flow1.rect(255, 55).fill('#fafafc').move(65, 320).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(55, 30).fill('#fafafc').move(265, 320).stroke({
        color: '#fafafc',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);

    flow1.rect(55, 55).fill('#fafafc').move(265, 265).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    }).radius(20);


    flow1.rect(150, 80).fill('#fafafc').move(150, 265);
    flow1.rect(200, 50).fill('#fafafc').move(150, 250);

    flow1.line(152, 320, 300, 320).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });

    flow1.line(300, 375, 575, 375).stroke({
        color: 'rgba(3, 190, 91, 0.1)',
        width: 4,
        linecap: 'round',
        linejoin: 'round'
    });

    buildTriangle(flow1, 178, 364);
    buildTriangle(flow1, 440, 364);

    buildNodeCircle(flow1, 30, 20, 'http://localhost/themes/flatly/img/flow-svg/checked-server-2150-4011066-f-cde-6-4-f-12-b-3-f-5-70-be-7-a-29-d-94-d.png');
    buildNodeCircle(flow1, 200, 20, 'http://localhost/themes/flatly/img/flow-svg/code-2039-2-d-42-baf-3-b-295-45-ca-ba-5-d-3-e-8900131-aed.png');
    buildNodeCircle(flow1, 370, 20, 'http://localhost/themes/flatly/img/lightning-bolt-1701.png');
    buildNodeCircle(flow1, 540, 20, 'http://localhost/themes/flatly/img/layers-1687-367-f-10-c-0-4-e-39-42-b-3-9-e-55-c-9-f-9205-c-6175.png');
    buildNodeCircle(flow1, 285, 200, 'http://localhost/themes/flatly/img/flow-svg/data-storage-2143-7-f-70174-d-0-bff-4043-9698-391-ad-8080-c-0-a.png');
    buildNodeCircle(flow1, 30, 340, 'http://localhost/themes/flatly/img/accept-2056.png');
    buildNodeCircle(flow1, 285, 340, 'http://localhost/themes/flatly/img/flow-svg/checked-server-2150-4011066-f-cde-6-4-f-12-b-3-f-5-70-be-7-a-29-d-94-d.png');
    buildNodeCircle(flow1, 540, 340, 'http://localhost/themes/flatly/img/flow-svg/copied-to-clipboard-4216-997-c-55-a-6-40-e-3-49-d-6-a-524-bd-1-e-2945-e-515.png');

    flow1.text("LeadsGen own\ninventory").fill('#6b7c93').move(65, 95).font(font);
    flow1.text("Partner inventory\n" + "(website)").fill('#6b7c93').move(235, 95).font(font);
    flow1.text("Partner inventory\n" + "(adnetwork)").fill('#6b7c93').move(405, 95).font(font);
    flow1.text("Partner inventory\n" + "(booking channel)").fill('#6b7c93').move(580, 95).font(font);
    flow1.text("LeadsGen network").fill('#6b7c93').move(320, 270).font(font);
    flow1.text("Leads collection").fill('#6b7c93').move(320, 410).font(font);
    flow1.text("Client’s Landing page").fill('#6b7c93').move(70, 410).font(font);
    flow1.text("Capture and report leads").fill('#6b7c93').move(560, 410).font(font);
    flow1.text("CPA DISTRIBUTION").fill('#cfcfcf').move(190, 330).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold',
        anchor: 'middle'
    }).style('letter-spacing', '1px');

    flow1.viewbox({x: 0, y: 0, width: 653, height: 440});

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

    flow2.text("LeadsGen\nnetwork").fill('#6b7c93').move(70, 100).font(font);
    flow2.text("Client websites").fill('#6b7c93').move(350, 100).font(font);
    flow2.text("(Tracking code installed\non converted page)").fill('#6b7c93').move(350, 120).font(font).font({style: 'italic'});
    flow2.text("You pay per your\nconversions").fill('#6b7c93').move(70, 330).font(font);
    flow2.text("Conversion captured and\nsent to LeadsGen platform,\nshow on the reports").fill('#6b7c93').move(450, 330).font(font);
    flow2.text("DATA ENCRYPTED").fill('#cfcfcf').move(80, -490).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold'
    }).style('letter-spacing', '1px').transform({rotation: 90, relative: true});
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
    buildNodeCircle(flow3, 240, 280, 'http://localhost/themes/flatly/img/flow-svg/server-2145-1-b-130038-483-f-478-e-93-d-5-3-b-144-edf-13-db.png');
    buildNodeCircle(flow3, 45, 280, 'http://localhost/themes/flatly/img/flow-svg/sales-up-2687-a-0-bff-94-f-fd-22-4-ac-3-a-918-f-2-aabc-79-dd-97.png');
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
    }).style('letter-spacing', '1px');
    flow3.text("SEND CONVERSION DATA").fill('#cfcfcf').move(65, -505).font({
        family: 'Poppins',
        size: 16,
        weight: 'bold'
    }).style('letter-spacing', '1px').transform({rotation: 90, relative: true});
    flow3.viewbox({x: 0, y: 0, width: 554, height: 463})
});

