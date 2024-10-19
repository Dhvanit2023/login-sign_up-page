<?php
//print_r($_POST);
$name=$_POST['email'];
$number=$_POST['password'];

$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    die('connection failed:'.$con->connect_error);
}
else{
    $stmt=$con->prepare("insert into login(email,pass)values(?,?)");
    $stmt->bind_param("ss",$name,$number);
    $stmt->execute();
    echo"ok done...";
    $stmt->close();
    $con->close();
}

?>