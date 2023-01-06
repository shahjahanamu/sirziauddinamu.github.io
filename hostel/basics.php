<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="style.css"/> 
</head>
<body>
<nav>

<div class="main">
<div class="logo"><img src="logo.png"></div>

<ul>
   <li class="active"><a href="index.php">Home</a></li>
   <li><a href="about.php">About</a></li>
   <li><a href="contact.php">Contact Us</a></li>
   
</ul>

</div>
</nav> 

<div class="title">
    <h1>Sir Ziauddin Hall</h1>
    <h2>Hostel Allotement 2019</h2>
</div>

<div class="other_basics">
    <h1>Fill Basic Details</h1>
<form action="basics_send.php" method="POST">
<table class="table_basics">
<tr>
<td>Name of the student</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age"/></td>
</tr>
<tr>
<td>Mobile No.</td>
<td><input type="text" name="mobile"/></td>
</tr>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Enrollment No.</td>
<td><input type="text" name="enrollment"></td>
</tr>
<tr>
<td>Department</td>
<td><input type="text" name="department"></td>
</tr>
<tr>
<td>course</td>
<td><input type="text" name="course"></td>
</tr>
<tr>
<td>Roll No.</td>
<td><input type="text" name="roll"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address"></td>
</tr>
<tr>
<td>Guardian's Name</td>
<td><input type="text" name="gaurdian"></td>
</tr>
<tr>
<td><input type="submit" value"SUBMIT" name="submit"></td>
<td><input type="reset" value"RESET" name="reset"></td>
</tr>
</table>
</form>
</div>
</body>
</html>