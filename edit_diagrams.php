<?php 
include('middleware.php');
include('./db_connection.php');



if(isset($_POST['update']))
{
    $dia_name=$_POST['dia_name'];
    $dia_code=$_POST['dia_code'];
    $dia_description=$_POST['dia_description'];
    $customer_id=$_POST['customer_id'];
    $diag_db_id=$_POST['diag_db_id'];

     $query="update mst_diagram set  ";
                            $query.="dia_name='".$dia_name."',";
                            $query.="dia_code='".$dia_code."',";
                            $query.="dia_description='".$dia_description."', ";
                            $query.="customer_id=".$customer_id;
                        
                            if($_FILES['dia_image']['size']>0){

                                $file_ext=strtolower(end(explode('.',$_FILES['dia_image']['name'])));
                                $dia_image= "uploads/diagrams/".str_replace(" ","",$dia_name).'_'.date('YmdHis').'.'.$file_ext;
                                $file_tmp = $_FILES['dia_image']['tmp_name'];
                                move_uploaded_file($file_tmp,$dia_image);
                                $query.=",dia_image='".$dia_image."'";
                               }
          
       
      $query.=" where id=".$_POST['diag_db_id'];      
                           
  
  if( mysqli_query($con,$query)){
       
        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    Record Updated Sucessfully
                    </div>
                </div>';
                header('location:diagrams.php');

       }
       else
       {
        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Record Not Updated
            </div>
        </div>';
        header('location:diagrams.php');
    
       }
}

          $diag_view_query= 'select a.*,b.comp_name from mst_diagram a inner join mst_customers b on b.id=a.customer_id where a.id='.$_GET['id'];
        
         $eqry=mysqli_query($con,$diag_view_query);

         $data=mysqli_fetch_array($eqry);


include('./header.php');
 ?>
<!DOCTYPE html>

                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Diagram</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="edit_diagrams.php" enctype="multipart/form-data">
                                            <h5>Diagram  details</h5>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="emp_bloodgroup"><h6>Customer_name </h6></label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="customer_id" >                                                        
                                                        <?php
                                                            $dest_query = mysqli_query($con,"select * from mst_customers where is_active=true and is_removed=false");
                                                            while($row=mysqli_fetch_array($dest_query)){
                                                                if($row['id']===$data['customer_id'])
                                                                echo '<option value="'.$row['id'].'" selected>'.$row['comp_name'].'</option>';
                                                                else
                                                                echo '<option value="'.$row['id'].'" >'.$row['comp_name'].'</option>';

                                                            }
                                                        ?>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="dia_name" value="<?php echo $data['dia_name']; ?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName"> Name</label>
                                                        <input type="hidden" name="diag_db_id" value="<?php echo $data['id']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="dia_code"  value="<?php echo $data['dia_code']; ?>"placeholder="Enter diagram code" />
                                                        <label for="inputLastName"> code</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text"  name="dia_description" value="<?php echo $data['dia_description']; ?>" placeholder="enter description" />
                                                <label for="inputEmail">Description</label>
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                            <h5>Upload diagram </h5>
                                            <input class="form-control"  type="file" id="dia_image"  name="dia_image"  />
                                                
                                            </div>
                                            
                                            <div class="row mb-3">
                                              <div class="mt-4 mb-0">
                                                  
                                                              <!-- <button type="button" class="btn btn-primary" align-end>Primary</button>-->
                                                 <div class="d-grid " >
                                                 <input type="submit" id="btn" class="btn btn-md btn-primary"  value="Update Diagrams"  name="update" />   
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
