<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 */
include("header.php");
?>
<div class="mdui-progress">
    <div class="mdui-progress-determinate" style="width: 20%;"></div>
</div>

<br/>
<br/>

  <div class="mdui-container">
	<div class="mdui-row">
	    <div class="mdui-col-sm-2"></div>
	    
	    <div class="mdui-col-sm-8">
		    <div class="mdui-card mdui-center mdui-shadow-10" style="border-radius: 8px;">
		      <div class="mdui-card-primary">
		         <div class="mdui-card-primary-title">使用协议</div>
		         <div class="mdui-card-primary-subtitle">Use Agreement</div>
		      </div>
		      <div class="mdui-card-content">
重要须知：在此特别提醒用户认真阅读、充分理解本协议，用户应认真阅读、充分理解本协议中各条款，包括免除或限制的免责条款以及对用户的权利限制条款。用户需审慎阅读并选择接受或不接受本协议，除非用户接受本协议所有条款，否则用户无权安装或使用本软件及相关服务。用户的安装、使用、登录等行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
<br/>
<br/>
一、用户需遵守的约定<br/>
1.1 以自用为目的，可将AirBee用于盈利或非盈利项目上，且不受任何限制。<br/>
1.2 以自用为目的，在保留版权标识的前提下可任意修改程序源码，但不得公开发行。<br/>
1.3 禁止以任何方式破坏AirBee的商业授权机制。<br/>
1.4 用户禁止利用AirBee发表、传送、传播、储存违反国家法律、危害国家安全、社会稳定、公序良俗的内容，或任何不当的、侮辱诽谤的、淫秽的、暴力的及任何违反国家法律法规政策的内容。<br/>
1.5 用户禁止利用AirBee制作、发布、传播用户窃取相关或其他软件及他人专属信息、财产的软件。<br/>
<br/>
二、免责声明<br/>
2.1 用户出于自愿而使用AirBee，您必须了解使用本软件的风险，本软件不作任何类型的担保，不论是明示的、默示的，包括但不限于用户在任何情况下因使用或不能使用AirBee所产生的直接、间接、偶然、特殊及后续的损害及风险，本软件不承担任何责任。<br/>
2.2 用户清楚互联网软件的特殊性，AirBee与大多数互联网软件一样，受包括但不限于用户原因、网络服务质量、社会环境等因素的影响，可能受到各种安全问题的侵扰，如用户下载安装的其他软件或访问的其他网站中含有“木马”等病毒，威胁到用户的计算机信息和数据的安全，继而影响AirBee的正常使用等，用户应加强信息安全及使用资料的保护，以免遭受损失<br/>
2.3 用户因使用AirBee违反国家法律法规的，本软件不承担任何责任。<br/>
<br/>

<div class="mdui-typo">
<div class="mdui-container">
    <div class="mdui-col">
      <label class="mdui-checkbox">
        <input type="checkbox" id="checkbox" onclick="check()"/>
        <i class="mdui-checkbox-icon"></i>
        我已看过并接受 <a href="#">《使用协议》</a>
      </label>
      <input class="mdui-btn mdui-btn-raised mdui-color-indigo-a200 mdui-float-right" type="button" id="button" onclick="window.location.href='step-2.php'" value="下一步" disabled="disabled" />
    </div>	
</div>
</div>
			<script>
			  document.getElementById('checkbox').indeterminate = true;
			</script>
			<script>
			    function check(){
			        var checkbox = document.getElementById("checkbox");
			        if(checkbox.checked == true){
			            document.getElementById("button").disabled="";
			        }
			        else{
			            document.getElementById("button").disabled="disabled";
			        }
			    }
			</script>
		      </div>
		    </div>
	</div>
	    
	    <div class="mdui-col-sm-2"></div>
	</div>
  </div>
  
  <br/>
  <br/>
  
  <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>