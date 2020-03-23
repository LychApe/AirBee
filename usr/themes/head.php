    <head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	    <meta name='keywords' content=' '/>
	    <meta name='description' content=' '/>
	    <title>AirBee</title>
	    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
	    <script src="https://cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>
	    <script>
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

	</head>
	
	