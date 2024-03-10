<?php 
include('middleware.php');
include('./db_connection.php');

$query= "select me.*, mr.id role_id, mr.role_name,
md.id designation_id, md.designation_name from mst_employee me
left join mst_roles mr on mr.id = me.emp_role_id
left join mst_designation md on md.id = me.emp_designation_id where me.is_removed = false";

$eqry=mysqli_query($con,$query);
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"employee_report.xls\"");
header("Cache-Control: max-age=0");
?>

<table border="1">
<th colspan="12">SRI RAM INDUSTRIES - EMPLOYEE REPORT</th>
                                    <thead>
                                        <tr> 
                                        <th> Sno.</th>
                                        <th>Name</th>
                                        <th>Emp-id</th>
                                        <th>Contact.no</th>
                                        <th>emp_email</th>
                                        <th>Role</th>
                                        <th>Designation</th>
                                        <th> emp_blood_group</th>
                                        <th>emp_emergency_contact_no</th>
                                        <th> emp_address</th> 
                                        <th>Is Login User</th>
                                        <th>Status</th>
                                     </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    <?php
                                        $sno=1;
                                        while($row=mysqli_fetch_array($eqry)){
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $sno++; ?></td>
                                             
                                            <td ce><?php echo $row['emp_name']; ?></td>
                                            <td><?php echo $row['emp_id']; ?></td>
                                            <td><?php echo $row['emp_contact_no']; ?></td>
                                            <td><?php echo $row['emp_email']; ?></td>
                                            <td><?php echo $row['role_name']; ?></td>
                                            <td><?php echo $row['designation_name']; ?></td>
                                            <td><?php echo $row['emp_blood_group']; ?></td>
                                            <td align="center"><?php echo $row['emp_emergency_contact_no']; ?></td>
                                            <td><?php echo $row['emp_address']; ?></td>
                                            

                                            <td><?php 
                                                if ($row['emp_is_login_user']==true)
                                                {
                                                    echo 'Yes';
                                                } 
                                                else 
                                                {
                                                   echo 'No';
                                                }
                                                ?>
                                            </td>
                                           
                                            <td><?php 
                                                if ($row['is_active']==true)
                                                {
                                                    echo 'active';
                                                } 
                                                else 
                                                {
                                                   echo 'In active';
                                                }
                                                ?></td>
                                            
                                            
                                        </tr>
                                       <?php 
                                    } ?>
                                       
                                    </tbody>