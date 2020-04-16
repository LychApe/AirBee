<style>
.foot {
    box-sizing: border-box;
    padding: 20px 0;
    padding-right: 20px;
    padding-left: 20px;
    width: 100%;
    background-color: #f0f0f0;
    color: #787878;
    font-weight: 300;
    font-size: 15px;
    line-height: 25px;
}
.foot.AB-footer-morden {
    padding: 30px 0;
}
</style>
<!--右下悬浮按钮-->
  <div class="mdui-fab-wrapper" mdui-fab="{trigger: 'hover'}">
    <button class="mdui-fab mdui-ripple mdui-color-theme-accent">
      <i class="mdui-icon material-icons">&#xe145;</i>
      <i class="mdui-icon mdui-fab-opened material-icons">&#xe14c;</i></button>
      <div class="mdui-fab-dial">
        <a href="#top" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink" id="myBtn">
          <i class="mdui-icon material-icons">&#xe5d8;</i></a>
          <a href="#" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink">
            <i class="mdui-icon material-icons">&#xe243;</i></a>
      </div>
  </div>
<footer class="foot mdui-text-center  AB-footer-morden">
	<div class="mdui-typo">
	Copyright © 2020 <a href="https://www.lychape.cn">LychApe Studios</a>
	</div>
	Powered by AirBee 0.1
	<br/>
	<a href='https://gitee.com/LychApe/AirBee/stargazers'><img src='https://gitee.com/LychApe/AirBee/badge/star.svg?theme=dark' alt='star'></img></a>
</footer>

<!-- 返回顶部js -->
<script src="//cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>
<script src='https://cdnjs.loli.net/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js'></script>
<script>
var scroll = new SmoothScroll("a[href*='#']");
var $$ = mdui.JQ;
$$('#myBtn').on('click', function () {
  mdui.snackbar({
    message: '啊！撞到头辣！(๑╹っ╹๑)',
    position: 'right-top'
  });
});
var $$ = mdui.JQ;
$$('#ERRO-404').on('click', function () {
  mdui.snackbar({
    message: '当前状态不支持辣！(๑╹っ╹๑)',
    position: 'right-top'
  });
});
// 当网页向下滑动 30px 出现"返回顶部" 按钮
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
</script>

<div class="mdui-dialog" id="ABOUT_AirBee">
    <div class="mdui-dialog-title">AirBee</div>
        <div class="mdui-dialog-content">
        <blockquote>
				</p> 
				<div class="mdui-typo">       
				<p>开发者: <a href="https://hanfen.run" target="_blank">HanFen</a> 
                <p>鸣谢: <a href="https://github.com/DFFZMXJ" target="_blank">学神之女</a> | <a href="https://cicn.uk.to/" target="_blank">Kafea</a> | <a href="#" target="_blank">萌萌的小树苗</a></p>
                <p>首席赞助商: <a href="https://bearhosting.co.uk/aff.php?aff=4" target="_blank">BearHosting</a> | <a href="https://whitebear.life/" target="_blank">WhiteBear</a></p>
                <p>开发组QQ群: 1034830519</p>
				</div>
				<footer>© Copyright 2019-2020 by LychApe All rights are reserved.</footer>
		</blockquote>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-close>知 道 啦 !</button>
            </div>
</div>

<style>
.size-watch{
	width: -webkit-fill-available;
    height: 0px;
    border-width: 0px;
}
</style>
<script>
function riseze (el, cb) { var iframe = document.createElement('iframe'); 
	iframe.setAttribute('class', 'size-watch'); el.appendChild(iframe); 
	var oldWidth = el.offsetWidth; var oldHeight = el.offsetHeight; 
	function sizeChange () { 
		var width = el.offsetWidth; var height = el.offsetHeight; 
		if (width !== oldWidth || height !== oldHeight) { 
			cb({width: width, height: height}, {width: oldWidth, height: oldHeight}); 
			oldWidth = width; oldHeight = height; 
			}
		} 
			var timer = 0; 
			iframe.contentWindow.onresize = function () { 
				clearTimeout(timer); 
				timer = setTimeout(sizeChange, 20); 
				}; 
		} 
		var e = document.querySelector('.mdui-container'); 
		riseze(e, (val, oldVal) => { 
			myChart.resize();
			myops.resize();
			myChart1.resize(); 
		});
</script>