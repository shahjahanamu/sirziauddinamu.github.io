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
    <h1>Register Here</h1>
<form action="reg_send.php" method="POST">
<table class="table">
<tr>
<td>
<input type="text" name="enrollment" placeholder="Enter Enrollment Name"/>
</td>
</tr>
<tr>
<td>
<input type="password" name="password" placeholder="Create Password"/>
</td>
</tr>
<tr>
<td>
<input type="email" name="email" placeholder="Enter Email"/>
</td>
</tr>
<tr>
<td>
<input type="submit" value"SUBMIT" name="submit">
<input type="reset" value"RESET" name="reset">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>