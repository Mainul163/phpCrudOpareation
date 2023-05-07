<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    
    $connection=mysqli_connect("localhost","root","","crud");

    if(!$connection){

      die("database not conneccted".mysqli_error($connection));    


    }else{

       $query="SELECT * FROM user_info";
       $result=mysqli_query($connection,$query);
       $count=mysqli_num_rows($result);
       
       if($count>0){

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
            <td><a href="singlePage.php?id=<?php echo $rows['id'] ?>">Update</a></td>
        </tr>
        <?php      

       } 
  ?>
    </table>



    <?php
       }else{

        echo "no data";
       }

    }






?>




</body>

</html>