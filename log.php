<?php
$email=$_POST['email'];
$password=($_POST['password']);

$conn=new mysqli("localost","root","","abs_car");
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);

}else{
    $stmt=$conn->prepare("INSERT INTO login(email,password)VALUES($email , $password)");
    $stmt->bind_param("si",$email , $password);
    $stmt->execute();
    echo"<script>alert('now you are login!'); window.location.href='RC_ABS\RC_home.html';</script>";
    $stmt->close();
  }
$conn->close();
?>