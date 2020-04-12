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
    <div class="mdui-drawer mdui-color-grey-50 " id="main-drawer" >
      <div class="mdui-list" mdui-collapse="{accordion:true}" style="margin-bottom: 76px;">
            
      <div class="mdui-card FnB_IMG">
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
	         	#var_dump($row['username']);
	         	echo( $row[0]['username'] );
	         	?>
	         </div>
	         <?php } ?> 
            </div>
          </div>
        </div>
      </div>
        
            <a href="<?php echo $GLOBALS['url'] ?>/index.php">
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue">&#xe88a;</i>
                <div class="mdui-list-item-content">首  页</div>
              </li>
            </a>

            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-deep-purple">account_box</i>
                <div class="mdui-list-item-content">用  户</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
              	<?php if(!$user->Check_Logon()){ ?>
                <a href="<?php echo $GLOBALS['url'] ?>/?User=Login">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">登陆</div>
                  </li>
                </a>
                <a href="<?php echo $GLOBALS['url'] ?>/?User=Register">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">注册</div>
                    </li>
                </a>
                <?php } else { ?>
                <a href="<?php echo $GLOBALS['url'] ?>/?User==xxx">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">用户信息</div>
                  </li>
                </a>
                <a href="<?php echo $GLOBALS['url'] ?>/logout.php">
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-content">安全退出</div>
                    </li>
                </a>                
                <?php } ?>  
              </div>
            </div>
            
            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-deep-purple">apps</i>
                <div class="mdui-list-item-content">应 用</div>
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
          
            <a href="<?php echo $GLOBALS['url'] ?>/?App=comment">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-indigo">&#xe0b7;</i>
                <span class="mdui-list-item-content mdui-text-color-theme-text">留言点滴</span>
                <span class="mdui-list-item-avatar" style="background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);">
                    <?php 
                    echo("0");
                    //echo mysqli_num_rows( $ALLNUM );
                    ?>
                </span>
            </li>
            </a>
            
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#ABOUT_AirBee'}">
				<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-brown">info_outline</i>
				<div class="mdui-list-item-content">ABOUT</div>
			  </li>
			</a>
    
        </div>
      </div>