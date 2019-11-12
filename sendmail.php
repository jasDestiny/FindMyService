<?php

$a=$_POST["email"];
$b=$_POST["content"];
$c=$_POST["fullname"];
$d=$_POST["number"];


$con=new mysqli("127.0.0.1","root","","javaproject1");

$com=mysqli_query($con,"use javaproject1;");

$sql = "select * from userdb where Email='$a'";
$result = $con->query($sql);

$row = $result->fetch_assoc();

$mail=$row['Mail']."<br>"." Mail from:".$c." Phone number: ".$d." Mail contents: ".$b;


$con=new mysqli("127.0.0.1","root","","javaproject1");

$com=mysqli_query($con,"use javaproject1;");

$com=mysqli_query($con,"UPDATE userdb SET Mail = '$mail' WHERE Email='$a';");

header("location: 2npageJAS2.html")

?>