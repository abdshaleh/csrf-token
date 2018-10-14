<?php
session_start();
function generate(){
	
	$_SESSION['token']=md5(rand());
	return $_SESSION['token'];
}

 if(isset($_POST['submit_button'])){
 	if(isset($_SESSION['token']) && $_SESSION['token']===$_POST['csrf_check']){

 		echo "success";
 		unset($_SESSION['token']);
 	}
 	else{
 		echo "hash sum mismatch";
 		unset($_SESSION['token']);
 	}
 }
?>