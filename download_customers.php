<?php 
include('middleware.php');
include('./db_connection.php');


$query= "select *, (select count(*) from mst_diagram where is_active=true and customer_id=a.id) diagram_count from mst_customers a where is_active=true";

$eqry=mysqli_query($con,$query);


header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"customer_report.xls\"");
header("Cache-Control: max-age=0");
?>

<table border="1">
<th colspan="12">SRI RAM INDUSTRIES - CUSTOMERS REPORT</th>
                                    <thead>
                                        <tr>
                                           <th>Sno.</th>
                                            <th>OMPANY NAME</th>
                                            <th>CONTACT NO</th>
                                            <th>EMAIL-ID</th>
                                            <th>DIAGRAMS</th>
                                            <th>WEBSITE URL</th>
                                            <th>ADDRESS</th>
                                            <th>SHIPPING ADDRESS</th>
                                            <th>GST-IN</th>
                                            <th>CONTACT PERSON NAME</th>
                                            <th> MOBILE NUMBER</th>
                                            <th>E-MAIL ID</th>
                                             <th>STATUS</th>
                                            
                                        </tr>
                                    </thead>
                                   
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
                                                  echo $row['diagram_count']

                                                ?>
                                            </td>
                                            <td><?php echo $row['comp_web_link']; ?></td> 
                                            <td><?php echo $row['comp_address_1']; ?></td> 
                                            <td><?php echo $row['comp_shipaddress_1']; ?></td> 
                                            <td><?php echo $row['comp_gstin']; ?></td>
                                             <td><?php echo $row['cont_person_name']; ?></td> 
                                            <td><?php echo $row['cont_person_mobile_no']; ?></td> 
                                            <td><?php echo $row['cont_person_email_address']; ?></td> 

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
                                            
                                        </tr>
                                       
                                        <?php } ?>
                                    </tbody>
                                </table>