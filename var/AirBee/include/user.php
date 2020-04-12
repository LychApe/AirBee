<?php
require_once("db.php");

class User extends AirBee_DB{
    public function __construct()
    {
        $this->table = "user";
        parent::__construct();
    }
    
    # Info($username) 指定用户查询，支持用户名 id 邮箱查询
	public function Info($username)
	{
        $data = empty(parent::fetch_one('uid',$username))?parent::fetch_one('username',$username):parent::fetch_one('uid',$username);
        return empty($data)?parent::fetch_one('email',$username):$data;
	}

    # QInfo() 
	public function QInfo()
	{
		$sentence = "SELECT * FROM `$this->table` WHERE uid = '{$_SESSION['username']}' OR username = '{$_SESSION['username']}' OR email = '{$_SESSION['username']}' limit 1";
		return parent::fetch($sentence);
	}    	
	
	# Group($user) 获取用户分组 返回组别string
	public function Group($username)
	{
		$group = $this->Info($username)['group'];
		if ($username == "root"){
			return "超级管理员";
		}
		if ($group == "admin"){
			return "普通管理员";
		}
		if ($group == "guest"){
			return "普通用户";
		}
	}
	
	#Add($username,$password,$group,$email,$qq) 增加用户
	public function Add($username,$password,$group,$email,$qq){
                if (!empty($this -> Info($username)) or !empty($this -> Info($email))){
                        return false;
                }
			    return parent::insert(array('username' => $username,'password' => $password,'group' => $group,'email' => $email, 'qq' => $qq));
	}
	
	# Check_Group($group,\*$user=$\_SESSION['user']) 检查用户是否在指定分组 返回Bool
	public function Check_Group(){
		$username = isset(func_get_args()[1])?func_get_args()[1]:$_SESSION['username'];
		if (!$this->Check_Logon()){
		    return false;
		}
		if ($this->Info($username)['group'] == func_get_args()[0]){
			return true;
		} else {
			return false;
		}
	}
	
	# Check_Logon() 检查是否登陆
	public function Check_Logon(){
		if (isset($_SESSION['username'])){
			return true;
		} else {
			return false;
		}
	}
	
	# Check_cf() 检查是否重复
	public function Check_cf($sql)
	{	
		parent::numRows($sql);
	}
	
	# Modify($username,$password,$group,$email,$qq) 修改用户
	public function Modify($username,$password,$group,$email,$qq){
	    if($user == "root"){
	        $group = "admin";
	    }
	    if($_SESSION['username'] != "root" and $user == "root"){
	        return false;
	    }
		return parent::change(array('password' => $password,'group' => $group,'email' => $email, 'qq' => $qq),array('username' => $username));
	}
	
	# Del($user) 删除指定用户
	public function Del($username){
	    if($username == "root"){
	        return false;
	    }
		return parent::delete(array("username" => $username));
	}
}

?>
