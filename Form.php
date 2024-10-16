<?php include("connection.php"); error_reporting(E_ALL ^ E_WARNING); ?>
<!DOCTYPE html>
<html>
<head>
<head>
        <link rel=stylesheet type="text/css" href="style.css"/>
</head>

</head>
<body>
<div class = "container">
<form action="" method="POST">
<div class="title">
            Registration Form
</div>
<div class="form">
<div class="input_field">
<label> First Name </label>
<input type="text" class="inputbox" name="fname"></input>
</div>

<div class="input_field">
    <label>Last Name</label>
    <input type="text" class="inputbox" name="lname"></input>
</div>

<div class="input_field">
    <label>Password</label>
    <input type="password" class="inputbox" name="password"></input>
</div>


<div class="input_field">
    <label>Gender</label>
   <select name="gender" class="selectbox">
    <option>Select</option>
    <option>Male</option>
    <option>Female</option>
</select>
</div>

<div class="input_field">
    <label>Phone Number</label>
    <input type="text" class="inputbox" name="phone"></input>
</div>

<div class="input_field">
    <label>Address</label>
    <textarea name="address" class="textareabox"></textarea>
</div>

<div class="input_field">
  <input type=submit value="Register" class="btn" name="register">
</div>
</form>
</div>
</div>
</body>

</html>
<?php
if($_POST['register'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $gender = $_POST['gender'] ;
    $address = $_POST['address'];
    $phone = $_POST['phone'];
 

$query = "insert into Registration_table values('$fname','$lname','$address','$gender','$phone','$password')";
$data = mysqli_query($conn,$query);
if($data)
{
     echo("Data Inserted into Database");
}
else
{
    echo "Data failed to insert";
}
}

?>