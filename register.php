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
require(AirBee_PATH.'/AirBee/include/db.php');
require(AirBee_PATH.'/AirBee/include/user.php');

function Register(){
	
    $user = new User();
    $db = new AirBee_DB();
    
    if (isset($_POST['submit'])) {
    	
    	if($_POST['username'] == "" || $_POST['password'] == "" || $_POST['pwd_again'] == "" || $_POST['email'] == "" || $_POST['qq'] == ""){
    		die("<script>alert('安全委员会:请确认信息完整性!!!');location.href='./register.php';</script>");
    	}elseif (mb_strlen($_POST['password'])<6) {
    		die("<script>alert('安全委员会:密码小于6位!!!');location.href='./register.php';</script>");
    	}elseif($_POST['password']!=$_POST['pwd_again']){
				die("<script>alert('安全委员会:密码不一致!!!');location.href='./register.php';</script>");
    	}elseif($db->numRows("SELECT * FROM `user` WHERE `username` = '{$_POST['username']}'")>0){
    			echo "<script>alert('用户名已经存在！')</script>";
    	}elseif($db->numRows("SELECT * FROM `user` WHERE `email` = '{$_POST['email']}'")>0){
    			echo "<script>alert('邮箱已经存在！')</script>";
    	}else{
    		$username = $_POST['username'];
    		$qq = $_POST['qq'];
    		$email = $_POST['email'];
    		$password = md5($_POST['password']);
    		$group = 'guest';
    		return $user-> Add($username,$password,$group,$email,$qq)?"<script>alert('安全委员会:注册成功!');location.href='./login.php';</script>":"注册失败";
    	}
    }
    
}

#页面参数赋值
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';
$body = "register.partial.php";
#载入模板
require(Usr_T_PATH.'/NotLogin/main.php');
