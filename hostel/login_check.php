<?php
$servername="localhost";
$user="root";
$password="";
$db_name="hostel";
$conn=mysqli_connect($servername,$user,$password,$db_name);
if($conn)
{
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['enrollment']) && $_POST['password'])
            {
              $enrollment=$_POST['enrollment'];
              $password=$_POST['password'];
              $sql="select password from registration where enrollment like '$enrollment'";
             $res=mysqli_query($conn,$sql);
              if(mysqli_num_rows($res))
                {
                  $x=mysqli_fetch_assoc($res);
                    if($x['password']===$password)
                       {
                         header("location:details.php");
                       }
                    else
                       {
                         header("location:login.php");
                         
                        }        
                 }
              else
               {
                     header("Location:login.php");
                     echo "user does'nt exist";
               }
        }
        else
         {
           header("location:index.php");
         }
   }
}
?>