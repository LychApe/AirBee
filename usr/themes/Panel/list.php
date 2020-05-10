<style>
    .mdui-list {
    padding: 0px 0!important;
    margin: 0;
    list-style: none;
    background-color: transparent;
    }
    .FnB_IMG {
    border-radius: 0px
    }
</style>
<header>
    <div class="mdui-drawer mdui-color-grey-50 " id="main-drawer" >
      <div class="mdui-list" mdui-collapse="{accordion:true}" style="margin-bottom: 76px;">
            
      <div class="mdui-card FnB_IMG mdui-shadow-0">
        <div class="mdui-card-media">
          <img src="https://api.ixiaowai.cn/gqapi/gqapi.php"/>
          <div class="mdui-card-media-covered">
            <div class="mdui-card-primary">
            <?php if(!$user->Check_Logon()){ ?>
	         <div class="mdui-card-primary-subtitle mdui-text-center" style="font-weight:900;">AirBee</div>
	         <?php } else { ?>
	         <div class="mdui-card-primary-subtitle mdui-text-center" style="font-weight:900;">
	         	<?php 
	         	$row = $user->QInfo();
	         	echo( $row[0]['username'] );
	         	?>
	         </div>
	         <?php } ?> 
            </div>
          </div>
        </div>
      </div>
        
            <a href="<?php echo $GLOBALS['url'] ?>/?Panel=ACP">
              <li class="mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconjiankong"></div>
                <div class="mdui-list-item-content">控制台</div>
              </li>
            </a>

            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconicon-test"></div>
                <div class="mdui-list-item-content">文章</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=write">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">撰写文章</div>
                    </li>
                </a>
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">文章列表</div>
                    </li>
                </a>
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">分类目录</div>
                    </li>
                </a>
              </div>
            </div>

            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Icondeploymentunit"></div>
                <div class="mdui-list-item-content">模块</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">模块管理</div>
                    </li>
                </a>
              </div>
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">模块商店</div>
                    </li>
                </a>
              </div>
              
            </div>

            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconrocket"></div>
                <div class="mdui-list-item-content">管家</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">scoreger</div>
                  </li>
                </a>
              </div>
            </div>
            
            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconexperiment"></div>
                <div class="mdui-list-item-content">实验室</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?Panel=XXX">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">scoreger</div>
                  </li>
                </a>
              </div>
            </div> 
            
            <div class="mdui-divider"></div>
            
            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconsmile"></div>
                <div class="mdui-list-item-content">个人中心</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?User==xxx">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">个人信息</div>
                  </li>
                </a>
                <a href="<?php echo $GLOBALS['url'] ?>/logout.php">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">安全退出</div>
                    </li>
                </a>                
              </div>
            </div>
            
            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <div class="mdui-list-item-icon mdui-icon AirBee_Icon AirBee_Iconhezuohuobanmiyueguanli"></div>
                <div class="mdui-list-item-content">用户管控</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="<?php echo $GLOBALS['url'] ?>/?App=scoreger">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">scoreger</div>
                  </li>
                </a>
              </div>
            </div>
       
          <div class="mdui-divider"></div>
            
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#ABOUT_AirBee'}">
				<i class="mdui-list-item-icon mdui-icon material-icons">info_outline</i>
				<div class="mdui-list-item-content">ABOUT</div>
			  </li>
			</a>
    
        </div>
      </div>
</header>