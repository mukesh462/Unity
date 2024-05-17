$('#toggle-left-menu').click(function () {
    $('#left-menu, #logo, #page-container, #header .header-left').toggleClass('small-left-menu');
    $('#logo .big-logo, #logo .small-logo').toggle(300);
    $('#logo').toggleClass('p-0 pl-1');
});

$(document).on('mouseover', '#left-menu.small-left-menu > ul > li', function () {
    var $this = $(this);
    var label = $this.find('span').text();
    var position = $this.position();

    $('#show-lable').css({
        'top': position.top + 79,
        'left': position.left + 59,
        'opacity': 1,
        'visibility': 'visible'
    }).text(label);

    if (!$this.hasClass('has-sub')) return;

    var $submenu = $this.find('ul');
    $submenu.addClass('open');
    var height = 47 * $submenu.find('> li').length;
    var top = position.top >= 580 ? (position.top + 100) - height : position.top + 79;

    $submenu.css({
        'top': top,
        'height': height + 'px'
    });
});

$(document).on('mouseout', '#left-menu.small-left-menu li a', function () {
    $('#show-lable').css({
        'opacity': 0,
        'visibility': 'hidden'
    });
});

$(document).on('mouseout', '#left-menu.small-left-menu li.has-sub', function () {
    $(this).find('ul').css('height', 0);
});

$(window).on('resize load', function () {
    var width = $(window).width();
    $('#left-menu, #logo').toggleClass('small-left-menu p-0 pl-1', width <= 992);
});

$('#left-menu li.has-sub > a').click(function () {
    var $this = $(this).parent();
    var $submenu = $this.find('ul');

    $submenu.toggleClass('open');
    $this.toggleClass('rotate');
    $this.siblings().find('ul.open').addBack().not($submenu).removeClass('open');
    $this.siblings().find('li.rotate').addBack().not($this).removeClass('rotate');

    if ($submenu.hasClass('open')) {
        var height = 47 * $submenu.find('> li').length;
        $submenu.css('height', height + 'px');
    } else {
        $submenu.css('height', 0);
    }
});
$("#myTable").DataTable({
    responsive: true,
    searching: false,
    ordering: false
}); $("#myTableSearch").DataTable({
    responsive: true,
    searching: false,
    ordering: false
});