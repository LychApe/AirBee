<?php
/**
 * * AirBee_DB[数据库类]
 * $xxxx = new AirBee_DB();
 * Author: 谭灿 <tancan137@foxmail.com>
 */
 
require_once(AirBee_PATH."/config.php");
#require_once("../../config.php");

class AirBee_DB
{
	public $db;
	public $table;
	
	/**
	 * 自动初始化DB库
	 **/
	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=".$GLOBALS['host'].";dbname=".$GLOBALS['database'], $GLOBALS['username'], $GLOBALS['password']);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			#echo "Connect Successfully";
			}
		catch(PDOException $e)
		{
			echo "数据库管家：".$e->getMessage();
		}
	}
	private function query($sentence,$args=array())
	{
		try{
			$stmt = $this->db->prepare($sentence);
                        $stmt->execute($args);
                        return true;
		}
		catch(PDOException $e)
		{
		    var_dump($e->getMessage());
			return false;
		}
	}
	
	/**
	 * 插入操作
	 * $xxxx ->insert($args);
	 **/
	public function insert($args)
	{
		$keys = $values = array_keys($args);
		foreach ($keys as &$value)$value="`$value`";
		$keys = join(",",$keys);
		/*Keys*/
		foreach ($values as &$value)$value=":$value";
		$values = join(",",$values);
		/*Values*/
		$sentence = "INSERT INTO `$this->table` ($keys) VALUES ($values);";
		return $this->query($sentence,$args);
	}
	
    /**
	 * 删除操作
	 * $xxxx ->delete($obj);
	 **/
	public function delete($obj)
	{
		$keys = $this->where_clause($obj);
		/*Where Calues*/
		$sentence = "DELETE FROM `$this->table` WHERE $keys";
		return $this->query($sentence,$obj);
	}
	
    /**
	 * 更改操作
	 * $xxxx ->change($obj);
	 **/
	public function change($args,$obj)
	{
		$values = array_keys($args);
		foreach ($values as &$value)$value="`$value`=:$value";
		$values = join(",",$values);		
		/*Values*/
		$keys = $this->where_clause($obj);
		/*Where Clause*/
		$sentence = "UPDATE `$this->table` SET $values WHERE $keys";
		return $this->query($sentence,$args+$obj);
	}
	 
    /**
	 * 查询操作(私有)
	 * $xxxx ->fetch($sentence,$obj=array());
	 * 可以多个条件，返回多个结果
	 **/
	private function fetch($sentence,$obj=array()){
		$stmt = $this->db->prepare($sentence);
		$stmt->execute($obj);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return $stmt->fetchAll();
	}

    /**
	 * 查询操作_ONE
	 * $xxxx ->fetch_one($key,$value);
	 * 返回单个结果
	 **/
	public function fetch_one($key,$value)
	{
		$stmt = $this->db->prepare("SELECT * FROM `$this->table` WHERE `$key`=:$key limit 1");
		$stmt->execute(array($key => $value));
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return $stmt->fetch();
	}
	
    /**
	 * 查询操作_BY
	 * $xxxx ->fetch_one($key,$value);
	 * 返回多个结果
	 **/
	public function fetch_by($key,$value)
	{
	    $sentence = "SELECT * FROM $this->table WHERE `$key`=:$key";
	    return $this->fetch($sentence,array($key => $value));
	}
	 
}
?>