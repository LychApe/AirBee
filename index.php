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

#页面参数赋值_A01
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';

#路由
if($_GET["User"]=="Register"){
include("register.php");
die();	
}
if($_GET["User"]=="Login"){
include("login.php");
die();	
}
if($_GET["App"]=="scoreger"){
$body = (Usr_P_PATH.'/scoreger/scoreger.php');
require(Usr_T_PATH.'/main.php');
die();	
}

require(AirBee_PATH.'/AirBee/include/user.php');
require(AirBee_PATH.'/AirBee/include/set.php');

$user = new User();
$set = new Set();

if(!$user->Check_Logon()){
    #页面参数赋值
	$body = "notlogin.partial.php";
	#载入模板
	require(Usr_T_PATH.'/NotLogin/main.php');
}
if($user->Check_Group("guest")){
    header("location: user.php");
}

