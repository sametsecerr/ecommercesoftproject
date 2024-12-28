$('nav').on('mouseenter', function() {
    $(this).attr('data-hover', 'true');
});

$('nav').on('mouseleave', function() {
    $(this).attr('data-hover', 'false');
});

$(window).on('scroll', function() {
    $('nav').attr('data-scroll', $(window).scrollTop() > 5);
});

$('.productItem').on('mouseenter', function() {
    $(this).attr('data-hover', 'true');
});

$('.productItem').on('mouseleave', function() {
    $(this).attr('data-hover', 'false');
});

$('.product-add-basket').each(function(index, item) {
    $(this).find('.productItemButton').on('click', function(e) {
        e.preventDefault();
        if ($(item).hasClass('active')) {
            $(item).removeClass('active');
        }else if($(item).hasClass('no-variant')) {
            $(item).removeClass('active');
        }else {
            $('.product-add-basket').removeClass('active');
            $(item).addClass('active');
        }
    });
});

$('.open-sidebar').on('click', function(item) {
    $('.mobile-sidebar-wrapper').attr('data-show', 'true');
    $('.se-mobile-sidebar-variant-1').attr('data-show', 'true');
    $('body').addClass('overflow-hidden');
});
$('.close-sidebar').on('click', function(item) {
    $('.mobile-sidebar-wrapper').attr('data-show', 'false');
    $('.se-mobile-sidebar-variant-1').attr('data-show', 'false');
    $('body').removeClass('overflow-hidden');
});
$('.mobile-nav-item button').on('click', function() {
    $(this).attr('data-show', function(_, attr) {
        return attr === 'true' ? 'false' : 'true';
    });
    $(this).siblings('.mobile-nav-ul').attr('data-show', function(_, attr) {
        return attr === 'true' ? 'false' : 'true';
    });
});
