<?php
$host='localhost';
$conn=mysqli_connect($host,'root','','login');
$name=$_POST["un"];
$emailid=$_POST["em"];
$password= $_POST["pwd"];
$sql="INSERT INTO users VALUES('',$name','$emailid','$password')";
if (mysqli_query($conn, $sql)) {
    header('LOCATION:second.php');
 }
 else{
    echo("Connection failed");
 }
?>