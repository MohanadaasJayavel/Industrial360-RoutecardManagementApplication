<?php 
include('middleware.php');
include('./db_connection.php');


if(isset($_POST['register']))
{
    
    $comp_name=$_POST['customer_id'];
    $dia_name=$_POST['dia_name'];
    $dia_name=$_POST['dia_name'];
     $dia_code=$_POST['dia_code'];
    $dia_description=$_POST['dia_description'];
    $dia_image=$_POST['dia_image'];


    $file_ext=strtolower(end(explode('.',$_FILES['dia_image']['name'])));
     $dia_image= "uploads/diagrams/".str_replace(" ","",$dia_name).'_'.date('YmdHis').'.'.$file_ext;
     $file_tmp = $_FILES['dia_image']['tmp_name'];
    
    move_uploaded_file($file_tmp,$dia_image);
        
	 $query="insert into mst_diagram (id,customer_id,dia_name,dia_code,dia_description,dia_image,is_active, is_removed)
       values('','$comp_name','$dia_name','$dia_code','$dia_description', '$dia_image',true,false)";
    
     
       
       if( mysqli_query($con,$query)){
       
        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    Record Added Sucessfully
                    </div>
                </div>';
                header('location:diagrams.php');

       }
       else
       {
        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Record Not Added
            </div>
        </div>';
        header('location:diagrams.php');

       }
}




include('./header.php');
 ?>

                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Diagram</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="create_diagrams.php" enctype="multipart/form-data">
                                            <h5>Diagram  details</h5>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="emp_bloodgroup">Customer Name </label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="customer_id" >
                                                        <option value="" selected>-----------Select customer-----------</option>
                                                        
                                                        <?php
                                                            $dest_query = mysqli_query($con,"select * from mst_customers where is_active=true and is_removed=false");
                                                            while($row=mysqli_fetch_array($dest_query)){
                                                                echo '<option value="'.$row['id'].'">'.$row['comp_name'].'</option>';
                                                            }
                                                        ?>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="dia_name" placeholder="Enter your first name" />
                                                        <label for="inputFirstName"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="dia_code" placeholder="Enter diagram code" />
                                                        <label for="inputLastName"> code</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text"  name="dia_description" placeholder="enter description" />
                                                <label for="inputEmail">Description</label>
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                            <h5>Upload diagram </h5>
                                                
                                                <input class="form-control"  type="file" id="dia_image"  name="dia_image" value="Photo" />
                                            </div>
                                            
                                            <div class="row mb-3">
                                              <div class="mt-4 mb-0">
                                                  
                                                              <!-- <button type="button" class="btn btn-primary" align-end>Primary</button>-->
                                                 <div class="d-grid " >
                                                 <input type="submit" id="btn"  class="btn btn-md btn-primary" value="Create Diagrams"  name="register" />
                                                    <!--<a class="btn btn-primary " href="#" value="create_dia_submit"> <i class="fa fa-plus" ></i> Add Diagram</a>-->
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
