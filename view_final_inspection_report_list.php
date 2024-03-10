<?php
include('middleware.php');
include('./db_connection.php');

$query= "select * from mst_route_card where is_active=true";

$eqry=mysqli_query($con,$query);

 include('./header.php');
  ?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fas fa-clipboard-list"></i> Final Inspection Report</h1>
                        <?php

                            if($_SESSION['msg']!='')
                                echo $_SESSION['msg'];
                            $_SESSION['msg']='';

                            ?>
                       
                        <div class="card mb-4">
                            <div class="card-header text-end" >
                            <?php 
                            if(in_array('can_create_customer', $_SESSION['user_permissions'])) 
                               echo '<a  class="btn btn-primary" href="create_final_inspection_report.php" ><i class="fa fa-plus" ></i> Add</a>';
                            ?>   
                            </div>
            
                            <div class="card-body">
                            <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th> Sno.</th>
                                            <th>Customer Name</th>
                                            <th>Diagram ID/Name </th>
                                            <th>Created_at</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th> Sno.</th>
                                            <th>Customer Name</th>
                                            <th>Diagram ID/Name </th>
                                            <th>Created_at</th>                                            
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
                                            <td><?php echo $row['route_customer_id']; ?></td>
                                            <td><?php echo $row['route_diagram_id']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>  
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

                                                    if(in_array('can_view_employee', $_SESSION['user_permissions'])) 
                                                        echo '<a href="view_route_card.php?id='. $row['id'].'" class="btn btn-primary"> <i class="fas fa-eye"></i> View</a>';
                                                    
                                                    if(in_array('can_edit_employee', $_SESSION['user_permissions'])) 
                                                        echo '<a href="edit_route_card.php?id='. $row['id'].'" class="btn btn-info"><i class="fas fa-edit" ></i> Edit</a>';
                                                    
                                                    if(in_array('can_delete_employee', $_SESSION['user_permissions'])) 
                                                        echo '<a href="delete_route_card.php?id='. $row['id'].'" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
                                                  
                                                ?>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                       <?php } ?>
                                       
                                    </tbody>
                                </table>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('./footer.php'); ?>                