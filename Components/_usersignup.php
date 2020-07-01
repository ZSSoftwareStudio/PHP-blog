
<?php

$uname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($uname == "" or $email == "" or $password == ""){
   echo "
     <script>alert('All fields are required');</script>
   ";
}else{
   include("_conn.php");
   $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('".$uname."', '".$email."', '".$password."');";
   if(mysqli_query($conn, $sql)){
       echo '
           <script>alert("Your account succesfully created!");window.location="../index.php";</script>
       ';
   }
}
?>
