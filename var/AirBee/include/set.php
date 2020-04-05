<?php
require_once("db.php");
class Set extends AirBee_DB{
    public function __construct(){
        $this->table = "settings";
        parent::__construct();
    }
	public function settings_get($key){
	    return parent::fetch_one('key',$key)['value'];
	}
	public function settings_set($key,$value){
	    return parent::update(array('value' => $value),array('key' => $key));
	}
	public function settings_save(){
		if (!isset($_GET['save'])){
			return "";
		}
		foreach ($_POST as $key => $value) {
			if (!$this-> settings_set($key,$value)){
				return "保存失败";
			}
		}
		return "保存成功";
	}
}
