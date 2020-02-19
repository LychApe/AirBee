<?php header("Content-type:text/html;charset=utf-8");?>
<?php include("./common/header.php"); ?>
<center>
<h1 class="doc-title mdui-text-color-theme">添加待办事项</h1>
<?php

$todo = $_POST["todo"];
$days = $_POST["days"];
$todo = "{$todo}##{$days}@@@";

$info = file_get_contents("todo.txt");
file_put_contents("todo.txt",$info.$todo);
echo "</br>";

echo "添加成功！";

 ?>
     <a href='index.php' class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">返回首页</a>
</center>


<?php include("./common/footer.php"); ?>