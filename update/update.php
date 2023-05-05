<?php
    
 $connection=mysqli_connect("localhost","root","","crud");

 if(!$connection){

   die("database not connected".mysqli_error($connection));

 }else{

   $recvID=$_REQUEST['id'];
   
   $query="SELECT * FROM user_info WHERE id= $recvID"

   


 }





    
?>