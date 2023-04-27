<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>create data</h3><br />

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
        <label for="fname">user name:</label><br>
        <input type="text" name="username" id="fname"><br><br>
        <label for="lname">email:</label><br>
        <input type="text" name="email" id="lname"><br><br>
        <label for="lname">password:</label><br>
        <input type="text" name="password" id="lname"><br><br>

        <input type="submit" value="Submit" name='submit'>
    </form>





    <?php 
      
    if(isset ($_POST['submit'])){
      
     $username=$_POST['username'];
     $email=$_POST["email"];
     $password=$_POST['password'];
    
     $connection= mysqli_connect("localhost","root","","crud");

     if(!$connection){
        die("not connected".mysqli_error($connection));
     }

    $query="INSERT INTO user_info (username,email,password) VALUES ('$username' ,'$email','$password')";
    

    $result=mysqli_query($connection,$query);


    if($result){
        echo "Insert Success";
    }else{
        echo "Insert not success";
    }

    }

    


    







?>


</body>

</html>