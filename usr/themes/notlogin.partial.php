<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name='keywords' content=' '/>
    <meta name='description' content=' '/>
    <title>AirBee</title>
    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
</head>

<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">&#xe3e7;</i></span>
        <a href="" class="mdui-typo-title">AirBee</a>
        <div class="mdui-toolbar-spacer">One</div>
        <a class="mdui-btn mdui-btn-icon" onclick="window.history.go(0)"><i class="mdui-icon material-icons">&#xe863;</i></a>
    </div>
</header>

<body  class="<?php echo($page['body'] ); ?>">
	
  <?php require 'list.php';?>
        

<style>
.Back-E1{
  padding-top: 20px;
  padding-bottom: 60px;
  background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
}
.Back-E2{
 border-radius: 18px;
}
.comment-section {
 width: 145px;
 top: 20%;
 transform: translateY(-25%);
}
.SetButton{
 transform: translateY(-47.2%);
 width: 95px;
}
.detail-info {
    overflow: hidden;
    padding: 10px 20px;
    margin: 0;
    border-top: 1px dashed #e0e0e0;
    color: #626262;
    font-size: 14px;
    line-height: 19px;
    background-color: #f6f6f6;
}
.foot {
    box-sizing: border-box;
    padding: 20px 0;
    padding-right: 20px;
    padding-left: 20px;
    width: 100%;
    background-color: #f0f0f0;
    color: #787878;
    font-weight: 300;
    font-size: 15px;
    line-height: 25px;
}
.foot.AB-footer-morden {
    padding: 30px 0;
}
</style>

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
  
<footer class="foot mdui-text-center  AB-footer-morden">
<div class="mdui-typo">
<p>Powered by AirBee 0.1</p>
<br/>
Copyright © 2020 <a href="https://www.lychape.cn">LychApe Studios</a>
</div>
</footer>
  
    
<script>
      function randomCharacter(element,characters=["UNDEFINED"]){
        var settings = {
          el:element,
          chars:characters,
          delay:{
            cycle:4000,
            char:45
          },
          intervals:{
            cycle:null,
            char:null
          },
          progress:{
            cycle:null,
            char:null
          }
        };
        function updateEntire(){
          //if(!settings.intervals.char){
            settings.progress.cycle = Math.random()*settings.chars.length|0;
            settings.progress.char = 0;
            //settings.intervals.char = setInterval(updateOneCharacter,settings.delay.char);
          //}
        }
        function updateOneCharacter(){
       // if(settings.progress.char++<settings.chars[settings.progress.cycle].length)
          document.querySelector(settings.el).innerText = 
            settings.chars[settings.progress.cycle].substr(0,settings.progress.char)+
            Math.random().toString(16).substr(2,settings.chars[settings.progress.cycle].length-settings.progress.char);
         // else
         //   settings.intervals.char = clearInterval(settings.intervals.char);
        }
        function cycleController(){
          //Finally I decided to use a controller to control the cycles looping.
          if(!settings.intervals.char) {
            updateEntire();
            settings.intervals.char = setInterval(function(){
              if(settings.progress.char++<settings.chars[settings.progress.cycle].length)
                updateOneCharacter();
              else
                settings.intervals.char = clearInterval(settings.intervals.char);
            },settings.delay.char);
          }
        }
        settings.__proto__.restart = function(cycle=4000,char=45){
          clearInterval(settings.intervals.cycle);
          clearInterval(settings.intervals.char);
          settings.intervals.char = null;//Prevent exceptions.
          settings.delay = {cycle:cycle,char:char};
          settings.intervals.cycle = setInterval(cycleController,cycle);
          cycleController();//I don't want to wait for a few seconds first.
        }
        Object.freeze(settings.__proto__);//Prevent unexpected changes.
        settings.restart();//Start the refresher.
        return settings;
      }
      var example = new randomCharacter("#rand-character",[
        //古学词库
        "慎终追远，民德归厚矣。",
        "学而时习之，不亦说乎？",
        "巧言令色，鲜矣仁！",
        "慎终追远，民德归厚矣。",
        "贫而无怨难，富而无骄易。",
        "其言之不怍，则为之也难。",
        "勿欺也，而犯之。",
        "古之学者为己，今之学者为人。",
        "北冥有鱼，其名为鲲。鲲之大，不知其几千里也。",
        "吾有大树，人谓之樗。",
        "窈窕淑女、君子好逑。",
        "蒹葭苍苍、白露为霜。",
        "蒹葭凄凄、白露未晞",
        "蒹葭采采、白露未已。",
        "学而时习之不亦说乎",
        "学如不及犹恐失之",
        "吾尝终日不食终夜不寝以思无益不如学也",
        "未闻花名，但识花香，再见花时，泪已千行", //逼真古学😂
        "人类的本质是复读机",
        "仕而优则学学而优则仕",
        "学不厌智也教不倦仁也",
        "君有忧色，何也？",
        "爱亲者，不敢恶于人",
        "敬亲者，不敢慢于人",
        "爱敬尽于事亲，而德教加于百姓，刑于四海",
        "夙兴夜寐，无忝尔所生"
      ]);
   </script>

  <script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>
  
</body>
</html>