$(function () {
    // Main Nav Toggle.
    $('.nav-main > li > a').on('click', function (e) {
        if ( ! $(this).hasClass('dashboard') ) {
            e.preventDefault();

            var toggler = $(this).data('toggle'),
                $panel = $('.panel-center');

            if ($panel.hasClass('close')) {
                $panel.removeClass('close');
            }

            $(this).parent().addClass('active').siblings().removeClass('active');
            $('#' + toggler).addClass('active').siblings().removeClass('active');
        }
    });

    $('li#collapse-pannel').on('click', function (e) {

        $panel = $('.panel-center');

        $(this).parent().children().removeClass('active');
        $(this).addClass('active');

        if ($panel.hasClass('close')) {
            $panel.removeClass('close');
        }

        $panel.addClass('close');
        $panel.addClass('open');
    });
});