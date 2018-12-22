$(".recruitment-item li").eq(0).css('width', '860px');
$(".num").mouseenter(function () {//如果要点击效果,把mouseenter改成click
    $(".recruitment-item li").stop(true, true);
    $(this).css({"background-color": "#1371AF"}).find("h1").css({"color": "#fff"}).find('img').attr('src', './images/RISS2.png');
    $(this).parent().siblings().find(".num").css({"background-color": "#e5e5e5"}).find("h1").css("color", "#8a8a8a").find('img').attr('src', './images/RISS2-1.png');
    $(this).parent().animate({width: "860px"}, 500).siblings('li').animate({width: '60px'}, 500);
});