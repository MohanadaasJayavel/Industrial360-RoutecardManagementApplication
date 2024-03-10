<?php
 include('middleware.php');
 include('./db_connection.php');

        $diagram_view_query='select a.*, b.comp_name from mst_diagram a inner join mst_customers b on b.id=a.customer_id where a.id='.$_GET['id'];

       $eqry=mysqli_query($con,$diagram_view_query);

  
    $row=mysqli_fetch_array($eqry);

   

 
 include('./header.php');
  ?>

<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">View Diagram Details</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="edit_diagrams.php" enctype="multipart/form-data">
                                            

                                        <div class="row mb-3">
                                            <h4>Company Name</h4>
                                        <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_name" value="<?php echo $row['comp_name']; ?>"   placeholder="Enter diagram code" />
                                                       
                                                </div>
                                                <div class="col-md-6">

                                              

                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                     <input class="form-control"  type="text" name="dia_name" value="<?php echo $row['dia_name']; ?>"   placeholder="Enter diagram code" />
                                                     <label for="inputLastName">Diagram  Name</label>
                                                   </div>
                                               </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating ">
                                                     <input class="form-control"  type="text" name="dia_code" value="<?php echo $row['dia_code']; ?>"   placeholder="Enter diagram code" />
                                                     <label for="inputLastName"> Drawing code</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <h5> diagram </h5>
                                                          <?php 
                                                            $ext = explode('.',$row['dia_image']);
                                                            $ext_arr=array('jpg','jpeg','png','pdf','jfif');                   
                                                            if(in_array(strtolower(end($ext)),$ext_arr) && strpos($row['dia_image'],"ploads/"))
                                                                if(strtolower(end($ext))=='pdf')
                                                                    echo '<a href="'.$row['dia_image'].'" target="_blank" download>View/Download</a>';
                                                                else{
                                                                    echo '<img src="'.$row['dia_image'].'" alt="Admin" class="" width="200">';
                                                                    echo '<a href="'.$row['dia_image'].'" target="_blank" download>View/Download</a>';


                                                                }
                                                            else echo '<img src="./assets/img/diagram.jpg" alt="Admin" class="" width="200">';
                                                          ?>  
                                              
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating ">
                                                   <!--- <input class="form-control"  type="text" name="dia_description"    placeholder="Enter diagram code" />-->
                                                       
                                                        <label for="inputEmail">Description</label>
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <textarea class="form-control" type="text" name="dia_description" rows="10"><?php echo trim($row['dia_description']); ?></textarea> 
                                                            <label for="inputLastName"> Drawing Description</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              
                                            
                                            <div class="row mb-3">
                                              <div class="mt-4 mb-0">
                                                  
                                                              <!-- <button type="button" class="btn btn-primary" align-end>Primary</button>-->
                                                 <div class="d-grid " >
                                                 <!--<input type="submit" id="btn"  value="Update Diagrams"  name="update" />-->
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
      



           
           
<?php include('./footer.php'); ?>  
