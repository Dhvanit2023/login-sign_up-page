<?php
$connect=mysqli_connect("localhost","root","","login") or die("connection failed");
if(!empty($_POST['s1']))
{
$email=$_POST['email'];
$pass=$_POST['password'];

$query="SELECT * FROM login where email='$email' and pass='$pass'";
//$query="select * from login where email='$email' ans pass='$pass'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0){
    header("Location: index2.html");
    //exit();  
    //echo"ok";
}
else{
    echo"not ok";
}

}

?>