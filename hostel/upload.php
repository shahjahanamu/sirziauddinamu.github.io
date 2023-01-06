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
   <li class="active"><a href="index">Home</a></li>
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
<h1>Upload Documents</h1>
<form action="upload_send.php" method="POST" enctype="multipart/form-data">
<table class="table_basics">
<tr>
<td>10'th marksheet</td>
<td><input type="file" name="tenth" value="browse"/></td>
</tr>
<tr>
<td>12'th marksheet</td>
<td><input type="file" name="twelve" value="browse"/></td>
</tr>
<tr>
<td>previous sem marksheet</td>
<td><input type="file" name="previous" value="browse"/></td>
</tr>
<tr>
<td>image</td>
<td><input type="file" name="image" value="browse"/></td>
</tr>
<tr>
<td>fee slip</td>
<td><input type="file" name="fee" value="browse"/></td>
</tr>
<tr>
<td>admission card</td>
<td><input type="file" name="admission" value="browse"/></td>
</tr>
<tr>
<td><input type="submit"  name="submit" value="upload"></td>
<td><input type="reset"  name="reset" value="reset"></td>
</tr>
</table>
</form>
</div>

</body>
</html>