<?php header("Content-type:text/html;charset=utf-8");?>
<?php include("./common/header.php"); ?>
<div class="mdui-table-fluid">
	<form action = "./doAdd.php" method = "post">
  <table class="mdui-table mdui-table-hoverable">
      <tr>
        <td>待办事项：</td>
        <td><textarea class="mdui-textfield-input" name = "todo" required></textarea></td>
      </tr>
      <tr>
        <td>预期：</td>
        <td><input type = "text" class="mdui-textfield-input" name = "days" required></td>
      </tr>
      <tr>
          <td><center><input type = "submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" value = "提交"></center></td>
         <td><center><input type = "reset" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" value = "重置"></center></td>
         </tr>
  </table>
</form>
</div>

<?php include("./common/footer.php"); ?>