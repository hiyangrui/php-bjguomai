$.each(content, function (index,item) {
    var html = '<li class="listbox mr20">';
    html+='<div class="listimg"> <a href="http://www.lanrentuku.com/" title="'+item.title+'" target="_blank"><img src="images/portfolio/'+item.img+'" class="attachment-thumbnail wp-post-image" alt="'+item.title+'" /></a>';
    html+='<div class="summary">';
    html+=' <div class="summarytxt">';
    html+=' <p class = "content">'+item.desc+'</p>';
    html+='</div>';
    html+='</div>';
    html+='</div>';
    html+='<div class="listinfo">';
    html+='<div class="listtitle"><a href="http://www.lanrentuku.com/" title="'+item.title+'" target="_blank">'+item.title+'</a>';
    html+='</div>';
    html+='</div>';
    html+='</li>';
    $('#content').append(html);
})