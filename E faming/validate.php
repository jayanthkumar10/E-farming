<?php 
session_start();
$con=mysqli_connect('localhost','root','','urop');
$username=$_POST['User_name'];
$password=$_POST['Password'];
if($con->connect_error){
        die("No connection");}
$s="select * from login where username ='$username'&& password='$password'";
$result=$con->query($s);
if($result->num_rows!=0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header('location:home.php');
}else{
                   echo "<div class='invalid'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link' style = 'color: red ;'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
}
?>