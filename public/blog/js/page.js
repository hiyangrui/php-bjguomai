//
// var winHeight = 0;
// var divHeight = document.getElementById("div1");
// function findDimensions() //函数：获取尺寸
// {
//     //获取窗口高度
//     if (window.innerHeight)
//         winHeight = window.innerHeight;
//     else if ((document.body) && (document.body.clientHeight))
//         winHeight = document.body.clientHeight;
// }

if($(window).height() > $('html').height()) {
    $('#top').height($(window).height() - $('.copyright').outerHeight());
}