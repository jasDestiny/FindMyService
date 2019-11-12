<?php

$a=$_POST["email"];
$b=$_POST["fname"];
$c=$_POST["psw"];
$d=$_POST["address"];
$e=$_POST["age"];
$f="No_mail";

echo "works";

$con=new mysqli("127.0.0.1","root","","javaproject1");

$com=mysqli_query($con,"use javaproject1;");



$com=mysqli_query($con,"insert into userdb values('$a','$b','$c','$d','$e','$f');");

echo "<script>
alert('Account created successfully!!!');
window.location.href='2npageJAS2.html';
</script>";


?>