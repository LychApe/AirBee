<?php

##### User.php 用户类
#用户名唯一且不能更改，最高权限是root
#该类为db类的子类，用户操作封装
# Info($user) 指定用户查询，支持用户名 id 邮箱查询
# Group($user) 获取用户分组 返回组别string
#Add($user,$passwd,$group,$email) 增加用户
# Check_Group($group,\*$user=$\_SESSION['user']) 检查用户是否在指定分组 返回Bool
# Check_Logon() 检查是否登陆
# Modify($user,$passwd,$group,$email) 修改用户
# Del($user) 删除指定用户

class User extends Db{
	
    public function __construct(){
        $this->table = "user";
        parent::__construct();
    }
    
	public function Info($user){
        $data = empty(parent::fetch_one('uid',$user))?parent::fetch_one('user',$user):parent::fetch_one('uid',$user);
        return empty($data)?parent::fetch_one('email',$user):$data;
	}
	
	public function Group($user){
		$group = $this->Info($user)['group'];
		if ($user == "root"){
			return "超级管理员";
		}
		if ($group == "admin"){
			return "普通管理员";
		}
		if ($group == "guest"){
			return "普通用户";
		}
		if ($group == "gay"){
			return "基友";
		}
		if ($group == "lesbian"){
			return "百合";
		}
	}
	public function Add($user,$passwd,$group,$email){
                if (!empty($this -> Info($user)) or !empty($this -> Info($email))){
                        return false;
                }
			    return parent::insert(array('user' => $user,'passwd' => $passwd,'group' => $group,'email' => $email));
	}
	public function Check_Group(){
		$user = isset(func_get_args()[1])?func_get_args()[1]:$_SESSION['user'];
		if (!$this->Check_Logon()){
		    return false;
		}
		if ($this->Info($user)['group'] == func_get_args()[0]){
			return true;
		} else {
			return false;
		}
	}
	public function Check_Logon(){
		if (isset($_SESSION['user'])){
			return true;
		} else {
			return false;
		}
	}
	public function Modify($user,$passwd,$group,$email){
	    if($user == "root"){
	        $group = "admin";
	    }
	    if($_SESSION['user'] != "root" and $user == "root"){
	        return false;
	    }
		return parent::update(array('passwd' => $passwd,'group' => $group,'email' => $email),array('user' => $user));
	}
	public function Del($user){
	    if($user == "root"){
	        return false;
	    }
		return parent::delete(array("user" => $user));
	}
}
?>
