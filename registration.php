<?php
require "config.php";
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $ConfirmPassword=$_POST["ConfirmPassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$username' OR email = 'email'");
    if(mysqli_num_rows($duplicate)>0 ){
        echo "<script>alert('username or email Has Already Taken')</script>";
    }
    else
    if($password==$ConfirmPassword){
        $query = "INSERT INTO tb_user values('','$name','$username','$email','$password')";
        mysqli_query($conn, $query);  
        echo "<script>alert(registration has successful)</script>";
    }
    else{
        echo"<script>alert(password does not match)</script>";
    }
}
?>
<html>
    <head>
        <title>registration</title>
    </head>
    <body>
        <h1>registration</h1>
        <form class=""action=""method ="POST"autocomplete="off">
<label for="name">name:</label>
<input type="text"name="name"id=name required value=""><br>
<label for="username">username:</label>
<input type="text"name="username"id=username required value=""><br>
<label for="email">email:</label>
<input type="email"name= "email"id = email required value=""><br>
<label for="Password ">Password:</label>
<input type="password"name= "password"id = password required value=""><br>
<label for="ConfirmPassword">ConfirmPassword:</label>
<input type="ConfirmPassword"name= "ConfirmPassword"id = ConfirmPassword required value=""><br>
<button type="submit"name="submit">Register</button> </form>
 <br>
    <a href="login.ph">login</a>
    </br>
    </body>
</html>