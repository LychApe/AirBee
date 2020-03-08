<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 */
session_start();

require_once("./var/PathM.php");
AirBee_PathM::Go();
require(AirBee_PATH.'/AirBee/include/user.php');

function login(){
	
    $user = new User();
    
    if (isset($_POST['submit'])) {
    	
		    if (isset($_POST['username']) and isset($_POST['password'])){
		        $username = $_POST['username'];
		        $password = md5($_POST['password']);
		        /*这里用于字符串过滤等等，自己把握啦*/
		    } else {
		        die("<script>alert('安全委员会:请确认信息完整性!!!');location.href='./login.php';</script>");
		    }
    	
	    	if (empty($username)) {
	    		die("<script>alert('安全委员会:用户不能为空！!!');location.href='./login.php';</script>");
	    	}
	    	$row = $user -> Info($username);
	    	if (empty($row)){
		        die("<script>alert('安全委员会:用户不存在!!!');location.href='./login.php';</script>");
		    }
		    if (empty($password)){
		        die("<script>alert('安全委员会:密码不能为空！');location.href='./login.php';</script>");
    		}
    		if ($password != $row['password']){
		        die("<script>alert('安全委员会:密码错误!!!');location.href='./login.php';</script>");
		    }
    }
}

    	$_SESSION['username'] = $username;
		header('Location: ./Home/index.php'); /*跳转登录后主页*/
		exit();

var_dump($_POST['username'],$_POST['submit']);
#页面参数赋值
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';
$body = "login.partial.php";

#载入模板
require(Usr_T_PATH.'/NotLogin/main.php');