<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 */
session_start();
ob_clean(); 
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
		        die("<script>alert('安全委员会:请确认信息完整性!!!');location.href='./?User=Login';</script>");
		    }
    	
	    	if (empty($username)) {
	    		die("<script>alert('安全委员会:用户不能为空！!!');location.href='./?User=Login';</script>");
	    	}
	    	$row = $user -> Info($username);
	    	if (empty($row)){
		        die("<script>alert('安全委员会:用户不存在!!!');location.href='./?User=Login';</script>");
		    }
		    if (empty($password)){
		        die("<script>alert('安全委员会:密码不能为空！');location.href='./?User=Login';</script>");
    		}
    		if ($password != $row['password']){
		        die("<script>alert('安全委员会:密码错误!!!');location.href='./?User=Login';</script>");
		    }
		   $_SESSION['username'] = $username;
		   #header("Location:./index.php");
		   echo '<script>window.location.href="./index.php"</script>';
    	   exit;
    }
}

#var_dump($_POST['username'],$_POST['submit']);

$user = new User();

if($user->Check_Group("guest")){
    header("location: ./index.php");
}
#页面参数赋值
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';
$body = "login.partial.php";

#载入模板
require(Usr_T_PATH.'/NotLogin/main.php');