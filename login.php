<?php

$a=$_POST["fullname"];
$b=$_POST["password"];

$con=new mysqli("127.0.0.1","root","","javaproject1");

$com=mysqli_query($con,"use javaproject1;");

$com=mysqli_query($con,"select * from userdb where Email='$a' and Password='$b';");

$count=mysqli_num_rows($com);

if($count==0)
{
	echo "<script>
alert('Invalid Credentials');
window.location.href='mail.html';
</script>";
}

else
{
	echo "<script>
alert('Logging in pls wait...');
</script>";

$sql = "select * from userdb where Email='$a' and Password='$b';";
$result = $con->query($sql);

$row = $result->fetch_assoc();

echo "<br><h1>Your inbox contents:</h1><br>";

echo $row['Mail'];

echo "<br>";

echo "<a href='readmail.html'>Click here to send a mail</a>";
}



?>