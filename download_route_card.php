<?php 
include('middleware.php');
include('./db_connection.php');


$query= "select a.*, b.comp_name,c.dia_code from mst_route_card a inner join mst_customers b on b.id=a.route_customer_id inner join mst_diagram c on c.id=a.route_diagram_id where a.is_active=true and a.is_removed=false ";

$eqry=mysqli_query($con,$query);



header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"route_card_report.xls\"");
header("Cache-Control: max-age=0");
?>

<table border="1">
<th colspan="6">SRI RAM INDUSTRIES - ROUTE CARD REPORT</th>
                                    <thead>
                                        <tr>
                                            <th> Sno.</th>
                                            <th>Machine No</th>
                                            <th>Machine Setter</th>
                                            <th>Customer Name</th>
                                            <th>Diagram ID/Name </th>
                                            <th>Created_at</th>
                                           
                                    </thead>
                                   
                                    <tbody>
                                    
                                    <?php
                                        $sno=1;
                                        while($row=mysqli_fetch_array($eqry)){
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $sno++; ?></td>
                                            <td><?php echo $row['route_machine_name']; ?></td>  
                                            <td><?php echo $row['route_setter_name']; ?></td>  
                                            <td><?php echo $row['comp_name']; ?></td>
                                            <td><?php echo $row['dia_code']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>  
                                            
                                        </tr>
                                       <?php } ?>
                                       
                                    </tbody>
                                </table>