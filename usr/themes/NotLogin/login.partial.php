<link rel="stylesheet" href="<?php echo((Usr_Tsc_PATH."/NotLogin.css")); ?>">

<div class="mdui-container-fluid">

<div class="mdui-row Back-E1" style="position: relative">
		
    <div class="mdui-col-xs-12">
		<img class="mdui-img-circle mdui-center" src="https://s6.cccc.ac.cn/2020/02/27/b6b36f97f9ab3.png" style="width: 140px;height: 140px;"/>
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


    <style>
        .pec-List-headimg {
        width: 50px;
        height: 50px;
        /* margin-top: 50px; */
        margin-left: 50px;
        border-radius: 50%;
        border: 3px solid #3f51b5;
        background-size: cover!important;
        background-position: center center!important;
        }
        .pec-Bor{
            border-radius: 18px;
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
        .body-bg{
            background-image:url('https://i.loli.net/2019/08/01/5d429efba945476667.png');
        }
        .body-tm{
            opacity:0.85;
            filter:alpha(opacity=15);
        }
        .d1{
       background-size:100% 100%;
       -webkit-filter:blur(10px);
       filter:blur(10px);
       z-index:-1;
       width:100%;
       height:39%;
       position:fixed; 
       _position:absolute; 
       background-repeat:no-repeat;
        }
    </style>
<br/>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-xs-1 mdui-col-sm-3"></div>
                
            <div class="mdui-col-xs-10 mdui-col-sm-6">
                <div class="mdui-card pec-Bor mdui-shadow-12 body-tm">
                    <div class="mdui-card-primary">
                	<form action="login.php" method="POST">
                        <div class="mdui-card-primary-title mdui-text-center">Login</div>
                        <a class="mdui-text-center"><?php echo login(); ?></a>
                    </div>
                    <div class="mdui-card-content detail-info">
                        <div class="mdui-textfield">
                            <i class="mdui-icon material-icons">account_circle</i>
                            <label class="mdui-textfield-label">ID</label>
                            <input class="mdui-textfield-input" type="text" name="username" id="username"/>
                        </div>
                        <div class="mdui-textfield">
                            <i class="mdui-icon material-icons">lock</i>
                            <label class="mdui-textfield-label">Password</label>
                            <input class="mdui-textfield-input" type="password" name="password" id="password"/>
                        </div>
                    </div>
                    <div class="mdui-card-actions">
                        <small><a href="register.php" class="mdui-btn mdui-ripple">还没有账号？快来注册</a></small>
                        <button name="submit" id="submit" class="mdui-btn mdui-btn-icon mdui-color-pink mdui-ripple mdui-float-right"><i class="mdui-icon material-icons">last_page</i></button>
                    </div>
                </form>
                </div>
            </div>
                
            <div class="mdui-col-xs-1 mdui-col-sm-3"></div>
        </div>
    <br/>
    <br/>


            <div class="mdui-col-xs-12 mdui-col-sm-12">
                <div class="mdui-card pec-Bor mdui-shadow-18 body-tm">
                    <div class="mdui-card-actions">
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><i class="mdui-icon material-icons">mic_none</i></button>
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-100 mdui-ripple"><i class="mdui-icon material-icons">pets</i></button>
                        <button name="submit" class="mdui-btn mdui-btn-icon mdui-color-grey-200 mdui-ripple mdui-float-right"><i class="mdui-icon material-icons">blur_on</i></button>
                    </div>
                </div>
            </div>    
       
    

    </div>
	
</div>
    <br/>
    <br/>