<link rel="stylesheet" href="<?php echo((Usr_Tsc_PATH."/NotLogin.css")); ?>">

<div class="mdui-container-fluid">
    <div class="mdui-row Back-E1" style="position: relative">
    
          <div class="mdui-col-xs-12 mdui-valign">
            <div class="mdui-chip" style="background: linear-gradient(-20deg, #ddd6f3 0%, #faaca8 100%, #faaca8 100%);">
              <!--<span class="mdui-chip-icon">Bio</span>!-->
              <span class="mdui-chip-title"><span class="mdui-chip-title">鲁迅说：“<span id="rand-character"></span>”</span>
            </div>
         </div>
    
      <div class="mdui-col-xs-12">
	<img class="mdui-img-circle mdui-center" src="https://s6.cccc.ac.cn/2020/02/27/b6b36f97f9ab3.png" style="width: 140px;
	    height: 140px;"/>
      </div>
      
<div class="mdui-container-fluid">      
<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('https://s6.cccc.ac.cn/2020/03/26/b6c17bc3bfa19.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('https://s6.cccc.ac.cn/2020/03/26/954a644eb1a23.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('https://s6.cccc.ac.cn/2020/03/26/9d890dbdc088f.png')"></div>
  </div>
</div>         
</div> 

    </div>
    
    <div class="mdui-container">
    	
        <div class="mdui-card-content">
		<div class="mdui-row-xs-3 mdui-hidden-xs-down" style="transform: translateY(50%);z-index: 3;position: inherit;">
        	  	
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); ">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title" style="color: #f0f0f0;">名片</div>
			          <div class="mdui-card-primary-subtitle" style="color: #f0f0f0;">Card</div>
			        </div>
			        </div>
			    </div>
			    
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title" style="color: #f0f0f0;">博客</div>
			          <div class="mdui-card-primary-subtitle" style="color: #f0f0f0;">Blog</div>
			        </div>
			        </div>
			    </div>
			    
			    <div class="mdui-col">
			        <div class="mdui-card mdui-shadow-3 mdui-hoverable" style="border-radius: 15px; background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);" mdui-dialog="{target: '#comment'}">
			        <div class="mdui-card-primary">
			          <div class="mdui-card-primary-title" style="color: #f0f0f0;">留言</div>
			          <div class="mdui-card-primary-subtitle" style="color: #f0f0f0;">comment</div>
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


    <div class="mdui-container">
      <div class="mdui-card mdui-shadow-4" style="border-radius: 15px;">
        <div class="mdui-card-content">
        <br/>
        <br/>

		<div class="mdui-row">
			
		<!--课程表-->
		  <div class="mdui-col-xs-12 mdui-col-sm-8">
		  	<link rel="stylesheet" href="<?php echo((Usr_Tsc_PATH."/classTimeTable.css")); ?>">
			    <div id="class-table" class="class-table">
					<!--表头-->
			        <div class="ct-header"></div>
					<!--表格主体-->
			        <div class="ct-body"></div>
			    </div>
		  	<script src="<?php echo((Usr_Tsj_PATH."/classTimeTable.js")); ?>"></script>
		  </div>
		  
		<!--模块卡片-->
		  <div class="mdui-col-xs-6 mdui-col-sm-4 mdui-hidden-xs-down">
		  	<!--#1-->
		  	<div class="mdui-card mdui-shadow-0" style=" border-radius: 13px; background-image: linear-gradient(to right, #434343 0%, black 100%);">
		        <div class="mdui-card-primary">
		          <div class="mdui-card-primary-title" style="color: #d6d7d9;">小黑板</div>
		        </div>
		        <div class="mdui-divider"></div>
		        <div class="mdui-card-content" style="color: #d6d7d9;">
		        	子曰：「学而时习之，不亦说乎？有朋自远方来，不亦乐乎？人不知，而不愠，不亦君子乎
		        </div>
		  	</div>
		  	<br/>
		  	<!--#2-->
		  	<div class="mdui-card" style=" border-radius: 13px; background-image: linear-gradient(to right, #afb4b3 0%, #dbdbd8 100%);">
		        <div class="mdui-card-primary">
		          <div class="mdui-card-primary-title" style="color: #d6d7d9;">最新留言</div>
		        </div>
		        <div class="mdui-divider"></div>
		    	<div class="" style="color: #d6d7d9;">
		        	
<div class="timeline-small">
    <div class="timeline-small-body">
        <ul>
            <li>
                <div class="bullet pink"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e;">
				  <img class="mdui-chip-icon" src="https://q2.qlogo.cn/headimg_dl?dst_uin=599487077@qq.com&spec=640"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">GKD !!!</span>
				</div>
            </li>
            <li>
                <div class="bullet orange"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e;">
				  <img class="mdui-chip-icon" src="https://q2.qlogo.cn/headimg_dl?dst_uin=838214611@qq.com&spec=640"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">吃!吃!吃! 吃nm!</span>
				</div>
            </li>
            <li>
                <div class="bullet green"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e;">
				  <img class="mdui-chip-icon" src="https://i.loli.net/2020/02/26/NCnhiD7keYlmuF2.jpg"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">成电大佬，文笔上佳</span>
				</div>
            </li>
            <li>
                <div class="bullet blue"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e;">
				  <img class="mdui-chip-icon" src="https://secure.gravatar.com/avatar/b1cd9865b14da113a093860b0f71e16d?s=500&r=X&d="/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">23333333333333333333333333333333333333333333333333</span>
				</div>
            </li>
        </ul>
    </div>
</div>
		        	
		        </div>
		  	</div>
		  	<br/>
		  	<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="100%" height=86 src="//music.163.com/outchain/player?type=2&id=34125094&auto=0&height=66"></iframe>
		  	<br/>
		  </div>
		  
		</div>
		
        </div>
      </div>
    </div>

<BR/>
<BR/>



           <div class="mdui-col-xs-12 mdui-col-sm-12">
                <div class="mdui-card mdui-shadow-15" style="border-radius: 20px;">
                    <div class="mdui-card-actions">
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><i class="mdui-icon material-icons">mic_none</i></button>
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><i class="mdui-icon material-icons">pets</i></button>
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-200 mdui-ripple mdui-float-right"><i class="mdui-icon material-icons">blur_on</i></button>
                    </div>
                </div>
            </div>  




</div>

<br/>
</div>
</div>
<br/>


<style>
    .done {
        color: red;
        text-decoration: line-through;
    }
</style>

    <style>
        .timeline-small {
            max-width: -webkit-fill-available;
            max-height: 630px;
            overflow: hidden;
            box-shadow: 0 0 40px #a0a0a0;
            font-family: 'Open Sans', sans-serif;
        }
        .timeline-small-body ul {
            padding: 1em 0 0 2em;
            margin: 0;
            list-style: none;
            position: relative;
        }
        .timeline-small-body ul::before {
            content: ' ';
            height: 100%;
            width: 5px;
            background-color: #d9d9d9;
            position: absolute;
            top: 0;
            left: 2.4em;
            z-index: 1;
        }
        .timeline-small-body li div {
            display: inline-block;
            margin: 1em 0;
            vertical-align: top;
        }
        .timeline-small-body .bullet {
            width: 1rem;
            height: 1rem;
            box-sizing: border-box;
            border-radius: 50%;
            background: #fff;
            z-index: 1;
            margin-right: 1rem;
            margin-top: 7%;
        }
        .timeline-small-body .bullet.pink {
            background-color: hotpink;
            border: 3px solid #F93B69;
            z-index: 2;
    		position: relative;
        }
        .timeline-small-body .bullet.green {
            background-color: lightseagreen;
            border: 3px solid #B0E8E2;.
            z-index: 2;
    		position: relative;
        }
        .timeline-small-body .bullet.blue {
            background-color: aquamarine;
            border: 3px solid cadetblue;
            z-index: 2;
    		position: relative;
        }
        .timeline-small-body .bullet.orange {
            background-color: salmon;
            border: 3px solid #EB8B6E;
            z-index: 2;
    		position: relative;
        }
        .timeline-small-body .date {
            font-size: 0.75em;
            padding-top: 0.40rem;
            padding-right: 2rem;
        }
        .timeline-small-body .desc {
            width: 50%;
        }
        .timeline-small-body h3 {
            font-size: 0.9em;
            font-weight: 400;
            margin: 0;
        }
        .timeline-small-body h4 {
            margin: 0;
            font-size: 0.7em;
            font-weight: 400;
            color: #808080;
        }
    </style>

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
        "吾有大树，人谓之樗。",
        "窈窕淑女、君子好逑。",
        "蒹葭苍苍、白露为霜。",
        "蒹葭凄凄、白露未晞",
        "蒹葭采采、白露未已。",
        "学而时习之不亦说乎",
        "学如不及犹恐失之",//逼真古学😂
        "人类的本质是复读机",
        "仕而优则学学而优则仕",
        "学不厌智也教不倦仁也",
        "君有忧色，何也？",
        "爱亲者，不敢恶于人",
        "敬亲者，不敢慢于人",
        "夙兴夜寐，无忝尔所生"
      ]);
   </script>
   
<div class="mdui-dialog" id="comment">
    <div class="mdui-dialog-content">
      <div class="mdui-dialog-title">Comment</div>


        <div class="mdui-card mdui-shadow-0">
          <div class="mdui-row">
          <form action="" method="post" accept-charset="utf-8">
              <!--Card_1-->
                  <div class="mdui-col-lg-12">
                  <div class="mdui-col-sm-12">
                  <div class="mdui-textfield">
                      <i class="mdui-icon material-icons">mode_comment</i>
                      <input class="mdui-textfield-input" name="Message" type="text" placeholder="Message"/>
                  </div>
                  </div>
                  </div>
              <!--Card_2-->
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                    <div class="mdui-textfield">
                        <i class="mdui-icon material-icons">account_circle</i>
                        <input class="mdui-textfield-input" name="User" type="text" placeholder="User"/>
                    </div>
                </div>
                </div>
                <div class="mdui-col-lg-6">
                <div class="mdui-col-sm-12">
                  <div class="mdui-textfield">
                  <link href="https://cdn.bootcss.com/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.css" rel="stylesheet">
                      <i class="mdui-icon material-icons">&#xe90f;</i>
                      <input class="mdui-textfield-input" name="QQ" type="number" min="5" placeholder="QQ"/>
                  </div>
                </div>
                </div>
            </form>
          </div>
        </div>


    </div>
    <div class="mdui-dialog-actions">
    	<button class="mdui-btn mdui-ripple" id="Post" mdui-dialog-close>Send</button>
      <button class="mdui-btn mdui-ripple" mdui-dialog-confirm>Quit</button>
    </div>
</div>