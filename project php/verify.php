<?php
  session_start();
  $host='localhost';
  $conn=mysqli_connect($host,'root','','treasurehunt');
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $emailid=$_POST["em"];
$password= $_POST["pwd"];
  $sql="SELECT * from users where  Password='$password' and Emailid='$emailid'";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)==1){
    while($s=mysqli_fetch_array($res)){
    $_SESSION['un']=$s[0];
    }
    header('Location:game1.php');
     }
     else{
      header('Location:login.php');
     }
  ?>