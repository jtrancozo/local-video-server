

$(".link-player").on("click", (e) => {
    $('#my-video').attr('src', e.target.href);
    $('#my-video_html5_api').attr('src', e.target.href);

    $('#lista-wrapper').toggleClass('close');

    $('.link-player.active').removeClass('active');
    $(e.target).addClass('active');

    e.stopPropagation();
    return false;
});

$('.toggle').on('click', function() {
    if ($('#lista-wrapper').hasClass('close')) {
        $('.toggle').text('<<');
    } else {
        $('.toggle').text('>>');
    }

    $('#lista-wrapper').toggleClass('close');
})

$('.folder-title.title-level-1').on('click', function(el) {
    let $content = $(this).next('.content');

    $('.content.level-1').not($content).removeClass('show');

    if ($content.hasClass('show')) {
        $content.removeClass('show');
    } else {
        $content.addClass('show');
    }
});


