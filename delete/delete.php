<?php 
 
 $connect=mysqli_connect("localhost","root","","crud");


 if(!$connect){

    die("database not connected").mysqli_error($connect); 
 }else{

     $rcv=$_REQUEST['id'];  
     $query ="DELETE  FROM user_info WHERE id=$rcv";
     $run_delete_query=mysqli_query($connect,$query);

     if($run_delete_query){

     header("location:index.php?deleted");

     }else{
        echo "something is wrong" ;
     }



 }












?>