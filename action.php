<?php

$z=$_POST["email"];
$a=$_POST["ue"];
$b=$_POST["fullname"];
$c=$_POST["password"];
$d=$_POST["age"];
$e=$_POST["address"];
$f="No_mail";

$con=new mysqli("127.0.0.1","root","","javaproject1");

$com=mysqli_query($con,"use javaproject1;");

$com=mysqli_query($con,"UPDATE userdb SET Email='$a', Full_Name ='$b', Password='$c', Age='$d', Address='$e' where Email='$z' ;");

echo "<script>
alert('Updated successfully!!!');
window.location.href='2npageJAS2.html';
</script>";




?>