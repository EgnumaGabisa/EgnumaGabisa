
<?php
require'config.php';

if(isset($_POST["submit"])){
$usernameemail=$_POST["usernameemail"];
$Password=$_POST["Password"];
$query = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
$row=mysqli_fetch_assoc($query);
if(mysqli_num_rows($query)>0 );
if($Password == $row["Password"]){

$_SESSION["login"]=true;
$_SESSION["id"]=$row["id"];
header("location:index.php");
}
   else{ echo"<script>alert('wrong password')</script>";}}
 else{
 echo "<script>alert('user not registered')</script>";
 }


?>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <h1>login</h1>
        <form class=""action=""method ="POST"autocomplete="off">
<label for="usernameemail">username or email:</label>
<input type="text"name="usernameemail"id = usernameemail required value=""><br>

<label for="Password ">Password:</label>
<input type="password"name= "password"id = password required value=""><br>
<button type="submit"name="submit">login</button> 
</form>
 <br>
    <a href="registration.ph">registration</a>
    </br>
    </body>
</html>