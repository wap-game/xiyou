function head(index,home,friend,family,bbs,msgbox,game,spShare,customer,about) {
    var html = '';
    html += '<div id="wrapper" >'
    html += '<ul >'
    html += '<li ><a href="' + home + '">首页</a></li>'
    html += '<li ><a href="' + friend + '">网游</a></li>'
    html += '<li ><a href="' + family + '">趣图</a></li>'
    html += '<li ><a href="' + game + '">段子</a></li>'
    html += '<li ><a href="' + customer + '">客服</a></li>'
    html += '<li ><a href="' + spShare + '">咨询</a></li>'
    html += '<li ><a href="' + bbs + '">论坛</a></li>'
    html += '<li ><a href="' + msgbox + '">简介</a></li>'
//    html += '<li ><a href="'+about+'">关于我们</a></li>'
    html += '<li class="last_li"></li>'
    html += '	</ul>'
    html += '</div>'
    html += '<div class="nav_open">'
    html += '<div class="wrap_open_down" id="open"><i class="iconfont">&#xe61e;</i></div>'
    html += '<div class="wrap_open">'
    html += '<div class="wrap_open_up" id="down"><i class="iconfont">&#xe609;</i></div>'
    html += '<div class="wrap_open_title font_lxx"></div>'
    html += '<div class="hidden font_lx">'
    html += '<a href="' + home + '">首页</a>'
    html += '<a href="' + friend + '">网游</a>'
    html += '<a href="' + family + '">趣图</a>'
    html += '<a href="' + game + '">段子</a>'
    html += '<a href="' + customer + '">客服</a>'
    html += '<a href="' + spShare + '">咨询</a>'
    html += '<a href="' + bbs + '">论坛</a>'
    html += '<a href="' + msgbox + '">简介</a>'
//    html += '<a href="'+about+'">关于我们</a>' 
    html += '</div>'
    html += '</div>'
    html += '</div>';


    $('body').prepend(html);
    $('#wrapper ul li').eq(index).addClass('active_new');
    $('.nav_open .hidden a').eq(index).addClass('nav_open_active');
    $('.active_new').prev().toggleClass('active_prev_new');
    $('.active_new').next().toggleClass('active_next_new');

    var myScroll;

    function onload() {
        myScroll = new IScroll('#wrapper',
            {
                mouseWheel: true,//PC端的鼠标事件也监听，方便PC端调试
                click: true,//允许点击事件
                eventPassthrough: true,//纵向滚动整个页面，横向滚动iscroll区域
                scrollX: true,//默认是纵向，横向需要设置scrollX
            });
        if ($('.active_new').index() > 3 && $('.active_new').index() <= 6) {
            var distance = -$("#wrapper ul li").width() * 3;
            myScroll.scrollTo(distance, 0, 0);
        } else if ($('.active_new').index() > 6) {
            var distance = -$("#wrapper ul li").width() * 3 - $("#wrapper ul li").width() / 1.3;
            myScroll.scrollTo(distance, 0, 0);
        }
        myScroll.refresh();
    }

    var ele = $("#wrapper ul");
    ele.width((ele.find("li").length + 1) * (ele.find(".active_new").width() + 20));
    onload();

    $('#open').click(function () {
        $('.wrap_open').fadeIn(200)
    });
    $('#down').click(function () {
        $('.wrap_open').fadeOut(200)
    });


};

