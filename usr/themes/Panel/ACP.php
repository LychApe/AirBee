        <style type="text/css">
            #times{
                width: 200px;
                height: 20px;
            }
        </style>

        <script type="text/javascript">
            //得到时间并写入div
            function getDate(){
                //获取当前时间
                var date = new Date();
                //格式化为本地时间格式
                var date1 = date.toLocaleString();
                //获取div
                var div1 = document.getElementById("times");
                //将时间写入div
                div1.innerHTML = date1;
            }
            //使用定时器每秒向div写入当前时间
            setInterval("getDate()",1000);
        </script>
<br/>
<br/>
<div class="mdui-container">
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
<script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>

<div class="mdui-card AirBee-ACP-Fillet-1 mdui-ripple mdui-hoverable" style="background: rgba(245, 245, 245, 0.52);">
  <div class="mdui-row mdui-valign">
    <div class="mdui-col-xs-1 mdui-col-sm-1">
        <svg class="AirBee-Icon-SVG mdui-card-header-avatar" aria-hidden="true">
            <use xlink:href="#AirBee_IconhuixingSVG"></use>
        </svg>
    </div>
    <div class="mdui-col-xs-8 mdui-col-sm-9 AirBee-ACP-Font-SC"><span id="jinrishici-sentence">正在加载....</span></div>
    <div class="mdui-col-xs-6 mdui-col-sm-2"><div id="times" class="mdui-float-right AirBee-ACP-Font-SC"></div></div>
  </div>
</div>
    
    <br/>
    <br/>
    
    <div class="mdui-row">
        
      <div class="mdui-col-xs-4">
        <div class="mdui-card AirBee-ACP-Fillet-1 mdui-ripple mdui-hoverable" style="background: rgba(255, 255, 255, 0.6);">
          <div class="mdui-card-header" style="background-color: whitesmoke;">
            <svg class="AirBee-Icon-SVG mdui-card-header-avatar" aria-hidden="true">
              <use xlink:href="#AirBee_IconyuhangyuanSVG"></use>
            </svg>
            <div class="mdui-card-header-title AirBee-ACP-Font-SC">用户信息</div>
            <div class="mdui-card-header-subtitle">User Info</div>
          </div>
	                <div style="transform: translateY(-19px);padding-right: 30px;">   
	            	<a href="" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple mdui-float-right"><i class="mdui-icon material-icons" style="color: #e0e0e0;">&#xe8b8;</i></a>
	                </div>
          <div class="AirBee-ACP-DottedLine"></div>
          <div class="mdui-card-content">
        <div class="mdui-list">
            <div class="mdui-valign AirBee-ACP-margin-1">
                <svg class="mdui-list-item-icon AirBee-Icon-SVG" aria-hidden="true">
                  <use xlink:href="#AirBee_Icondian3-copy"></use>
                </svg>
                <div style="opacity: .50;">&nbsp;用户名: <?php echo( $row[0]['username'] ); ?></div>
            </div>
            <div class="mdui-valign AirBee-ACP-margin-1">
                <svg class="mdui-list-item-icon AirBee-Icon-SVG" aria-hidden="true">
                  <use xlink:href="#AirBee_Icondian3-copy"></use>
                </svg>
                <div style="opacity: .50;">&nbsp;用户组: <?php echo( "超级管理员" ); ?></div>
            </div>
            <div class="mdui-valign AirBee-ACP-margin-1">
                <svg class="mdui-list-item-icon AirBee-Icon-SVG" aria-hidden="true">
                  <use xlink:href="#AirBee_Icondian3-copy"></use>
                </svg>
                <div style="opacity: .50;">&nbsp;邮箱: <?php echo( $row[0]['email'] ); ?></div>
            </div>
            <div class="mdui-valign AirBee-ACP-margin-1">
                <svg class="mdui-list-item-icon AirBee-Icon-SVG" aria-hidden="true">
                  <use xlink:href="#AirBee_Icondian3-copy"></use>
                </svg>
                <div style="opacity: .50;">&nbsp;IP: <?php echo( "127.0.0.1" ); ?></div>
            </div>
        </div>
          </div>
        </div>
      </div>
      
      <div class="mdui-col-xs-8">
          
        <div class="mdui-card AirBee-ACP-Fillet-1 mdui-hoverable" style="background: rgba(255, 255, 255, 0.6);">
          <div class="mdui-card-header" style="background-color: whitesmoke;">
            <svg class="AirBee-Icon-SVG mdui-card-header-avatar" aria-hidden="true">
              <use xlink:href="#AirBee_IconweixingfashetaiSVG"></use>
            </svg>
            <div class="mdui-card-header-title AirBee-ACP-Font-SC">概览</div>
            <div class="mdui-card-header-subtitle">Overview</div>
            <div class="mdui-card-menu">
              <button class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons" style="color: #e0e0e0;">&#xe88f;</i></button>
            </div>
          </div>
          <div class="AirBee-ACP-DottedLine"></div>
          <div class="mdui-card-content">
            <div class="mdui-row-xs-3">
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>文章</h3>
                        <p>2</p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>评论</h3>
                        <p>20</p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>用户</h3>
                        <p>30</p>
                    </div>
                </div>
                <br/>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>AirBee</h3>
                        <p>0.1 <span class="layui-badge layui-bg-gray">Alpha</span></p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>PHP</h3>
                        <p>7.4 <span class="layui-badge layui-bg-gray">Success</span></p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>Mysql</h3>
                        <p>5.7 <span class="layui-badge layui-bg-gray">Success</span></p>
                    </div>
                </div>
                
            </div>
          </div>
        </div>
        
      </div>
    </div>

<br/>
<br/>

    <div class="mdui-row">
        
      <div class="mdui-col-xs-6">
        <div class="mdui-card AirBee-ACP-Fillet-1 mdui-hoverable" style="background: rgba(255, 255, 255, 0.6);">
          <div class="mdui-card-header" style="background-color: whitesmoke;">
            <svg class="AirBee-Icon-SVG mdui-card-header-avatar" aria-hidden="true">
              <use xlink:href="#AirBee_IcontanceqiSVG"></use>
            </svg>
            <div class="mdui-card-header-title AirBee-ACP-Font-SC">最新留言</div>
            <div class="mdui-card-header-subtitle">Latest message</div>
          </div>
	                <div style="transform: translateY(-19px);padding-right: 30px;">   
	            	<a href="" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple mdui-float-right"><i class="mdui-icon material-icons" style="color: #e0e0e0;">&#xe8b8;</i></a>
	                </div>
          <div class="AirBee-ACP-DottedLine"></div>
          <div class="">
<div class="timeline-small">
    <div class="timeline-small-body">
        <ul>
            <li>
                <div class="bullet pink"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e; background-color: #f5f5f5;">
				  <img class="mdui-chip-icon" src="https://q2.qlogo.cn/headimg_dl?dst_uin=599487077@qq.com&spec=640"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">GKD !!!</span>
				</div>
            </li>
            <li>
                <div class="bullet orange"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e; background-color: #f5f5f5;">
				  <img class="mdui-chip-icon" src="https://q2.qlogo.cn/headimg_dl?dst_uin=838214611@qq.com&spec=640"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">吃!吃!吃! 吃nm!</span>
				</div>
            </li>
            <li>
                <div class="bullet green"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e; background-color: #f5f5f5;">
				  <img class="mdui-chip-icon" src="https://i.loli.net/2020/02/26/NCnhiD7keYlmuF2.jpg"/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">成电大佬，文笔上佳</span>
				</div>
            </li>
            <li>
                <div class="bullet blue"></div>
				<div class="mdui-chip" id="ERRO-404" style="color: #9fa09e; background-color: #f5f5f5;">
				  <img class="mdui-chip-icon" src="https://secure.gravatar.com/avatar/b1cd9865b14da113a093860b0f71e16d?s=500&r=X&d="/>
				  <span class="mdui-chip-title mdui-text-truncate" style="max-width: 150px;">23333333333333333333333333333333333333333333333333</span>
				</div>
            </li>
        </ul>
    </div>
</div>
          </div>
        </div>
      </div>
      
      <div class="mdui-col-xs-6">
          
        <div class="mdui-card AirBee-ACP-Fillet-1 mdui-hoverable" style="background: rgba(255, 255, 255, 0.6);">
          <div class="mdui-card-header" style="background-color: whitesmoke;">
            <svg class="AirBee-Icon-SVG mdui-card-header-avatar" aria-hidden="true">
              <use xlink:href="#AirBee_IcontianwentaiSVG"></use>
            </svg>
            <div class="mdui-card-header-title AirBee-ACP-Font-SC">待办清单</div>
            <div class="mdui-card-header-subtitle">ToDoList</div>
            <div class="mdui-card-menu">
              <button class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons" style="color: #e0e0e0;">add_circle_outline</i></button>
            </div>
          </div>
          <div class="AirBee-ACP-DottedLine"></div>
          <div class="mdui-card-content">
            <div class="mdui-row-xs-2">
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>2020/5/8</h3>
                        <p style="font-size: 10px;">Codeing!!!</p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>2020/5/8</h3>
                        <p style="font-size: 10px;">吃鸡一局!!! 实现一枪一个准</p>
                    </div>
                </div>
                <div class="mdui-col">
                    <div class="mdui-card AirBee-ACP-Card-1">
                        <h3>2020/5/9 &nbsp;<span class="layui-badge layui-bg-gray">重要</span></h3>
                        <p style="font-size: 10px;">学习九科</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

<br/>
<br/>

        <div class="mdui-card mdui-shadow-3" style="border-radius: 20px; background: rgba(255, 255, 255, 0.6);">
            <div class="mdui-card-actions">
                <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><i class="mdui-icon material-icons">mic_none</i></button>
                <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconicon-test"></div></button>
                <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconhezuohuobanmiyueguanli"></div></button>
                <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-200 mdui-ripple mdui-float-right"><i class="mdui-icon material-icons">blur_on</i></button>
            </div>
        </div>
</div>
<br/>
<br/>

    <style>
        .timeline-small {
            max-width: -webkit-fill-available;
            max-height: 630px;
            overflow: hidden;
            font-family: 'Open Sans', sans-serif;
        }
        .timeline-small-body ul {
            padding: 0em 0 0 2em;
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