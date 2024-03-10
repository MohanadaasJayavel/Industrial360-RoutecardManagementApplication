<?php

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=download.xls"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//header("Cache-Control: private",false);

include "db_connection.php";
if(isset($_POST['del'])) 
{
	$val=$_POST['sel'];
	foreach( $val as $e_id)
	{
		$dele ="DELETE FROM employee_details WHERE e_id = '$e_id'";
		mysqli_query($conn,$dele);
	}
}

?>

<table border="1">
<tr>
<th colspan="6">EMPLOYEE'S SUBMITTED DATS'S WILL BE DISPLAYED</th><th><button type="submit" name="del"> Delete</button></th>
</tr>
<tr>
<th>Company Name</th><th>Contact no</th><tH>Email</th><th>EMPLOYEE_Qualification</th><th>EMPLOYEE_Salary</th><th>EMPLOYEE_Date_of_join</th><th>Employee_Address</th>
</tr>
<?php
$dbquery="select * from employee_details";
$conquery=mysqli_query($con,$dbquery);
	
	while($fet=mysqli_fetch_array($conquery))
	{
		$e_id=$fet[0];
		$e_name=$fet[1];
		$e_dep=$fet[2];
		$e_qual=$fet[3];
		$e_sal=$fet[4];
		$e_doj=$fet[5];
		$e_adr=$fet[6];
		
	

?>
<tr>
<td><?php echo $e_id; ?><input type="checkbox" name="sel[]" value="<?php echo $fet['e_id'];?>" /></td>
<td><?php echo $e_name; ?></td>
<td><?php echo $e_dep; ?></td>
<td><?php echo $e_qual; ?></td>
<td><?php echo $e_sal; ?></td>
<td><?php echo $e_doj; ?></td>
<td><?php echo $e_adr; ?></td>
<td> <a href="emp_edit.php?id=<?php echo $fet[0]; ?>">EDIT</a></td>
</tr>
<?php
	}
?>
</table>
