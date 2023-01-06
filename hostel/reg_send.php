<?php
$server_name="localhost";
$user="root";
$password="";
$dbname="hostel";
$conn=mysqli_connect($server_name,$user,$password,$dbname);

if($conn)
{
   if(isset($_POST["submit"]))
   {
      if(!empty($_POST['enrollment']) && $_POST['password'] && $_POST['email'])
        {
         $enrollment=$_POST['enrollment'];
         $password=$_POST['password'];
         $email=$_POST['email'];
         $sql="insert into registration(enrollment,password,email)
         values('$enrollment','$password','$email')";
         $res=mysqli_query($conn,$sql);
              if($res)
                  {
                     header("Location:details.php");
                   }
              else
                 {
                      header("Location:index.php");
                }
       
            }
         else
        {
            header("Location:index.php");
        }
   }

}
else
{
    header("Location:index.php");
}

?>


