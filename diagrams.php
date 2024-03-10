<?php 
include('middleware.php');
include('./db_connection.php');

if(isset($_GET['diagram_id']))
   echo  $query= "select *,(select count(*) from mst_route_card where is_active=true and route_diagram_id=a.id) route_card_count from mst_diagram a where is_active=true and customer_id=".$_GET['diagram_id'];
  
else
    $query= "select * ,(select count(*) from mst_route_card where is_active=true and route_diagram_id=a.id) route_card_count from mst_diagram a where is_active=true";

$eqry=mysqli_query($con,$query);





include('./header.php');
 ?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fas fa-project-diagram"></i> Diagrams</h1>

                        <?php

                            if($_SESSION['msg']!='')
                                echo $_SESSION['msg'];
                            $_SESSION['msg']='';

                            ?>
                       
                        <div class="card mb-4">
                            <div class="card-header text-end" >
                            <?php 
                            if(in_array('can_create_customer', $_SESSION['user_permissions'])) 
                               echo '<a  class="btn btn-primary" href="create_diagrams.php" ><i class="fa fa-plus" ></i> Add</a>';
                            ?>   

<a  class="btn btn-success" href="download_diagrams.php" ><i class="fa fa-download" ></i> Download </a>
                            </div>
            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                              <th>Sno.</th>
                                            <th>Diagram Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Route Card</th>
                                            <th>Created_at</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                    <th>Sno.</th>
                                            <th>Diagram Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Route Card</th>
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
                                            <td><?php echo $row['dia_name']; ?></td>
                                            <td><?php echo $row['dia_code']; ?></td>
                                            <td><?php echo $row['dia_description']; ?></td>
                                            <td><?php $ext = explode('.',$row['dia_image']);
                                                $ext_arr=array('jpg','jpeg','png');                   
                                                if(in_array(strtolower(end($ext)),$ext_arr) && strpos($row['dia_image'],"ploads/")) 
                                                echo '<img src="'.$row['dia_image'].'" alt="Admin"  width="50" height="50">';
                                                else echo '<img src="./assets/img/file.png" alt="Admin" width="50" height="50">';?>
                                            </td>
                                         
                                            <td><?php 
                                                  if($row['route_card_count'])
                                                    echo '<a href="route_card_list.php?routecard_id='.$row['id'].'" ><b>'.$row['route_card_count'].'</b></a>';
                                                  else
                                                    echo '<b>'.$row['route_card_count'].'</b>';

                                                ?>
                                            </td>

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
                                                        if(in_array('can_view_diagrams', $_SESSION['user_permissions'])) 
                                                        echo '<a href="view_diagrams.php?id='. $row['id'].'" class="btn btn-primary"> <i class="fas fa-eye"></i> View</a>';
                                                    
                                                        if(in_array('can_edit_customer', $_SESSION['user_permissions'])) 
                                                        echo '<a href="edit_diagrams.php?id='. $row['id'].'" class="btn btn-info"><i class="fas fa-edit" ></i> Edit</a>';
                                                    
                                                        if(in_array('can_delete_customer', $_SESSION['user_permissions'])) 
                                                        echo '<a href="delete_diagram.php?id='. $row['id'].'" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
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