<?php
require 'connection.php';
if(isset($_POST["Register"])){
    $name=$_POST["name"];
$dept=$_POST["dept"];
$gender=$_POST["gender"];
$course=$_POST["course"];

}
$query="INSERT INTO tb_data values('name','dept','gender','course')";
mysqli_query($conn,$query);
echo "<script alert(data inserted successful)";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form name="registration" action="registration.php"method="POST"><br>
        name:<input type="text"name="name"required=><br>
        <label for="">gender</label><br>
        <input type="radio"name="gender"value="male"required>male<br>
        <input type="radio"name="gender"value="female"required>female
        <br>
 <label for=""></label>course<br>
    <input type="checkbox"name= "course[]"value ="internet programming"required>internet programming<br>
    <input type="checkbox"name="course[]"value = "distributed system"required>distributed system<br>
    <input type="checkbox"name="course[]"value ="advanced programming"required>advanced programming<br>
<label for="">Dept</label><br>
    <select>
        <option value="SE"required>SE</option><br>
        <option value="CSE"required>CSE</option><br>
    </select>
    <br>
<input type="button"name="button"value="Register"><br>

<input type="button"name="button"value="cancel">
    </form>
</body>
</html>