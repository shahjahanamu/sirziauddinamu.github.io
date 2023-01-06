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
      if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['mobile'])
       && !empty($_POST['email']) && !empty($_POST['enrollment']) && !empty($_POST['department'])
       && !empty($_POST['course']) && !empty($_POST['roll']) && !empty($_POST['address']) 
       && !empty($_POST['gaurdian']))
        {
         $name=$_POST['name'];
         $age=$_POST['age'];
         $mobile=$_POST['mobile'];
         $email=$_POST['email'];
         $enrollment=$_POST['enrollment'];
         $department=$_POST['department'];
         $course=$_POST['course'];
         $roll=$_POST['roll'];
         $address=$_POST['address'];
         $gaurdian=$_POST['gaurdian'];
         $sql="insert into basics(name,age,mobile,email,
         enrollment,department,course,roll,address,gaurdian)
         values('$name','$age','$mobile','$email','$enrollment',
         '$department','$course','$roll','$address','$gaurdian')";
         $res=mysqli_query($conn,$sql);
              if($res)
                  {
                     header("Location:details.php");
                   }
              else
                 {
                      header("login.php");
                }
       
            }
         else
        {
            header("Location:login.php");
        }
   }
   else
   {
       header("location:login.php");
   }

}
else
{
    echo "please check server connections";
}

?>