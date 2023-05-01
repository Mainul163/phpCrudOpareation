<?php
    $connect = mysqli_connect("localhost","root","","crud");

    if(!$connect){

        die("not connected".mysqli_error($connect));
    }else{

       $query="SELECT * FROM user_info";
       $result=mysqli_query($connect,$query);

       $count=mysqli_num_rows($result);

       if($count){
      
        while($rows=mysqli_fetch_assoc($result)){
            echo "<br>{$rows['id']}"."<br>"."<br>"."{$rows['username']}"."<br>";

        }


       }else{

            echo"database not connected";

       }
      




    }





    
?>