<?php
session_start();
include "db_connection.php";

if(isset($_POST['login']))

{
	 
	
	$username=$_POST['uname'];
	$password=$_POST['password'];
	
	echo $qry="select *  from mst_employee where emp_username='$username'  and emp_password='$password' "; exit();
	$eqry=mysqli_query($con,$qry);
	$uqry=mysqli_fetch_array($eqry);
	
	$num=mysqli_num_rows($eqry);
	
	
	if($num>0)
	{
		$_session['admin']=$uqry['username'];
		
		header("location:dashboard.php");
		
		
	}
	else{
		echo $er="Invalid user/password";
	} 
	
} 

