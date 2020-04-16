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

$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';

include("routing.php");

require(AirBee_PATH.'/AirBee/include/user.php');
$user = new User();
if(!$user->Check_Logon()){
    #页面参数赋值
	$body = "notlogin.partial.php";
	#载入模板
	require(Usr_T_PATH.'/NotLogin/main.php');
}
if($user->Check_Group("guest") or $user->Check_Group("admin") or $user->Check_Group("root")){
    header("location: ?User=Home");
}


