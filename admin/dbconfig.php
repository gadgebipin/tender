<?php

session_start();
if($_SESSION && isset($_SESSION['isadmin']) && $_SESSION['isadmin']==0)
{
	session_destroy();
}
define("server","localhost",true);
	define("user","root",true);
	define("password","",true);
	define("database","tender",true);
	function iud($query)
	{
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
	}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}













?>
	