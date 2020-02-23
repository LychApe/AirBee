<link rel="stylesheet" href="<?php echo((Usr_Tsc_PATH."/NotLogin.css")); ?>">

<div class="mdui-container-fluid">
    <div class="mdui-row Back-E1">
    
          <div class="mdui-col-xs-12 mdui-valign">
            <div class="mdui-chip">
              <span class="mdui-chip-icon">Bio</span>
              <span class="mdui-chip-title"><span class="mdui-chip-title">鲁迅说：“<span id="rand-character"></span>”</span>
            </div>
         </div>
    
      <div class="mdui-col-xs-12">
          <img class="mdui-img-circle mdui-center" src="https://q1.qlogo.cn/g?b=qq&nk=1091044631&s=140" />
      </div>
    </div>
    
    <div class="mdui-row">
      <div class="mdui-col-xs-6 comment-section">
      </div>
      <div class="mdui-col-xs-6 mdui-float-right SetButton">
        <button class="mdui-fab mdui-hidden-sm-down mdui-color-theme-accent mdui-ripple"><i class="mdui-icon material-icons"></i></button>
      </div>
    </div>
    
    <div class="mdui-container">

      <div class="mdui-card mdui-shadow-0" style="margin-top: 16px; border-radius: 18px; background-color: #EEEEEE;">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title mdui-text-center">小窗台</div>
        </div>
        <div class="detail-info" style="background-color: #F5F5F5;">
        <div class="mdui-card-content">
		<div class="mdui-row-xs-3 mdui-hidden-xs-down">
        	  	
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title">名片</div>
			          <div class="mdui-card-primary-subtitle">Card</div>
			        </div>
			        </div>
			    </div>
			    
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title">博客</div>
			          <div class="mdui-card-primary-subtitle">Blog</div>
			        </div>
			        </div>
			    </div>
			    
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title">留言</div>
			          <div class="mdui-card-primary-subtitle">comment</div>
			        </div>
			        </div>
				</div>

			  </div>
        	  <div class="mdui-row-xs-3 mdui-hidden-sm-up">
        	  	
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary" style="text-align: center;">
			          <div class="mdui-card-primary-title">
    <i class="mdui-icon material-icons" style="
    font-size: 32px;
">contacts</i>
</div>
			          <div class="mdui-card-primary-subtitle">名片</div>
			        </div>
			        </div>
			    </div>
			    
			    <div class="mdui-col">
			        
			    <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary" style="
    text-align: center;
">
			          <div class="mdui-card-primary-title">
    <i class="mdui-icon material-icons" style="
    font-size: 32px;
">library_books</i>
</div>
			          <div class="mdui-card-primary-subtitle">博客</div>
			        </div>
			        </div></div>
			    
			    <div class="mdui-col">
			        
				<div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-color: #FAFAFA;">
			        <div class="mdui-card-primary" style="
    text-align: center;
">
			          <div class="mdui-card-primary-title">
    <i class="mdui-icon material-icons" style="
    font-size: 32px;
">comment</i>
</div>
			          <div class="mdui-card-primary-subtitle">留言</div>
			        </div>
			        </div></div>

			  </div>
        </div>
        </div>
      </div>

<br>
<div class="mdui-container">
<div class="mdui-valign">
  <div class="mdui-center" style="border-radius: 15px;"><iframe frameborder="no" border="15" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=31814005&auto=0&height=66" ></iframe></div>
</div>	
<br>	

<div class="mdui-table-fluid mdui-hidden-sm-down">
<?php
    $year=$_POST['y']=date('Y');
    $month=$_POST['m']=date('m');
    $days=date('t',strtotime("{$year}-{$month}-1"));
    $week=date('w',strtotime("{$year}-{$month}-1"));
?>
<center><h3 class='doc-title mdui-text-color-theme'><?php echo "公元 {$year} 年 {$month} 月"; ?></h3></center>
<?php
echo "<table class='mdui-table mdui-shadow-0' style='border-radius: 3px;'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th class='mdui-table-col-numeric'>周日(Sun.)</th>";
        echo "<th class='mdui-table-col-numeric'>周一(Mon.)</th>";
        echo "<th class='mdui-table-col-numeric'>周二(Tue.)</th>";
        echo "<th class='mdui-table-col-numeric'>周三(Wed.)</th>";
        echo "<th class='mdui-table-col-numeric'>周四(Thu.)</th>";
        echo "<th class='mdui-table-col-numeric'>周五(Fri.)</th>";
        echo "<th class='mdui-table-col-numeric'>周六(Sat.)</th>";
      echo "</tr>";
    echo "</thead>";
      
        for($i=1-$week;$i<=$days;){
            echo "<tr>";
            for($j=0;$j<7;$j++){
                if($i>$days || $i<=0){
                    echo "<td>&nbsp;</td>";
                }else{
                echo "<td>{$i}</td>";
                }
                $i++;
            }
            echo "</tr>";
        }
        echo "</table>";
?>
</div>
</div>
</div>
</div>
<br/>