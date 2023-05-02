<!DOCTYPE html>
<html>
<style>
table,
th,
td {
    border: 1px solid black;
}
</style>

<body>

    <h2>A basic HTML table</h2>
    <?php
    $connect = mysqli_connect("localhost","root","","crud");

    if(!$connect){

        die("not connected".mysqli_error($connect));
    }else{

       $query="SELECT * FROM user_info";
       $result=mysqli_query($connect,$query);

       $count=mysqli_num_rows($result);

       if($count>0){
        
        if(isset($_REQUEST['deleted'])){

            echo "<h3>Data deleted</h3>";
        }
        
      ?>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>action</th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($result)){
          


      
      ?>

        <tr>
            <td><?php echo  $rows['id'] ;?></td>
            <td><?php echo  $rows['username'] ;?></td>
            <td><?php echo  $rows['email'] ;?></td>
            <td><a href="delete.php?id=<?php echo $rows['id'] ?>">Delete</a></td>
        </tr>

        <?php    
 
        }


       }else{

            echo"database not connected us";

       }
 ?>

    </table>
    <?php

    }

?>


</body>

</html>