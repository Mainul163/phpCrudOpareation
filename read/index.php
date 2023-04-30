<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Read Data</h2>



    <?php 
    
      $connection=mysqli_connect("localhost","root","","crud");
    
    if(!$connection){

        die("database not connected".mysqli_error($connection));
    }else{

       $query="SELECT * FROM user_info";
       $result=mysqli_query($connection,$query);
       
       $count=mysqli_num_rows($result);

       if($count>0){
          
        while($rows=mysqli_fetch_assoc( $result))
          
        echo "<br>{$rows['id']}"."<br>"."<br>"."{$rows['username']}"."<br>";
        echo "<br>";
       }
     
          








    }


    
    
    ?>
</body>

</html>