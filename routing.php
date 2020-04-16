<?php
#User
	if($_GET["User"]=="Register"){
	include("register.php");
	die();	
	}
	
	if($_GET["User"]=="Login"){
	include("login.php");
	die();	
	}

	if($_GET["User"]=="Home"){
		require(AirBee_PATH.'/AirBee/include/user.php');
		$user = new User();
		if(!$user->Check_Logon()){
			header("location: ?User=Login");
		}
		$body = "home.php";
		require(Usr_T_PATH.'/main.php');
		die();	
	}

#Panel
	if($_GET["Panel"]=="ACP"){
		require(AirBee_PATH.'/AirBee/include/user.php');
		$user = new User();
		if(!$user->Check_Logon()){
			header("location: ?User=Login");
		}
		if($user->Check_Group("root") or $user->Check_Group("admin")){
		$body = "ACP.php";
		require(Usr_TPanel_PATH.'/main.php');		    
		}elseif ($user->Check_Group("guest")) {
			header("location: ?User=Home");
		}
		die();	
	}
	if($_GET["Panel"]=="write"){
		require(AirBee_PATH.'/AirBee/include/user.php');
		$user = new User();
		if(!$user->Check_Logon()){
			header("location: ?User=Login");
		}
		if($user->Check_Group("root") or $user->Check_Group("admin")){
		    echo("ok");
		}elseif ($user->Check_Group("guest")) {
			header("location: ?User=Home");
		}
		die();	
	}
#APP
	if($_GET["App"]=="scoreger"){
	$body = (Usr_M_PATH.'/scoreger/scoreger.php');
	require(Usr_T_PATH.'/main.php');
	die();	
	}

?>