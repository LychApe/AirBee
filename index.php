<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 */

require_once("./var/PathM.php");
AirBee_PathM::Go();

#页面参数赋值
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';
$body = "notlogin.partial.php";
#载入模板
require(Usr_T_PATH.'/NotLogin/main.php');