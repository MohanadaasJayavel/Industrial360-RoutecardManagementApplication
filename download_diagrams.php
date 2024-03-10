<?php 
include('middleware.php');
include('./db_connection.php');


$query= "select *,(select count(*) from mst_route_card where is_active=true and route_diagram_id=a.id) route_card_count from mst_diagram a where is_active=true";

$eqry=mysqli_query($con,$query);


header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"diagrams_report.xls\"");
header("Cache-Control: max-age=0");
?>

<table border="1">
<th colspan="6">SRI RAM INDUSTRIES -DIAGRAMS REPORT</th>

                                    <thead>
                                        <tr>
                                              <th>Sno.</th>
                                            <th>Diagram Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                             <th>Route Card</th>
                                            <th>Created_at</th>
                                            
                                        </tr>
                                    </thead>
                                    
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
                                           
                                         
                                            <td><?php 
                                                  
                                                    echo '<b>'.$row['route_card_count'].'</b>';

                                                ?>
                                            </td>

                                            <td><?php echo $row['created_at']; ?></td>
                                             
                                            
                                                 
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>