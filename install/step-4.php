<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 */
include("header.php");
$stime = microtime(true);
?>
<br/>
<br/>
<br/>
<link rel="stylesheet" type="text/css" href="https://www.html5tricks.com/demo/css3-wave-text/css/zzsc.css">
<link rel="stylesheet" type="text/css" href="https://www.html5tricks.com/demo/css3-wave-text/dist/css/txt.wav.css">
  <div class="mdui-container">
  	<div class="mdui-valign">
  	<div class="zzsc">
		<div class="txtwav flip mdui-center">
		  <p>海内存知己，天涯若比邻。</p>
		</div>
		<br/>
		<div class="txtwav slow mdui-center">
		  <p>需要一杯咖啡的时间...</p>
		</div>
	</div>
	</div>
  </div>
<script src="https://www.html5tricks.com/demo/css3-wave-text/dist/js/txt.wav.min.js"></script>

<?php
/*定义数组1*/
$install = array();

/*把相关信息保存在数组里*/
$install['go_back'] = "<a href='./step-3.php'>返回</a>";
$install['db_name'] = @$_POST['db_name'];//数据库名
$install['db_host'] = @$_POST['db_host'];//主机地址
$install['db_user'] = @$_POST['db_usr'];//数据库用户名
$install['db_pawd'] = @$_POST['db_pwd'];//数据库密码
$install['admin_user'] = @$_POST['admin_usr'];//管理员用户名
$install['admin_pawd'] = @$_POST['admin_pwd'];//管理员密码
$install['admin_pwd2'] = @$_POST['admin_pwd2'];//管理员密码确认
$install['admin_mail']  = @$_POST['admin_email'];//管理员邮箱
$install['site_name']  = @$_POST['site_name'];//管理员邮箱

/*参数预处理*/
if(!$install['db_name'] || !$install['db_host'] || !$install['db_user']){
    die("<b><font color='red'>请填写数据库信息。</font></b>".$install['go_back']);
}
if(!$install['admin_user'] || !$install['admin_pawd'] || !$install['admin_pwd2'] || !$install['admin_mail']){
    die("<b><font color='red'>请填写管理员信息。</font></b>".$install['go_back']);
}
if(!$install['site_name']){
    $install['site_name'] = "AirBee";
}
if($install['admin_pawd'] != $install['admin_pwd2']){
    die("<b><font color='red'>管理员密码和确认密码不一致。</font></b>".$install['go_back']);
}
if(strlen($install['admin_pawd'])<6){
    die("<b><font color='red'>管理员密码应大于等于6位。</font></b>".$install['go_back']);
}

/*连接数据库
$con = new mysqli($install['db_host'],$install['db_user'],$install['db_pawd'],$install['db_name']);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error.$install['go_back']);
}*/

/*读取SQL文件
$sql = explode(';',file_get_contents("install.sql"));
*/
/*执行SQL语句
foreach ($sql as $value) {
   $con->query($value . ';');
}*/


/*写入配置文件*/
$myfile = fopen("../common/config.php", "w") or die("Unable to open file!");
$txt = "<?php
define('mysql_servername','" .$install['db_host']. "'); //主机地址，默认为localhost,默认端口为3306,可添加端口号，例如localhost:8888
define('mysql_username','" .$install['db_user']. "'); //数据库用户名
define('mysql_password','" .$install['db_pawd']. "');//数据库密码
define('mysql_database','" .$install['db_name']. "'); //数据库名
?>";
fwrite($myfile, $txt);
fclose($myfile);

/*输出安装耗时*/
$etime = microtime(true);//获取程序执行结束的时间
$total = $etime - $stime;   //计算差值
echo "<p>安装完成。安装过程共耗时$total 秒";
?>