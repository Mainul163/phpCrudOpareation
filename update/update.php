<?php
    
 $connection=mysqli_connect("localhost","root","","crud");

 if(!$connection){

   die("database not connected".mysqli_error($connection));

 }else{

   $recvID=$_REQUEST['id'];
   
   $query="SELECT * FROM user_info WHERE id= $recvID";
   $update=mysqli_query($connection,$query);
   
   while($row=mysqli_fetch_assoc($update)){
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
    <label for="fname">user name:</label><br>
    <input type="text" value="<?php echo $row['username']; ?>" name="username" id="fname"><br><br>
    <label for="lname">email:</label><br>
    <input type="text" value="<?php echo $row['email']; ?>" name="email" id="lname"><br><br>
    <label for="lname">password:</label><br>
    <input type="text" value="<?php echo $row['password']; ?>" name="password" id="lname"><br><br>

    <input type="submit" value="Submit" name='submit'>
</form>



<?php

   }
   
  

}






?>