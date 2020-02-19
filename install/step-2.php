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
    <div class="mdui-progress-determinate" style="width: 40%;"></div>
</div>

<br/>
<br/>

  <div class="mdui-container">
	<div class="mdui-row">
	    <div class="mdui-col-sm-2"></div>
	    
		<div class="mdui-col-sm-8">
		    <div class="mdui-card mdui-center mdui-shadow-10" style="border-radius: 8px;">
		    <div class="mdui-card-primary">
		         <div class="mdui-card-primary-title">检查环境配置</div>
		         <div class="mdui-card-primary-subtitle">Check the environment configuration</div>
		    </div>
		    <div class="mdui-card-content">

<div class="mdui-table-fluid">
    <table class="mdui-table">
      <thead>
        <tr>
          <th>#</th>
          <th>功能或状态</th>
          <th>最低配置要求/推荐配置要求</th>
          <th class="mdui-table-col-numeric">当前配置</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>PHP版本</td>
          <td>7.1及以上/7.4</td>
          <td>
          	<b><font color="<?php
            if (version_compare(PHP_VERSION, '7.1.0') >= 0) {
              echo"green";
            } else {
              echo "red";
            }
            ?> ">
              <?= PHP_VERSION?>
            </font>
          </b>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>MySQLi数据库拓展</td>
          <td>支持/支持</td>
          <td>
			<b>
            <?php
            if (function_exists('mysqli_connect')) {
              echo "<font color='green'>支持</font>";
            }else {
              echo "<font color='red'>不支持</font>";
            }
            ?>
            </b>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>配置文件写入</td>
          <td>支持/支持</td>
          <td>
          	<b>
            <?php
            if (is_writable("../Data/config-test.php")) {
              echo "<font color='green'>支持</font>";
            }else {
              echo "<font color='red'>不支持</font>";}
            ?>
          </b>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>程序最长运行时间</td>
          <td>15秒及以上/30秒及以上</td>
          <td>
          <b><font color="<?php
            if (ini_get("max_execution_time")>= 15) {
              echo"green";
            } else {
              echo "red";
            }
            ?> ">
              <?= ini_get("max_execution_time")?>秒
            </font>
          </b>
          </td>
        </tr>
	    <tr>
	      <td>5</td>
	      <td>文件上传大小限制：</td>
	      <td>1M/5M</td>
	      <td>
	        <b><font color="<?php
	          preg_match_all('/\d+/',ini_get("upload_max_filesize"),$arr);
	          $arr = join('',$arr[0]);
	          if ($arr>=1) {
	            echo"green";
	          } else {
	            echo "red";
	          }
	          ?>">
	        <?= ini_get("upload_max_filesize") ?></td>
	    </tr>
      </tbody>
    </table>
  </div>
<br/>
<a href="step-3.php" class="btn mdui-btn mdui-color-indigo-a200 mdui-float-left">下一步</a>&nbsp;<a href="Install.php" class="btn mdui-btn mdui-color-indigo-a200 mdui-float-right">上一步</a>
<br/>
<br/>

		    </div>
		    </div>
		</div>
	    
	    <div class="mdui-col-sm-2"></div>
	</div>
  </div>
  
  <br/>
  <br/>
  
  <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>