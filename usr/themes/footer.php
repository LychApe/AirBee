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
<a onclick="topFunction()" id="myBtn" title="回顶部" class="mdui-fab mdui-fab-fixed mdui-ripple top mdui-color-theme-accent" style="display: none;"><i class="mdui-icon material-icons">arrow_upward</i></a>  
<footer class="foot mdui-text-center  AB-footer-morden">
	<div class="mdui-typo">
	Copyright © 2020 <a href="https://www.lychape.cn">LychApe Studios</a>
	</div>
	Powered by AirBee 0.1
	<br/>
	<a href='https://gitee.com/LychApe/AirBee/stargazers'><img src='https://gitee.com/LychApe/AirBee/badge/star.svg?theme=dark' alt='star'></img></a>
</footer>


<!-- 返回顶部js -->
<script type="text/javascript">
// 当网页向下滑动 30px 出现"返回顶部" 按钮
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {console.log(121);
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// 点击按钮，返回顶部
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script src="//cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>