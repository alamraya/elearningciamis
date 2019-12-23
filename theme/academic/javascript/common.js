$(document).ready(function() {

    /* For carousel */

    $('.owl-carousel').owlCarousel({
        //rtl:true,
        loop: true,
        margin: 10,
        nav: true,
        autoplay: 5000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false,
                //margin: 20
            }
        }
    });


    /* For Header Menu */

    // Create a clone of the navbar, right next to original.
    $('.custom-section').addClass('original').clone().insertAfter('.custom-section').addClass('duplicate').css('position', 'fixed').css('top', '43').css('margin-top', '0px').css('z-index', '999999').removeClass('original').hide();

    scrollIntervalID = setInterval(stickIt, 10);


    function stickIt() {

        var orgElementPos = $('.original').offset();
        orgElementTop = orgElementPos.top;

        if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            $('.duplicate').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
            $('.original').css('visibility', 'hidden');
        } else {
            // not scrolled past the navbar; only show the original navbar.
            $('.duplicate').hide();
            $('.original').css('visibility', 'visible');
        }
    }


    /* For back to top  */

    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('#backtotop ').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $('#backtotop a').click(function() {
        $("html, body").animate({
            scrollTop: 0
        });
        return false;
    });



    /* For Frontpage Slideshow */

    $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        //maxwidth: 540
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });



    $("div#frontpage-available-course-list > h2").addClass("all");

    var elements = document.getElementsByClassName('all');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].innerHTML == 'Available courses') {
            elements[i].innerHTML = "Kursus yang tersedia";
            break;

        }
    }

    /* For Frontpage Courseboxes */


    if ($('.frontpage-course-list-all')) {
        $('.frontpage-course-list-all').parent('div').addClass("ourcourses");
    }
    $("div.ourcourses > h2").after("<div class='heading__line'><div><i class='fa fa-graduation-cap' aria-hidden='true'></i></div></div>");
    $("div.ourcourses .heading__line").after("<p class='tagline'>Anda Dapat Mendaftar Berbagai Kursus Di eLearning BKPSDM Ini Untuk Mengisi Impian Anda.</p>");



    $('.frontpage-course-list-enrolled').parent('div').addClass("mycourses");
    $("div.mycourses > h2").after("<div class='heading__line'><div><i class='fa fa-graduation-cap' aria-hidden='true'></i></div></div>");
    $("div.mycourses .heading__line").after("<p class='tagline'>Here You Can See All Your Enrolled Courses.</p>");


    if ($('#frontpage-course-list')) {
        $('#frontpage-course-list .coursebox').addClass('span3');
    }

    $('body #frontpage-course-list').each(function() {
        $(this).addClass('clearfix');
    });


    try {
        var mainWrapper = $('.frontpage-course-list-all, .frontpage-course-list-enrolled');
        if (mainWrapper) {
            mainWrapper.each(function(index, obj) {
                var coursebox = $(obj).find('.coursebox');
                if (coursebox) {
                    coursebox.each(function(index, obj) {
                        var courseimage = $(obj).find('.content .courseimage');
                        var findDiv = $(obj).find('.info');
                        if (courseimage.length > 0) {
                            courseimage.insertBefore(findDiv);
                        }
                    });
                }
            });
        }

    } catch (ignore) {}


    /*front-page all course section first start*/
     try {
        var _frontpageCourseListAll = $('.frontpage-course-list-all');
        var frontpageCourseListAll = $(_frontpageCourseListAll[0]);
        if (frontpageCourseListAll) {
            var totalPageWidth = $(frontpageCourseListAll).width();
            frontpageCourseListAll.find('.coursebox').addClass('proxyW');
            var courseBoxWidth = frontpageCourseListAll.find('.coursebox:first').outerWidth(true);
            var allBoxes = frontpageCourseListAll.find('.coursebox');
            var totalBoxes = allBoxes.length;
            var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
            frontpageCourseListAll.find('.coursebox').removeClass('proxyW');
           var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-all row-fluid-5"></div>');
            for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
                shadowPAGE.append('<div class="course-section span2  course-section-' + temp2 + '"></div>');
            }
            for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
                shadowPAGE.find('.course-section-' + temp3).append($(allBoxes[temp2]).clone());
            }
            var pageingMore$ = $('.frontpage-course-list-all .paging-morelink');
            if (pageingMore$ != null && pageingMore$.length > 0) {
                shadowPAGE.append(pageingMore$);
            }
            shadowPAGE.append('<div class="clearfix"></div>');
            frontpageCourseListAll.html(shadowPAGE);
        }

    } catch (ignore) {}

    /* front-page all course section second start */
    try {
        var _frontpageCourseListAllS = $('.frontpage-course-list-all');
        var frontpageCourseListAllS = $(_frontpageCourseListAllS[1]);
        if (frontpageCourseListAllS) {
            var _totalPageWidth = $(frontpageCourseListAllS).width();
            var _courseBoxWidth = frontpageCourseListAllS.find('.coursebox:first').outerWidth(true);
            var _allBoxes = frontpageCourseListAllS.find('.coursebox');
            var _totalBoxes = _allBoxes.length;
            var _boxesPerRow = Math.floor(_totalPageWidth / _courseBoxWidth);
            var temp2, _temp3, _shadowPAGE = $('<div class="shadow-frontpage-course-list-all row-fluid-5"></div>');
            for (_temp2 = 0; _temp2 < _boxesPerRow; _temp2++) {
                _shadowPAGE.append('<div class="course-section span2 course-section-' + _temp2 + '"></div>');
            }
            for (_temp2 = 0, _temp3 = 0; _temp2 < _totalBoxes; _temp2++, _temp3 = (_temp3 < (_boxesPerRow - 1) ? _temp3 + 1 : 0)) {
                _shadowPAGE.find('.course-section-' + _temp3).append($(_allBoxes[_temp2]).clone());
            }
            var pageingMore$ = $('.frontpage-course-list-all .paging-morelink');
            if (pageingMore$ != null && pageingMore$.length > 0) {
                _shadowPAGE.append(pageingMore$);
            }
            _shadowPAGE.append('<div class="clearfix"></div>');
            frontpageCourseListAllS.html(_shadowPAGE);
        }

    } catch (ignore) {}
    if ($('.frontpage-course-list-all')) {
        $('.frontpage-course-list-all .coursebox').removeClass('span3');
    }


    /* front-page enroll section */
    try {
        var frontpageCourseListEnrolled = $('.frontpage-course-list-enrolled');
        var totalPageWidth = $(frontpageCourseListEnrolled).width();
        var courseBoxWidth = frontpageCourseListEnrolled.find('.coursebox:first').outerWidth(true);
        var enrolledBoxes = frontpageCourseListEnrolled.find('.coursebox');
        var totalBoxes = enrolledBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-enrolled row-fluid-5"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="course-section span2 course-section-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.course-section-' + temp3).append($(enrolledBoxes[temp2]).clone());
        }
        var pageingMore$ = $('.frontpage-course-list-enrolled .paging-morelink');
        if (pageingMore$ != null && pageingMore$.length > 0) {
            shadowPAGE.append(pageingMore$);
        }
        shadowPAGE.append('<div class="clearfix"></div>');
        frontpageCourseListEnrolled.html(shadowPAGE);
    } catch (ignore) {}
    if ($('.frontpage-course-list-enrolled')) {
        $('.frontpage-course-list-enrolled .coursebox').removeClass('span3');
    }




    /* Home Combo List */

    $('.frontpage-category-combo').addClass("clearfix");

    var ComboCoursesH2 = $('#frontpage-category-combo > h2').html();
    if (typeof ComboCoursesH2 !== 'undefined' && ComboCoursesH2 !== null) {
        $('li.combo > a').prepend('<h2>' + ComboCoursesH2 + '</h2>');
        $('#region-main #frontpage-category-combo > h2').css({
            'display': 'none'
        });
    };

    var ComboCoursesTree = $('#frontpage-category-combo > .course_category_tree').html();
    if (typeof ComboCoursesTree !== 'undefined' && ComboCoursesTree !== null) {
        $('div#combocourses').prepend('<div class="course_category_tree">' + ComboCoursesTree + '</div>');
        $('#region-main #frontpage-category-combo > .course_category_tree').css({
            'display': 'none'
        });
    };


    /* Home Category List */

    $('.frontpage-category-names').addClass("clearfix");

    var listCoursesH2 = $('#frontpage-category-names > h2').html();
    if (typeof listCoursesH2 !== 'undefined' && listCoursesH2 !== null) {
        $('li.category > a').prepend('<h2>' + listCoursesH2 + '</h2>');
        $('#region-main #frontpage-category-names > h2').css({
            'display': 'none'
        });
    };

    var CategoryCoursesTree = $('#frontpage-category-names > .frontpage-category-names').html();
    if (typeof CategoryCoursesTree !== 'undefined' && CategoryCoursesTree !== null) {
        $('div#categorylist').prepend('<div class="frontpage-category-names course_category_tree">' + CategoryCoursesTree + '</div>');
        $('#region-main #frontpage-category-names > .frontpage-category-names').css({
            'display': 'none'
        });
    };


    /* Courses Tab */

    $('ul.custom-nav-tabs li > a > h2').addClass('activeh2');
    $('h2.activeh2:first').parent().parent().addClass('active');
    $('div.tabs-holder > div.tab-content > div > div').addClass('activediv');
    $('div.activediv:first').parent().addClass('active');


    $('ul.tabrow0').addClass('nav-tabs');

    /* For Site News */

    $("#site-news-forum h2").after("<p class='tagline'>Informasi terkini</p>");

    $("#site-news-forum > .tagline").after("<div class='heading__line'><div><i class='fa fa-graduation-cap' aria-hidden='true'></i></div></div>");

    var siteNews = $('#site-news-forum').html();
    if (typeof siteNews !== 'undefined' && siteNews !== null) {
        $('#latest-news > .container-fluid').append('<div id="site-news-forum">' + siteNews + '</div>');
        $('#region-main #site-news-forum').css({
            'display': 'none'
        });
    };
    if ($('#site-news-forum').length === 0) {
        $('#page #latest-news').css({
            'display': 'none'
        });
    }

    if ($('#latest-news .forumpost')) {
        $('#latest-news .forumpost').wrapAll('<div class="clearfix forumpost-con"></div>');
    }
    if ($('.forumpost-con')) {
        $('.forumpost-con .forumpost').addClass('span4');
    }
    try {
        var forumpostCon = $('.forumpost-con');
        var totalPageWidth = $(forumpostCon).width();
        console.log('totalPageWidth::', totalPageWidth);
        var forumpostWidth = forumpostCon.find('.forumpost:first').outerWidth(true);
        console.log('forumpostWidth::', forumpostWidth);
        var forumBoxes = forumpostCon.find('.forumpost');
        var totalBoxes = forumBoxes.length;
        console.log('totalBoxes::', totalBoxes);
        var boxesPerRow = Math.floor(totalPageWidth / forumpostWidth);
        console.log('boxesPerRow::', boxesPerRow);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-forumpost-con row-fluid"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="forum-section span4 forum-section-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.forum-section-' + temp3).append($(forumBoxes[temp2]).clone());
        }
        shadowPAGE.append('<div class="clearfix"></div>');
        forumpostCon.html(shadowPAGE);
    } catch (ignore) {}
    if ($('.forumpost-con')) {
        $('.forumpost-con .forumpost').removeClass('span4');
    }

    /* course categories customization start */

    try {
        var container_fluid = $('.container-fluid');
        if (container_fluid) {
            var navigation = container_fluid.find('.tabs-holder ul.nav');
            if (navigation) {
                var category = navigation.find('li.category a h2');
                var combo = navigation.find('li.combo a h2');
                if (category.length === 0 && combo.length === 0) {
                    navigation ? navigation.parents('.tabs-holder').addClass('hidden') : '';
                }
            }
        }
    } catch (ignore) {}

    /* course categories customization end */


      /* For site news author section */

    var _mainDiv = $(".author");
    if (_mainDiv) {
        for (var i = 0; i < _mainDiv.length; i++) {

            var _info = _mainDiv[i].childNodes[2].nodeValue;
            var _infoMain = _info.slice(3);
            var _anchorEl = _mainDiv[i].childNodes[1];
            $("<div class='content'>" + _infoMain + "</div>").insertAfter(_anchorEl);
            _mainDiv[i].childNodes[3].remove();
            _mainDiv[i].childNodes[0].remove();


        }
    }

});
