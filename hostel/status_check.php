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
<h1>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_database="hostel";

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
if($conn)
  {
      if(isset($_POST['submit']))
      {
        $name=$_POST['name'];
        $sql="select no from room where student1='$name' or student2='$name'
        or student3='$name' ";
	    $res=mysqli_query($conn,$sql);
	      if(mysqli_num_rows($res)>0)
	       {
	     	$x=mysqli_fetch_assoc($res);

             echo "Congratulations:- ".$name."<br>";
             echo "Your alloted room no. is ".$x['no'];
           }
        else
        {
            echo "Sorry!"."<br>";
            echo "pending at provost office";
        }
   
      }
    
   }

?>
</h1>
</div>
</body>
</html>

