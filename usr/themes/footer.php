<footer class="foot mdui-text-center  AB-footer-morden">
	<div class="mdui-typo">
	Copyright © 2020 <a href="https://www.lychape.cn">LychApe Studios</a>
	</div>
	Powered by AirBee 0.1
	<br/>
	<a href='https://gitee.com/LychApe/AirBee/stargazers'><img src='https://gitee.com/LychApe/AirBee/badge/star.svg?theme=dark' alt='star'></img></a>
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