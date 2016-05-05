$(function(){

    $('#js-grid-awesome-work').cubeportfolio({
        filters: '#js-filters-awesome-work',
        loadMore: '#js-loadMore-awesome-work',
        loadMoreAction: 'click',
        layoutMode: 'grid',
        defaultFilter: '*',
        animationType: 'fadeOut',
        gapHorizontal: 30,
        gapVertical: 30,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1500,
            cols: 4
        }, {
            width: 1100,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        caption: 'opacity',
        displayType: 'fadeIn',
        displayTypeSpeed: 400,

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageAnimation: 'fade',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: false,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 30000
            })
                .done(function(result) {
                    t.updateSinglePage(result);
                    $('.cbp-popup-navigation div').attr('title','');
                    $('.cbp-popup-close').html('<i class="close" data-action="close"><span data-action="close"></span><span data-action="close"></span></i>');
                    console.log(element);
                })
                .fail(function() {
                    t.updateSinglePage('AJAX Error! Please refresh the page!');
                });
        }
    });

    var timer;

    $(window).scroll(function() {

        //if ( timer ) clearTimeout(timer);
        //timer = setTimeout(function(){
        //    scrolling();
        //}, 500);

        scrolling();
    });

    $('.scroll, .cbp-filter-item').on('click', function() {
        $("html, body").animate({ scrollTop: $("#top").offset().top }, 300, "easeOutQuad" );
        $(this).removeClass('inactive');
        console.log('click');
    });

    function scrolling() {
        var scroll = $(window).scrollTop();
        var menuHeight = $('.menu-wrapper').height();
        $('.placeholder').css('height', menuHeight);
        if (scroll > 172) {
            $('.menu-wrapper').addClass('fixed');
            $('.placeholder').show();
        } else {
            $('.menu-wrapper').removeClass('fixed');
            $('.placeholder').hide();
        }
    }

});