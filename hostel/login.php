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

<div class="other">
<h1>Login Here: </h1>
<form action="login_check.php" method="POST">
<table class="table">
<tr>
<td><input type="text" name="enrollment" placeholder="Enter Enrollment No."/></td>
</tr>
<tr>
<td><input type="text" name="pass" placeholder="Enter Password"/></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Confirm Password "/></td>
</tr>
<tr>
<td><input type="submit" value"SUBMIT" name="submit"></td>
</tr>
</table>
</form>
</div>

</body>
</html>