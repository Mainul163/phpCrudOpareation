<?php
    
 $connection=mysqli_connect("localhost","root","","crud");

 if(!$connection){


    die("database not connected".mysqli_error($connection));

 }else{


if(isset($_REQUEST['submit'])){
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $id=$_REQUEST['update_id'];


    echo  $id;
  
    $update_query="UPDATE user_info SET username='$username' ,email='$email', password=' $password' WHERE id=$id";
 
 
 $final_update_query=mysqli_query($connection,$update_query);
 
 if($final_update_query){
 
     header("location:index.php?updateData");
 }else{
     echo "data not update ";
 }

}

else{
 
    echo 'data not submit';


}






 }











?>