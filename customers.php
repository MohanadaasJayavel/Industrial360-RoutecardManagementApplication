<?php 
include('middleware.php');
include('./db_connection.php');

$query= "select *, (select count(*) from mst_diagram where is_active=true and customer_id=a.id) diagram_count from mst_customers a where is_active=true";

$eqry=mysqli_query($con,$query);

include('./header.php');
?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fas fa-users"></i>Customers</h1>

                        <?php

                            if($_SESSION['msg']!='')
                                echo $_SESSION['msg'];
                            $_SESSION['msg']='';

                            ?>

                       
                       
                        <div class="card mb-4">
                            <div class="card-header text-end" >
                            <?php 
                            if(in_array('can_create_customer', $_SESSION['user_permissions'])) 
                               echo '<a  class="btn btn-primary" href="create_customers.php" ><i class="fa fa-plus" ></i> Add</a>';
                              
                            ?>   
                             <a  class="btn btn-success" href="download_customers.php" ><i class="fa fa-download" ></i> Download </a>
                            </div>
            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                           <th>Sno.</th>
                                            <th>Company Name</th>
                                            <th>Contact No</th>
                                            <th>Office - Email ID</th>
                                            <th>Diagrams</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                    <th>Sno.</th>
                                            <th>Company Name</th>
                                            <th>Contact No</th>
                                            <th>Office - Email ID</th>
                                            <th>Diagrams</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sno=1;
                                        while($row=mysqli_fetch_array($eqry)){
                                        
                                    ?>
                                    
                                        <tr>
                                        <td><?php echo $sno++; ?></td>
                                            <td><?php echo $row['comp_name']; ?></td>
                                            <td><?php echo $row['comp_contact_no']; ?></td>
                                            <td><?php echo $row['comp_email_address']; ?></td>                                            
                                            <td align='center'>
                                                <?php 
                                                  if($row['diagram_count'])
                                                    echo '<a href="diagrams.php?diagram_id='.$row['id'].'" ><b>'.$row['diagram_count'].'</b></a>';
                                                  else
                                                    echo '<b>'.$row['diagram_count'].'</b>';

                                                ?>
                                            </td>
                                            <td><?php 
                                                if ($row['is_active']==true)
                                                {
                                                    echo 'Yes';
                                                } 
                                                else 
                                                {
                                                   echo 'No';
                                                }
                                                ?></td>
                                             <td>
                                                
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <?php 
                                                if(in_array('can_view_customer', $_SESSION['user_permissions'])) 
                                                echo '<a href="view_customers.php?id='. $row['id'].'" class="btn btn-primary"> <i class="fas fa-eye"></i> View</a>';
                                            
                                                if(in_array('can_edit_customer', $_SESSION['user_permissions'])) 
                                                echo '<a href="edit_customers.php?id='. $row['id'].'" class="btn btn-info"><i class="fas fa-edit" ></i> Edit</a>';
                                            
                                                if(in_array('can_delete_customer', $_SESSION['user_permissions'])) 
                                                echo '<a href="delete_customers.php?id='. $row['id'].'" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';



                                               // if(in_array('can_view_customer', $_SESSION['user_permissions'])) 
                                                   // echo '<a class="btn btn-primary" href="view_customers.php?id='. $row['id'].'" ><i class="fas fa-eye"></i> View</a>';

                                                    //if(in_array('can_edit_customer', $_SESSION['user_permissions'])) 
                                                    //echo '<a  class="btn btn-info" href="edit_customers.php?id='. $row['id'].'" ><i class="fas fa-edit" ></i> edit</a>';

                                                    //if(in_array('can_delete_customer', $_SESSION['user_permissions'])) 
                                                    //echo '<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>';
                                                ?>
                                                </div>
                                               
                                             </td>
                                        </tr>
                                       
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('./footer.php'); ?>                