<!DOCTYPE html>
<?php
session_start();
include "db_connection.php";

if(isset($_POST['login']))

{ 
	
	$username=$_POST['uname'];
	$password=$_POST['password'];
	
	$qry="select me.id, me.emp_name, me.emp_id, me.emp_gender, 
    me.emp_date_of_birth, me.emp_date_of_joining, me.emp_blood_group, 
    me.emp_contact_no, me.emp_emergency_contact_no, me.emp_address, 
    me.emp_profile_pic, me.emp_role_id, me.emp_designation_id, 
    me.emp_username, me.emp_password, me.emp_is_login_user, 
    me.created_at, me.updated_at , me.is_active, me.is_removed,
    group_concat(mp.permission_name) user_permission from mst_employee me
    inner join mst_roles mr on mr.id=me.emp_role_id
    inner join trn_roles_permissions trp on trp.role_id = mr.id
    inner join mst_permissions mp on mp.id = trp.permission_id
    where me.emp_username='$username' and me.emp_password='$password'
    and me.is_active=true and me.is_removed=false and me.emp_is_login_user=true
    and mp.is_active=true
    group by me.id, me.emp_name, me.emp_id, me.emp_gender, 
    me.emp_date_of_birth, me.emp_date_of_joining, me.emp_blood_group, 
    me.emp_contact_no, me.emp_emergency_contact_no, me.emp_address, 
    me.emp_profile_pic, me.emp_role_id, me.emp_designation_id, 
    me.emp_username, me.emp_password, me.emp_is_login_user, 
    me.created_at, me.updated_at , me.is_active, me.is_removed";

	$eqry=mysqli_query($con,$qry);
	$uqry=mysqli_fetch_array($eqry);
	
	$num=mysqli_num_rows($eqry);
	
	
	if($num>0)
	{
		$_SESSION['username']=$uqry['emp_username'];
        $_SESSION['user_permissions']=explode(',',$uqry['user_permission']);
        $_SESSION['msg'] = '';
        
		header("location:dashboard.php");		
		
	}
	else{
        $_SESSION['auth_err'] = 'Invalid username and/or Password!';

	} 
	
} 

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Ram Industries</title>

<!--====================================================================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--====================================================================================================================================-->
	
<link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/img/sriram-industries-logo-120x120.png">
<!--====================================================================================================================================-->

</head>
<body>




		<div class="container"> <br>	<br>
			
 	<div class="row">
    	<div class="col"><img src="assets/img/sriram_ind_logo.jpg" width="600" height="250" class="Avatar" ></div>
    
    	<div class="col">

    	<form action="" method="post">
                    <div class="text-center text-warning"><h4>
                        <?php 
                            if(isset($_SESSION['auth_err'])) 
                                echo $_SESSION['auth_err'];
                                $_SESSION['auth_err']='';
                                
                            ?>
                        </h4>
                    </div>
                    <br>  <br>     <br>  <br> 
					<div class="card-header"><span class="btn btn-primary col fileinput-button">
                      <h3 class="card-title">Sri Ram Industries  </h3>
                            <span class="btn btn-warning col fileinput-button">
									<h3 class="card-title">Industrial - 360</h3>
									</div>	
					              
    		 <br> 
			 <div class="card card-success">
					
					<div class="container">
						<i class="fa fa-users"></i>
						<label for="username">username</label>
						<input type="text" class="form-control" name="uname" placeholder="username">
						<br>
						<i class="fa fa-key"></i>
						<label for="">password</label>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<br>
					
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="#">Forgot Password?</a>
                        
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
             </div>


		</form>
		</div>
 	
 	<br> 
</div> 
								<br> <br> <br> <br>

<!--==============================FINDE FOOOTER==============================================-->


<!--====================================================================================================================================-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--====================================================================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--====================================================================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>