<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">&#xe3e7;</i></span>
        <a href="" class="mdui-typo-title">AirBee</a>
        <div class="mdui-toolbar-spacer">Cherry</div>
        <a class="mdui-btn mdui-btn-icon" onclick="window.history.go(0)" onLoad="javascript:document.yourFormName.reset()"
><i class="mdui-icon material-icons">&#xe863;</i></a>
    </div>
</header>
<!--<script>
	window.onkeydown = window.onkeyup = window.onkeypress = function (event) {  
    // 判断是否按下F12，F12键码为123  
    if (event.keyCode = 123) {  
        event.preventDefault(); // 阻止默认事件行为  
        window.event.returnValue = false;  
    }  
}
    let h = window.innerHeight;
    let w = window.innerWidth;


    //在本网页的任何键盘敲击事件都是无效操作 （防止F12和shift+ctrl+i调起开发者工具）  
    window.onkeydown = window.onkeyup = window.onkeypress = function () {
        window.event.returnValue = false;
        return false;
    }

    //禁用开发者工具F12
    document.onkeydown = function () {
        if (window.event && window.event.keyCode == 123) {
            event.keyCode = 0;
            event.returnValue = false;
            return false;
        }
    };

    //如果用户在工具栏调起开发者工具，那么判断浏览器的可视高度和可视宽度是否有改变，如有改变则关闭本页面  
    window.onresize = function () {
        if (h != window.innerHeight || w != window.innerWidth) {
            window.close();
            window.location = "about:blank";
        }
    }
</script>

<ul class="mdui-menu" id="menu">
    <li class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple">XJ女装门</a>
    </li>
    <li class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple">Help</a>
    </li>
</ul>
<script>
    var $$ = mdui.JQ;
    //监听鼠标右击事件 / 移动端长按事件
    $$(document).on('contextmenu', function (e) {
        // console.log(e);
        //0：移动端长按（iOS 测试未通过）
        //2：电脑端右键
        if(e.button === 2 || e.button === 0) {
            e.preventDefault();//阻止冒泡，阻止默认的浏览器菜单
            //鼠标点击位置，相对于浏览器
            var _x = e.pageX,
                _y = e.pageY;
            let $div = $$("<div></div>").css({
                position: 'absolute',
                top: _y+'px',
                left: _x+'px',
            });
            $$('body').append($div);//创建临时DOM
            // anchorSelector 表示触发菜单的元素的 CSS 选择器或 DOM 元素
            // menuSelector 表示菜单的 CSS 选择器或 DOM 元素
            // options 表示组件的配置参数，见下面的参数列表
            // 完整文档列表：https://doc.nowtime.cc/mdui/menu.html
            var inst = new mdui.Menu($div, '#menu');
            inst.open();//打开菜单栏
            $div.remove();//销毁创建的临时DOM
        }
    });
</script>!-->


