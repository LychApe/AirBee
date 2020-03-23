<?php
/**
 * (C)2020-2099 LychApe Studios All rights reserved.
 * AirBee [ 0.1 ]
 * Last modify version: 0.1
 * Author: 谭灿 <tancan137@foxmail.com>
 **/
  
/**
 * AirBee_PathM [ 0.1 ]
 * 路径控制器
 * [ AirBee_PathM::Go(); ]
 **/
 
 final class AirBee_PathM{
    public static function Go(){
        self::_set_const();
    }
    private static function _set_const(){
        #var_Path
        $Path = str_replace('\\','/',__FILE__); 
        define('AirBee_PATH', dirname($Path));
        
        #Root_PATH
        #define('ROOT_PATH', 'dirname(AirBee_PATH)');
        define('ROOT_PATH', '.');
        define('APP_PATH', ROOT_PATH . '/');
        #usr_PATH
        define('Usr_PATH', APP_PATH . 'usr');
            define('Usr_T_PATH', Usr_PATH . '/themes');
              define('Usr_Tsc_PATH', Usr_T_PATH . '/Static/CSS');
              define('Usr_Tsj_PATH', Usr_T_PATH . '/Static/JS');
            define('Usr_P_PATH', Usr_PATH . '/plugins');
        
        include(AirBee_PATH."/config.php");
    }
}
?>