<?php 


include('./db_connection.php');

$emp_view_query='select id,dia_code from mst_diagram where is_active=true and is_removed=false and customer_id='.$_GET['id'];

$eqry=mysqli_query($con,$emp_view_query);

//echo mysqli_num_rows($eqry);

$opt='';

if(mysqli_num_rows($eqry)==0){
    $opt='<option value="">No diagrams found</option>';
}
else{
    while($row=mysqli_fetch_array($eqry)){
        $opt.= '<option value="'.$row['id'].'">'.$row['dia_code'].'</option>';
      }

}
echo $opt;



//$row=mysqli_fetch_array($eqry);
//while($row=mysqli_fetch_array($eqry)){
  //  echo '<option value="'.$row['id'].'">'.$row['dia_code'].'</option>';
//}
//echo json_encode($row);

?>