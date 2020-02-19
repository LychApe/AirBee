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
    <div class="mdui-progress-determinate" style="width: 60%;"></div>
</div>

<br/>
<br/>

  <div class="mdui-container">
	<div class="mdui-row">
	    <div class="mdui-col-sm-1"></div>
	    
		<div class="mdui-col-sm-10">
		    <div class="mdui-card mdui-center mdui-shadow-10" style="border-radius: 8px;">
		    <div class="mdui-card-primary">
		         <div class="mdui-card-primary-title">填写相关信息</div>
		         <div class="mdui-card-primary-subtitle">Fill in the relevant information</div>
		    </div>
		    <div class="mdui-card-content">

<form name="login" action="step-4.php" method=post >
    <fieldset id="tb">
        <legend>
            <strong>1.数据库信息</strong>
        </legend>
        <table border="0">
            <tr>
                <td>数据库服务器：</td>
                <td><input type="text" value="localhost" class="form-control" name="db_host" ></td>
                <td>数据库的服务器地址，一般为localhost</td>
            </tr>
            <tr>
                <td>数据库用户名：</td>
                <td><input type="text" value="root" class="form-control" name="db_usr"></td>
            </tr>
            <tr>
                <td>数据库密码：</td>
                <td><input type="text" value="" class="form-control" name="db_pwd"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>数据库名：</td>
                <td><input type="text" class="form-control" name="db_name"></td>
            </tr>
        </table>
    </fieldset>
    <fieldset id="tb">
        <legend>
            <strong>2.管理员信息</strong>
        </legend>
        <table border="0">
            <tr>
                <td>管理员用户名</td>
                <td><input type="text"class="form-control" name="admin_usr" value="admin"></td>
            </tr>
            <tr>
                <td>管理员密码</td>
                <td><input type="text"class="form-control" name="admin_pwd"></td>
                <td>密码必须大于等于6位</td>
            </tr>
            <tr>
                <td>管理员密码确认</td>
                <td><input type="text"class="form-control" name="admin_pwd2"></td>
            </tr>
            <tr>
                <td>管理员邮箱</td>
                <td><input type="text"class="form-control" name="admin_email" value="admin@admin.com"></td>
                <td>用于接受升级提醒、漏洞修复等，也是管理员的登录账号</td>
            </tr>
        </table>
    </fieldset>

    <fieldset id="tb">
        <legend>
            <strong>3.站点信息</strong>
        </legend>
        <table border="0">
            <tr>
                <td>站点名称</td>
                <td><input type="text"class="form-control" name="site_name" value="AirBee"></td>
                <td>*</td>
            </tr>
        </table>
    </fieldset>
    <br/>
        <input name="log" type = "submit" class="btn mdui-btn mdui-color-indigo-a200 mdui-float-left" value = "下一步">
        &nbsp;<a href="step-2.php" class="btn mdui-btn mdui-color-indigo-a200 mdui-float-right">上一步</a>
</form>
		    </div>
		    </div>
		</div>
	    
	    <div class="mdui-col-sm-1"></div>
	</div>
  </div>
  
  <br/>
  <br/>
  
  <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>