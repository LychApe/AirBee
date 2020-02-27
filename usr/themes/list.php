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
    <div class="mdui-drawer mdui-color-grey-50" id="main-drawer">
      <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
            
      <div class="mdui-card FnB_IMG">
        <div class="mdui-card-media">
          <img src="https://api.ixiaowai.cn/gqapi/gqapi.php"/>
          <div class="mdui-card-media-covered">
            <div class="mdui-card-primary">
	         <div class="mdui-card-primary-subtitle font-weight:900;">AirBee</div>
            </div>
          </div>
        </div>
      </div>
        
            <a href="index.php">
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
                <a href="login.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">https</i>
                        <div class="mdui-list-item-content">登陆</div>
                  </li>
                </a>
                
                <a href="register.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">group_add</i>
                        <div class="mdui-list-item-content">注册</div>
                    </li>
                </a>
              </div>
            </div>
            
          <div class="mdui-divider"></div>
          
            <a>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-indigo">&#xe0b7;</i>
                <span class="mdui-list-item-content mdui-text-color-theme-text">留言点滴</span>
                <span class="mdui-list-item-avatar" style="background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);">
                    <?php 
                    echo("6");
                    //echo mysqli_num_rows( $ALLNUM );
                    ?>
                </span>
            </li>
            </a>
            
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#about_FnMB'}">
				<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-brown">info_outline</i>
				<div class="mdui-list-item-content">ABOUT</div>
			  </li>
			</a>
    
        </div>
      </div>