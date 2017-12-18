defineClass('init', ykp, {
    init: function () {
        var it = this;
        it.headerHover();
    },
    headerHover: function () {
        var togleClass = {
            addClass: function () {
                $('#header').addClass('header-hover');
            },
            removeClass: function () {
                $('#header').removeClass('header-hover');
            }
        }
        $('#header').hover(function () {
            togleClass.addClass();
        }, function () {
            if ($(window).scrollTop() >= $('#header').height()) {
                togleClass.addClass();
            } else {
                togleClass.removeClass();
            }
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() >= $('#header').height()) {
                togleClass.addClass();
            } else {
                togleClass.removeClass();
            }
        });
    },
});



