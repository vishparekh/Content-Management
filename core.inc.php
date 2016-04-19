<?php
	
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_NAME'];

	//$http_referer = $_SERVER['HTTP_REFERER'];

	function loggedin()
	{
		if(isset($_SESSION['un']))// && !empty($_SESSION['user_id']))
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	function okay($value)
	{
		$q1="SELECT * from `users` where `username` = '$value' ";
		$result = mysqli_query(mysqli_connect("localhost","root","","a_database"), $q1);

		$n=mysqli_num_rows($result);
		if($n>0)
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}

	function get($field)
	{
		$query = "SELECT `$field` FROM `users` WHERE `id` =' " .$_SESSION['user_id']. " ' ";
		if($query_run = mysql_query($query))
		{
			if($qurey_result = mysql_result($query_run, 0, $field))
			{
				return $qurey_result;
			}
		}
	}
?>