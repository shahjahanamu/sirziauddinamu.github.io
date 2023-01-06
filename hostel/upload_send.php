<?php
if(isset($_POST['submit']))
{
    
        
         $tenth=$_FILES['tenth'];
         $twelve=$_FILES['twelve'];
         $previous=$_FILES['previous'];
         $image=$_FILES['image'];
         $fee=$_FILES['fee'];
         $admission=$_FILES['admission'];

         

         move_uploaded_file($tenth['tmp_name'],"image/".$tenth['name']);
         move_uploaded_file($twelve['tmp_name'],"image/".$twelve['name']);
         move_uploaded_file($previous['tmp_name'],"image/".$previous['name']);
         move_uploaded_file($image['tmp_name'],"image/".$image['name']);
         move_uploaded_file($fee['tmp_name'],"image/".$fee['name']);
         move_uploaded_file($admission['tmp_name'],"image/".$admission['name']);
      
         header("location:details.php");
        }
else
{
    echo "something went wrong 222";}
?>

