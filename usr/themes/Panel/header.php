<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">&#xe3e7;</i></span>
        <a href="" class="mdui-typo-title">AirBee</a>
        <div class="mdui-toolbar-spacer">Panel</div>
	         	<?php $row = $user->QInfo();?>
	    <a href="javascript:;"><img src="//q2.qlogo.cn/headimg_dl?dst_uin=<?php echo($row[0]['qq']);?>@qq.com&spec=640" class="layui-nav-img"></a>
    </div>
</header>
