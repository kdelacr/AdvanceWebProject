<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("college", $connection); // Selecting Database.
$email=$_POST['email1'];
$password= sha1($_POST['password1']);
$password2= sha1($_POST['password2']); // Password Encryption, If you like you can also leave sha1.

if(($data)==0){
$query = mysql_query("insert into registration(email, password, confirmpass) values ('$email', '$password, '$password2')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>
